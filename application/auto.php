<?php

//CREDENTIALS FOR DB
define ('DBSERVER', 'localhost');
define ('DBUSER', 'root');
define ('DBPASS','');
define ('DBNAME','irctc');

//LET'S INITIATE CONNECT TO DB
$connection = mysql_connect(DBSERVER, DBUSER, DBPASS) or die("Can't connect to server. Please check credentials and try again");
$result = mysql_select_db(DBNAME) or die("Can't select database. Please check DB name and try again");

//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];
    $sql = mysql_query ("SELECT r1,r2,r3,r4,r5,r6,r7,r8,r9,r10 FROM route WHERE r1 LIKE '%{$query}%' OR r2 LIKE '%{$query}%' OR r3 LIKE '%{$query}%' OR r4 LIKE '%{$query}%' OR r5 LIKE '%{$query}%' OR r6 LIKE '%{$query}%' OR r7 LIKE '%{$query}%' OR r8 LIKE '%{$query}%' OR r9 LIKE '%{$query}%' OR r10 LIKE '%{$query}%'");
	$array = array();
    while ($row = mysql_fetch_array($sql)) {
        $array[] = array (
            'label' => $row['r1'].', '.$row['r2'],'.$row['r3'],
            'value' => $row['r1'],
        );
    }
    //RETURN JSON ARRAY
    echo json_encode ($array);
}

?>