<?php

   require '/var/www/html/vendor/autoload.php';
   // connect to mongodb
 $client = new MongoDB\Driver\Manager("mongodb+srv://Jtimbrook93:Biggi1%21yo@iot-sjtus.mongodb.net/admin?retryWrites=true&w=majority");
var_dump($manager);

   echo "Connection to database successfully";

   // select a database
   $db = $client->admin;
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
