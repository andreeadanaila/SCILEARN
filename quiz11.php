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
                 <a href="quiz10.php">❮</a>
                  <a href="quiz12.php">❯</a>
                </div>
        <h5>Quiz 11: Pluto</h5>

        <?php
        // Define correct answers
        $answers = array(
            "question1" => "B",
            "question2" => "C",
            "question3" => "C",
            "question4" => "A",
            "question5" => "D"
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
            <a href="quiz11.php" class="retry-button">Try Again</a>
        <?php else: ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="question">
                    <p>1.How does Pluto compare to Earth in terms of size and surface?</p>
                    <label><input type="radio" name="question1" value="A">  Pluto is larger with a gaseous surface.</label><br>
                    <label><input type="radio" name="question1" value="B">  Pluto is much smaller with a hard, rocky surface.</label><br>
                    <label><input type="radio" name="question1" value="C"> Pluto is the same size with a liquid surface.</label><br>
                    <label><input type="radio" name="question1" value="D"> Pluto is smaller with a gaseous surface.</label><br>
                </div>
                <div class="question">
                    <p>2.Who discovered Pluto and in what year?</p>
                    <label><input type="radio" name="question2" value="A"> Galileo Galilei in 1610</label><br>
                    <label><input type="radio" name="question2" value="B"> Johannes Kepler in 1609</label><br>
                    <label><input type="radio" name="question2" value="C"> Clyde Tombaugh in 1930</label><br>
                    <label><input type="radio" name="question2" value="D">  Albert Einstein in 1920</label><br>
                </div>
                <div class="question">
                    <p>3.What was the first space probe to visit Pluto?</p>
                    <label><input type="radio" name="question3" value="A">  Voyager 1</label><br>
                    <label><input type="radio" name="question3" value="B">  Pioneer 10</label><br>
                    <label><input type="radio" name="question3" value="C"> New Horizons</label><br>
                    <label><input type="radio" name="question3" value="D"> Galileo</label><br>
                </div>
                <div class="question">
                    <p>4.How did Pluto get its name?</p>
                    <label><input type="radio" name="question4" value="A">  Named by an 11-year-old girl, Venetia Burney, after the Roman god of the Underworld</label><br>
                    <label><input type="radio" name="question4" value="B"> Named by its discoverer Clyde Tombaugh</label><br>
                    <label><input type="radio" name="question4" value="C"> Named after a character in Greek mythology</label><br>
                    <label><input type="radio" name="question4" value="D"> Named by a vote among astronomers</label><br>
                </div>
                <div class="question">
                    <p>5.How much would a person weigh on Pluto compared to Earth?</p>
                    <label><input type="radio" name="question5" value="A"> The same as on Earth</label><br>
                    <label><input type="radio" name="question5" value="B">The same as on Earth</label><br>
                    <label><input type="radio" name="question5" value="C">Half as much as on Earth</label><br>
                    <label><input type="radio" name="question5" value="D">Around 1/15th of what they weigh on Earth</label><br>
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