<?php 
if (!empty($_GET['city'])) {
   header('Location: ' . $_SERVER['SCRIPT_NAME']);
}
if ($_GET['city'] == '0') {
  header('Location: ' . $_SERVER['SCRIPT_NAME']);
}
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <?php $path = $_SERVER['DOCUMENT_ROOT']; include  $path  . '/section/data_header.php'; ?>
<!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.1.1/turbolinks.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="theme-color" content="#960605">
  <meta name="robots" content="index, follow">
  <meta property="og:image" content="https://gorgaz2050.kz/img/bg.jpg">
  <meta property="og:type" content="article"> 
