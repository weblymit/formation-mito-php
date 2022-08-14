<?php
//////////////////////////////////
// Traitetement du formulaire
///////////////////////////////////
// création array error
$error = [];
$errorMessage = "<span class='text-red-500'>*Ce champs est obligatoire</span>";
$success = false;

if (!empty($_POST["submited"])) {
  include("./validation-form/_clear_input.php");
  include("./validation-form/_name.php");
  include("./validation-form/_price.php");
  include("./validation-form/_description.php");
  include("./validation-form/_category.php");
  // debug_array($error);
}
?>
<div class="w-5/6 p-10">
  <h1 class="text-4xl font-bold pb-12">Ajouter un produit</h1>
  <form action="" method="post">
    <!-- name + price -->
    <div class="flex justify-between space-x-8">
      <!-- input for name -->
      <div class="mb-3 w-full">
        <?php
        $name = "name"; // var for ErrorMsg
        inputFunction("Nom du produit", "text", "name");
        include("./../helpers/ErrorMsg.php") // ErrorMsg
        ?>

      </div>
      <!-- input for price -->
      <div class="mb-3 w-full">
        <?php
        $name = "price"; // var for ErrorMsg
        inputFunction("Prix du produit", "number", "price");
        include("./../helpers/ErrorMsg.php") // ErrorMsg
        ?>
      </div>
    </div>
    <!-- input description -->
    <?php
    $name = "description"; // var for ErrorMsg
    textareaFunction("Description", "description");
    include("./../helpers/ErrorMsg.php") // ErrorMsg
    ?>
    <!-- category -->
    <div class="">
      <?php
      include("input/_input-select.php");
      ?>
    </div>
    <!-- submit button -->
    <div class="mt-4">
      <input type="submit" name="submited" value="Ajouter" class="btn bg-green-500 border-none">
    </div>
  </form>

</div>