<html>
<head>
<style>
table
{
border-style:solid;
border-width:2px;
border-color:pink;
}
</style>
</head>
<body bgcolor="#EEFDEF">
<h2>Cyberhawk Task in PHP and HTML</h2>
<table border='1'>
<tr> 
<th>Number</th>
<th>Output</th>
</tr>
<?php
for($i=1; $i<=100; $i++){
	echo "<tr>";
	if(is_int($i/3) && is_int($i/5)){
		echo "<td>" . $i . "</td>";
		echo "<td>Coating Damage and Lightning Strike</td>";
	}else if(is_int($i/3)){
		echo "<td>" . $i . "</td>";
		echo "<td>Coating Damage</td>";
	}else if(is_int($i/5)){
		echo "<td>" . $i . "</td>";
		echo "<td>Lightning Strike</td>";
	}else{
		echo "<td>" . $i . '</td>';
		echo "<td>" . $i . "</td>";
	}
	echo "</tr>";
}
?>
</tr>
</table>
</body>
</html>
