<?php
require 'connect.inc.php';
require 'core.inc.php';
require ("includes/functions.php"); 
?>
<?php confirm_logged_in(); ?>
<?php include("includes/header.php");?> 
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
	$module_6 = "";	
?>
<?php   

        $user_id = $_SESSION['user_id'];
        $query = "SELECT firstname,
                  lastname, email,
				  speciality,
				  module_1,module_2,module_3,module_4,module_5,module_6
				  from teacher 
				  where login_id = '$user_id'";
	$result = mysql_query($query) or die("Can not be complete your action!" . mysql_error());
?>

<table id="structure">
	<tr>
		<td id="navigationTea">
			<?php echo "Current Date: " . date("jS F Y"); ?><hr/>
			<a href="TeacherUpdate.php"><strong>Insert/Update Form</strong></a><hr/>
			<a href="TeacherDashboard.php"><strong>Teacher Dashboard</strong></a><hr/>
			<a href="logout.php"><strong>Logout</strong></a>
		</td>
		<td id="page">
			<h2>Teacher Area</h2>
			<p>Welcome to the teacher area!!!</p>
		    <table class="view">
                        <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Speciality</th>						
                        </tr>
        <?php
                        while ($row = mysql_fetch_assoc($result)) {
	?>
                        <tr class="alt">
						
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['speciality']; ?></td>
                        </tr>
						
	<?php		
	    }
	?>	
	     </td>			
	</tr>              
 </table>
 <?php   

        
	$query_run = mysql_query($query) or die("Can not be complete your action!" . mysql_error());
?>
 
 <table id="structure">
	<tr>
		<td>
		    <h2>Teacher Technology Competency </h2>
			
		    <table class="view">
                        <tr>                      			  
						<th>MODULE 1<br><em>UNDERSTANDING ICT IN EDUCATION</em></th>
						<th>MODULE 2<br><em>CURRICULUM AND ASSESSMENT</em></th>
						<th>MODULE 3<br><em>PEDAGOGY</em></th>
						<th>MODULE 4<br><em>ICT</em></th>
						<th>MODULE 5<br><em>ORGANIZATION AND ADMINISTRATION</em></th>
						<th>MODULE 6<br><em>TEACHER PROFESSIONAL LEARNING</em></th>					
                        </tr>
        
                        <tr class="alt">
                        <td>Teacher is aware of policies and be is to articulate in consciously skilled ways how his/her classroom practices correspond to and support policy.</td>
                        <td>Teacher has an excellent knowledge of the curriculum standards for their subject, as well as knowledge of standard assessment strategies. In addition, teachers is able to integrate the use of technology into the curriculum.</td>
                        <td>Teacher knows where, with whom, when (as well as when not) and how to use ICT for classroom activities and presentations.</td>
                        <td>Teacher knows basic hardware and software operations, as well as productivity applications software, a web browser, communications software, presentation software, and management applications.</td>
                        <td>Teacher is able to use technology with the whole class, small groups, and individual activities and ensure equitable access is provided to all students.</td>
                        <td>Teacher has the technological skill and knowledge of web resources necessary to use technology to acquire additional subject matter and pedagogical knowledge in support of his/her own professional learning.</td>						
                        </tr>
	   </td>			
	</tr>
 
  </table>
  <table id="structure">
	<tr>
		<td>
		    <h2>Profil of Teacher Technology Competency </h2>
			
		    <table class="view" >
                        <tr>                      			  
						<th>MODULE 1<br><em>UNDERSTANDING ICT IN EDUCATION</em></th>
						<th>MODULE 2<br><em>CURRICULUM AND ASSESSMENT</em></th>
						<th>MODULE 3<br><em>PEDAGOGY</em></th>
						<th>MODULE 4 <em>  ICT  </em></th>
						<th>MODULE 5<br><em>ORGANIZATION AND ADMINISTRATION</em></th>
						<th>MODULE 6<br><em>TEACHER PROFESSIONAL LEARNING</em></th>					
                        </tr>
			
        <?php
                        while ($row = mysql_fetch_assoc($query_run)) {
	?>
                        <tr class="alt">
                        <td><?php echo $row['module_1']; ?></td>
                        <td><?php echo $row['module_2']; ?></td>
                        <td><?php echo $row['module_3']; ?></td>
                        <td><?php echo $row['module_4']; ?></td>
                        <td><?php echo $row['module_5']; ?></td>
                        <td><?php echo $row['module_6']; ?></td>						
                        </tr>
		</td>
	</tr>
	<?php		
	    }
	?>	
                   
 </table>
	<?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>";} ?>
		<p style="color:red;"> <strong>LEVELS : Basic( Very Basic Knowledge)-1, Intermediate(Basic Knowledge)-2, Advanced(Good Knowledge)-3 and Expert(Perfect Knowledge)-4</strong>
		<br><p style="color:#8D0D19"><strong>Detailed UNESCO ICT CFT for further information  <a href="http://unesdoc.unesco.org/images/0021/002134/213475E.pdf">here.</a>
		</strong></p>
</table>
<?php include("includes/footer.php"); ?>
