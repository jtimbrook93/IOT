<?php
// connect to server

$client = new MongoDBClient(
    'mongodb+srv://Jtimbrook93:Biggi1yo@iot-sjtus.mongodb.net/test?retryWrites=true&w=majority');

//connect to database

$db = $client->test;
