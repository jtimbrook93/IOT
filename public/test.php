<?php

// connect
$m = new MongoClient('mongodb+srv://Jtimbrook93:Biggi1%21yo@iot-sjtus.mongodb.net/test?retryWrites=true&w=majority');

// select a database
$db = $m->local;

// select a collection (analogous to a relational database's table)
$collection = $db->cartoons;

// add a record
$document = array( "title" => "Calvin and Hobbes", "author" => "Bill Watterson" );
$collection->insert($document);

// add another record, with a different "shape"
$document = array( "title" => "XKCD", "online" => true );
$collection->insert($document);

// find everything in the collection
$cursor = $collection->find();

// iterate through the results
foreach ($cursor as $document) {
    echo $document["title"] . "\n";
}
