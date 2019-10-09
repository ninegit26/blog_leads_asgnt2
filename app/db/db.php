<?php

require('connect.php');

$sql = "SELECT * FROM usuarios";
$stmt = $connection->prepare($sql);
$stmt->execute();
$users = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

// var_dump($users);

function dd($value) {
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}

function selectAll($table)
{
    global $connection;
    $sql = "SELECT * FROM $table";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

function executeQuery($sql, $data) {
    global $connection;
    $stmt = $connection->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

function create($table, $data) {
    global $connection;
    //$sql = "INSERT INTO leads (id, nm_lead, ds_email_lead, ts_lead, ds_ip_lead, tp_lead) VALUES (?, ?, ?, ?, ?, ?)
    //nm_lead = ?, ds_email_lead =?, ds_ip_lead = ?, in_parceiro = ?";
    
    $sql =  "INSERT INTO leads SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}


