<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Code With Utkarsh | Contact Us</title>
  <?php include "includes/links.php" ?>
</head>

<body>

<!-- HEADER -->
  <?php include "includes/header.php" ?>

  <div class="containers">
    <h2>Contact Me!</h2>
    <form>
      <label for="Name">Full Name</label><br>
      <div class="input-group flex-nowrap my-2">
        <!-- <span class="input-group-text" id="addon-wrapping">@</span> -->
        <input type="text" class="form-control" placeholder="Enter your Name" aria-label="Username" aria-describedby="addon-wrapping">
      </div>
      <label for="Name">Your Email</label><br>
      <div class="input-group flex-nowrap my-2">
        <!-- <span class="input-group-text" id="addon-wrapping">@</span> -->
        <input type="text" class="form-control" placeholder="Enter your Email" aria-label="Username" aria-describedby="addon-wrapping">
      </div>
      <label for="Name">Your Phone Number</label><br>
      <div class="input-group flex-nowrap my-2">
        <!-- <span class="input-group-text" id="addon-wrapping">@</span> -->
        <input type="text" class="form-control" placeholder="Enter your Phone Number" aria-label="Username" aria-describedby="addon-wrapping">
      </div>
      <label for="Name">Describe what you want to contact me for here</label><br>
      <textarea class="text" cols="166" name="message" form="usrform">Your Message</textarea>
    </form>
    <button type="button" class="btn btn-success my-3">Submit</button>
  </div>

  <!-- LINKS -->
  <?php include "includes/footer.php" ?>
  <?php include "includes/signup.php" ?>
  <?php include "includes/login.php" ?>

</body>

</html>