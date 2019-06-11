<?php

$client = new MongoDB\Client(
    'mongodb+srv://Jtimbrook93:Biggi1yo@iot-sjtus.mongodb.net/test?retryWrites=true&w=majority');

$db = $client->test;
