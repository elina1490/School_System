<?php

    include("phpgraphlib.php");

            error_reporting(E_ALL ^ E_DEPRECATED);
            $mysql_host = 'localhost';
			$mysql_user = 'root';
			$mysql_pass = '';
			$mysql_db   = 'school_system';

			if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass)|| !mysql_select_db($mysql_db)){
			   die(mysql_error());
			}			
			//$user_id = $_SESSION['user_id'];
            $query = "select _flag from teacher where _flag=1";
		
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
			$num_rows = mysql_num_rows($result);
			//print_r(mysql_fetch_assoc($result));
			$dataArray=array();
			$dataArray['#OfTeachers']=$num_rows;


			//configure graph
			$graph=new PHPGraphLib(400,580);
			$graph->addData($dataArray);
			$graph->setTitle("UNESCO ICT-CFT/ Assessed Teachers");
			$graph->setGradient("green","teal");
			$graph->setBarOutlineColor("black");
			$graph->createGraph();
			
?>
