<?php

$xml = simplexml_load_file('source/books.xml');

foreach ($xml->book as $book) {
    echo "Titre : " . $book->title . "\n";
    echo "Auteur : " . $book->author . "\n";
    echo "Année : " . $book->year . "\n\n";
}

$newBook = $xml->addChild("book");
$newBook->addChild("title", "Dune");
$newBook->addChild("author", "Frank Herbert");
$newBook->addChild("year", "2023");

$newXmlString = $xml->asXML();

file_put_contents('source/books.xml', $newXmlString);

