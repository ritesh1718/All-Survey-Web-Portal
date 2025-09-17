<?php
session_start();
$conn = new mysqli("localhost", "root", "", "test");

$title = $_POST['title'];
$type = $_POST['type'];
$options = [$_POST['option1'], $_POST['option2'], $_POST['option3'], $_POST['option4']];
$options_json = json_encode($options);

// Insert into surveys table
$stmt = $conn->prepare("INSERT INTO surveys (title, type, options_json) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $title, $type, $options_json);
$stmt->execute();
$stmt->close();

echo json_encode([
  'success' => true,
  'title' => $title,
  'type' => $type,
  'options' => $options
]);
