<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'ogp';
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    $searchTerm = $_GET['term'];
    $query = $db->query("SELECT * FROM medicine WHERE med_name LIKE '%".$searchTerm."%' ORDER BY med_name ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['med_name'];
    }
 echo json_encode($data);
?>