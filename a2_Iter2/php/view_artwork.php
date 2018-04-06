
<?php
include('../DbConnect.php');

if ($result = $conn->query("SELECT * FROM ArtWork"))
{
if ($result->num_rows > 0)
{
echo "<table border='1' cellpadding='10'>";

echo "<tr><th>Name</th><th>Description</th><th>Type</th><th>Dimensions</th><th>Location</th><th>Artist</th><th>Price</th><th>Genre</th><th>DateCreated</th><th></th><th></th></tr>";

while ($row = $result->fetch_object())
{
echo "<tr>";
echo "<td>" . $row->Name . "</td>";
echo "<td>" . $row->Description . "</td>";
echo "<td>" . $row->Type . "</td>";
echo "<td>" . $row->Dimensions . "</td>";
echo "<td>" . $row->Location . "</td>";
echo "<td>" . $row->Artist . "</td>";
echo "<td>" . $row->Price . "</td>";
echo "<td>" . $row->Genre . "</td>";
echo "<td>" . $row->DateCreated . "</td>";
echo "<td><a href='modify.php?id=" . $row->id . "'>Edit</a></td>";
echo "<td><a href='remove_artworks.php?id=" . $row->id . "'>Delete</a></td>";
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