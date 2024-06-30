<?php
/** Respond back with success */
header('Content-Type: application/json');
echo json_encode(array('success' => 'OK'));
?>