/*=============== SHOW HIDDEN - PASSWORD ===============*/
const showHiddenPass = (loginPass, loginEye) => {
   const input = document.getElementById(loginPass),
         iconEye = document.getElementById(loginEye)

   iconEye.addEventListener('click', () => {
      // Toggle between password and text
      input.type = (input.type === 'password') ? 'text' : 'password';

      // Toggle eye icon classes
      iconEye.classList.toggle('ri-eye-line');
      iconEye.classList.toggle('ri-eye-off-line');
   });
}

// Example usage
showHiddenPass('login-pass', 'login-eye');

