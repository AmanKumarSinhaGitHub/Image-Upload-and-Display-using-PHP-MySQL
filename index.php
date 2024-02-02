<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <style>
    html,
    body {
      background-color: gainsboro;
    }
  </style>

  <div class="container">

    <div class="container my-5">
      <h1 class="text-center">Input Details</h1>
    </div>

    <div class="container my-5 w-75">
      <!-- Form for handling user input -->
      <!-- Enctype attribute is set to multipart/form-data for handling file uploads -->
      <form action="handleInput.php" method="post" enctype="multipart/form-data">
        <!-- Input field for user's name -->
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>

        <!-- Input field for user's description -->
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="description" class="form-control" id="description" name="description">
        </div>

        <!-- Input field for user's photo -->
        <div class="mb-3">
          <label for="photo" class="form-label">Photo</label>
          <!-- Input type set to "file" for handling file uploads -->
          <!-- Accept attribute set to "image/*" to restrict file types to images -->
          <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
        </div>

        <!-- Submit button for the form -->
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>