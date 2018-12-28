<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NB Life Customer Portal</title>

    <?php include("inc/header.php"); ?>

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php include("inc/headerMenu.php"); ?>
            <?php include("inc/sideMenu.php"); ?>
        </nav>        


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

    			<?php require_once('routes.php'); ?>

            </div>
        <!-- /#page-wrapper -->
        </div>
    <!-- /#wrapper -->

    <?php include("inc/footer.php"); ?>

</body>
</html>
