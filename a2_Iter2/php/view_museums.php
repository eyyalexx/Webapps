
<?php

include('../DbConnect.php');


if ($result = $conn->query("SELECT * FROM Museums"))
{

if ($result->num_rows > 0)
{

echo "<table border='1' cellpadding='10'>";


echo "<tr><th>Name</th><th>Established</th><th>Location</th><th>People</th><th>History</th><th>ArtWorks</th><th>Description</th><th></th><th></th></tr>";

while ($row = $result->fetch_object())
{

echo "<tr>";
echo "<td>" . $row->Name . "</td>";
echo "<td>" . $row->Established . "</td>";
echo "<td>" . $row->Location . "</td>";
echo "<td>" . $row->People . "</td>";
echo "<td>" . $row->History . "</td>";
echo "<td>" . $row->ArtWorks . "</td>";
echo "<td>" . $row->Description . "</td>";
echo "<td><a href='modify.php?Name=" . $row->Name . "'>Edit</a></td>";
echo "<td><a href='remove_museums.php?Name=" . $row->Name . "'>Delete</a></td>";
echo "</tr>";
}

echo "</table>";
}
else
{
echo "No results to display!";
}
}
else
{
echo "Error: " . $conn->error;
}

$conn->close();

?>