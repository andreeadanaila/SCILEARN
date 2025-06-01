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
                 <a href="quiz5.php">❮</a>
                  <a href="quiz7.php">❯</a>
                </div>
        <h5>Quiz 6: Mars</h5>

        <?php
        // Define correct answers
        $answers = array(
            "question1" => "C",
            "question2" => "A",
            "question3" => "B",
            "question4" => "B",
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
            <a href="quiz6.php" class="retry-button">Try Again</a>
        <?php else: ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="question">
                    <p>1.Why is Mars often called the "Red Planet"?</p>
                    <label><input type="radio" name="question1" value="A"> Because it has red oceans</label><br>
                    <label><input type="radio" name="question1" value="B"> Because it is closer to the sun than Earth</label><br>
                    <label><input type="radio" name="question1" value="C"> Because of its rusty-red color caused by iron oxide</label><br>
                    <label><input type="radio" name="question1" value="D"> Because of its red atmosphere</label><br>
                </div>
                <div class="question">
                    <p>2.What is the main component of Mars' thin atmosphere?</p>
                    <label><input type="radio" name="question2" value="A"> Carbon dioxide</label><br>
                    <label><input type="radio" name="question2" value="B"> Nitrogen</label><br>
                    <label><input type="radio" name="question2" value="C"> Oxygen</label><br>
                    <label><input type="radio" name="question2" value="D">  Hydrogen</label><br>
                </div>
                <div class="question">
                    <p>3.What is Olympus Mons?</p>
                    <label><input type="radio" name="question3" value="A">  The largest canyon on Mars</label><br>
                    <label><input type="radio" name="question3" value="B">  The largest volcano in the solar system</label><br>
                    <label><input type="radio" name="question3" value="C"> A mountain range on Mars</label><br>
                    <label><input type="radio" name="question3" value="D"> A moon orbiting Mars</label><br>
                </div>
                <div class="question">
                    <p>4.What evidence suggests Mars may have had liquid water in the past?</p>
                    <label><input type="radio" name="question4" value="A"> Current presence of oceans</label><br>
                    <label><input type="radio" name="question4" value="B"> Dried-up riverbeds, ancient lake beds, and minerals formed in the presence of water</label><br>
                    <label><input type="radio" name="question4" value="C"> Continuous rainfall observed by spacecraft</label><br>
                    <label><input type="radio" name="question4" value="D"> Underwater volcanoes</label><br>
                </div>
                <div class="question">
                    <p>5.What is Valles Marineris?</p>
                    <label><input type="radio" name="question5" value="A"> A vast canyon system on Mars</label><br>
                    <label><input type="radio" name="question5" value="B">The tallest mountain on Mars</label><br>
                    <label><input type="radio" name="question5" value="C">The largest volcano on Mars</label><br>
                    <label><input type="radio" name="question5" value="D">A large crater on Mars</label><br>
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