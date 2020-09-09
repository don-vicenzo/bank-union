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