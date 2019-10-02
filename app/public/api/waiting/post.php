<?php

// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// -> for instance
// :: is for static/factory methods in class

// Step 2: Create & run the query
$stmt = $db->prepare(
    'INSERT INTO PatientVisit (patientGuid, visitDescription, priority)
    VALUES (?, ? ,?)'
);

// SQL injection prevention
$stmt->execute([
    $_POST['patientGuid'],
    $_POST['visitDescription'],
    $_POST['priority']
]);

// Step 3: Output
// Redirect to this API
header('Content-Type: application/json');
header('Location: ../waiting/');
