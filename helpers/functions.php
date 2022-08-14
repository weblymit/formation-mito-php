<?php
function debug_array($arr)
{
  echo "<pre>";
  print_r($arr);
  echo "</pre>";
}

function clear_xss($var)
{
  return trim(htmlspecialchars($var));
}

// function for clear array value
function clear_xss_array($arrs)
{
  $assAR = [];
  foreach ($arrs as $arr) {
    $assAR[] = trim(htmlspecialchars($arr));
  }
}

// input
function inputFunction($label, $type, $name,)
{ ?>
  <div class="">
    <label for="<?= $name ?>" class="font-semibold text-blue-900"><?= $label ?></label>
    <input type="<?= $type ?>" name="<?= $name ?>" class="input input-bordered w-full max-w-xss block" value="<?php if (!empty($_POST[$name])) {
                                                                                                                echo $_POST[$name];
                                                                                                              } ?>" <?php echo $type == "number" ? 'step = "0.01"' : "" ?> />


  </div>
<?php }

// textarea
function textareaFunction($label, $name,)
{ ?>
  <div class="mt-5 w-full">
    <label for="<?= $name ?>" class="font-semibold text-blue-900"><?= $label ?></label>
    <textarea name="<?= $name ?>" class="textarea textarea-bordered w-full block" row="30"><?php if (!empty($_POST[$name])) {
                                                                                              echo $_POST[$name];
                                                                                            } ?></textarea>
  </div>
<?php }
