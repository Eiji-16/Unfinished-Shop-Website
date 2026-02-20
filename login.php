<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="favicon.png">
</head>

<style>
@font-face {
  font-family: 'blasphemous';
  src: url('Fonts/blasphemous.ttf');
  
}

html, body {
  margin: 0;
  padding: 0;
  height: 100%;
  width: 100%;
}

body {
    background-image: url("Background/8.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 100vh;
    justify-content: center;
    display: flex;
    align-items: center;
    backdrop-filter: blur(40px); 
}

/*Login tab */
.container1{
    color: white;
    font-family: 'blasphemous';
    text-align: center;
    width: 80%;
    height: 70%;
    background: #7F8CAA;
    display:flex;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 1);
    border-radius: 10px;
    overflow: hidden;
    background-color: rgba(26, 23, 27, 0.5);
    backdrop-filter: blur(3px);
    animation: fadeIn 1s;
    border: 1px solid black;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.container2{
    color: black;
    font-family: 'blasphemous';
    width: 40%;
    background: #DDDDDD;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 1px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.3);
    text-shadow: 2px 2px 4px #000;
}

.container2 h1{
  font-size: 45px;
  margin-bottom: 15%;
}

.welcometomyweb{
    font-size: 25 px;
    position: relative;
    height: 100%;
    width: 100%;
    align-items: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-shadow: 2px 2px 4px #000;
    
}

.fillupform {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    overflow: auto;
}

.fillupform label{
    font-size: 1rem;
    text-align: center;
}

.fillupform input {
    margin-bottom: 10px;
    width: 200px;
    height: 20px;
    padding: 0.1rem;
    border: 3px solid #000000;
    border-radius: 10px;
}

.input {
    position: relative;
    max-width:300px;
}

.input img {
    position: absolute;
    top: 36%;
    left: -10px;
    transform: translateY(-50%);
    width: 15px;
    opacity: 0.7;
    padding-left: 10%;
}

.input input {
    padding-left: 40px;

}

button {
    font-family: 'blasphemous';
    padding: 0.5rem;
    border: 3px solid #000000;
    border-radius: 8px;
    background: #97a75f00;
    background-color: rgb(134, 134, 134);
    color: black;
    cursor: pointer;
    width: 100px;
}

button:hover {
    background: #6a7b9a;
}

.register{
    padding-top: 5%;
}

.register a{
  text-decoration: none;
}

</style>


<body>
<!--Log In-->
  <div class="container1">
    <div class="welcometomyweb">
      <h1> Welcome </h1>
    </div>

    <div class="container2">
      <h1><b>User Login</b></h1>

      <div class="fillupform">
        <form action = "login_process.php" method="POST">
          <!-- Email/User input -->
          <div class="input">
            <img src="Icons/user.png" class="icon" alt="User">
            <input type="text" id="username" name="email" placeholder="User or Email" required>
          </div>

          <!-- Password input -->
          <div class="input">
            <img src="Icons/lock.png" class="icon" alt="Password">
            <input type="password" id="password" name="password" placeholder="Password" required>
          </div>

          <!-- Buttons -->

            <button type="submit">Log In</button>
          
          <div class = register>
            <span> Dont have an account? </span> <a href="register.php" > Register </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

<?php

?>
