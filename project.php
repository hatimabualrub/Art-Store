<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Art Store | My Account</title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link href="index.css" rel="stylesheet" />
    <script src='index.js'></script>
  </head>
  <body>
    <header>
      <nav>
        <div>
          <h2><i class="material-icons"> color_lens </i> Art Store</h2>
        </div>
        <ul>
          <li>About</li>
          <li>Home</li>
          <li>Contact Us</li>
        </ul>
      </nav>
    </header>
    <div class='card'>
        <div class='card-title'>
    <?php
    echo '<h2 class="title user">'.ucwords($_POST['first']).'\'s Account</h2>';
    ?>
        </div>
    <div class="user-data">
    <?php
    echo '<div class="row"><h3>Name: </h3><h3>'.ucwords($_POST['first']).' '.ucwords($_POST['last']).'</h3></div>';
    echo '<div class="row"><h3>Email: </h3><h3>'.$_POST['email'].'</h3></div>';
    echo '<div class="row"><h3>Password: </h3><h3 id="password">'.$_POST['password'].'</h3></div>';
    ?>
    <div class='show-password'>Show Password<input type="checkbox" id="show" onclick="showPassword()"/> </div>
    </div>
    
    </div>
    
  </body>
</html>
