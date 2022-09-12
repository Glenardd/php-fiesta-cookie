<?php
	echo "<div id=\"header\"><h1>TEAM SINNOH</h1></div>";

	$Sinnoh = array(
		array("id","species","type1","type2","ability","hp","atk","def"),

		array(1,"Balbasaur","Grass","Poison","Overgrow",45,49,49),

		array(2,"Ivysaur","Grass","Poison","Overgrow",45,49,49),

		array(3,"Venusaur","Grass","Poison","Overgrow",45,49,49),

		array(4,"Charmander","Fire","N/A","Blaze",39,52,43),

		array(5,"Charmeleon","Fire","N/A","Blaze",58,64,58),

		array(6,"Charizard","Fire","Flying","Blaze",78,84,78),

		array(7,"Squirtle","Water","N/A","Torrent",44,48,65),

		array(8,"Wartortle","Water","N/A","Torrent",59,63,80),

		array(9,"Blastoise","Water","N/A","Torrent",79,83,100),

		array(10,"Caterpie","Bug","N/A","Shield Dust",50,20,55)
	);

	echo "<style type=\"text/css\">
		#species{
			position: relative;
			left: 50px;
			bottom: 40px;
		}
		table{
			border:black;
		}
		p{
			padding-left: 20px;
			padding-right: 10px;
		}
		#ColsRow{
			margin:50px;
			transform: translate(3px,-10px);
		}

		#counting{
			position:relative;
			top: 30px;
			left: 55px;

		}

		#favorite{
			position:relative;
			bottom: 27px;
			left: 55;
		}
		
		#header{
			position: relative;
			top: 45px;
			left: 46px;
		}

	</style>";
	$count = 0;
	$count_one = 0;

	echo "<div id=\"ColsRow\">";
	echo "<table rules=\"all\">";
	for($rows=0; $rows < count($Sinnoh); $rows++){
			echo "<tr>";
				for ($col = 0; $col < count($Sinnoh[$rows]); $col++) {
				echo "<td>";
				echo "<p>";
		    	echo $Sinnoh[$rows][$col];
		    	echo "</p>";
		    	echo "</td>";
		    }
	    echo "</tr>";
    }
    echo "</table>";
    echo "</div>";

    echo "<table rules=\"all\" id=\"species\">";
    foreach ($Sinnoh as $key1 => $rows) {
    	foreach ($Sinnoh as $key2 => $cols){

    		if($key1==0){
    			if($key2==1){
    				echo "<tr>";
    				echo "<th>";
    				print $Sinnoh[$key1][$key2];
    				echo "</th>";
    				echo "</tr>";
    			}
    		}

    		if($key1==1){
    			if($key2==1){
    				echo "<tr>";
    				echo "<td>";
    				print $Sinnoh[$key1][$key2];
    				echo "</tr>";
    				echo "</td>";
    			}
    		}

    		if($key1==2){
    			if($key2==1){
    				echo "<tr>";
    				echo "<td>";
    				print $Sinnoh[$key1][$key2];
    				echo "</tr>";
    				echo "</td>";
    			}
    		}
    		
    		if($key1==3){
    			if($key2==1){
    				echo "<tr>";
    				echo "<td>";
    				print $Sinnoh[$key1][$key2];
    				echo "</tr>";
    				echo "</td>";
    			}
    		}
    		
    		if($key1==4){
    			if($key2==1){
    				echo "<tr>";
    				echo "<td>";
    				print $Sinnoh[$key1][$key2];
    				echo "</tr>";
    				echo "</td>";
    			}
    		}
    		
    		if($key1==5){
    			if($key2==1){
    				echo "<tr>";
    				echo "<td>";
    				print $Sinnoh[$key1][$key2];
    				echo "</tr>";
    				echo "</td>";
    			}
    		}
    		
    		if($key1==6){
    			if($key2==1){
    				echo "<tr>";
    				echo "<td>";
    				print $Sinnoh[$key1][$key2];
    				echo "</tr>";
    				echo "</td>";
    			}
    		}
    		
    		if($key1==7){
    			if($key2==1){
    				echo "<tr>";
    				echo "<td>";
    				print $Sinnoh[$key1][$key2];
    				echo "</tr>";
    				echo "</td>";
    			}
    		}

    		if($key1==8){
    			if($key2==1){
    				echo "<tr>";
    				echo "<td>";
    				print $Sinnoh[$key1][$key2];
    				echo "</tr>";
    				echo "</td>";
    			}
    		}

    		if($key1==9){
    			if($key2==1){
    				echo "<tr>";
    				echo "<td>";
    				print $Sinnoh[$key1][$key2];
    				echo "</tr>";
    				echo "</td>";
    			}
    		}
    		if($key1==10){
    			if($key2==1){
    				echo "<tr>";
    				echo "<td>";
    				print $Sinnoh[$key1][$key2];
    				echo "</tr>";
    				echo "</td>";
    			}
    		}
    	}
    }
    echo "</table>";
    echo "<div id=\"counting\">";
	    for($rows=0; $rows < count($Sinnoh); $rows++){
	    	$count_one++;
			for ($col = 0; $col < count($Sinnoh[$rows]); $col++) {
				$count++;
	    	}
	    }
	    echo "Number of Elements: ";
	    echo $count_one+$count;
   	echo "</div>";


    echo "<div id=\"favorite\">";
    for($rows=0; $rows < count($Sinnoh); $rows++){
		for ($col = 0; $col < count($Sinnoh[$rows]); $col++) {	
	    	if($rows == 2){
	    		if($col == 1){
	    			print "Favorite pokemon: ";
	    			print $Sinnoh[$rows][$col];
	    		}
	    	}
	    }
   	}
 echo "</div>";

?>