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
	
	$_1a1 = ""; $_1a2 = "";
	$_1b1 = ""; $_1b2 = ""; $_1b3 = ""; $_1b4 = ""; $_1b5 = "";	$_1b6 = "";
	$_1c1 = "";	$_1c2 = "";	$_1c3 = "";	$_1c4 = "";
	$_2a1 = "";	$_2a2 = "";	$_2a3 = ""; $_2a4 = ""; $_2a5 = ""; $_2a6 = ""; $_2a7 = ""; 
	$_2b1 = ""; $_2b2 = ""; $_2b3 = ""; $_2b4 = "";
	$_3a1 = ""; $_3a2 = ""; $_3a3 = ""; $_3a4 = ""; $_3a5 = "";
	$_3b1 = ""; $_3b2 = ""; $_3b3 = ""; $_3b4 = ""; $_3b5 = ""; $_3b6 = ""; $_3b7 = ""; $_3b8 = ""; $_3b9 = "";
	$_4a1 = ""; $_4a2 = ""; $_4a3 = "";
 	$_5a1 = ""; $_5a2 = ""; $_5a3 = ""; $_5a4 = "";
	$_6a1 = ""; $_6a2 = ""; $_6a3 = ""; $_6a4 = ""; $_6a5 = ""; $_6a6 = "";
	$_6b1 = ""; $_6b2 = "";  $_6b3 = "";  $_6b4 = "";
	
	?>
<?php
        $user_id = $_SESSION['user_id'];
	$query = "select firstname,
			 lastname,
			 email,
			 _1a1, _1a2 , _1b1 ,  _1b2 ,  _1b3 ,  _1b4 ,  _1b5 , 	_1b6 , 
				_1c1 , 	_1c2 , 	_1c3 , 	_1c4 , 
				_2a1 , 	_2a2 , 	_2a3 ,  _2a4 ,  _2a5 ,  _2a6 ,  _2a7 ,  
				_2b1 ,  _2b2 ,  _2b3 ,  _2b4 , 
				_3a1 ,  _3a2 ,  _3a3 ,  _3a4 ,  _3a5 , 
				_3b1 ,  _3b2 ,  _3b3 ,  _3b4 ,  _3b5 ,  _3b6 ,  _3b7 ,  _3b8 ,  _3b9 , 
				_4a1 ,  _4a2 ,  _4a3 , 
				_5a1 ,  _5a2 ,  _5a3 ,  _5a4 , 
				_6a1 ,  _6a2 ,  _6a3 ,  _6a4 ,  _6a5 ,  _6a6 , 
				_6b1 ,  _6b2 ,   _6b3 ,   _6b4 
			 from infos where login_id = '$user_id'";
	$result = mysql_query($query) or die("Can not be complete your action!" . mysql_error());
        $found_user = mysql_fetch_array($result);
        $firstname = $found_user['firstname'];
        $lastname = $found_user['lastname'];
        $email = $found_user['email'];      
		$_1a1 = $found_user['_1a1']; 
		$_1a2 = $found_user['_1a2'];
		$_1b1 = $found_user['_1b1']; $_1b2 = $found_user['_1b2']; $_1b3 = $found_user['_1b3']; $_1b4 = $found_user['_1b4']; $_1b5 = $found_user['_1b5'];	$_1b6 = $found_user['_1b6'];
	    $_1c1 = $found_user['_1c1']; $_1c2 = $found_user['_1c2']; $_1c3 = $found_user['_1c3']; $_1c4 = $found_user['_1c4'];
		$_2a1 = $found_user['_2a1']; $_2a2 = $found_user['_2a2']; $_2a3 = $found_user['_2a3']; $_2a4 = $found_user['_2a4']; $_2a5 = $found_user['_2a5']; $_2a6 = $found_user['_2a6']; $_2a7 = $found_user['_2a7']; 
		$_2b1 = $found_user['_2b1']; $_2b2 = $found_user['_2b2']; $_2b3 = $found_user['_2b3']; $_2b4 = $found_user['_2b4'];
		$_3a1 = $found_user['_3a1']; $_3a2 = $found_user['_3a2']; $_3a3 = $found_user['_3a3']; $_3a4 = $found_user['_3a4']; $_3a5 = $found_user['_3a5'];
		$_3b1 = $found_user['_3b1']; $_3b2 = $found_user['_3b2']; $_3b3 = $found_user['_3b3']; $_3b4 = $found_user['_3b4']; $_3b5 = $found_user['_3b5']; $_3b6 = $found_user['_3b6']; $_3b7 = $found_user['_3b7']; $_3b8 = $found_user['_3b8']; $_3b9 = $found_user['_3b9'];
		$_4a1 = $found_user['_4a1']; $_4a2 = $found_user['_4a2']; $_4a3 = $found_user['_4a3'];
		$_5a1 = $found_user['_5a1']; $_5a2 = $found_user['_5a2'];; $_5a3 = $found_user['_5a3']; $_5a4 = $found_user['_5a4'];
		$_6a1 = $found_user['_6a1']; $_6a2 = $found_user['_6a2']; $_6a3 = $found_user['_6a3']; $_6a4 = $found_user['_6a4']; $_6a5 = $found_user['_6a5']; $_6a6 = $found_user['_6a6'];
		$_6b1 = $found_user['_6b1']; $_6b2 = $found_user['_6b2'];  $_6b3 = $found_user['_6b3'];  $_6b4 = $found_user['_6b4'];		
