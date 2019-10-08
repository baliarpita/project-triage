<?php

// use Ramsey\Uuid\Uuid;
// $guid = Uuid::uuid4()->toString();
// Step 1: Get a datase connection from our help class
$guid='122344555566666666';
$db = DbConnection::getConnection();

// -> for instance
// :: is for static/factory methods in class

// Step 2: Create & run the query
$stmt = $db->prepare(
    'INSERT INTO Patient (patientGuid, firstName, lastName, dob, sexAtBirth)
    VALUES (?, ? ,?, ?, ?)'
    );

// SQL injection prevention
$stmt->execute([
    $guid,
    $_POST['firstName'],
    $_POST['lastName'],
    $_POST['dob'],
    $_POST['sexAtBirth']
]);

// Step 3: Output
// Redirect to this API
header('HTTP/1.1 303 See Other');
header('Location: ../records/?guid='.$guid);
