<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> This is my first Web Test </title>
</head>
<body>

<?php
  
  class Book{
        var $title;
        var $author;
        var $pages;

        function __construct($name){
echo "New Book Created $name<br>";                           // This will be executed automatically when class Book is called

        }
  }

  $book1 = new Book("Harry");
  $book1 ->title ="Harry Poter";
  $book1 ->author= "JKRowling";
  $book1 ->pages = 400;


  echo $book1 -> title ;
  echo "<br>";
  echo $book1 -> author ;
  echo "<br>";
  echo $book1 -> pages ;
  echo "<br>";

  $book2 = new Book("Rings");
  $book2 ->title ="Lord of the Rings";
  $book2 ->author= "Tolkien";
  $book2 ->pages = 700;

  echo $book2 -> title ;
  echo "<br>";
  echo $book2 -> author ;
  echo "<br>";
  echo $book2 -> pages ;
  echo "<br>";


  class Books{
    var $title;
    var $author;
    var $pages;

    function __construct($aTitle, $aAuthor,$aPages){
                                                                                    // This will be executed automatically when class Book is called
            $this->title = $aTitle;                                               //refer to curent object
            $this->author = $aAuthor; 
            $this->pages = $aPages; 
        }
    
}

$book3 = new Books("Rings", "Kiko", 800);
            echo $book3->title;
?>



</body>

</html>