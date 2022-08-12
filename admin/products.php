<?php
//Balise title for <head>
$title = "Backoffice";
include('partials/_header-bck.php');
require_once("../helpers/functions.php");
require_once("../helpers/pdo.php");

?>
<div class="flex ">
  <?php include("partials/_navbar-bck.php") ?>
  <?php include("partials/_products.php") ?>
</div>

<?php include('partials/_footer-bck.php') ?>