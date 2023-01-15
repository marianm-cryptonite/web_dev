<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  body {
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.4)40%,rgba(0,0,0,0.4)40%), url(bg_card.png);
    background-position: center;
    background-size: cover;
}

.signup-box {
  width: 360px;
  height: 620px;
  margin: auto;
  background-color: #cce6ff;
  border-radius: 3px;
}

.login-box {
  width: 360px;
  height: 280px;
  margin: auto;
  border-radius: 3px;
  background-color: white;
}

h1 {
  text-align: center;
  padding-top: 15px;
}

h4 {
  text-align: center;
}

form {
  width: 300px;
  margin-left: 20px;
}

form label {
  display: flex;
  margin-top: 20px;
  font-size: 18px;
}

form input {
  width: 100%;
  padding: 7px;
  border: none;
  border: 1px solid gray;
  border-radius: 6px;
  outline: none;
}
input[type="button"] {
  width: 320px;
  height: 35px;
  margin-top: 20px;
  border: none;
  background-color: #49c1a2;
  color: white;
  font-size: 18px;
}
p {
  text-align: center;
  padding-top: 20px;
  font-size: 15px;
}
.para-2 {
  text-align: center;
  color: white;
  font-size: 15px;
  margin-top: -10px;
}
.para-2 a {
  color: #49c1a2;
}
</style>

    <title>Sign Up | By Code Info</title>
    <link rel="stylesheet" href="Css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="signup-box">
      <h1>Sign Up</h1>
      <h4>It's free and only takes a minute</h4>
      <form>
        <label>First Name</label>
        <input type="text" placeholder="" />
        <label>Last Name</label>
        <input type="text" placeholder="" />
        <label>Email</label>
        <input type="email" placeholder="" />
        <label>Password</label>
        <input type="password" placeholder="" />
        <label>Confirm Password</label>
        <input type="password" placeholder="" />
        <input type="button" value="Submit"" />
      </form>
      <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="termsandpolicy.php">Terms and Condition</a> and <a href="termsandpolicy.php">Policy Privacy</a>
		
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login.html">Login here</a>
    </p>
  </body>
</html>