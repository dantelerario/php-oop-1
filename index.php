<?php 
/*
*
* MOVIES
*
 */


class Movie {
    //Prop
    public $title;
    public $director;
    public $main_actor;
    public $genre;
    public $country;
    public $rating;
    public $price;

    //Constructor
    public function __construct($_title, $_director, $_main_actor, $_genre, $_country, $_rating, $_price) {
        $this->title = $_title;
        $this->director = $_director;
        $this->main_actor = $_main_actor;
        $this->genre = $_genre;
        $this->country = $_country;
        $this->rating = $_rating;
        $this->price = $_price;
    }

    //Methods

    public function priceDiscount($value) {
        $discount = $this->price * $value / 100;
        $disc_price = $this->price - $discount;
        return number_format($disc_price, 2);
    }
}


//OBJECTS

$movie1 = new Movie('Terminator', 'James Cameron', 'Arnold Schwarzenegger', 'Sci-Fi', 'USA', 8, 9.99);

$movie2 = new Movie('Lord of the Rings', 'Peter Jackson', 'Elijah Wood', 'Fantasy', 'USA', 8.8, 19.99);

$movie3 = new Movie('Fantozzi', 'Luciano Salce', 'Paolo Villaggio', 'Comedy', 'Italy', 7.9, 5.99);




var_dump($movie1);

var_dump($movie2);

var_dump($movie3);

//display

echo "prezzo scontato di $movie1->title al 10%:
<del> € $movie1->price</del>
€ {$movie1->priceDiscount(10)}<br>";

echo "prezzo scontato di $movie2->title al 15%:
<del> € $movie2->price</del>
€ {$movie2->priceDiscount(15)}<br>";

echo "prezzo scontato di $movie3->title al 50%:
<del> € $movie23->price</del>
€ {$movie3->priceDiscount(50)}<br>";