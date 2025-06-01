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
                 <a href="quiz4.php">❮</a>
                  <a href="quiz6.php">❯</a>
                </div>
        <h5>Quiz 5: Earth</h5>

        <?php
        // Define correct answers
        $answers = array(
            "question1" => "C",
            "question2" => "A",
            "question3" => "C",
            "question4" => "D",
            "question5" => "B"
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
            <a href="quiz5.php" class="retry-button">Try Again</a>
        <?php else: ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="question">
                    <p>1.What percentage of Earth's surface is covered by oceans?</p>
                    <label><input type="radio" name="question1" value="A"> 50%</label><br>
                    <label><input type="radio" name="question1" value="B"> 61%</label><br>
                    <label><input type="radio" name="question1" value="C"> 71%</label><br>
                    <label><input type="radio" name="question1" value="D"> 81%</label><br>
                </div>
                <div class="question">
                    <p>2.What makes Earth habitable for life?</p>
                    <label><input type="radio" name="question2" value="A"> Its unique combination of atmosphere, water, and temperature</label><br>
                    <label><input type="radio" name="question2" value="B"> Its strong magnetic field</label><br>
                    <label><input type="radio" name="question2" value="C"> Its close proximity to the sun</label><br>
                    <label><input type="radio" name="question2" value="D">  Its large size and gravity</label><br>
                </div>
                <div class="question">
                    <p>3.What is Earth's atmosphere mainly composed of?</p>
                    <label><input type="radio" name="question3" value="A">  Hydrogen and helium</label><br>
                    <label><input type="radio" name="question3" value="B">  Carbon dioxide and methane</label><br>
                    <label><input type="radio" name="question3" value="C"> Nitrogen and oxygen</label><br>
                    <label><input type="radio" name="question3" value="D"> Sulfur dioxide and nitrogen</label><br>
                </div>
                <div class="question">
                    <p>4.What natural feature affects the tides in Earth's oceans?</p>
                    <label><input type="radio" name="question4" value="A"> Earth's rotation</label><br>
                    <label><input type="radio" name="question4" value="B"> Earth's atmosphere</label><br>
                    <label><input type="radio" name="question4" value="C"> The sun</label><br>
                    <label><input type="radio" name="question4" value="D"> The moon</label><br>
                </div>
                <div class="question">
                    <p>5.Why is Earth often called the "Blue Planet"?</p>
                    <label><input type="radio" name="question5" value="A"> Because it has a blue atmosphere</label><br>
                    <label><input type="radio" name="question5" value="B">Because it appears blue from space due to its abundance of water</label><br>
                    <label><input type="radio" name="question5" value="C">Because of its blue landmasses</label><br>
                    <label><input type="radio" name="question5" value="D">  Because of its blue ice caps</label><br>
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