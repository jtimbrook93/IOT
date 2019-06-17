<?php

   require '/var/www/html/vendor/autoload.php';
   // connect to mongodb
   $m = new MongoDB\Client("mongodb://localhost:27017");
   echo "Connection to database successfully";

   // select a database
   $db = $m->admin;
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
