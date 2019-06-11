<?php
// connect to server

$client = new MongoDBClient(
    'mongodb+srv://Jtimbrook93:Biggi1%21yo@iot-sjtus.mongodb.net/test?retryWrites=true&w=majority');

//connect to database

$dbs = $mongo->listDatabases();
