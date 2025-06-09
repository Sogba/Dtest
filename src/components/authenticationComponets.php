<?php
function loginForm(){
  if(true):?>
  <div class="login-form-container">
    <h2>Login</h2>
    <form class="login-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
      <input type="hidden" name="login" value="koko"> 
      <input type="text" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>
  <?php
  endif;
}

function registerForm(){
  if(true):?>
  <div class="register-form-container">
    <h2>Register</h2>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
      <input type="hidden" name="register" value="koko"> 
      <label for="email">Email:</label>
      <input type="text" name="email" id="email" required>

      <label for="first_name">First name:</label>
      <input type="text" name="first_name" id="first_name" required>

      <label for="second_name">Second name:</label>
      <input type="text" name="second_name" id="second_name" required>

      <label for="password">Password:</label>
      <input type="password" name="password" id="password" required>

      <label for="confirm_password">Confirm Password:</label>
      <input type="password" name="confirm_password" id="confirm_password" required>

      <button type="submit">Register</button>
    </form>
  </div>
  <?php
  endif;
}

function logoutButton(){
  if(true):?>
  <div class="logoutbutton">
    <form action="" method="post">
      <input type="hidden" name="logout" value="koko"> 
      <input type="submit" value="Logout">
    </form>
  </div>
  <?php
  endif;
}

function authForm(){
  loginForm();
  registerForm();
  if(true):?>
  <div class="auth-buttons">
    <button class="toggle-btn active" id="loginButton">Login</button>
    <button class="toggle-btn" id="registerButton">Register</button>
  </div>
  <?php
  endif;
}