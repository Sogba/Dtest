  <?php

function initJavascript(){
  if(true): ?>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
    document.getElementById("loginButton").addEventListener("click", switchToLogin);
    document.getElementById("registerButton").addEventListener("click", switchToRegister);
    

    document.body.addEventListener('click', function(e) {
      if (e.target.classList.contains('edit-room-btn')) {
        const roomId = e.target.closest('.room').dataset.roomId;
        editRoom(roomId);
      }
    });
  });

    function switchToLogin(){
      alert("login")
    }

    function switchToRegister(){
      alert("register")
    }

    function editRoom(roomId){

    }

  </script>
  <?php
  endif;
}