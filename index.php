<!DOCTYPE HTML>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>5 nights at Aiden's</title>
  </head>

  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">pizza order</span>
        </div>
      </header>
        <main class="mdl-layout__content">
        <div class="container">
      <form  action="handler.php" method=post>
  <div class="mdl-card__actions mdl-card--border">
  </div>
  <div class="mdl-card__menu">
  </div>
</div>
<center>
<div class="options demo-card-square mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--border">
                  <h2 class="mdl-card__title-text h6">What size would you like?</h2>
                </div>
                <div class="mdl-card__supporting-text" style='background: white;'>
                  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="large">
                    <input type="radio" id="large" class="mdl-radio__button" name="pizza_size" value="6.00">
                    <span class="choices mdl-radio__label" style="color: black;">Large $6.00</span>
                  </label>
                  <br>
                  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="extra_large">
                    <input type="radio" id="extra_large" class="mdl-radio__button" name="pizza_size" value="10.00">
                    <span class="choices mdl-radio__label" style="color: black;">Extra Large $10.00</span>
                  </label>
</div>
<div class="options demo-card-square mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--border">
                  <h2 class="mdl-card__title-text h6">How many toppings would you like?</h2>
                </div>
                <div class="mdl-card__supporting-text" style='background: white;'>
                  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="1t">
                    <input type="radio" id="1t" class="mdl-radio__button" name="toppings" value="1.00">
                    <span class="choices mdl-radio__label" style="color: black;">1 topping $1.00</span>
                  </label>
                  <br>
                  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="2t">
                    <input type="radio" id="2t" class="mdl-radio__button" name="toppings" value="1.75">
                    <span class="choices mdl-radio__label" style="color: black;">2 topping $1.75</span>
                  </label>
                  <br>
                  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="3t">
                    <input type="radio" id="3t" class="mdl-radio__button" name="toppings" value="2.50">
                    <span class="choices mdl-radio__label" style="color: black;">3 topping $2.50</span>
                  </label>
                  <br>
                  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="4t">
                    <input type="radio" id="4t" class="mdl-radio__button" name="toppings" value="3.25">
                    <span class="choices mdl-radio__label" style="color: black;">4 topping $3.25</span>
                  </label>
</div>
      <?php
        if (isset($_GET) && $_GET['error'] == 1) {
            echo "<p class=\"variablecolour\">please choose one</p>";
          }
          ?>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" value="Submit">
  Submit
</button>
</center>
      </form>
      </div>
      
        
          
  
