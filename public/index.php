<?php

use Medoo\Medoo;
require_once '../vendor/autoload.php';
require '../src/Comment.php';
require '../vendor/catfan/medoo/src/Medoo.php';

$database = new Medoo([
    'database_type' => 'sqlite',
    'database_file' => '../storage/database.db'
]);



$comment = new Comment($database);
$comment->setEmail('bruno@skvorc.me')
  ->setName('Bruno Skvorc')
  ->setComment('It works!')
  ->setComment('Hooray! Saving comments works!')
  ->save();

?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <!-- Add your site or application content here -->
  <form method = "post">
    <label>Name: <input type="text" name="name" placeholder="Your name"></label>
    <label>Email: <input type="text" name="email" placeholder="your@email.com"></label>
    <label>Comment: <textarea name="comment" cols="30" rows="10"></textarea></label>
    <input type="submit" value="submit">
  </form>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
