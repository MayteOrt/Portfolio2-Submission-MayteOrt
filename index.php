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
   <h2>Sign Up for Baked Goods Donations for our school Bake Sale!</h2>
   <p>Parents please submit your name, phone number, donation, and your child's grade below.</p>
    <?php
       connect();
       signupTable();
       updateTable();
       close();  
    ?>
    <form action= "index.php" method="POST">
      
      <input type="text" placeholder="Parent Name"  name="parentname"/>
      
      <input type="text" placeholder="Phone Number" name="phone"/>
      
      <input type="text" placeholder="Donation" name="donation"/>
      
      <input type="text" placeholder="Grade"  name="grade"/>
      
      <button type= "submit">Submit</button>

      <form style="text-align: center; ">
  </form>
  </body>
  
</html>