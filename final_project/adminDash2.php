<?php
include("includes/header.php"); 
require 'connect.inc.php';
require 'core.inc.php';
require ("includes/functions.php"); 
include("phpgraphlib.php");

?>
<?php confirm_logged_in(); ?>

<table id="structure">
<tr>
		<td id="navigationAdm">
		    <?php echo "Current Date: " . date("jS F Y"); ?><hr/>
                    <a href="admin.php"><strong>Back to Your Page</strong></a><hr/>
					
					<a href="adminDash1.php"><strong>Assessed Teachers Dashboard</strong></a><hr/>				
				    <a href="adminDash2.php"><strong>Teacher Statistics</strong></a><hr/>
					
					<a href="adminDash3.php"><strong>Mean Teacher Statistics</strong></a><hr/>
			        <a href="adminDash4.php"><strong>Educational Unit Level Dashboard</strong></a><hr/>

		            <a href="logout.php"><strong>Logout</strong></a>
									
		</td>
		<td id="page">	           
	    <img src="graph2.php" />
		</td>
		</tr>
</table>
<?php include("includes/footer.php"); ?>