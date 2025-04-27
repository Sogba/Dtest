<?php
function createHead(string $pageName){
  echo '
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>'.$pageName.'</title>
      <link rel="stylesheet" href="'.ROOT_DIR.'style/index.css">
  </head>';
}

function navbar(){
  
}