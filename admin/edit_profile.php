<?php include('../server/connection.php'); ?>
<?php


//ambil data dari form
$name = $_POST['admin_name'];
$email = $_POST['admin_email'];
$phone = $_POST['admin_phone'];
$password = $_POST['admin_password'];
$bio = $_POST['bio'];

//update data pada tabel users
$sql = "UPDATE admins SET name='$name', email='$email', password='$password', bio='$bio' WHERE id='$user_id'";

if (mysqli_query($conn, $sql)) {
  echo "Profile updated successfully";
} else {
  echo "Error updating profile: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="edit_profile.css">
  </head>
  <body>
    <div class="container">
      <h1>Edit Profile</h1>
      <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>

        <label for="name">Email:</label>
        <input type="text" id="name" name="name"><br>

        <label for="email">Phone:</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Save Changes">
      </form>
    </div>
  </body>
</html>