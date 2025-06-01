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
                 <a href="quiz7.php">❮</a>
                  <a href="quiz9.php">❯</a>
                </div>
        <h5>Quiz 8: Saturn</h5>

        <?php
        // Define correct answers
        $answers = array(
            "question1" => "B",
            "question2" => "C",
            "question3" => "D",
            "question4" => "B",
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
            <a href="quiz8.php" class="retry-button">Try Again</a>
        <?php else: ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="question">
                    <p>1.What is Saturn primarily composed of?</p>
                    <label><input type="radio" name="question1" value="A"> Rocks and metals</label><br>
                    <label><input type="radio" name="question1" value="B">  Hydrogen and helium</label><br>
                    <label><input type="radio" name="question1" value="C"> Water and ice</label><br>
                    <label><input type="radio" name="question1" value="D"> Carbon dioxide and nitrogen</label><br>
                </div>
                <div class="question">
                    <p>2.What makes Saturn easily recognizable in the night sky?</p>
                    <label><input type="radio" name="question2" value="A"> Its bright red color</label><br>
                    <label><input type="radio" name="question2" value="B"> Its large size</label><br>
                    <label><input type="radio" name="question2" value="C"> Its stunning rings </label><br>
                    <label><input type="radio" name="question2" value="D">  Its numerous moons</label><br>
                </div>
                <div class="question">
                    <p>3.How many moons does Saturn have?</p>
                    <label><input type="radio" name="question3" value="A">  12</label><br>
                    <label><input type="radio" name="question3" value="B">  30</label><br>
                    <label><input type="radio" name="question3" value="C"> 100</label><br>
                    <label><input type="radio" name="question3" value="D"> Over 80</label><br>
                </div>
                <div class="question">
                    <p>4.What is unique about Saturn's largest moon, Titan?</p>
                    <label><input type="radio" name="question4" value="A">  It has active volcanoes</label><br>
                    <label><input type="radio" name="question4" value="B"> It is larger than the planet Mercury</label><br>
                    <label><input type="radio" name="question4" value="C"> It has no atmosphere</label><br>
                    <label><input type="radio" name="question4" value="D"> It has a hexagonal storm</label><br>
                </div>
                <div class="question">
                    <p>5.What is the hexagonal-shaped feature on Saturn?</p>
                    <label><input type="radio" name="question5" value="A"> A mountain range</label><br>
                    <label><input type="radio" name="question5" value="B">A series of craters</label><br>
                    <label><input type="radio" name="question5" value="C">A hexagonal storm at the north pole</label><br>
                    <label><input type="radio" name="question5" value="D">A large lake</label><br>
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