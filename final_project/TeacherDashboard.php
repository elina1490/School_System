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
		<td id="navigationTea">
		    <?php echo "Current Date: " . date("jS F Y"); ?><hr/>
              <a href="teacher.php"><strong>Back to Your Page</strong></a><hr/>
			  <a href="TeacherUpdate.php"><strong>Insert/Update Teacher</strong></a><hr/>
		      <a href="logout.php"><strong>Logout</strong></a>
		</td>
		<td id="page">		   
	    <img src="teacherdash.php"/>
		</td>
		</tr>
</table>
<?php include("includes/footer.php"); ?>