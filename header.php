<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="initial-scale = 1.0" name="viewport">
    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>
    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
<header id="banner" role="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1>
                        <?php bloginfo('name'); ?>
                    </h1>
                    <h3>
                        <?php bloginfo('description'); ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</header>
