<?php
//Balise title for <head>
$title = "Backoffice";
include('partials/_header-bck.php');
include("./../helpers/functions.php");
include("./../helpers/pdo.php")

?>
<div class="flex ">
  <?php include("partials/_navbar-bck.php") ?>
  <?php include("partials/_content-add_product.php") ?>
</div>

<?php include('partials/_footer-bck.php') ?>