<?php
$json = {
    "patientGuid": "SOME-REALLY-LONG-1234",
    "firstName": "Sylvia",
    "lastName": "Hernandez",
    "dob": "2012-09-01",
    "sexAtBirth": "F",
    "priority": "high"
  };

  header('Content-Type: application/json');
  echo $json;