<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>Mita - <?= $title ?></title>
</head>

<body>
  <?php 
  // For active class
  // 1- je recupere le lien de la page courante avec la superglobale $_SERVER['REQUEST_URI']
  $activePage = $_SERVER['REQUEST_URI'];
  //2- Je crée la classe active
  $active = "text-green-500 border-b pb-2 border-green-500 font-bold"
  // 3- je verifie que les pages entre eux avec une condition ternaire. Si ça match j'ajoute la classe active sinon je laisse vide
  ?>
  <!-- navigation -->
  <nav class="bg-gray-100 px-20 py-6 fixed w-full z-50">
    <div class="md:flex justify-between ">
      <div class="flex justify-center mb-5 md:mb-0">
        <a href="/">
          <img src="../assets/img/mito.png" alt="" class="w-16">
        </a>
      </div>
      <div class="space-x-4 md:space-x-10">
        <a href="/" class="<?= ($activePage == '/') ? $active : '';  ?>">Home</a>
        <a href="products.php" class="<?= ($activePage == '/products.php') ? $active : '';  ?>">Produits</a>
        <a href="contact.php" class="<?= ($activePage == '/contact.php') ? $active : '';  ?>">Contact</a>
      </div>
    </div>
  </nav>
  <!-- hero for hero image -->
  <div class=" flex flex-col justify-center items-center" id="hero">
    <div class="" id="wrapper-hero_overlay"></div>
    <div class="mx-5 md:mx-0 z-30">
      <p class="text-xss text-green-300">Le leader français du Bio</p>
      <h1 class="text-6xl font-black text-gray-100">Bienvenue chez Mito</h1>
    </div>
  </div>
  <main class="mx-5 md:mx-[12rem] pt-28 pb-20">