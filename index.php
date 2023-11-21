<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
</head>
<style>
  *{
    margin: 0;
    padding: 0;
    scroll-behavior:smooth;
  }
  .container{
    display:block;
    position: relative;
    height:50vh;
    width:fit-content;
    margin:0 auto;
    padding:12px 23px; 
    margin-bottom:320px;
    top:120px;
 }
  .inner-container{
    display:flex;
    flex-direction:column;
    height:100vh;    
    font-size:4vh;
 
  }
  .inner-container input{
    height:5vh;
    position: relative;
    width:50vw;
    outline:none;
    font-size:4vh;
  }
  button{
    height:35px;
    width:50vw;
    margin-top:24px;
    background-color:Green;
    color:white;
    cursor:pointer;
    outline:none;
    border:none;
    border-radius:23px;
    font-size:3vh;
  }
  #container2{
    display:block;
    position: relative;
    height:50vh;
    width:fit-content;
    margin:0 auto;
    padding:12px 23px; 
    margin-top:120px;
 }
</style>
<body>
  <div class="container">
    <form action="signup.php" method="POST" class="inner-container">
      <h3 style="text-align:center; font-size:5vh;">Sign Up</h3>
      <label for="username" >Enter Username:</label>
      <input type="text" name="username">
      <label for="password">Enter Password</label>
      <input type="password" name="password" id="password">
      <label for="cpassword">Confirm Password</label>
      <input type="password" name="cpassword" >
      <button type="submit" name="signup"> Submit</button>
      <a href="#container2">Login</a>
    </form>
  </div>
  <div id="container2">
    <form action="login.php" method="post" class="inner-container">
      <h3 style="text-align:center; font-size:5vh;">Login</h3>
      <label for="username" >Enter Username:</label>
      <input type="text" name="lusername">
      <label for="password">Enter Password</label>
      <input type="password" name="lpassword" id="password">     
      <button type="submit" name="login" style="background-color:blue;">Login</button>
    </form>
  </div>
</body>
</html>