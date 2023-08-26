<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form</title>
  </head>
  <body>
  <?php 
    echo "<h1 style='color:red'>My form</h1>";
    if(isset($_POST['submit'])){
        echo 'password is:'.$_POST['password']; 
    }
    
    ?>
    <form action="" method="post">
      <!-- method -post chai url ma seen hunxa and get chai seen hunna -->
      <div>
        <label for="">username:</label>
        <input type="text" name="username" />
      </div>
      <div>
        <label for="">password:</label>
        <input type="password" name="password" />
        
      <input type="color" />
      <input type="date" />
      <input type="submit" value="login" name="submit" />
      </div>
      
    </form>
  </body>
</html>