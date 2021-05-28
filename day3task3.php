<?php
echo"<table border='20'>";
for($i=1;$i<=1000;$i++){
	echo"<tr>";
	if($i%2==0){
		echo"<td bgcolor='Aqua'>$i</td>";
	}
	else{
		echo"<td bgcolor='powderblue'>$i</td>";	
	}
	echo"</tr>";

}
echo "</table>";
?>