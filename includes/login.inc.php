// $email = mysqli_real_escape_string($conn, $_POST['email']);
// $pass = mysqli_real_escape_string($conn, $_POST['pwd']);
// if (!empty($email)) {
// if (!empty($pass)) {
// $sql = "SELECT * FROM users WHERE `user_email`='$email'";
// $query = mysqli_query($conn, $sql);
// while ($row=mysqli_fetch_array($query)) {
// $firstname=$row['user_first'];
// $lastname=$row['user_last'];
// $db_email=$row['user_email'];
// $db_pass=$row['user_pwd'];
// }
// if ($email===$db_email&&$pass===$db_pass) {
// $_SESSION['fullname']=$firstname;
// $_SESSION['mail']=$db_email;
// header("location: ../admin.php");
// }else {
// echo "error in login";
// }
// }else {
// echo "error in password";
// }
// }else {
// echo "error in email";
// }