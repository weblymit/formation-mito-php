<?php 
  //Balise title for <head>
  $title="Produits";
  include('partials/_header.php');
  include("./helpers/datas.php");
    $current_page_uri =$_SERVER['REQUEST_URI'];
?>

<section>
  <?php 
    $titleH2= "Nos produits";
    include("./helpers/H2.php") 
    ?>

  <p class="pt-10">
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam necessitatibus, harum nostrum mollitia voluptas
    provident aperiam odio error ipsum suscipit quidem molestiae est labore adipisci esse impedit. Voluptate, illo et?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident quia obcaecati dignissimos eius? Doloremque
    magnam repudiandae reprehenderit mollitia qui maxime aperiam, sint itaque placeat? Odit praesentium similique
    adipisci nisi dolor!
  </p>

  <div class="pt-10 md:pt-20">
    <?php 
    foreach ($arr_products as $value) {?>
    <div class="md:flex justify-between items-center md:space-x-12 mb-8">
      <img src="<?= $value["src"] ?>" alt="" class="md:w-[30%] rounded-lg">
      <p class="pt-4 md:pt-0"><?= $value["description"] ?></p>
    </div>
    <?php }
    ?>
  </div>
</section>
<?php include('partials/_footer.php') ?>