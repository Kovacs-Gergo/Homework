<link rel="stylesheet" href="./styles/forms.css" type="text/css">
<div class="boxes justify-content-center">

<div class="loginbox">
  <span class="lborderLine">
  <form id="login" action="?page=login2" method="post">
    <h2>Sign in</h2>
    <div class="inputBox"><input type="text" name="username" required><span>Username</span><i></i></div>
    <div class="inputBox"><input type="password" name="password" required><span>Password</span><i></i></div>
    <div class="inputBox"><input type="email" name="email" required><span>E-Mail</span><i></i></div><br>
    <input type="submit" value="Submit">
  </form>
  </span>
</div>
<br><br>
<div class="regbox">
  <span class="rborderLine">
  <form id="registration" action="?page=registration" method="post">
    <h2>Registration</h2>
    <div class="inputBox"><input type="text" name="firstname" value="" minlength="3" maxlength="45" required><span>First name</span><i></i></div>
    <div class="inputBox"><input type="text" name="lastname" value="" minlength="3" maxlength="45" required><span>Last name</span><i></i></div>
    <div class="inputBox"><input type="text" name="username" minlength="5" maxlength="40" required><span>Username</span><i></i></div>
    <div class="inputBox"><input type="password" name="password" minlength="8" maxlength="40" required><span>Password</span><i></i></div>
    <div class="inputBox"><input type="email" name="email" minlength="7" maxlength="80" required><span>E-Mail</span><i></i></div><br>
    <input type="submit" value="Submit">
  </form>
  </span>
</div>

</div>