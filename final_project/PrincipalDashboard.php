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
		<td id="navigationPri">
		    <?php echo "Current Date: " . date("jS F Y"); ?><hr/>
                    <a href="principal.php"><strong>Back to Your Page</strong></a><hr/>
					<a href="PrincipalUpdate.php"><strong>Insert/Update Principal</strong></a><hr/>
	                <a href="logout.php"><strong>Logout</strong></a>
		</td>
		<td id="page">       
	    <img src="principaldash.php" />
		</td>
		</tr>
</table>
<?php include("includes/footer.php"); ?>