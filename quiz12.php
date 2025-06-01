<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Solar System</title>
	
	<link rel="stylesheet" href="styles.css" />
</head>
<body>
    <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
 <script>
        function toggleFlip(card) {
            card.classList.toggle('is-flipped');
        }
    </script>
	<div class="navbar">
     <img src="images/logo.jpg" alt="Astronaut Logo">
      <a href="faq.html"><i class="fa fa-fw fa-question-circle-o"></i>FAQ</a>
       <a href="news.html"><i class="fa fa-fw fa-bullhorn"></i> APOD</a> 
       <a href="review.html"><i class="fa fa-fw fa-sticky-note-o"></i> Review</a>
        <a href="courses.html"><i class="fa fa-fw fa-book"></i>Courses</a>
        <a href="mission.html"><i class="fa fa-fw fa-child"></i> Our Mission</a> 
      <a href="home.html"><i class="fa fa-fw fa-home"></i> Home</a> 
</div>
    <section>
		<div class="container">
			<div class="my-row">
            <div class="my-column">
                <div class="card" style="height: 895px">
                    <div class="quiz-container">
                    <div class="pagination">
                 <a href="quiz11.php">❮</a>
                </div>
        <h5>Quiz 12: Stars</h5>

        <?php
        // Define correct answers
        $answers = array(
            "question1" => "C",
            "question2" => "B",
            "question3" => "D",
            "question4" => "C",
            "question5" => "C"
        );

        // Initialize score and other variables
        $score = 0;
        $totalQuestions = count($answers);
        $showResults = false;

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $showResults = true;
            // Calculate score
            foreach ($answers as $question => $correctAnswer) {
                if (isset($_POST[$question]) && $_POST[$question] == $correctAnswer) {
                    $score++;
                }
            }

            // Calculate percentage
            $percentage = ($score / $totalQuestions) * 100;
        }
        ?>

        <?php if ($showResults): ?>
            <div class="result">
                <p>You scored <?php echo $score; ?> out of <?php echo $totalQuestions; ?>.</p>
                <p>Your grade is: <?php echo round($percentage); ?>%</p>
            </div>
            <a href="quiz12.php" class="retry-button">Try Again</a>
        <?php else: ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="question">
                    <p>1.What is a galaxy?</p>
                    <label><input type="radio" name="question1" value="A">  A single star</label><br>
                    <label><input type="radio" name="question1" value="B">  A group of planets</label><br>
                    <label><input type="radio" name="question1" value="C"> A group of stars and other space stuff</label><br>
                    <label><input type="radio" name="question1" value="D"> A giant comet</label><br>
                </div>
                <div class="question">
                    <p>2.What galaxy do we live in?</p>
                    <label><input type="radio" name="question2" value="A"> Andromeda</label><br>
                    <label><input type="radio" name="question2" value="B"> Milky Way</label><br>
                    <label><input type="radio" name="question2" value="C"> Whirlpool</label><br>
                    <label><input type="radio" name="question2" value="D">  Triangulum</label><br>
                </div>
                <div class="question">
                    <p>3.How many galaxies do scientists think there are in the universe?</p>
                    <label><input type="radio" name="question3" value="A">  Over 100 million</label><br>
                    <label><input type="radio" name="question3" value="B">  Over 100 trillion</label><br>
                    <label><input type="radio" name="question3" value="C"> Over 100 thousand</label><br>
                    <label><input type="radio" name="question3" value="D"> Over 100 billion</label><br>
                </div>
                <div class="question">
                    <p>4.What type of galaxy is the Milky Way?</p>
                    <label><input type="radio" name="question4" value="A">  Elliptical</label><br>
                    <label><input type="radio" name="question4" value="B"> Irregular</label><br>
                    <label><input type="radio" name="question4" value="C"> Spiral</label><br>
                    <label><input type="radio" name="question4" value="D"> Barrel spiral</label><br>
                </div>
                <div class="question">
                    <p>5.What mysterious substance do scientists believe makes up most of the mass in galaxies?</p>
                    <label><input type="radio" name="question5" value="A"> Dark energy</label><br>
                    <label><input type="radio" name="question5" value="B">Black holes</label><br>
                    <label><input type="radio" name="question5" value="C">Dark Matter</label><br>
                    <label><input type="radio" name="question5" value="D">White Dwarfs</label><br>
                </div>
                <input type="submit" value="Submit">
            </form>
        <?php endif; ?>
    </div>
        </div>
        </div>
      </div>
        </div>
	</section>
</body>
</html>