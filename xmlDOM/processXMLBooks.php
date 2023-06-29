<?php
$xml = simplexml_load_file("books.xml");
echo "DATA:". $xml->getName() ."<br>";
foreach ($xml-> book as $book){
    echo "Tittle: ". $book->tittle ."<br>";
    echo "Author: " . $book->author . "<br>";
    echo "Year: " . $book->year . "<br>";
    echo "Price: " . $book->price;
}
?> 
