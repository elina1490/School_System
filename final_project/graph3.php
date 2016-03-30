<?php

            error_reporting(E_ALL ^ E_DEPRECATED);
            $mysql_host = 'localhost';
			$mysql_user = 'root';
			$mysql_pass = '';
			$mysql_db   = 'school_system';

			if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass)|| !mysql_select_db($mysql_db)){
			   die(mysql_error());
			}			
			//$user_id = $_SESSION['user_id'];
            $query  = "select  module_1, module_2, module_3, module_4, module_5, module_6  from teacher where login_id=1";
		    $query2 = "select  module_1, module_2, module_3, module_4, module_5, module_6  from teacher where login_id=2";
			$query3 = "select  module_1, module_2, module_3, module_4, module_5, module_6  from teacher where login_id=3";
		
			$result  = mysql_query($query)  or die('Query failed: ' . mysql_error());
			$result2 = mysql_query($query2) or die('Query failed: ' . mysql_error());
			$result3 = mysql_query($query3) or die('Query failed: ' . mysql_error());
			$i=1;
			
			//print_r(mysql_fetch_assoc($result));
			$dataArray=array();
			$dataArray2=array();
			$dataArray3=array();
			
			if ($result) {
			   while ( ($row = mysql_fetch_assoc($result)) ) {
    
                       while( list($var, $val) = each($row)) {
                              
							  if(strpos($var, '_') !== false) 
							   $dataArray[$var]=$val;
                     }}}
					 
			if ($result2) {
			   while ( ($row2 = mysql_fetch_assoc($result2)) ) {
				       while( list($var2, $val2) = each($row2))
					   {
							if(strpos($var2, '_') !== false) 
								   $dataArray2[$var2]=$val2;
					   }}}
			 
			 if ($result3) {
			   while ( $row3 = mysql_fetch_assoc($result3)) {
				       while( list($var3, $val3) = each($row3)) 
					   {
							if(strpos($var3, '_') !== false) 
								   $dataArray3[$var3]= ($val3+$dataArray2[$var3]+$dataArray[$var3])/3;
								   }}}
			
			include('phpgraphlib.php');
			$graph=new PHPGraphLib(600,450);
			$graph->addData($dataArray3);
			$graph->setTitle('MEAN Teachers Technological Level');
			$graph->setTitleLocation('left');
			$graph->setLegend(true);
			$graph->setLegendTitle('Mean value');
			$graph->setGradient('yellow', 'maroon');
			$graph->createGraph();
?>
