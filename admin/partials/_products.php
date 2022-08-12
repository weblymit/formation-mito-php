<?php
require_once("../sql/sql-all.php");
$index = 1;
?>

<div class="w-5/6 p-10">
  <h1 class="text-4xl font-bold pb-12">La liste des produits</h1>
  <?php if (count($products) > 0) { ?>
    <table class="table w-full">
      <?php include("_table-head.php") ?>
      <tbody>
        <?php foreach ($products as $product) : ?>
          <tr>
            <th><?= $index++ ?></th>
            <td><?= $product["name"] ?></td>
            <td><?= $product["price"] ?></td>
            <td><?= $product["category"] ?></td>
            <td><?= $product["url_img"] ?></td>
            <td> <?php include("partials/_modal-delete.php") ?></td>
            <td>update</td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  <?php } else { ?>
    <p class="text-center font-light text-xl pt-10">Pas de produits actuellement</p>
  <?php } ?>
</div>