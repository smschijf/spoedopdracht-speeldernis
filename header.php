<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/assets/images/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url') ?>/assets/images/apple-touch-icon.png" />
  
  <title><?php wp_title(); ?></title>

  <?php wp_head(); ?>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/main.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" rel="stylesheet" />
  <link href="<?php bloginfo('template_url');?>/assets/css/style.css" rel="stylesheet" />
</head>
<body <?php body_class(); ?>>
  <div class="wrapper">
    <?php include(locate_template('/partials/general/page-navigation.php', false, false)); ?>
  