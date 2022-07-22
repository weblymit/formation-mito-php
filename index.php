<?php 
  //Balise title for <head>
  $title="Accueil";
  include('partials/_header.php') 
?>
<section class="pb-20">
  <!-- Tittle H2 -->
  <?php 
    $titleH2= "Qui sommes-nous ?";
    include("./helpers/H2.php") ;

    ?>

  <p class="pt-10">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique quibusdam sed expedita voluptatum atque iusto
    consectetur, quos temporibus consequuntur rem sequi repellendus eum perspiciatis culpa mollitia, nihil amet.
    Dignissimos, quidem!
  </p>

  <div class="pt-6 md:pt-16 md:flex justify-around md:space-x-8 ">
    <img src="./assets//img/home-mito.jpeg" alt="" class="md:w-[50%] py-5">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium amet quibusdam quod error veniam optio earum
      dolores, aut magnam deleniti omnis nam delectus soluta sunt numquam, voluptas dolore voluptatibus ad? Commodi,
      nobis. Aliquid esse, accusantium impedit tenetur inventore possimus necessitatibus cupiditate, ipsam ipsa dolore
      sed suscipit, placeat libero dolor quis.
    </p>
  </div>
</section>
<section class="">
  <!-- Tittle H2 -->
  <?php 
    $titleH2= "Nos services";
    include("./helpers/H2.php");
    include("./helpers/datas.php");
    ?>
  <div class="flex justify-center space-x-16 pt-14">
    <?php 
      foreach ($arrs as $arr) { ?>
    <div class="">
      <img src="<?= $arr["src"] ?>" alt="" class="w-16">
      <p><?= $arr["title"] ?></p>
    </div>
    <?php } ?>
  </div>
</section>
<?php include('partials/_footer.php') ?>