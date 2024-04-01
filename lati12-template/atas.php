<?php 
include_once 'webmenu.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Irsyad</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin-top: 5px; 
            margin-bottom: 1px; 

        }
        .menu {
            text-align: center;
            background-color: #F5E8DD;
            color: black;
            padding: 10px 0; 
            margin-top: 5px; 
            margin-bottom: 1px; 

        }

        .menu a {
            text-decoration: none; 
            color: black; 
            padding: 0 100px;
            border: 3px solid black; 
        border-radius: 2px; 
        }

        .menu a:hover {
            background-color: lightblue; 
            color: white; 
        }
    </style>
</head>

<body>
    <div class="menu">
        <h1 align="center">WEB TUGAS PHP</h1>
        <?php 
            foreach ($menu_atas as $key => $value) {
                echo "<a href = 'index.php?hal=$key'>$value</a>   ";
            }

        ?>
    </div>