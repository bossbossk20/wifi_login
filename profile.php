<?php
session_start();
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<link  rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto" />

    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style2.css">

    
    
    
  </head>

  <body>

    <!-- this is the markup. you can change the details (your own name, your own avatar etc.) but don’t change the basic structure! -->

<aside class="profile-card">

    <header>
    
        <!-- here’s the avatar -->
        <a href="http://victory-design.ru/">
            <img src="http://victory-design.ru/sandbox/codepen/profile_card/avatar.svg" />
        </a>
        
        <!-- the username -->
        <h1>
        <?php
            echo $_SESSION['name']." ".$_SESSION['surname'];
        ?>
        </h1>
        
        <!-- and role or location -->
        <h2>Student</h2>
    
    </header>
 
    <!-- some social links to show off -->
    
        <!-- add or remove social profiles as you see fit -->
    

</aside>
<!-- that’s all folks! -->
    
    
    
    
    
  </body>
</html>
