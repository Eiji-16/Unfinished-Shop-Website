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

/* Sign Up tab */
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
.container3 {
    color: white;
    font-family: 'blasphemous';
    text-align: center;
    width: 50%;
    height: 66%;
    display: flex;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 1);
    border-radius: 10px;
    border: 1px solid black;
    overflow: hidden;
    background-color: rgba(137, 136, 138, 0.2);
    backdrop-filter: blur(3px);
    animation: fadeIn 1s;
}

.create {
    width: 100%;
    text-align: center;
    margin-bottom: 20px;
    margin-top: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
}

.create h1 {
    font-size: 3rem;
    color: rgb(0, 0, 0);
    font-family: 'blasphemous';
    margin: 0;
    text-shadow: 2px 2px 4px #000;
}


.fillUp {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 1rem;
    overflow: auto;
    width: 100%;
    padding: 20px;
}

.form-sides {
    display: flex;
    justify-content: space-between;
    width: 100%;
    gap: 20px;
    max-width: 650px;
}


.left, .right {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 50%;
}


.form-row {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    width: 250px;
    gap: 40px;
    margin-bottom:5px;
}

.form-row input[type="text"],
.form-row input[type="email"],
.form-row input[type="password"],
.form-row input[type="tel"] {
    max-width: 1000px;
    margin-bottom: 10px;
    width: 100%;
    height: 20px;
    padding: 0.1rem;
    border: 3px solid #000000;
    border-radius: 10px;
}


.gender-options {
    margin-top: 5px;
    display: flex;
    gap: 20px;
    color: black;
    font-family: 'blasphemous';
    justify-content: center;
}

label {
    color: black;
    text-shadow: 2px 2px 4px #000;
}

.gender-options label {
    display: flex;
    align-items: center;
    gap: 6px;
    text-shadow: 2px 2px 4px #000;
}

.buttonSignUp{
    margin-top: 10px;
    text-shadow: 2px 2px 4px #000;
}

.Login{
    padding-top: 2%;
    color:#000000;
    text-shadow: 2px 2px 4px #000;
}

.Login a{
    text-decoration: none;
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

</style>
<body>
 <!--Sign Up-->
 <div class="container3">
     <div class="fillUp">
         <div class="create">
             <h1><b>Create an Account</b></h1>
         </div>
         <form action="register_process.php" method="POST">
             <div class="form-sides">
                 <div class="left">
                     <!-- FirstName -->
                     <div class="form-row">
                         <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
                     </div>
                     <!-- LastName -->
                     <div class="form-row">
                         <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
                     </div>
                     <!-- Email -->
                     <div class="form-row">
                         <input type="email" id="email" name="email" placeholder="Email" required>
                     </div>
                 </div>

                 <div class="right">
                     <!-- PhoneNumber -->
                     <div class="form-row">
                         <input type="text" id="number" name="cell" placeholder="Phone Number" required>
                     </div>
                     <!-- Password -->
                     <div class="form-row">
                         <input type="password" id="password" name="password" placeholder="Password" required>
                     </div>
                     <!-- Confirm Password -->
                     <div class="form-row">
                         <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
                     </div>
                 </div>
             </div>
             <!-- Gender -->
             <label>Gender:</label>
             <div class="gender-options">
                 <input type="radio" id="male" name="gender" value="male" required>
                 <label for="male">Male</label>
                 <input type="radio" id="female" name="gender" value="female">
                 <label for="female">Female</label>
             </div>
             <!-- Buttons -->
            <div class = "buttonSignUp">
                 <button type="submit"> Sign Up </button>
            </div>
                <div class = Login>
                    <span> Already have an account? </span> <a href="login.php"> Log In </a>
                </div>
         </form>
     </div>
 </div>
</body>
</html>
