
<?php
// connect to the database
include('../DbConnect.php');

// get the records from the database
if ($result = $conn->query("SELECT * FROM ArtWork"))
{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table
echo "<table border='1' cellpadding='10'>";

// set table headers
echo "<tr><th>Name</th><th>Description</th><th>Type</th><th>Dimensions</th><th>Location</th><th>Artist</th><th>Price</th><th>Genre</th><th>DateCreated</th><th></th><th></th></tr>";

while ($row = $result->fetch_object())
{
// set up a row for each record
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
echo "<td><a href='records.php?id=" . $row->id . "'>Edit</a></td>";
echo "<td><a href='delete.php?id=" . $row->id . "'>Delete</a></td>";
echo "</tr>";
}

echo "</table>";
}
// if there are no records in the database, display an alert message
else
{
echo "No results to display!";
}
}
// show an error if there is an issue with the database query
else
{
echo "Error: " . $conn->error;
}

// close database connection
$conn->close();

?>