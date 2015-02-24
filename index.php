 
  
<html lang="en">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<title>Participants - ScratchWin</title>
<link href="Images/Dollar.ico" rel="shortcut icon" type="image/x-icon" />

<link rel="stylesheet" href="Content/Site.css" type="text/css" media="all"> 

<script type="text/javascript" src="Scripts/jquery-2.0.3.js" ></script>
<script type="text/javascript" src="Scripts/jquery-ui-1.8.20.js"></script>
<script type="text/javascript" src="Scripts/CustomScripts.js" ></script>
<script type="text/javascript" src="Scripts/modernizr-2.5.3.js"></script>
<script type="text/javascript" src="Scripts/jquery.validate.unobtrusive.js"></script>
<script type="text/javascript" src="Scripts/jquery.validate"></script>
<script type="text/javascript" src="Scripts/jquery.unobtrusive-ajax.js"></script>
<script type="text/javascript" src="Scripts/knockout-2.1.0.js"></script>
<script type="text/javascript" src="Scripts/modernizr-2.5.3.js"></script>
<script type="text/javascript" src="Scripts/jquery.tablesorter.js"></script>
<script type="text/javascript" src="Scripts/jquery.tablesorter.pager"></script>
<script type="text/javascript" src="Scripts/knockout-2.1.0.debug.js"></script>


</head>


<body>

<header>
<div class="content-wrapper">

<div class="float-left">
<p class="site-title">
ScratchWin
</p>
</div>

  
</div>


</header>




<div id="body">


<section class="content-wrapper main-content clear-fix">

<div id="error-display-div" class="displaynone"></div>

<h2 class="page-title">Participants</h2>


<div>

<p>
    <a id="btnSubmitCreateUserForm" style="cursor: pointer;" title="Generate Random Winner" href="randomgenerator.php">Generate Random Winner</a>

</p> 


</div>



<div>

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

//read data
$sql_select = "SELECT * FROM t_participants ORDER BY id ASC";
$stmt = $conn->query($sql_select);
$participants = $stmt->fetchAll(); 

if(count($participants) > 0) 
{

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
}
echo "</table>";
} 
 
$stmt->closeCursor();

}
catch(Exception $e)
{
die(var_dump($e));
}


?>


    <h2 class="page-title">Winners</h2>
    
    
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

//read data
$sql_select = "SELECT * FROM t_winners ORDER BY id ASC";
$stmt = $conn->query($sql_select);
$participants = $stmt->fetchAll(); 

if(count($participants) > 0) 
{

echo "<table>";
echo "<tr><th>Id</th>";
echo "<th>Phone Number</th>";
echo "<th>Is Daily Winner</th>";
echo "<th>Is Weekly Winner</th>";
echo "<th>Is Monthly Winner</th></tr>";

foreach($participants as $participant) 
{
echo "<tr><td>".$participant['id']."</td>";
echo "<td>".$participant['msisdn']."</td>";
echo "<td>".$participant['daily_winner']."</td>";
echo "<td>".$participant['weekly_winner']."</td>";
echo "<td>".$participant['monthly_winner']."</td></tr>";
}
echo "</table>";
} 
 
$stmt->closeCursor();

}
catch(Exception $e)
{
die(var_dump($e));
}


?>

    

</div>






</section>


</div>




<footer>

<hr />

<div class="content-wrapper">
<div class="float-left">
 
</div>
</div>


<div class="content-wrapper clearboth">
<div class="float-left">
 
</div>
</div>


<div class="content-wrapper clearboth">
<div>

</div>
</div>


</footer>


</body>


</html>
