<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
        include "./includes/fonts/Fonts.php";
        include "./includes/styles/styles.php";
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        $PageTitle = 'Gangulus';
        $Favicon = './includes/images/favicon/favicon.ico';
    ?>
    <link rel="icon" type="image/x-icon" href="<?php echo $Favicon;?>">
    <title>
        <?php 
            echo $PageTitle;
        ?>
    </title>
    <header id = 'PageHeader'>
        <div class = "MainNavigationBar" id = 'HeaderContent'>
            <div class = 'Logo'>
                <a href='index.php'><img src='./includes/images/header/Logo.png' width = '50px'/></a>
            </div>
            <div class = 'NavigationBar'>
                <ul class = 'NavigationAddress'>
                    <li><a href='index.php'><img src = './includes/images/header/Home.png' width = '50px'/></a></li>
                    <li><a href='weedeoz.php'><img src = './includes/images/header/Watch.png' width = '50px'/></a></li>
                </ul>
            </div>
        </div>
    </header>
</head>
<body>
    <br><br><br><br>