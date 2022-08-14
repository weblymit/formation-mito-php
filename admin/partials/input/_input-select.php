<?php
$categories = [
  ["name" => "Fruit"],
  ["name" => "Légume"],
]

?>
<div class="">
  <h2 class="font-semibold text-blue-900 pt-4 pb-2">Category</h2>
  <select class="select select-bordered w-full max-w-xs" name="category">
    <option disabled selected>Choose ?</option>
    <?php foreach ($categories as $category) : ?>
      <option value="<?= $category["name"] ?>" <?php
                                            // je sauvegarde en memory ce que le user a choisi
                                            if (!empty($_POST["category"])) {
                                              if ($_POST["category"] == $category["name"]) echo 'selected="selected"';
                                            }  ?>><?= $category["name"] ?></option>
    <?php endforeach ?>
  </select>
</div>
<p>
  <?php
  if (!empty($error["category"])) {
    echo $error["category"];
  }
  ?>
</p>