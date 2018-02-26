<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'ogp';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT * FROM medicine WHERE med_name LIKE '%".$searchTerm."%' ORDER BY med_name ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['med_name'];
    }
    
    //return json data
    echo json_encode($data);
?>