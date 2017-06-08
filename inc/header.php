<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php if(isset($title)){ echo $title; }?></title>

    <link rel="stylesheet" href="jquery_ui/css/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="jquery_ui/css/jquery-ui.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>

    <!-- <script type="text/javascript" src="jquery_ui/js/jquery.js"></script>
    <script type="text/javascript" src="jquery_ui/js/jquery-ui.js"></script> -->
    <script type="text/javascript" src="jquery_ui/js/main.js"></script>

</head>
<body>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
