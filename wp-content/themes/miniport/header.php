<!DOCTYPE HTML>
<html>
<head>
    <title>Miniport by HTML5 UP</title>
    <meta http-equiv="content-type" content="text/html; charset=<?php echo bloginfo('charset'); ?>" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->

    <?php $directory_uri = get_template_directory_uri(); ?>

    <script>
        window.directory_uri = '<?php echo $directory_uri; ?>';
    </script>

    <script src="<?php echo $directory_uri; ?>/js/jquery.min.js"></script>
    <script src="<?php echo $directory_uri; ?>/js/jquery.scrolly.min.js"></script>
    <script src="<?php echo $directory_uri; ?>/js/skel.min.js"></script>

    <script src="<?php echo $directory_uri; ?>/js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="<?php echo $directory_uri; ?>/css/skel.css" />
        <link rel="stylesheet" href="<?php echo $directory_uri; ?>/css/style.css" />
        <link rel="stylesheet" href="<?php echo $directory_uri; ?>/css/style-desktop.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo $directory_uri; ?>/css/ie/v8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo $directory_uri; ?>/css/ie/v9.css" /><![endif]-->
</head>

<body class="<?php body_class(); ?>">
    <!-- Nav -->
    <nav id="nav">
        <ul class="container">
            <li><a href="#top">Top</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>