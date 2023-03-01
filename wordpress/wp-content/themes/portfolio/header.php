<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <!-- <title><?php bloginfo('name'); ?></title> -->

    <!-- Ces fichiers CSS sont maintenant chargés par functions.php -->
    <!-- <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css"> -->

    <!-- wp_head() permet de charger correctement le thème (barre admin, functions.php ...) -->
    <?php wp_head(); ?>
</head>
<body>
<!doctype html>
<html>
	<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <!-- <title><?php bloginfo('name'); ?></title> -->
		<!-- <link rel="stylesheet" href="../assets/css/style.css" /> -->
	</head>
	<body>
    <?php wp_head(); ?>
		<header class="main-header">
            <!-- <h1 class="main-header__title">Mon Portfolio</h1> -->
            <div class="main-header__links">
                <nav>
                    
                            <a class="link menu__links" href="">Home</a>
                        
                            <a class="link menu__links" href="">About</a>
                        
                            <a class="link menu__links" href="">Cv</a>
                        
                            <a class="link menu__links" href="">Contact</a>
                        
                            <a class="link menu__links" href="">A voir</a>
                            
                            <div class="animation"></div>
                    
                </nav>
                <!-- cet le cote haut a droite de la page -->
                <ul class="socials">
                    <li class="socials__item">
                        <a class="socials__links" href="">
                            <!-- <img loading="lazy" class="socials__icon" src="../assets/images/GitHub.png" alt="logo Github"> -->
                        </a>
                    </li>
                    <li class="socials__item">
                        <a class="socials__links" href="">
                            <!-- <img class="socials__icon" src="../assets/images/linkedin.png" alt="logo linkedin"> -->
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <main>
		<h1>Fécherolles Jérôme - Développeur Front-end spécialité React</h1>
        </main>
	</body>
</html>

        