<?php
include 'connect.php';  
header("Content-Type: application/json");
    
$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

switch ($method) {
    case 'POST':
        $ListName = $input['ListName'];
        $conn->query("INSERT INTO todolists (ListName) VALUES ('$ListName')");
        echo json_encode(["message" => "User added successfully"]);
        break;
    case 'DELETE':
        $ListName = $input['ListName'];
        $conn->query("DELETE FROM todolists WHERE ListName = '$ListName'");
        echo json_encode(["message" => "User deleted successfully"]);
        break;
    default:
        echo json_encode(["message" => "Invalid request method"]);
        break;
    }
    $conn->close();
?>
