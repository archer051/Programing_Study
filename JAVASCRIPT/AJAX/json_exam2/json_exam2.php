<?php
// === parse json string ===
$json_string = '{ "programmers": [
        { "firstName": "Brett", "lastName":"McLaughlin", "email": "brett@newInstance.com" },
        { "firstName": "Jason", "lastName":"Hunter", "email": "jason@servlets.com" }
    ],
    "authors": [
        { "firstName": "Isaac", "lastName": "Asimov", "genre": "science fiction" },
        { "firstName": "Frank", "lastName": "Peretti", "genre": "christian fiction" }
    ] }';

// parse to php object
$data_object = json_decode($json_string);

// parse to php array
$data_array = json_decode($json_string, true);

// echo
var_dump($data_object);
var_dump($data_array);
?>