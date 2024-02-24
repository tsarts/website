<?php
// Replace this with your actual logic to retrieve comments from a database or other source
$comments = array(
 array('username' => 'User1', 'content' => 'This is a great website!'),
 array('username' => 'User2', 'content' => 'Nice work!'),
);
echo json_encode($comments);
?>