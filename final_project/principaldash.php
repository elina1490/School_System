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
            $query = "select * from infos where login_id=4 ";
		
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
			
			$dataArray=array();
			if ($result) {
			   while ($row = mysql_fetch_assoc($result)) {
                       while(list($var, $val) = each($row)) {
                            
							if(strpos($var, 'login_id') !== false)
							{}
							elseif(strpos($var, '_') !== false) 
							   $dataArray[$var]=$val;
							  
                       }}}

			//configure graph
			$graph=new PHPGraphLib(700,550);
			$graph->addData($dataArray);
			$graph->setTitle("NAACE ICT-MARK / EDUCATIONAL UNIT Level");
			$graph->setGradient("white", "purple");
			$graph->setBarOutlineColor("black");
			$graph->createGraph();
			
?>