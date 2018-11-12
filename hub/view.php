<html>
<head>
	<link rel="stylesheet" href="../includes/table.css">
	<?php
		include "../includes/side_bar.html"
	?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
<div id="gradient">
<table id="announcement">
  <tr>
    <th width="12%">Date</th>
    <th width="15%">Club</th>
    <th width="20%">Staff</th>
    <th width="45%">Announcement</th>
    <th widht="8%"></th>
  </tr>

<?php
include '../includes/connectdb.php';

$sql = "SELECT * FROM announcement";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['date']."</td>";
        echo "<td>".$row['club']."</td>";
        echo "<td>".$row['sponsor']."</td>";
        echo "<td>".$row['announcement']."</td>";
        echo "<td><a href='update.php?id=".$row['id']."'>Update</a> &nbsp&nbsp";
        echo "<a href='delete.php?id=".$row['id']."'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
}

?>
</table>
</div>
</body>
</html>
