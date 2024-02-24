<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $data = json_decode(file_get_contents("php://input"), true);
 if (isset($data['comment'])) {
 $comment = htmlspecialchars($data['comment']);
 
 // Replace this with your actual logic to store comments in a database or other storage
 // For simplicity, this example just echoes the submitted comment back
 echo json_encode(array('status' => 'success', 'comment' => $comment));
 } else {
 echo json_encode(array('status' => 'error', 'message' => 'Comment not provided.'));
 }
} else {
 echo json_encode(array('status' => 'error', 'message' => 'Invalid request method.'));
}
?>