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
			 from infos where login_id = '$user_id'";
	$result = mysql_query($query) or die("Can not be complete your action!" . mysql_error());
	
?>


<table id="structure">
	<tr>
		<td id="navigationPri">
		    <?php echo "Current Date: " . date("jS F Y"); ?><hr/>
                  
			<a href="PrincipalUpdate.php"><strong>Insert/Update Principal</strong></a><hr/>
			<a href="PrincipalDashboard.php"><strong>Principal Dashboard</strong></a><hr/>
		    <a href="logout.php"><strong>Logout</strong></a>
		</td>
		<td id="page">
		    <h2>Principal Area</h2>
		    <p>Welcome to the principal area !!!</p>
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
        </td>
	</tr>
 </table>
          <?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>";} ?>
		<p style="color:#8D0D19"><strong>Detailed NAACE ICT MARK for further information <a href="http://www.naace.co.uk/get.html?_Action=GetFile&_Key=Data27712&_Id=1403&_Wizard=0&_DontCache=1347362229"> here.</a>
		</strong></p>      
</table>
<?php include("includes/footer.php"); ?>