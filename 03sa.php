<?php  

$pokemons = array(

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
#limitnum{
	width: 200px;
	position:relative;
	left: 63px;
	bottom: 75px;
	color:darkblue;
	
}
#namePokemon{
	background-color: lightblue;
	position:relative;
	left: 50px;
	top: 50px;
	width: 160px;
	padding: 10px;
	padding-bottom: 300px;
	border-radius: 15px;
	color: darkblue;
	font-family: sans-serif;
	display: flex;
}
#numOne{
	position: relative;
	left:84px;
	bottom: 260px;
	color: darkblue;
	
}
#numtwo{
	position:relative;
	left:220px;
	top: 1px;
	font-family: sans-serif;
	font-size: 17px;
	
}
#choice{
	height:4px;
	width: 10px;
	font-family: sans-serif;
	font-size: 17px;
}
</style>";

//body
echo "<div id=\"container\">";
	echo "<div>";

		//pokemon name display
		echo "<div id=\"namePokemon\">";
			echo "<div id=\"nameOne\">";
				echo "<h3>Pokemon Names:</h3>";
			echo "</div>";
		echo "</div>";

		echo "<div id=\"choice\">";
			function pokemon_defence($arrayname, $limit_number){
				for ($rows=0;$rows < count($arrayname); $rows++){
					for ($cols=0;$cols < count($arrayname[$rows]); $cols++){

						//pokemon's defence 
						echo "<div id=\"numOne\">";
						if($arrayname[$rows][$cols] >= $limit_number){
							if($cols == 7){
								echo "<q>";
								echo $arrayname[$rows][$cols-6];
								echo "</q>";
							}

						}
						echo "</div>";
					}
				}
				//limit number display
					echo "<div id=\"limitnum\"><p>Limit Number: ";
						echo $limit_number;
					echo "</p></div>";
			}


			//call function here
			pokemon_defence($pokemons,55);
		echo "</div>";

	echo "</div>";
echo "</div>";

?>