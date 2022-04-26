<?php
    INCLUDE("database.php");
?>
<html>
  <head>
    <title>Bake Sale</title>
  </head>
  <style>
      h2{
          text-align: center;
      }
  </style>

  <body>
   <h2>Sign Up for Baked Goods Donations for our 3rd Grade Bake Sale!</h2>
    <?php
       connect();
       salesTable();
       updateTable();
       close();  
    ?>
    <form action= "index.php" method="POST">
      
      <input type="number" placeholder="Customer ID"  name="customer_id"/>
      
      <input type="text" placeholder="First Name"  name="first_name"/>
      
      <input type="text" placeholder="Last Name" name="last_name"/>
      
      <input type="text" placeholder="City" name="city"/>
      
      <input type="text" placeholder="State"  name="state"/>
      
      <button type= "submit">Submit</button>
  </form>
  </body>
</html>