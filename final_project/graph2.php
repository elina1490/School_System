<?php

            error_reporting(E_ALL ^ E_DEPRECATED);
            $mysql_host = 'localhost';
			$mysql_user = 'root';
			$mysql_pass = '';
			$mysql_db   = 'school_system';

			if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass)|| !mysql_select_db($mysql_db)){
			   die(mysql_error());
			}
			
            $query = "select module_1,module_2,module_3,module_4,module_5,module_6 from teacher where login_id=1";
					 
		    $query2 = "select module_1,module_2, module_3,module_4,module_5,module_6  from teacher where login_id=2";
					 
			$query3 = "select module_1,module_2,module_3,module_4,module_5,module_6  from teacher where login_id=3";
		
			$result = mysql_query($query) or die('Query failed: ' . mysql_error());
			$result2 = mysql_query($query2) or die('Query failed: ' . mysql_error());
			$result3 = mysql_query($query3) or die('Query failed: ' . mysql_error());
			
			$i=1;
			//print_r(mysql_fetch_assoc($result));
			$dataArray=array();
			$dataArray2=array();
			$dataArray3=array();
			
			if ($result) {
			   while ( ($row = mysql_fetch_assoc($result)) ) {
                       //print "Row $rowcount<br />";
    
                       while( list($var, $val) = each($row)) {
                               //print "<B>$var</B>: $val<br />";
							   if(strpos($var, '_') !== false) 
							   $dataArray[$var]=$val;
                     }}}
					 
			if ($result2) {
			   while ( ($row2 = mysql_fetch_assoc($result2)) ) {
                       //print "Row $rowcount<br />";
			     
				       while( list($var2, $val2) = each($row2))
					   {
							if(strpos($var2, '_') !== false) 
								   $dataArray2[$var2]=$val2;
					 }}}
			 
			 if ($result3) {
			   while ( ($row3 = mysql_fetch_assoc($result3)) ) {
                       //print "Row $rowcount<br />";
			     
				       while( list($var3, $val3) = each($row3))
					   {
							if(strpos($var3, '_') !== false) 
								   $dataArray3[$var3]=$val3;
					   }}}
			
			include('phpgraphlib.php');
			$graph=new PHPGraphLib(600,500);
			
			$graph->addData($dataArray, $dataArray2, $dataArray3);
			$graph->setTitle('Teachers Technological Competency Level');
			$graph->setTitleLocation('left');
			$graph->setLegend(true);
			$graph->setLegendTitle('teacher1', 'teacher2', 'teacher3');
			$graph->setGradient('white', 'teal');
			$graph->createGraph();

	
?>
