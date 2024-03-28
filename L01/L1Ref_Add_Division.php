<?php
require 'db_connection.php';

$district = $_POST['DistrictID'] ?? '';
$division = $_POST['Devisiondiscription'] ?? '';

if ($district && $division) {
    $sql = "INSERT INTO devision (DistrictID, Devisiondiscription) VALUES (?, ?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$district, $division]);
    
    header("Location: L1Ref_Division.php"); // Redirect back to the division page
    exit;
} else {
    // Handle error or redirect back with an error message
    header("Location: L1Ref_Division.php?error=InvalidInput");
    exit;
}
