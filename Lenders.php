<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  body {
  background-color: #344a72;
  font-family: "Roboto", sans-serif;
}

.signup-box {
  width: 360px;
  height: 1300px;
  margin: auto;
  background-color: white;
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
.para=2 b {
opacity = 0.5;
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
      <h1>Lenders Application Form</h1>
      <h4>A requirement for new lenders</h4>
      <form>
        <label>First Name</label>
        <input type="text" placeholder="" />
        <label>Last Name</label>
        <input type="text" placeholder="" />
        <label>Email</label>
        <input type="email" placeholder="" />
        <label>Contact Number:</label>
        <input type="number" placeholder="" />
        <label>Province:</label>
        <input type="text" placeholder="" />
		<label>City:</label>
        <input type="text" placeholder="" />
		        <label>Street Name:</label>
        <input type="text" placeholder="" />
		        <label>Home Address</label>
        <input type="text" placeholder="" />
		        <label>Barangay</label>
        <input type="text" placeholder="" />
		<p> <i> Please upload two Valid ID's </i> </p>
		<p> <i> Philhealth ID, Voter's ID, Barangay ID, National ID </i> </p>
  <input type="file" id="myFile" name="filename"> <br>
  <input type="file" id="myFile" name="filename">
  <p> <i> Take a picture with your I'D </i> </p>
  <input type="file" id="myFile" name="filename"> <br>
  <br> <br>
        <input type="button" value="Submit"" />
      </form>
      <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="terms and policies.html">Terms and Condition</a> and <a href="terms and policies.html>Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="index.html">Login here</a>
    </p>
  </body>
</html>