<?php
require 'core.inc.php';
require 'connect.inc.php';
require ("includes/functions.php"); 
?>
<?php confirm_logged_in(); ?>
<?php include("includes/header.php"); ?>
<?php
	//define the variables
	$firstname = "";
	$lastname = "";
	$email = "";
	$speciality = "";
	$module_1 = "";
	$module_2 = "";
	$module_3 = "";
	$module_4 = "";
	$module_5 = "";
	$module_6 = 
	$_flag    ="";//tha xreiastei gia tis grafikes bohthtikh metavliti 
?>
 
<?php
        $user_id = $_SESSION['user_id'];
	    $query = "select firstname,
			 lastname,
			 email,
			 speciality,
			 module_1,
			 module_2,
			 module_3,
			 module_4,
			 module_5,
			 module_6,
			 _flag
			 from teacher  where login_id = '$user_id'";
			 
	    $result = mysql_query($query) or die("Can not be complete your action!" . mysql_error());
        $found_user = mysql_fetch_array($result);
        $firstname = $found_user['firstname'];
        $lastname = $found_user['lastname'];
        $email = $found_user['email'];
		$speciality = $found_user['speciality'];
	    $module_1 = $found_user['module_1'];
	    $module_2 = $found_user['module_2'];
	    $module_3 = $found_user['module_3'];
	    $module_4 = $found_user['module_4'];
	    $module_5 = $found_user['module_5'];
	    $module_6 = $found_user['module_6'];
        $_flag    =  $found_user['_flag'];
     
?>
<?php
	if ( isset($_POST['submit']) && $_POST['submit'] == "Update") {
		//get new values to insert
		$user_id = $_SESSION['user_id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$speciality = $_POST['speciality'];
	    $module_1 = $_POST['module_1'];
	    $module_2 = $_POST['module_2'];
	    $module_3 = $_POST['module_3'];
	    $module_4 = $_POST['module_4'];
	    $module_5 = $_POST['module_5'];
	    $module_6 = $_POST['module_6'];
       
		$error = 0;

		//check firstname
		if ($firstname == "") {
			$message = "<strong>please fill the Firstname.</strong><br>";
			$error = 1;
		}
		//check lastname
		elseif ($lastname == "") {
			$message = "<strong>please fill the Lastname.</strong><br>";
			$error = 1;
		}
		//check email
		elseif ($email == "") {
			$message = "<strong>You must enter Email.</strong><br>";
			$error = 1;
		}
		elseif ($speciality == "") {
			$message = "<strong>You must enter Speciality.</strong><br>";
			$error = 1;
		}
		
		elseif ($module_1 == "") {
			$message = "<strong>You must enter MODULE 1.</strong><br>";
			$error = 1;
		}
		
		elseif ($module_2 == "") {
			$message = "<strong>You must enter MODULE 2.</strong><br>";
			$error = 1;
		}
		
		elseif ($module_3 == "") {
			$message = "<strong>You must enter MODULE 3.</strong><br>";
			$error = 1;
		}
		
		elseif ($module_4 == "") {
			$message = "<strong>You must enter MODULE 4.</strong><br>";
			$error = 1;
		}
		
	   elseif ($module_5 == "") {
			$message = "<strong>You must enter MODULE 5.</strong><br>";
			$error = 1;
		}
		elseif ($module_6 == "") {
			$message = "<strong>You must enter MODULE 6.</strong><br>";
			$error = 1;
		}
			
		if(empty($error)){ 
		    //START MYSQL PROCESSING
		    mysql_query("START TRANSACTION");
		    $query = "update teacher SET
				firstname = '$firstname',
				lastname = '$lastname',
				email = '$email',
				speciality = '$speciality',
	            module_1 = '$module_1',
	            module_2 = '$module_2',
	            module_3 = '$module_3',
	            module_4 = '$module_4',
	            module_5 = '$module_5',
	            module_6 = '$module_6',
				_flag    = 1
				where login_id = '$user_id'
				LIMIT 1";
				
            $result = mysql_query($query) or die("An update error in table users!"); 
			
        if ($result) {     
			mysql_query("COMMIT");
			$message = "Updating is  successful!!!<br>";
                    }else{
			mysql_query("ROLLBACK");
			$message = "<br>Updating can not be complete for some reason!!!<br>";
                    }
		}
		
	}
?>
<table id="structure">
	<tr>
		<td id="navigationTea">
		    <?php echo "Current Date: " . date("jS F Y"); ?><hr/>
            <a href="teacher.php"><strong>Back to Your Page</strong></a><hr/>
		    <a href="TeacherDashboard.php"><strong>Teacher Dashboard</strong></a><hr/>
		    <a href="logout.php"><strong>Logout</strong></a>
		</td>
		<td id="page">
			<h2>Insert or Update Form:</h2>
                        <?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>";} ?>
                        <form name="contactform" method="post" action="TeacherUpdate.php">
				<table width="50%">
				<tr>
                <td>First Name:</td>
				<td><input type="text" name="firstname"  value="<?php echo $firstname; ?>" ></td>
				</tr>
				<tr>
				<td>Last Name:</td>
				<td><input type="text" name="lastname"  value="<?php echo $lastname; ?>"> </td>
				</tr>
				<tr>
				<td>Email:</td>
				<td><input type="text" name="email"  value="<?php echo $email; ?>"></td>
				</tr>
				
				<tr>
				<td>Speciality:</td>
				<td><input type="text" name="speciality"  value="<?php echo $speciality; ?>"></td>
				</tr>
				
				<tr>
				<td>MODULE 1:</td>
				<td><input type="text" name="module_1"  value="<?php echo $module_1; ?>"></td>
				</tr>
				
				<tr>
				<td>MODULE 2:</td>
				<td><input type="text" name="module_2"  value="<?php echo $module_2; ?>"></td>
				</tr>
				
				<tr>
				<td>MODULE 3:</td>
				<td><input type="text" name="module_3"  value="<?php echo $module_3; ?>"></td>
				</tr>
				
				<tr>
				<td>MODULE 4:</td>
				<td><input type="text" name="module_4" value="<?php echo $module_4; ?>"></td>
				</tr>
				
				<tr>
				<td>MODULE 5:</td>
				<td><input type="text" name="module_5"  value="<?php echo $module_5; ?>"></td>
				</tr>
				
				<tr>
				<td>MODULE 6:</td>
				<td><input type="text" name="module_6"  value="<?php echo $module_6; ?>"></td>
				</tr>
				
				<tr>
				<td valign="top" align="right"></td>
				<td align=left><input type="submit" name="submit" value="Update"></td>
				</tr>
				</table>
                        </form>
		</td>
		
	</tr>
</table>
<?php include("includes/footer.php"); ?>