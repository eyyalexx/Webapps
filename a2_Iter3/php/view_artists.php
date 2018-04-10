
<?php
include('../DbConnect.php');

if ($result = $conn->query("SELECT * FROM Artists"))
{
if ($result->num_rows > 0)
{
echo "<table border='1' cellpadding='10'>";

echo "<tr><th>Name</th><th>Description</th><th>Birth</th><th>Death</th><th>Living</th><th>Genres</th><th>Famous</th><th></th><th></th></tr>";

while ($row = $result->fetch_object())
{
echo "<tr>";
echo "<td>" . $row->Name . "</td>";
echo "<td>" . $row->Description . "</td>";
echo "<td>" . $row->Birth . "</td>";
echo "<td>" . $row->Death . "</td>";
echo "<td>" . $row->Living . "</td>";
echo "<td>" . $row->Genres . "</td>";
echo "<td>" . $row->Famous . "</td>";
echo "<td><a href='modify_artist.php?Name=" . $row->Name . "'>Edit</a></td>";
echo "<td><a href='remove_artist.php?Name=" . $row->Name . "'>Delete</a></td>";
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