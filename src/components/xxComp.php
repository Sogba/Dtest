<?php
function loginForm(){
  echo '
  <div class="login-form-container">
    <form class="login-form" action="processLogin.php" method="POST">
      <h2>Login</h2>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>
  ';
}

function registerForm(){
  echo '
  <div class="register-form-container">
    <h2>Register</h2>
    <form action="processRegister.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" required>

      <button type="submit">Register</button>
    </form>
  </div>
  ';
}