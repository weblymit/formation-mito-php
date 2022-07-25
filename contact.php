<?php
//Balise title for<head>
$title = "Contact";
include 'partials/_header.php'
?>

<section class="pb-12">
  <?php
  $titleH2 = "Nous contactez";
  include "./helpers/H2.php"
  ?>
  <div class="pt-10 pb-16 max-w-2xl mx-auto">
    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut laboriosam harum mollitia
      deserunt ipsa dolorum,
      quis atque! Iure laboriosam, rerum saepe enim odio asperiores odit natus ipsam. Excepturi tempora vel pariatur.
    </p>
  </div>
  <form class="max-w-2xl mx-auto bg-gray-50 px-2 py-6 md:p-8 rounded shadow">
    <div class="">
      <label for="name" class="font-bold text-gray-500">Nom </label>
      <input type="text" name="name" class="border rounded block w-full p-2 mt-3" placeholder="Votre nom">
    </div>
    <div class="mt-5">
      <label for="message" class="font-bold text-gray-500">Message </label>
      <textarea name="message" id="" cols="10" rows="10" class="border rounded block w-full p-2 mt-3" placeholder="Votre message"></textarea>
    </div>
    <div class="flex justify-center">
      <button class="bg-blue-500 mt-5 p-2 text-gray-100 rounded">Envoyer</button>
    </div>
  </form>
  <div class="pt-12 hidden md:block">
    <img src="./assets/img/map-img.png" alt="" class="mx-auto">
  </div>
</section>
<?php include 'partials/_footer.php' ?>