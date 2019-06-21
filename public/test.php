<?php

echo phpinfo();


// // chdir(__DIR__);
//
//
// $PATH = "/etc/lib/";
//
require_once '/var/www/html/vendor/autoload.php';


 $user = "Jtimbrook93";
 $pwd = 'Biggi1%21yo';



 //Manager Class
 $connection = new MongoDB\Driver\Manager('mongodb+srv://${user}:${pwd}@iot-sjtus.mongodb.net/test?retryWrites=true&w=majority');


   echo "Connection to database successfully";

   // select a database
   $db = $connection->test;
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
