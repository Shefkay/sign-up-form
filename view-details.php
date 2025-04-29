<?php require('user-data.php');
$sql = "SELECT * from users_data order by id desc limit 1";
$getUser = mysqli_query($php_class, $sql) or die(mysqli_error($php_class));
$row_getUser = mysqli_fetch_array($getUser);
$totalRow = mysqli_num_rows($getUser);
$count = 0;

$date = $row_getUser['date'];
$name = $row_getUser['name'];
$username = $row_getUser['username'];
$phone = $row_getUser['phone'];
$email = $row_getUser['email'];
$password = $row_getUser['password'];


//  echo "date: $date <br />";
//   echo "name: $name <br />";
//   echo "username: $username <br />";
//   echo "phone: $phone <br />";
//   echo "email: $email <br />";
//   echo "password: $password <br />";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/css/previewform.css">
  <title>Preview Form</title>
</head>
<body>
  <div class="container">
    <table cellpadding="0" cellspacing="0" border="1">
      <tr>
        <td colspan="6"><h3>USER DETAILS</h3></td>
      </tr>

      <tr class="_herder">
        <td>S/N</td>
        <td>Date</td>
        <td>Name</td>
        <td>Username</td>
        <td>Phone</td>
        <td>Email Address</td>
      </tr>
      <?php
        $sql = "SELECT * from users_data order by id desc";
        $getUser = mysqli_query($php_class, $sql) or die(mysqli_error($php_class));
        $row_getUser = mysqli_fetch_array($getUser);
        $totalRow = mysqli_num_rows($getUser);
        $count = 0;
      ?>
      <?php do{; $count++?>
      <tr class="_data-one">
        <td><?php echo $count;?></td>
        <td><?php echo $row_getUser['date'];?></td>
        <td><?php echo $row_getUser['name'];?></td>
        <td><?php echo $row_getUser['username'];?></td>
        <td><?php echo $row_getUser['phone'];?></td>
        <td><?php echo $row_getUser['email'];?></td>
      </tr>
      <?php }while($row_getUser = mysqli_fetch_array($getUser));?>
    </table>
    <div class="backTo_form">
      <a href="index.php">Add more users</a>
    </div>
  </div>
</body>
</html>