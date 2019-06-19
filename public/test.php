<?php

// echo phpinfo();

chdir(__DIR__);
set_include_path (__DIR__);

$PATH = "/var/www/html/vendor/mongodb/mongodb/";

 require '/var/www/html/vendor/autoload.php';


 $user = "Jtimbrook93";
 $pwd = 'Biggi1%21yo';
 $filter = [];

 if (isset($_POST['needleID'])) {
     $needleID = $_POST['needleID'];
     $filter = ['id'=> $needleID];
 }

 //Manager Class
 $manager = new MongoDB\Driver\Manager("mongodb://${user}:${pwd}@iot-iot-shard-00-00-sjtus.mongodb.net:27017,iot-shard-00-01-sjtus.mongodb.net:27017,iot-shard-00-02-sjtus.mongodb.net:27017/test?ssl=true&replicaSet=IOT-shard-0&authSource=admin&retryWrites=true&w=majority");


   echo "Connection to database successfully";

   // select a database
   $db = $manager->test;
   echo "Database admin selected";
   $collection = $db->test;
   echo "Collection selected succsessfully";

   $document = array(
      "title" => "MongoDB",
      "description" => "database",
      "likes" => 100,
      "url" => "http://www.tutorialspoint.com/mongodb/",
      "by" => "tutorials point"
   );

   $collection->insert($document);
   echo "Document inserted successfully";
