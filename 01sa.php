<?php
	$Sinnoh = array(
		array("id","species","type1","type2","ability","hp","atk","def"),

		array(1,"Balbasaur","Grass","Poison","Overgrow",45,49,49),

		array(2,"Ivysaur","Grass","Poison","Overgrow",45,49,49),

		array(3,"Venusaur","Grass","Poison","Overgrow",45,49,49),

		array(4,"Charmander","Fire","N/A","Blaze",39,52,43),

		array(5,"Charmeleon","Fire","N/A","Blaze",58,64,58),
		array(6,"Squirtle","Water","N/A","Torrent",44,48,65)
	);

	echo "<style type=\"text/css\">
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
			top: 300px;
			left: 34px;

		}
		

	</style>";
	$count = 0;
	$count_one = 0;

	echo "<div id=\"counting\">";
	    for($rows=0; $rows < count($Sinnoh); $rows++){
	    	$count_one++;
			for ($col = 0; $col < count($Sinnoh[$rows]); $col++) {
				$count++;
	    	}
	    }
	    echo "<p>Number of Elements: ";
	    	echo $count_one+$count;
	    echo "</p>";
   	echo "</div>";

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
?>