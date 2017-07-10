<?php
function uploadImg ($target_dir, $file, $newName) {
  if(!file_exists($target_dir)){
    mkdir($target_dir);
  }
  $temp = explode(".", $file["name"]);
  $target_file = $target_dir.$newName. '.' . end($temp);
  if(move_uploaded_file($file["tmp_name"], $target_file)){
    return $target_file;
  }
  return;
}
?>
