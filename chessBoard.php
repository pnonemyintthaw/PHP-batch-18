<?php
echo "<table width='400px'  border='1'>";
for($row=1;$row<=8;$row++){
	echo "<tr>";
	for($col=1;$col<=8;$col++){
		$black=$row+$col;

		if($black%2==0)
		{
			echo "<td height=50px width=50px bgcolor=white> </td>";
		}
		else
		{
			echo "<td height=50px width=50px bgcolor=black></td>";
		}
	}
	echo "</tr>";
}
echo "</table>";

?>
	