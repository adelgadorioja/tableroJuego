<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<style type="text/css">
		body {
			font-family: Arial;
		}
		table {
			margin: 2em auto 0 auto;
		}
		p {
			text-align: center;
		}
		td {
			width: 2em;
			height: 2em;
			text-align: center;
		}
		.negras {
			background-color: black;
		}
		.amarillas {
			background-color: yellow;
		}
	</style>
</head>
<body>

	<table>
		<?php 
			$filas = $_POST["Filas"];
			$columnas = $_POST["Columnas"];
			$contador = 0;
			echo "<p>Filas: $filas</p>";
			echo "<p>Columnas: $columnas</p>";
			
			for($i=0; $i<$filas+1; $i++){

				echo "<tr>";
				if($i==0) {
					for($y=0; $y<$columnas+1; $y++) {
						if ($y==0) {
							echo "<td></td>";
						}
						else {
							echo "<td>$y</td>";
						}	
					}
				}
				else {
					for($y=0; $y<$columnas+1; $y++){
						if($y==0) {
							$iAscii = chr(64+$i);
							echo "<td>$iAscii</td>";
						}
						else {
							if($columnas%2==0) {
								if($contador%2==0) {
									echo "<td class='negras'></td>";
								}
								else {
									echo "<td class='amarillas'></td>";
								}
							}
							else {
								if($i%2==0) {
									if($contador%2==0) {
										echo "<td class='amarillas'></td>";
									}
									else {
										echo "<td class='negras'></td>";
									}
								}
								else {
									if($contador%2==0) {
									echo "<td class='negras'></td>";
									}
									else {
										echo "<td class='amarillas'></td>";
									}
								}
							}	
						}
						
						$contador++;		
					}	
				}
				echo "</tr>";
			}
		?>
	</table>

</body>
</html>