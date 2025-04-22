
<?php require('user-data.php'); // Ensure this file contains the database connection code

if(isset ($_REQUEST['Submit'])){
  // sanitize and validate the input data
  $name = htmlspecialchars(trim($_REQUEST['name']));
  $phone = htmlspecialchars(trim($_REQUEST['phone']));
  $email = filter_var(trim($_REQUEST['email']), FILTER_VALIDATE_EMAIL);
  $username = htmlspecialchars(trim($_REQUEST['username']));
  $password = trim($_REQUEST['password']);
  $date = htmlspecialchars(trim($_REQUEST['date']));
  $today = date('d/m/Y');

  // echo "name: $name <br />";
  // echo "phone: $phone <br />";
  // echo "email: $email <br />";
  // echo "username: $username <br />";
  // echo "password: $password <br />";
  // echo "date: $date <br />";
  // echo "today: $today <br />";

  // Hash the password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // Prepare the SQL statement
  $sql = "INSERT INTO users_data(name, phone, email, username, password, date)VALUES('$name', '$phone', '$email', '$username', '$password', '$date')";

  $conn = mysqli_query($php_class, $sql) or die(mysqli_error($php_class));
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class 1</title>
  <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
  <div class="container">
  <div class="inner_container">
    <!-- Sign up form start here -->
    <div class="form_container">
      <form method="post" action="">
        <h4>SignUp Form</h4>
        <div class="form_group">
          <label for="name">Name:</label>
          <input type="text" name="name" id="name" placeholder="Enter your Full name">
        </div>
        <div class="form_group">
          <label for="name">Date</label>
          <input type="date" name="date" id="date" placeholder="Enter date" required="">
        </div>
        <div class="form_group">
          <label for="phone">Phone:</label>
          <input type="number" name="phone" id="phone" placeholder="Enter your Phone Number">
        </div>
        <div class="form_group">
          <label for="email">Email Address:</label>
          <input type="email" name="email" id="email" placeholder="Enter your Email address" required="">
        </div>
        <div class="form_group">
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" placeholder="Enter your Username" required="">
        </div>
        <div class="form_group">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" placeholder="Password" required="">
        </div>
        <div class="form_group">
          <label for="confirm password">Confirm Password:</label>
          <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required="" onblur="return chkPassword();">
        </div>
        <div class="form_group">
          <input type="submit" name="Submit" id="submit">
        </div>
      </form>
    </div>
    <!-- Sign up form ends here -->
  </div>
  </div>


  <script type="text/javascript" src="src/js/index.js"></script>
</body>
</html>