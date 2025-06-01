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
                 <a href="quiz9.php">❮</a>
                  <a href="quiz11.php">❯</a>
                </div>
        <h5>Quiz 10: Neptune</h5>

        <?php
        // Define correct answers
        $answers = array(
            "question1" => "B",
            "question2" => "A",
            "question3" => "C",
            "question4" => "D",
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
            <a href="quiz10.php" class="retry-button">Try Again</a>
        <?php else: ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="question">
                    <p>1.What gives Neptune its striking blue color?</p>
                    <label><input type="radio" name="question1" value="A"> Water</label><br>
                    <label><input type="radio" name="question1" value="B">  Methane</label><br>
                    <label><input type="radio" name="question1" value="C"> Ammonia</label><br>
                    <label><input type="radio" name="question1" value="D"> Nitrogen</label><br>
                </div>
                <div class="question">
                    <p>2.What is Neptune's Great Dark Spot?</p>
                    <label><input type="radio" name="question2" value="A"> A giant storm</label><br>
                    <label><input type="radio" name="question2" value="B"> A large volcano</label><br>
                    <label><input type="radio" name="question2" value="C"> A massive crater</label><br>
                    <label><input type="radio" name="question2" value="D">  An ice cap</label><br>
                </div>
                <div class="question">
                    <p>3.How many moons does Neptune have?</p>
                    <label><input type="radio" name="question3" value="A">  4</label><br>
                    <label><input type="radio" name="question3" value="B">  8</label><br>
                    <label><input type="radio" name="question3" value="C"> Over a dozen</label><br>
                    <label><input type="radio" name="question3" value="D"> 20</label><br>
                </div>
                <div class="question">
                    <p>4.Which spacecraft provided the first close-up views of Neptune?</p>
                    <label><input type="radio" name="question4" value="A">  Voyager 1</label><br>
                    <label><input type="radio" name="question4" value="B"> Pioneer 10</label><br>
                    <label><input type="radio" name="question4" value="C"> Cassini</label><br>
                    <label><input type="radio" name="question4" value="D"> Voyager 2</label><br>
                </div>
                <div class="question">
                    <p>5.What is unique about Neptune's largest moon, Triton?</p>
                    <label><input type="radio" name="question5" value="A"> It is larger than Earth</label><br>
                    <label><input type="radio" name="question5" value="B">It has an atmosphere thicker than Neptune's</label><br>
                    <label><input type="radio" name="question5" value="C">It orbits Neptune in the opposite direction of the planet's rotation</label><br>
                    <label><input type="radio" name="question5" value="D">It has liquid oceans</label><br>
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