<?php 
include('conn/conn.php'); 
include('assets/modal.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Recipes</title>
 
    <!-- Bootstrap -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Style CSS -->
<link rel="stylesheet" href="assets/style.css">

</head>
 <style>
        body {
            background-image: url("image/2.jpg");
            background-size: cover;
        }
 </style>
<body>
 
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <a class="navbar-brand ml-5" href="http://localhost/MyRecipe/index.php">Recipe Food Finder</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Food Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Food List</a>
                </li>
            </ul>   
            <div class="form-inline my-2 my-lg-0 mr-5">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle link-unstyled" style="text-decoration: none; color: #eee;" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="login.php">Login Now!</a>
                    </div>
                    </div>
            </div>
        </div>
    </nav>

    <div class="carousel-caption d-none d-md-block" style="margin-top: 70px;">
        <h1 class="caption"><strong>Welcome to Recipe Food Finder!</strong></h1>
            <div style = "margin-top: 50px;">
                <a href="login.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Login or Sign up Now</a>
            </div>
    </div>