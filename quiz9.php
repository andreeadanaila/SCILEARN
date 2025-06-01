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
                 <a href="quiz8.php">❮</a>
                  <a href="quiz10.php">❯</a>
                </div>
        <h5>Quiz 9: Uranus</h5>

        <?php
        // Define correct answers
        $answers = array(
            "question1" => "B",
            "question2" => "C",
            "question3" => "D",
            "question4" => "A",
            "question5" => "A"
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
            <a href="quiz9.php" class="retry-button">Try Again</a>
        <?php else: ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="question">
                    <p>1.What class of planet does Uranus belong to?</p>
                    <label><input type="radio" name="question1" value="A"> Gas giants</label><br>
                    <label><input type="radio" name="question1" value="B">  Ice giants</label><br>
                    <label><input type="radio" name="question1" value="C"> Terrestrial planets</label><br>
                    <label><input type="radio" name="question1" value="D"> Dwarf planets</label><br>
                </div>
                <div class="question">
                    <p>2.What gives Uranus its distinctive pale blue-green color?</p>
                    <label><input type="radio" name="question2" value="A"> The presence of water</label><br>
                    <label><input type="radio" name="question2" value="B"> The presence of ammonia</label><br>
                    <label><input type="radio" name="question2" value="C"> The presence of methane</label><br>
                    <label><input type="radio" name="question2" value="D">  The presence of nitrogen</label><br>
                </div>
                <div class="question">
                    <p>3.What is unique about Uranus's rotation?</p>
                    <label><input type="radio" name="question3" value="A">  It rotates faster than any other planet</label><br>
                    <label><input type="radio" name="question3" value="B">  It rotates in the opposite direction of its orbit</label><br>
                    <label><input type="radio" name="question3" value="C"> It does not rotate </label><br>
                    <label><input type="radio" name="question3" value="D"> It rotates on its side</label><br>
                </div>
                <div class="question">
                    <p>4.How many moons does Uranus have?</p>
                    <label><input type="radio" name="question4" value="A">  Over two dozen</label><br>
                    <label><input type="radio" name="question4" value="B"> 5</label><br>
                    <label><input type="radio" name="question4" value="C"> 12</label><br>
                    <label><input type="radio" name="question4" value="D"> 50</label><br>
                </div>
                <div class="question">
                    <p>5.Who discovered Uranus and when?</p>
                    <label><input type="radio" name="question5" value="A"> William Herschel in 1781</label><br>
                    <label><input type="radio" name="question5" value="B">Johannes Kepler in 1609</label><br>
                    <label><input type="radio" name="question5" value="C">Galileo Galilei in 1610</label><br>
                    <label><input type="radio" name="question5" value="D">Isaac Newton in 1687</label><br>
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