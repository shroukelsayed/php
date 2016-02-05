<?php
session_start();
include 'user.php';
if(isset($_SESSION['user_id'])) {
	$user= new User($_SESSION['user_id']);
	?>
	<i class="user"> </i> 
	<li class="user_desc">Welcome <?php echo $user->name; ?></li> 
	</a>
	<br/>
	<?php
		if ($user->email=='admin@gmail.com' && $user->password=='Admin1234') 
		{
	?>
		<a href="admin/index.php">
		<li class="user_desc">&nbsp&nbsp<img src="images/settings-icon.png" width="20px" height="20px" align="left">&nbsp&nbsp&nbsp Settings
        </li></a>
<?php
		}
	}
?>
