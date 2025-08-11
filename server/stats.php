<?php
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

require_once __DIR__ . '/conadmin.php';

$response = [
    'totalRecords' => 0,
    'uniqueEmails' => 0,
    'phoneEntries' => 0,
];

if ($con) {
    if ($res = mysqli_query($con, "SELECT COUNT(*) AS c FROM ebook")) {
        $row = mysqli_fetch_assoc($res);
        $response['totalRecords'] = isset($row['c']) ? (int)$row['c'] : 0;
    }
    if ($res = mysqli_query($con, "SELECT COUNT(DISTINCT email) AS c FROM ebook")) {
        $row = mysqli_fetch_assoc($res);
        $response['uniqueEmails'] = isset($row['c']) ? (int)$row['c'] : 0;
    }
    if ($res = mysqli_query($con, "SELECT COUNT(*) AS c FROM ebook WHERE tel IS NOT NULL AND tel <> ''")) {
        $row = mysqli_fetch_assoc($res);
        $response['phoneEntries'] = isset($row['c']) ? (int)$row['c'] : 0;
    }
}

echo json_encode($response);

if ($con) { mysqli_close($con); }