<?php
   $dbhost = 'localhost';
$username = 'root';
$password = '';
$db = 'home decor';
// Create connection
$conn = mysqli_connect("$dbhost" , "$username" , "$password");
//echo "Connected" ;
mysqli_select_db($conn,$db);
  $email = (isset($_POST['email']) ? $_POST['email'] : '');
  $pass = (isset($_POST['password']) ? $_POST['password'] : '');
  $phone = (isset($_POST['phone']) ? $_POST['phone'] : '');
  $add = (isset($_POST['address']) ? $_POST['address'] : '');
  $query = "insert into data(Email,pass,phone,address) values('$email','$pass',$phone,'$add');";
  $result = mysqli_query($conn,$query);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
	$(function(){
		// alert('successfully');
		Swal.fire(
		
			'Sign up',
			'successfully',
			'success'
		)
	});
</script>