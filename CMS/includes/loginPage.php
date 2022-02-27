






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
<link rel="stylesheet" href="../css/css.css" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body class="login_bgrnd">
    

   <div class="pw">
       
       <fieldset>
           <aside>
               Login for users: <h3>username: user <br> password: user</h3>
           </aside>
           <section>
               Login for admin: <h3>username: admin <br> password: admin</h3>
           </section>
           
       </fieldset>
       
   </div>
    
<!--     Login form -->
    
<div class="login_form">
  <form action="login.php" method="post">
    
    <label for="username">Username</label>
    <input type="text" id="" name="username" placeholder="username .." required>

    <label for="password">Password</label>
    <input class="pw_login" type="password" id="" name="password" placeholder="password .." required>

      <button class="btn_login" type="submit" name="login">Login</button>
  </form>
</div>
    
    
    
</body>
</html>