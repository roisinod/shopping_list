<html>
    <head>
        <title>Info</title>
        <link rel="stylesheet" type="text/css" href="actionbackground.css">
    </head>
    <body>



<?php

  $item1 = htmlspecialchars($_POST['item1']);
  $item2  = htmlspecialchars($_POST['item2']);
  $item3  = htmlspecialchars($_POST['item3']);
  $item4  = htmlspecialchars($_POST['item4']);
  $item5  = htmlspecialchars($_POST['item5']);
  $item6  = htmlspecialchars($_POST['item6']);


 //echo $item1, ' ', $item2, ' ', $item3, ' ', $item4, ' ', $item5, ' ', $item6, ' ';


?>

<fieldset>

 <li style="background-color: palegreen"> <?php echo $item1; ?></li>
 <li style="background-color: lightgreen" > <?php echo $item2; ?></li>
 <li style="background-color: mediumspringgreen"> <?php echo $item3; ?></li>
 <li style="background-color: springgreen"> <?php echo $item4; ?></li>
 <li style="background-color: mediumseagreen"> <?php echo $item5; ?></li>
 <li style="background-color: forestgreen"> <?php echo $item6; ?></li>
</fieldset>

    </body>
</html>