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
      <p text>Choose your pizza size</p>
      <form  action="handler.php" method=post>
      <li class="mdl-list__item">
    <span class="mdl-list__item-primary-content">
      <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="large">
        large $6.00
        <input type="radio" id="large" class="mdl-radio__button" name="pizza_size" value="6.00">
      </label>
    </span> <br>
    <span class="mdl-list__item-secondary-content">
      <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="extra_large">
        extra large $10.00
        <input type="radio" id="extra_large" class="mdl-radio__button" name="pizza_size" value="10.00">
      </label> <br>
    </span>
    <span class="mdl-list__item-secondary-content">
      <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="cancel_order">
        cancel order
        <input type="radio" id="cancel_order" class="mdl-radio__button" name="pizza_size" value="0">
      </label> <br>
    </span>
      <p text>Choose your pizza toppings</p>
      <input type="radio" id="1t" name="toppings" value="1.00" required>
      <label for="1t">1 toppings $1.00</label><br>
      <input type="radio" id="2t" name="toppings" value="1.75">
      <label for="2t">2 toppings $1.75</label><br>
      <input type="radio" id="3t" name="toppings" value="2.50">
      <label for="3t">3 toppings $2.50</label><br>
      <input type="radio" id="4t" name="toppings" value="3.25">
      <label for="4t">4 toppings $3.25</label><br>
      <input type="radio" id="0t" name="toppings" value="0">
      <label for="0t">cancel order</label><br><br>
      </li>
      <?php
        if (isset($_GET) && $_GET['error'] == 1) {
            echo "<p class=\"variablecolour\">please choose one</p>";
          }
          ?>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" value="Submit">
  Submit
</button>
      </form>
      
        
          
  
