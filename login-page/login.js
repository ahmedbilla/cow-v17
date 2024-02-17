function validateLogin() {
    // Show loading overlay
    showLoadingOverlay();

    // Get the values from the email and password fields
    var email = document.getElementById("login-email").value;
    var password = document.getElementById("login-pass").value;

    // Simulate a delay (you can replace this with actual login logic)
    setTimeout(function() {
       // Hide loading overlay
       hideLoadingOverlay();

       // Check if the provided email and password match the credentials
       if (email === "admin@gmail.com" && password === "root_123") {
          // If the credentials are correct, redirect to the specified page
          window.location.href = "page-principale/index.php";
       } else {
          // If the credentials are incorrect, display a centered alert
          showCenteredAlert("Invalid email or password. Please try again.");
       }
    }, 2000); // Simulated 2-second delay, replace this with your actual login logic
 }

 function showLoadingOverlay() {
    document.getElementById("overlay").style.display = "flex";
 }

 function hideLoadingOverlay() {
    document.getElementById("overlay").style.display = "none";
 }

 function showCenteredAlert(message) {
    // Display the centered alert
    document.getElementById("centeredAlertMessage").innerText = message;
    document.getElementById("centeredAlert").style.display = "flex";

    // Hide the alert after a delay (e.g., 3000 milliseconds)
    setTimeout(function() {
       hideCenteredAlert();
    }, 3000);
 }

 function hideCenteredAlert() {
    // Hide the centered alert
    document.getElementById("centeredAlert").style.display = "none";
 }
