<?php
function createHead(string $pageName){
  if(true):?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageName ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo ROOT_DIR ?>style/favicon.ico">  
    <link rel="stylesheet" href="<?php echo ROOT_DIR ?>style/index.css">
  </head>
  <?php
  endif;
}

function navbar(){

}
