<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <script>
      // This script will run after the page loads
      window.onload = function() {
        setTimeout(function() {
          // Redirect to main.php after 3 seconds (3000 milliseconds)
          window.location.href = "main.php";
        }, 5000);
      };
    </script>
</head>
<body>
<div class="card">
  <div class="loader">
    <p>Hospital</p>
    <div class="words">
      <span class="word">Booking</span>
      <span class="word">Doctors</span>
      <span class="word">Medicine</span>
      <span class="word">SOS</span>
      <span class="word">Ambulance</span>
    </div>
  </div>
</div>
</body>
</html>