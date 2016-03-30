<?php

if (isset($_POST['username']) && isset($_POST['password'])) {
 
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $password_hash = md5($password);
  
   if  (!empty($username) && !empty($password)){
        //pane sth bash na pareis ta stoixeia
		 
		$query = "SELECT id,role FROM users WHERE username = '$username' AND  password = '$password_hash' ";
		
		if ($query_run = mysql_query($query)){
		  
		     $query_num_rows= mysql_num_rows($query_run);
			 
			 confirm_query($query_run);
			 
			 // warning to the user
		     if($query_num_rows==0){
			    echo 'Username/password combination incorrect!!! ';	
				 //otherwise
			 }else if($query_num_rows==1)
			 { 
                $found_user = mysql_fetch_array($query_run);
				
			  $user_id = mysql_result($query_run, 0,'id');
			   //$_SESSION['user_id'] = $user_id;
				$_SESSION['user_id'] = $found_user['id'];
				$_SESSION['username'] = $found_user['username'];
				//header('Location:index.php);
				 $role = $found_user['role'];
				 //analoga me ton rolo phgaine kai se diaforetikh leitourgia
				switch($role){
					case 'admin':
						redirect_to("admin.php");
					case 'teacher':
						redirect_to("teacher.php");
					case 'principal':
						redirect_to("principal.php");
					default:
						$error = 1;
								
				}
												
			 }//end elseif 
		}//enf if
		
 } else{
        echo ' You must give a username and a password!!!';
  }
}

?>
<table id="structure">
	<tr>
<td id="navigation">
<?php echo "Current Date: " . date("jS F Y"); ?>
</td>
<td id="page">
<h2>User Login</h2>
<form action="<?php echo $current_file;?>" method="post">
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username"/></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="Login" /></td>
				</tr>
			</table>
			</form>
</td>
	</tr>
</table>

