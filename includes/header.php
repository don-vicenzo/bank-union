<?php 
require_once 'config.php';
$db = new Database();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- Abril Fatface font -->
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

    <!-- Roboto font-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    

    <title> <?php 
                  #Title print depends on the current page
                  $file_name =  basename($_SERVER['PHP_SELF']);
                  switch($file_name) {
                    case "index.php":
                      echo "Home";
                      break;
                    case "business.php":
                      echo "Business";
                      break;  
                    case 'payments.php':
                      echo "Payments";
                      break;
                    case 'companies.php':
                      echo "Companies";
                      break;
                    case 'create_company.php':
                      echo "Create Company";
                      break;
                    case 'termsAndConditions.php':
                      echo "Terms and Condition";
                      break;
                    default:
                      echo "Page";
                      break;
                  }

     ?> </title>
     

  </head>
  <body>

   <!-- wrapper -->
    <div class="container-fluid px-0">

        <!-- header -->
        <header>
            
            <!-- navbar -->
            <nav class="navbar bg-color1 navbar-expand-lg navbar-dark fixed-top" id="navActive">
              <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                  <img src="images/logo.png" width="40" height="40" alt="bank logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav nav ml-auto text-center">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="business.php">Business</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="payments.php">Payments</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="companies.php">Companies</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- /.navbar -->

          </header>  <!-- /.header -->