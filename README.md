# Photo Upload and Display - PHP Assignment

This PHP project is a simple web application that allows users to input details, upload photos, and displays user information, including photos.

## Prerequisites

- PHP development environment (e.g., XAMPP, WampServer).
- MySQL database.
- Create a "uploads" folder in the project directory to store uploaded images.

## Getting Started

1. Clone or download the project to your local machine.
2. Set up your MySQL database and update the connection details in `connect.php`.
3. Create a folder named "uploads" in the project directory.
4. Open the project in your PHP development environment.

## Database Setup

1. **Create a MySQL database named "assignment":**

    ```sql
    CREATE DATABASE assignment;
    ```

2. **Create a "user" table within the database:**

    ```sql
    CREATE TABLE user (
      id INT AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(255) NOT NULL,
      description TEXT,
      photo VARCHAR(255)
    );
    ```

## File Structure

- **connect.php:** Database connection details.
- **index.php:** User input form and photo upload.
- **handleInput.php:** Handles form submission, uploads photos, and inserts user details into the database.
- **displayUserDetails.php:** Displays user details, including photos, in a table.

## Usage

### 1. Input User Details and Upload Photo

Open `index.php` in your browser, fill in the form with user details, select a photo, and click "Submit." The photo will be uploaded to the "uploads" folder, and user details will be stored in the database.

```php
<!-- index.php -->

<!-- ... -->

<form action="handleInput.php" method="post" enctype="multipart/form-data">
  <!-- ... -->

  <!-- Input field for user's photo -->
  <div class="mb-3">
    <label for="photo" class="form-label">Photo</label>
    <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
  </div>

  <!-- ... -->

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<!-- ... -->
```

### 2. Display User Details with Photos

Visit `displayUserDetails.php` in your browser to view a table displaying user details, including photos.

```php
<!-- displayUserDetails.php -->

<!-- ... -->

<!-- Loop through each user record -->
while ($row = mysqli_fetch_assoc($result)) {
  $id = $row["id"];
  $name = $row["name"];
  $description = $row["description"];
  $photo = $row["photo"];

  echo
    '<tr>
      <th scope="row">' . $id . '</th>
      <td>' . $name . '</td>
      <td>' . $description . '</td>

      <!-- Display user photo -->
      <td><img src="uploads/' . $photo . '" alt="User Photo" style="width: 75px; height: 75px;"></td>
    </tr>';
}

<!-- ... -->
```
<br>

## More
[CRUD APP using PHP MySQl](https://github.com/AmanKumarSinhaGitHub/CRUD-App-using-PHP-MySQL)

[Live Demo](https://php-mysql-crud-app.000webhostapp.com/)