<?php

const DB_USER = 'user';
const DB_PW = 'pw';
const DB_SERVER = 'mysql:host=localhost;dbname=finalProject';

$client = new MongoDB\Client(
    'mongodb+srv://Jtimbrook93:<password>@iot-sjtus.mongodb.net/test?retryWrites=true&w=majority');

$db = $client->test;
