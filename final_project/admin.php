<?php
include("includes/header.php"); 
require 'connect.inc.php';
require 'core.inc.php';
require ("includes/functions.php"); 
?>
<?php confirm_logged_in(); ?>

<?php
    $user_id = $_SESSION['user_id'];
	$query = "select firstname,
			 lastname,
			 email             
			 from infos where login_id = $user_id";
	$result = mysql_query($query) or die("Can not be complete your action!" . mysql_error());
	
?>
<table id="structure">
		           <tr>
					<td id="navigationAdm">
		           <?php echo "Current Date: " . date("jS F Y"); ?><hr/>
					<a href="adminDash1.php"><strong>Assessed Teachers Dashboard</strong></a><hr/>
				    <a href="adminDash2.php"><strong>Teacher Statistics</strong></a><hr/>
					<a href="adminDash3.php"><strong>Mean Teacher Statistics</strong></a><hr/>
			        <a href="adminDash4.php"><strong>Educational Unit Level Dashboard</strong></a><hr/>					
		            <a href="logout.php"><strong>Logout</strong></a>
										
		</td>
		<td id="page">
		    <h2>Admin Area</h2>
		    <p>Welcome to the admin area!!!</p>
		    <table class="view">
                        <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        </tr>
        <?php
                        while ($row = mysql_fetch_assoc($result)) {
	?>
                        <tr class="alt">
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        
                        </tr>
	<?php		
	    }
	?>	
                    </table>
                        
                </td>
	</tr>
</table>
<?php include("includes/footer.php"); ?>