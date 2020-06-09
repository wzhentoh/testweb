<?php
 $serverName = "testphpwithdbtp045869.azurewebsites.net";
 $connectionOptions = array(
 "Database" => "testdbtp045869",
 "Uid" => "tp045869",
"PWD" => "weizhen11169!");

//Establishes the connection
 $conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn)
{
 die("Error connection: ".sqlsrv_errors());
 }

 $tsql= "SELECT * FROM [dbo].[restaurant]";
 $getResults= sqlsrv_query($conn, $tsql);

if ($getResults == FALSE)
{
 die(sqlsrv_errors());
}

 while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
{
 echo "<tr>";
 echo "<td>". $row['restaurant_id'] . "</td>";
 echo "<td>". $row['restaurant_name'] ."</td>";
 echo "<td>". $row['restaurant_address'] . "</td>";
 echo "<td>". $row['restaurant_phone'] . "</td>";
 echo "</tr>";
 }
 sqlsrv_free_stmt($getResults);
?>
