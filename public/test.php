<?php

$PATH = "C:\php_mongodb\mongodb-linux-x86_64-amazon-4.0.10\bin";

 require '/home/ec2-user/vendor/autoload.php';
   // connect to mongodb
 $client = new MongoDB\Driver\Manager("mongodb+srv://Jtimbrook93:Biggi1%21yo@iot-sjtus.mongodb.net/JT?retryWrites=true&w=majority");


   echo "Connection to database successfully";

   // select a database
   $db = $client->JT;
   echo "Database admin selected";
   $collection = $db->IOT;
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
