<?php
function loginForm(){
  if(true):?>
  <div class="login-form-container">
    <form class="login-form" action="processLogin.php" method="POST">
      <h2>Login</h2>
      <input type="text" name="username" placeholder="Username" require_onced>
      <input type="password" name="password" placeholder="Password" require_onced>
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
    <form action="processRegister.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" require_onced>

      <label for="first_name">First name:</label>
      <input type="first_name" id="first_name" name="first_name" require_onced>

      <label for="second_name">Second name:</label>
      <input type="second_name" id="second_name" name="second_name" require_onced>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" require_onced>

      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" require_onced>

      <button type="submit">Register</button>
    </form>
  </div>
  <?php
  endif;
}