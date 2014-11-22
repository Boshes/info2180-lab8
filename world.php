<?php
$username = "root"; 
$hostname = "localhost";
$dbhandle = mysql_connect($hostname, $username);


$selected = mysql_select_db("world");

$ALL = (isset($_REQUEST["all"]))? $_REQUEST["all"]: "";
$LOOKUP = (isset($_REQUEST["lookup"])) ? $_REQUEST["lookup"]:"";
if ($ALL=="true") {
    $ALL = mysql_query("SELECT * FROM countries");
    while($row = mysql_fetch_array($ALL)) {
    ?>
        <li> <?= $row["name"] ?>, ruled by <?= $row["head_of_state"] ?> </li>
    <?php
    }
}
else if ($ALL=="false"){
    echo "";
}
# execute a SQL query on the database
if ($LOOKUP != ""){
    $results = mysql_query("SELECT * FROM countries WHERE name LIKE '%$LOOKUP%';");
    while ($row = mysql_fetch_array($results)) {
        ?>
    <li> <?= $row["name"] ?>, ruled by <?= $row["head_of_state"] ?> </li>
  <?php
}
}



