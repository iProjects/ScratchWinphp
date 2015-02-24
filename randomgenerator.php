

<?php

// DB connection info
$user    = 'root';
$pass    = 'Pass12345';
$host    = 'localhost';
$db      = 'hallmark';
$charset = 'utf8';


try 
{
$conn = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//$todaysDate = date("YYYY-mm-dd");

//read data
//$offset_result = mysql_query( " SELECT FLOOR(RAND() * COUNT(*)) AS `offset` FROM `t_participants` ");
//$offset_row = mysql_fetch_object( $offset_result ); 
//$offset = $offset_row->offset;
//$participant = mysql_query( " SELECT * FROM `t_participants` LIMIT $offset, 1 " );

//$query="update t_participants set winner=1 where id in (select id from t_participants order by rand() limit 20)";
//$query="update t_participants set winner=1 where id in (select id from t_participants order by rand() limit 20)";
//$sql_select = "select * from t_participants order by rand() limit 2";
 //WHERE date_created = ? AND winner = ? 
//$stmt = $conn->query($query); 
//$stmt->execute(array(1, $todaysDate));
//$stmt->execute(array(2, 0)); 
//$participant = $stmt->fetchAll();


$sql_select = "truncate table t_winners";
$stmt = $conn->query($sql_select); 


$sql_select = "SELECT * FROM t_participants ORDER BY id ASC";
$stmt = $conn->query($sql_select);
$participants = $stmt->fetchAll();
 
echo "<table>";
echo "<tr><th>Id</th>";
echo "<th>Phone Number</th>";
echo "<th>Codes</th>";
echo "<th>Date Created</th>";
echo "<th>Is Winner</th></tr>";

foreach($participants as $participant) 
{
echo "<tr><td>".$participant['id']."</td>";
echo "<td>".$participant['msisdn']."</td>";
echo "<td>".$participant['codes']."</td>";
echo "<td>".$participant['date_created']."</td>";
echo "<td>".$participant['winner']."</td></tr>";

echo "</table>";





//if(count($participant) > 0) 
//{
    
echo "<table>";
echo "<tr><th>Id</th>";
echo "<th>Phone Number</th>";
echo "<th>Codes</th>";
echo "<th>Date Created</th>";
echo "<th>Is Winner</th></tr>";
 
echo "<tr><td>".$participant['id']."</td>";
echo "<td>".$participant['msisdn']."</td>";
echo "<td>".$participant['codes']."</td>";
echo "<td>".$participant['date_created']."</td>";
echo "<td>".$participant['winner']."</td></tr>";
 
echo "</table>";

//    $msisdn="msisdn";
      $msisdn=$participant['msisdn'];
      $daily_winner=1;
      $weekly_winner=0;
      $monthly_winner=0;
     
// Insert data
$sql_insert = "INSERT INTO t_winners(msisdn, daily_winner, weekly_winner, monthly_winner) VALUES (?,?,?,?)";
$stmt_insert = $conn->prepare($sql_insert);
$stmt_insert->bindValue(1, $msisdn);
$stmt_insert->bindValue(2, $daily_winner);
$stmt_insert->bindValue(3, $weekly_winner);
$stmt_insert->bindValue(4, $monthly_winner); 
$stmt_insert->execute();

$participantid=$participant['id'];

$sql_update = "UPDATE t_participants SET winner = ? WHERE id = ?";
$stmt_update = $conn->prepare($sql_update);
$stmt_update->bindValue(1, 1); 
$stmt_update->bindValue(2, $participantid); 
$stmt_update->execute();



}
//}

//$stmt->closeCursor();

}
catch(Exception $e)
{
die(var_dump($e));
}


header('Location: index.php');

?>