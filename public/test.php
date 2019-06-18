<?php

chdir(__DIR__);
set_include_path (__DIR__);

$PATH = "/usr/bin";

 require '/var/www/html/vendor/autoload.php';
   // connect to mongodb
 //$client = new MongoDB\Driver\Manager("mongodb+srv://Jtimbrook93:Biggi1%21yo@iot-sjtus.mongodb.net/JT?retryWrites=true&w=majority");

 $user = "Jtimbrook93";
 $pwd = 'Biggi1%21yo';
 $filter = [];

 if (isset($_POST['needleID'])) {
     $needleID = $_POST['needleID'];
     $filter = ['id'=> $needleID];
 }

 //Manager Class
 $connection = new MongoDB\Driver\Manager("mongodb://${user}:${pwd}@iot-sjtus.mongodb.net/test?retryWrites=true&w=majority");

 // Query Class
 $query = new MongoDB\Driver\Query($filter);

 // Output of the executeQuery will be object of MongoDB\Driver\Cursor class
 $rows = $connection->executeQuery('sedwe.defaultConfig', $query);

 // Convert rows to Array and sedn result back to client
 $rowsArr = $rows->toArray();
 echo json_encode($rowsArr);

   // echo "Connection to database successfully";
   //
   // // select a database
   // $db = $client->JT;
   // echo "Database admin selected";
   // $collection = $db->IOT;
   // echo "Collection selected succsessfully";
   //
   // $document = array(
   //    "title" => "MongoDB",
   //    "description" => "database",
   //    "likes" => 100,
   //    "url" => "http://www.tutorialspoint.com/mongodb/",
   //    "by" => "tutorials point"
   // );
   //
   // $collection->insert($document);
   // echo "Document inserted successfully";
