<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Assignment 1: System Setup 1 | Home</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body id="home">
        <div class="content row">
            <?php include "php/header.php";?>
        </div> <!-- header -->
        <section class="container">
            <div class="content row">
                <section class="main col col-lg-8">
                    <div class="row">
                        <?php include "php/main.php";?>
                    </div>
                    <div class="row">
                        <?php
                        $file= "php/quotes.txt";
                        $quotes = file($file);
                        srand((double)microtime()*1000000);
                        $randomquote = rand(0, count($quotes)-1);
                        echo $quotes[$randomquote];
                        ?>
                    </div>
                </section> <!-- main -->
                <section class="sidebar col col-lg-4">
                    <?php include "php/sidebar.php";?>
                </section> <!-- sidebar -->
            </div> <!-- content -->
        </section> <!-- container -->

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