?>
<?php
	if ( isset($_POST['submit']) && $_POST['submit'] == "Update") {
		//get new values to insert
		$user_id = $_SESSION['user_id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];	
		$_1a1 = $_POST['_1a1']; 
        $_1a2 = $_POST['_1a2'];
		$_1b1 = $_POST['_1b1']; $_1b2 = $_POST['_1b2']; $_1b3 = $_POST['_1b3']; $_1b4 = $_POST['_1b4']; $_1b5 = $_POST['_1b5'];	$_1b6 = $_POST['_1b6'];
	    $_1c1 = $_POST['_1c1']; $_1c2 = $_POST['_1c2']; $_1c3 = $_POST['_1c3']; $_1c4 = $_POST['_1c4'];
		$_2a1 = $_POST['_2a1']; $_2a2 = $_POST['_2a2']; $_2a3 = $_POST['_2a3']; $_2a4 = $_POST['_2a4']; $_2a5 = $_POST['_2a5']; $_2a6 = $_POST['_2a6']; $_2a7 = $_POST['_2a7']; 
		$_2b1 = $_POST['_2b1']; $_2b2 = $_POST['_2b2']; $_2b3 = $_POST['_2b3']; $_2b4 = $_POST['_2b4'];
		$_3a1 = $_POST['_3a1']; $_3a2 = $_POST['_3a2']; $_3a3 = $_POST['_3a3']; $_3a4 = $_POST['_3a4']; $_3a5 = $_POST['_3a5'];
		$_3b1 = $_POST['_3b1']; $_3b2 = $_POST['_3b2']; $_3b3 = $_POST['_3b3']; $_3b4 = $_POST['_3b4']; $_3b5 = $_POST['_3b5']; $_3b6 = $_POST['_3b6']; $_3b7 = $_POST['_3b7']; $_3b8 = $_POST['_3b8']; $_3b9 = $_POST['_3b9'];
		$_4a1 = $_POST['_4a1']; $_4a2 = $_POST['_4a2']; $_4a3 = $_POST['_4a3'];
		$_5a1 = $_POST['_5a1']; $_5a2 = $_POST['_5a2'];; $_5a3 = $_POST['_5a3']; $_5a4 = $_POST['_5a4'];
		$_6a1 = $_POST['_6a1']; $_6a2 = $_POST['_6a2']; $_6a3 = $_POST['_6a3']; $_6a4 = $_POST['_6a4']; $_6a5 = $_POST['_6a5']; $_6a6 = $_POST['_6a6'];
		$_6b1 = $_POST['_6b1']; $_6b2 = $_POST['_6b2'];  $_6b3 = $_POST['_6b3'];  $_6b4 = $_POST['_6b4'];
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
		// check 1a-1
		elseif ($_1a1 == "") {
			$message = "<strong>You must enter 1a-1.</strong><br>";
			$error = 1;
		}
			
		if(empty($error)){ 
		    //START MYSQL PROCESSING
		    mysql_query("START TRANSACTION");
		    $query = "update infos set
				firstname = '$firstname',
				lastname = '$lastname',
				email = '$email',				
				_1a1 = '$_1a1', _1a2 = '$_1a2', _1b1 = '$_1b1' , _1b2 = '$_1b2' , _1b3 = '$_1b3', _1b4 = '$_1b4' , _1b5 = '$_1b5' , _1b6 = '$_1b6' , 
	                  _1c1 =  '$_1c1' , _1c2 = '$_1c2' , 	_1c3 = '$_1c3' , 	_1c4 = '$_1c4' , _2a1 = '$_2a1' , _2a2 = '$_2a2' , _2a3 = '$_2a3' , _2a4 ='$_2a4' , _2a5 ='$_2a5' , _2a6 = '$_2a6' , _2a7 = '$_2a7' ,  
	                   _2b1 = '$_2b1' , _2b2 = '$_2b2' ,  _2b3 = '$_2b3' , _2b4 = '$_2b4' , 
                     	_3a1 = '$_3a1' , _3a2 = '$_3a2' , _3a3 = '$_3a3' , _3a4 = '$_3a4' , _3a5 = '$_3a5' , 
	                   _3b1 = '$_3b1' ,  _3b2 = '$_3b2' , _3b3 = '$_3b3' , _3b4 = '$_3b4' , _3b5 = '$_3b5' , _3b6 = '$_3b6' , _3b7 ='$_3b7' , _3b8 = '$_3b8' , _3b9 = '$_3b9' , 
	                   _4a1 = '$_4a1' , _4a2 = '$_4a2' ,  _4a3 = '$_4a3' , 
 	                   _5a1 = '$_5a1' , _5a2 = '$_5a2' ,  _5a3 = '$_5a3' , _5a4 = '$_5a4' , 
	                   _6a1 = '$_6a1' , _6a2 = '$_6a2' ,  _6a3 = '$_6a3' , _6a4 = '$_6a4' , _6a5= '$_6a5' , _6a6 = '$_6a6' , 
	                   _6b1 = '$_6b1' , _6b2 = '$_6b2' , _6b3 ='$_6b3',  _6b4 = '$_6b4'  
				where login_id = '$user_id'
				LIMIT 1";
				
              $result = mysql_query($query) or die("An update error in table users!"); 
                    if ($result) {     
			mysql_query("COMMIT");
			$message = "Updating is succesful!!!<br>";
                    }else{
			mysql_query("ROLLBACK");
			$message = "<br>Insertion can not be complete for some reason!!!<br>";
                    }
		}
	}
?>
<table id="structure">
	<tr>
		<td id="navigationPri">
		    <?php echo "Current Date: " . date("jS F Y"); ?><hr/>
            <a href="principal.php"><strong>Back to Your Page</strong></a><hr/>
			<a href="PrincipalDashboard.php"><strong>Principal Dashboard</strong></a><hr/>
		    <a href="logout.php"><strong>Logout</strong></a>
		</td>
		<td id="page">
			<h2>Insert or Update Form:</h2>
                        <?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>";} ?>
                        <form name="contactform" method="post" action="principalUpdate.php">
						
				<table width="50%">
                <td>First Name:</td>
				<td><input type="text" name="firstname" maxlength="40" size="30" value="<?php echo $firstname; ?>" </td>
				</tr>
				<tr>
				<td>Last Name:</td>
				<td><input type="text" name="lastname" maxlength="40" size="30" value="<?php echo $lastname; ?>" </td>
				</tr>
				<tr>
				<td>Email:</td>
				<td><input type="text" name="email" maxlength="30" size="30" value="<?php echo $email; ?>"</td>
				</tr>
				
				<tr>
				<td>1a-1 The vision:</td>
				<td><?php echo "Selected Value : " . $_1a1 . " "; ?> <select name="_1a1">
                    <option value="1" <?php echo ($_1a1 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_1a1 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_1a1 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_1a1 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>1a-2 Reviewing the vision:</td>
				<td><?php echo "Selected Value : " . $_1a2 . " "; ?> <select name="_1a2">
                    <option value="1" <?php echo ($_1a2 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_1a2 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_1a2 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_1a2 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>1b-1 Strategic leadership across the whole school:</td>
				<td><?php echo "Selected Value : " . $_1b1 . " "; ?> <select name="_1b1">
                    <option value="1" <?php echo ($_1b1 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_1b1 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_1b1 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_1b1 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>1b-2 The quality of the strategy:</td>
				<td><?php echo "Selected Value : " . $_1b2 . " "; ?> <select name="_1b2">
                    <option value="1" <?php echo ($_1b2 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_1b2 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_1b2 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_1b2 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>1b-3 Budgetary effectiveness:</td>
				<td><?php echo "Selected Value : " . $_1b3 . " "; ?> <select name="_1b3">
                    <option value="1" <?php echo ($_1b3 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_1b3 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_1b3 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_1b3 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>1b-4 Environmental impact:</td>
				<td><?php echo "Selected Value : " . $_1b4 . " "; ?> <select name="_1b4">
                    <option value="1" <?php echo ($_1b4 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_1b4 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_1b4 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_1b4 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>1b-5 E-safeguarding:</td>
				<td><?php echo "Selected Value : " . $_1b5 . " "; ?> <select name="_1b5">
                    <option value="1" <?php echo ($_1b5 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_1b5 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_1b5 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_1b5 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>1b-6 Evaluating the effectiveness of the strategy:</td>
				<td><?php echo "Selected Value : " . $_1b6 . " "; ?> <select name="_1b6">
                    <option value="1" <?php echo ($_1b6 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_1b6 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_1b6 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_1b6 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>1c-1 Information management strategy:</td>
				<td><?php echo "Selected Value : " . $_1c1 . " "; ?> <select name="_1c1">
                    <option value="1" <?php echo ($_1c1 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_1c1 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_1c1 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_1c1 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>1c-2 Supporting assessment, recording and reporting:</td>
				<td><?php echo "Selected Value : " . $_1c2 . " "; ?> <select name="_1c2">
                    <option value="1" <?php echo ($_1c2 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_1c2 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_1c2 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_1c2 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>1c-3 Communication strategy:</td>
				<td><?php echo "Selected Value : " . $_1c3 . " "; ?> <select name="_1c3">
                    <option value="1" <?php echo ($_1c3 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_1c3 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_1c3 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_1c3 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>1c-4 Legislative requirements:</td>
				<td><?php echo "Selected Value : " . $_1c4 . " "; ?> <select name="_1c4">
                    <option value="1" <?php echo ($_1c4 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_1c4 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_1c4 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_1c4 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>2a-1 Planning for the development of pupils’ digital capability:</td>
				<td><?php echo "Selected Value : " . $_2a1 . " "; ?> <select name="_2a1">
                    <option value="1" <?php echo ($_2a1 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_2a1 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_2a1 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_2a1 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>2a-2 Planning to support learning and teaching:</td>
				<td><?php echo "Selected Value : " . $_2a2 . " "; ?> <select name="_2a2">
                    <option value="1" <?php echo ($_2a2 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_2a2 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_2a2 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_2a2 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>2a-3 Matching capability to opportunities:</td>
				<td><?php echo "Selected Value : " . $_2a3 . " "; ?> <select name="_2a3">
                    <option value="1" <?php echo ($_2a3 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_2a3 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_2a3 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_2a3 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>2a-4 Planning for continuity within and between classes, phases and schools:</td>
				<td><?php echo "Selected Value : " . $_2a4 . " "; ?> <select name="_2a4">
                    <option value="1" <?php echo ($_2a4 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_2a4 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_2a4 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_2a4 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>2a-5 Planning for learning beyond the school:</td>
				<td><?php echo "Selected Value : " . $_2a5 . " "; ?> <select name="_2a5">
                    <option value="1" <?php echo ($_2a5 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_2a5 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_2a5 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_2a5 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>2a-6 Planning to promote inclusion:</td>
				<td><?php echo "Selected Value : " . $_2a6 . " "; ?> <select name="_2a6">
                    <option value="1" <?php echo ($_2a6 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_2a6 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_2a6 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_2a6 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>2a-7 Planning for e-safety:</td>
				<td><?php echo "Selected Value : " . $_2a7 . " "; ?> <select name="_2a7">
                    <option value="1" <?php echo ($_2a7 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_2a7 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_2a7 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_2a7 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>2b-1 Leadership for the development of digital capability:</td>
				<td><?php echo "Selected Value : " . $_2b1 . " "; ?> <select name="_2b1">
                    <option value="1" <?php echo ($_2b1 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_2b1 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_2b1 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_2b1 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>2b-2 Leadership of learning and teaching:</td>
				<td><?php echo "Selected Value : " . $_2b2 . " "; ?> <select name="_2b2">
                    <option value="1" <?php echo ($_2b2 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_2b2 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_2b2 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_2b2 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>2b-3 Evaluating learning and teaching:</td>
				<td><?php echo "Selected Value : " . $_2b3 . " "; ?> <select name="_2b3">
                    <option value="1" <?php echo ($_2b3 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_2b3 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_2b3 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_2b3 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>2b-4 Review of the curriculum:</td>
				<td><?php echo "Selected Value : " . $_2b4 . " "; ?> <select name="_2b4">
                    <option value="1" <?php echo ($_2b4 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_2b4 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_2b4 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_2b4 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>3a-1 Breadth of development for digital capability:</td>
				<td><?php echo "Selected Value : " . $_3a1 . " "; ?> <select name="_3a1">
                    <option value="1" <?php echo ($_3a1 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_3a1 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_3a1 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_3a1 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>3a-2 Extent of ICT use for learning and teaching:</td>
				<td><?php echo "Selected Value : " . $_3a2 . " "; ?> <select name="_3a2">
                    <option value="1" <?php echo ($_3a2 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_3a2 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_3a2 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_3a2 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>3a-3 Quality of use of ICT for learning and teaching:</td>
				<td><?php echo "Selected Value : " . $_3a3 . " "; ?> <select name="_3a3">
                    <option value="1" <?php echo ($_3a3 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_3a3 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_3a3 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_3a3 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>3a-4 Learning beyond the school:</td>
				<td><?php echo "Selected Value : " . $_3a4 . " "; ?> <select name="_3a4">
                    <option value="1" <?php echo ($_3a4 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_3a4 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_3a4 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_3a4 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>3a-5 Ongoing critical evaluation:</td>
				<td><?php echo "Selected Value : " . $_3a5 . " "; ?> <select name="_3a5">
                    <option value="1" <?php echo ($_3a5 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_3a5 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_3a5 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_3a5 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>3b-1 Pupils’ progress in digital capability:</td>
				<td><?php echo "Selected Value : " . $_3b1 . " "; ?> <select name="_3b1">
                    <option value="1" <?php echo ($_3b1 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_3b1 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_3b1 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_3b1 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>3b-2 Pupils’ progress more widely:</td>
				<td><?php echo "Selected Value : " . $_3b2 . " "; ?> <select name="_3b2">
                    <option value="1" <?php echo ($_3b2 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_3b2 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_3b2 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_3b2 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>3b-3 Pupils’ understanding about their learning:</td>
				<td><?php echo "Selected Value : " . $_3b3 . " "; ?> <select name="_3b3">
                    <option value="1" <?php echo ($_3b3 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_3b3 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_3b3 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_3b3 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>3b-4 Pupils’ confidence and independence:</td>
				<td><?php echo "Selected Value : " . $_3b4 . " "; ?> <select name="_3b4">
                    <option value="1" <?php echo ($_3b4 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_3b4 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_3b4 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_3b4 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>3b-5 Effective and safe use of digital resources:</td>
				<td><?php echo "Selected Value : " . $_3b5 . " "; ?> <select name="_3b5">
                    <option value="1" <?php echo ($_3b5 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_3b5 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_3b5 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_3b5 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>3b-6 Creativity and learning skills:</td>
				<td><?php echo "Selected Value : " . $_3b6 . " "; ?> <select name="_3b6">
                    <option value="1" <?php echo ($_3b6 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_3b6 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_3b6 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_3b6 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>3b-7 Attitudes to learning:</td>
				<td><?php echo "Selected Value : " . $_3b7 . " "; ?> <select name="_3b7">
                   <option value="1" <?php echo ($_3b7 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_3b7 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_3b7 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_3b7 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>3b-8 Behaviourg:</td>
				<td><?php echo "Selected Value : " . $_3b8 . " "; ?> <select name="_3b8">
                    <option value="1" <?php echo ($_3b8 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_3b8 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_3b8 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_3b8 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>3b-9 Contribution of pupils:</td>
				<td><?php echo "Selected Value : " . $_3b9 . " "; ?> <select name="_3b9">
                    <option value="1" <?php echo ($_3b9 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_3b9 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_3b9 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_3b9 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>4a-1 Assessment, recording and reporting of digital capability:</td>
				<td><?php echo "Selected Value : " . $_4a1 . " "; ?> <select name="_4a1">
                    <option value="1" <?php echo ($_4a1 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_4a1 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_4a1 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_4a1 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>4a-2 Dialogue:</td>
				<td><?php echo "Selected Value : " . $_4a2 . " "; ?> <select name="_4a2">
                    <option value="1" <?php echo ($_4a2 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_4a2 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_4a2 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_4a2 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>4a-3 Self and peer assessment:</td>
				<td><?php echo "Selected Value : " . $_4a3 . " "; ?> <select name="_4a3">
                    <option value="1" <?php echo ($_4a3 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_4a3 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_4a3 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_4a3 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>5a-1 Identifying needs:</td>
				<td><?php echo "Selected Value : " . $_5a1 . " "; ?> <select name="_5a1">
                    <option value="1" <?php echo ($_5a1 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_5a1 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_5a1 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_5a1 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>5a-2 Meeting school and individual needs:</td>
				<td><?php echo "Selected Value : " . $_5a2 . " "; ?> <select name="_5a2">
                    <option value="1" <?php echo ($_5a2 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_5a2 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_5a2 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_5a2 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>5a-3 Developing and sharing practices:</td>
				<td><?php echo "Selected Value : " . $_5a3 . " "; ?> <select name="_5a3">
                    <option value="1" <?php echo ($_5a3 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_5a3 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_5a3 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_5a3 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>5a-4 Developing good e-safety practices:</td>
				<td><?php echo "Selected Value : " . $_5a4 . " "; ?> <select name="_5a4">
                    <option value="1" <?php echo ($_5a4 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_5a4 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_5a4 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_5a4 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>6a-1 Physical environments:</td>
				<td><?php echo "Selected Value : " . $_6a1 . " "; ?> <select name="_6a1">
                    <option value="1" <?php echo ($_6a1 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_6a1 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_6a1 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_6a1 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>6a-2 Sufficiency, suitability and availability of learning technologies:</td>
				<td><?php echo "Selected Value : " . $_6a2 . " "; ?> <select name="_6a2">
                    <option value="1" <?php echo ($_6a2 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_6a2 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_6a2 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_6a2 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
					<tr>
				<td>6a-3 Internal and online connectivity:</td>
				<td><?php echo "Selected Value : " . $_6a3 . " "; ?> <select name="_6a3">
                   <option value="1" <?php echo ($_6a3 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_6a3 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_6a3 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_6a3 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>6a-4 Digital learning resources:</td>
				<td><?php echo "Selected Value : " . $_6a4 . " "; ?> <select name="_6a4">
                    <option value="1" <?php echo ($_6a4 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_6a4 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_6a4 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_6a4 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>6a-5 Environments for online learning:</td>
				<td><?php echo "Selected Value : " . $_6a5 . " "; ?> <select name="_6a5">
                    <option value="1" <?php echo ($_6a5 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_6a5 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_6a5 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_6a5 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
					<tr>
				<td>6a-6 Management information systems:</td>
				<td><?php echo "Selected Value : " . $_6a6 . " "; ?> <select name="_6a6">
                    <option value="1" <?php echo ($_6a6 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_6a6 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_6a6 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_6a6 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>6b-1 Procurement:</td>
				<td><?php echo "Selected Value : " . $_6b1 . " "; ?> <select name="_6b1">
                    <option value="1" <?php echo ($_6b1 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_6b1 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_6b1 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_6b1 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>6b-2 Technical support:</td>
				<td><?php echo "Selected Value : " . $_6b2 . " "; ?> <select name="_6b2">
                    <option value="1" <?php echo ($_6b2 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_6b2 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_6b2 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_6b2 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>6b-3 Information security and safeguarding:</td>
				<td><?php echo "Selected Value : " . $_6b3 . " "; ?> <select name="_6b3">
                    <option value="1" <?php echo ($_6b3 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_6b3 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_6b3 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_6b3 == "4")?"selected":"" ?>>4</option>
                    </select></td>
				</tr>
				<tr>
				<td>6b-4 Evaluation :</td>
				<td><?php echo "Selected Value : " . $_6b4 . " "; ?> <select name="_6b4">
                    <<option value="1" <?php echo ($_6b4 == "1")?"selected":"" ?>>1</option>
					<option value="2" <?php echo ($_6b4 == "2")?"selected":"" ?>>2</option>
					<option value="3" <?php echo ($_6b4 == "3")?"selected":"" ?>>3</option>
					<option value="4" <?php echo ($_6b4 == "4")?"selected":"" ?>>4</option>
                    </select></td>
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
<?php //include("includes/footer.php"); ?>