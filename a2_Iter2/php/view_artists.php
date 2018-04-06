
<?php
// connect to the database
include('../DbConnect.php');

// get the records from the database
if ($result = $conn->query("SELECT * FROM Artists"))
{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table
echo "<table border='1' cellpadding='10'>";

// set table headers
echo "<tr><th>Name</th><th>Description</th><th>Birth</th><th>Death</th><th>Living</th><th>Genres</th><th>Famous</th><th></th><th></th></tr>";

while ($row = $result->fetch_object())
{
// set up a row for each record
echo "<tr>";
echo "<td>" . $row->Name . "</td>";
echo "<td>" . $row->Description . "</td>";
echo "<td>" . $row->Birth . "</td>";
echo "<td>" . $row->Death . "</td>";
echo "<td>" . $row->Living . "</td>";
echo "<td>" . $row->Genres . "</td>";
echo "<td>" . $row->Famous . "</td>";
echo "<td><a href='modify.php?Name=" . $row->Name . "'>Edit</a></td>";
echo "<td><a href='remove.php?Name=" . $row->Name . "'>Delete</a></td>";
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