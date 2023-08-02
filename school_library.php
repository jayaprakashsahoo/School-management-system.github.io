<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Library</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    ul, li, a{
        color: black;
        font-weight: bold;
    }
  </style>
</head>
<body>
  <!-- Your content goes here -->
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="#">School Library</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="studentinfo.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <!-- Add more navigation items as needed -->
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Welcome to the School Library</h1>
      <p class="lead">Discover the joy of reading and exploring our vast collection of books.</p>
      <!-- Add any additional content here, such as a search bar -->
    </div>
  </header>

  <!-- Book Display Section -->
  <section class="container">
    <div class="row">
      <!-- Add book display cards here using Bootstrap's card component -->
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container text-center">
      <p>&copy; 2023 School Library. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
