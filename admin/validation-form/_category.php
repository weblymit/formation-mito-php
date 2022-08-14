<?php
$arrCategory= ["Fruit","Légume"];
// select category
if (empty($category)) {
  $error["category"] = $errorMessage;
} elseif (in_array("Fruit", $arrCategory) || in_array("Légume", $arrCategory)) {
  $error["category"] = "<span class=text-red-500>Oups ce choix n'existe pas</span>";
}
