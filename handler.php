<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="index.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>5 night at Aiden's</title>
  </head>

  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">pizza order</span>
        </div>
      </header>
      
      <main class="mdl-layout__content" style="margin-left:75px;">
        <?php
$m=$_POST['pizza_size']+$_POST['toppings'];
if ($_POST['pizza_size']==0){
  echo "";
}
  elseif ($_POST['toppings']==0){
  echo "";
  }
  else{
    if ($_POST['pizza_size']==6.00){
      $size="large";
    }
    elseif ($_POST['pizza_size']==10.00){
      $size="extra large";
    }
    if ($_POST['toppings']==1.00){
      $toppings="1 toppings";
    }
    elseif ($_POST['toppings']==1.75){
      $toppings="2 toppings";
    }
    elseif ($_POST['toppings']==2.50){
      $toppings="3 toppings";
    }
    elseif($_POST['toppings']==3.25){
      $toppings="4 toppings";
    }
    sleep(5);
}?>
<p class="center">
    <?php
    echo "your $size pizza with $toppings cost you $";
    echo round($m*1.13,2);
     ?>
</p>
</html>