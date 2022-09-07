<?php
	$Sinnoh = array(
		array("<b><p style=\"padding-left:16px\">id","<b><p style=\"padding-left:31px\">species","<b><p style=\"padding-left:18px\">type1","<b><p style=\"padding-left:24px\">type2","<b><p style=\"padding-left:41px\">ability","<b><p style=\"padding-left:20px\">hp","<b><p style=\"padding-left:14px\">atk","<b><p style=\"padding-left:15px\">def"),

		array(1,"Balbasaur","Grass","Poison","Overgrow",45,49,49),

		array(2,"<p style=\"padding-left:36px\">Ivysaur","Grass","Poison","Overgrow",45,49,49),

		array(3,"<p style=\"padding-left:25px\">Venusaur","Grass","Poison","Overgrow",45,49,49),

		array(4,"<p style=\"padding-left:5px\">Charmander","<p style=\"padding-left:31px\">Fire","<p style=\"padding-left:34px\">N/A","<p style=\"padding-left:49px\">Blaze",39,52,43),

		array(5,"<p style=\"padding-left:7px\">Charmeleon","<p style=\"padding-left:31px\">Fire","<p style=\"padding-left:34px\">N/A","<p style=\"padding-left:49px\">Blaze",58,64,58)
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
	for($rows=0; $rows < count($Sinnoh); $rows++){
		echo "<table rules=\"all\">";
			echo "<tr>";
				for ($col = 0; $col < count($Sinnoh[$rows]); $col++) {
					echo "<td>";
					echo "<p>";
		    		echo $Sinnoh[$rows][$col];
		    		echo "</p>";
		    		echo "</td>";
		    	}
	    	echo "</tr>";
    	echo "</table>";
    }
    echo "</div>";
?>