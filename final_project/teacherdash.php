<?php

    include("phpgraphlib.php");

	        session_start();
            //confirm_logged_in(); 
            //$user_id = $_SESSION['user_id'];
			//echo $user_id;
	
            error_reporting(E_ALL ^ E_DEPRECATED);
            $mysql_host = 'localhost';
			$mysql_user = 'root';
			$mysql_pass = '';
			$mysql_db   = 'school_system';

			if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass)|| !mysql_select_db($mysql_db)){

			die(mysql_error());
			
			}
			
			$user_id = $_SESSION['user_id'];
            $query = "select * from teacher where login_id='$user_id'";
		
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
			$i=1;
			//print_r(mysql_fetch_assoc($result));
			$dataArray=array();
			if ($result) {
			   while ($row = mysql_fetch_assoc($result)) {
                       //print "Row $rowcount<br />";
    
                       while(list($var, $val) = each($row)) {
                            //print "<B>$var</B>: $val<br />";
							if(strpos($var, 'login_id') !== false)
							{}
							elseif(strpos($var, 'mod') !== false) 
							   $dataArray[$var]=$val;
							  
                       }}}

			//configure graph
			$graph=new PHPGraphLib(550,350);
			$graph->addData($dataArray);
			$graph->setTitle("UNESCO ICT-CFT / EDUCATIONAL UNIT Level");
			$graph->setGradient("white","maroon");
			$graph->setBarOutlineColor("black");
			$graph->createGraph();
			
?>