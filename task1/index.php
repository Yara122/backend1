<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lightmode.css">
    <link rel="stylesheet" href="css/darkmode.css">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER ['PHP_SELF'];?>" method ="post" >
    
    <input type="email" name="email" placeholder="email" ><br>
    <input type="password" name="password" placeholder="password" ><br>
    <input type="submit"  >
   

    </form>

    <?php   
    if($_SERVER['REQUEST_METHOD'] == "POST"){        
            echo "email: ". $_POST['email'] . "<br>";
            echo "password: " . $_POST['password'];
           
    }
   

    setcookie('mode','light',time()+3600*72);

   if (isset($_COOKIE['mode']) && $_COOKIE['mode']==['light']){
    ?>
    <link rel="stylesheet" href="css/lightmode.css">
    <?php
    }else{ ?>
    <link rel="stylesheet" href="css/darkmode.css">
    <?php
    };?>
   <br>
    <button>mode</button>
   <?php echo $_COOKIE['mode']; ?>
</body>
</html>