<?php

require '../../app/common.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
  require 'commentPost.php';
  exit;
}

// 1. Go to the database and get all work associated with the $taskId
$commentsArr = Comment::getAllComments();

// 2. Convert to JSON
$json = json_encode($commentsArr,  JSON_PRETTY_PRINT);

// 3. Print
header ('Content-type: application/json;charset=utf-8');
echo json_encode($commentsArr);
