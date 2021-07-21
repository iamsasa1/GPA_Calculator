<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="css/log.css">
</head>
<body>
     <div class="center">
     <h1>SIGN UP</h1>
     <form action="signup-check.php" method="post">
     	
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <div class="txt_field">
               <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder=""
                      value="<?php echo $_GET['name']; ?>"><br>
               <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Full Name"><br>
          <?php }?>
          <span></span>
          <label>Name</label>
          </div>

          <div class="txt_field">
               <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder=""
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Your University Registration Number"><br>
          <?php }?>
          <span></span>
          <label>User Name</label>
          </div>

          <div class="txt_field">
     	     <input type="password" 
                 name="password" 
                 placeholder=""><br>
               <span></span>
               <label>Password</label>
          </div>

          <div class="txt_field">
               <input type="password" 
                 name="re_password" 
                 placeholder=""><br>
               <span></span>
               <label>Re-Password</label>
          </div>

          <input type="submit" value="REGISTER">
          
          <div class="signup_link">
            Already have an account?<a href="index.php" class="ca">Login</a>
          </div>

     </form>

     </div>
</body>
</html>