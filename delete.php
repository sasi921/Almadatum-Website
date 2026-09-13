<?php
$connect = mysqli_connect("localhost", "root", "", "alumni");

if (!$connect) {
    http_response_code(500);
    echo 'Database connection failed';
    exit;
}

if (!isset($_POST["sno"]) || !ctype_digit((string) $_POST["sno"])) {
    http_response_code(400);
    echo 'Invalid student record id';
    exit;
}

$studentRecordId = (int) $_POST["sno"];
$statement = mysqli_prepare($connect, "DELETE FROM student_info WHERE sno = ?");

if (!$statement) {
    http_response_code(500);
    echo 'Unable to prepare delete request';
    exit;
}

mysqli_stmt_bind_param($statement, "i", $studentRecordId);

if (mysqli_stmt_execute($statement)) {
    echo 'Data Deleted';
} else {
    http_response_code(500);
    echo 'Unable to delete student record';
}

mysqli_stmt_close($statement);
mysqli_close($connect);
?>