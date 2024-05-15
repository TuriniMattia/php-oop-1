
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
}

$production1 = new Production("StarWars", "English", 8);
$production2 = new Production("The Lord Of The Rings", "English", 8);
$production3 = new Production("Batman The Dark Knight", "English", 8.5);
$production4 = new Production("Back to the future", "English", 8);

$production1->displayData();
$production2->displayData();
$production3->displayData();
$production4->displayData();

?>

</body>
</html>


