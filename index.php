
<!DOCTYPE html>
<html>
<head>
	<title>Productions</title>
</head>
<body>

<?php

class Production {
	public $title;
	public $language;
	public $rating;

	public function __construct($_title, $_language, $_rating) {
		$this->title = $_title;
		$this->language = $_language;
		$this->rating = $_rating;
	}

	public function displayData() {
		echo "<div>";
		echo "<h2>Title: " . $this->title . "</h2>";
		echo "<p>Language: " . $this->language . "</p>";
		echo "<p>Rating: " . $this->rating . "/10</p>";
		echo "</div>";
	}
	public function getData() {
        return "Title: $this->title - Language: $this->language - Rating: $this->rating";
    }
}

class Movie extends Production {
    public $profits;
    public $duration;

    public function __construct($title, $language, $rating, $profits, $duration) {
        parent::__construct($title, $language, $rating);
        $this->profits = $profits;
        $this->duration = $duration;
    }

    public function getData() {
        return parent::getData() . " - Profits: $this->profits - Duration: $this->duration"; 
    }
}
class TVSerie extends Production {
    public $seasons;

    public function __construct($title, $language, $rating, $seasons) {
        parent::__construct($title, $language, $rating);
        $this->seasons = $seasons;
    }

    public function getData() {
        return parent::getData() . " - Seasons: $this->seasons";
    }
}
$production1 = new Production("StarWars", "English", 8);
$production2 = new Production("The Lord Of The Rings", "English", 8);
$production3 = new Production("Batman The Dark Knight", "English", 8.5);
$production4 = new Production("Back to the future", "English", 8);

$production1->displayData();
$production2->displayData();
$production3->displayData();
$production4->displayData();
$movie1 = new Movie("Ready Player One ", "English", 8, "$582 million", "1h 40m");
$tvserie1 = new TVSerie("Cobra Kai", "English", 9, 5);

echo "<p>" . $movie1->getData() . "</p>";
echo "<p>" . $tvserie1->getData() . "</p>";

?>

</body>
</html>


