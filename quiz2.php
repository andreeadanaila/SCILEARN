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
                 <a href="quiz1.php">❮</a>
                  <a href="quiz3.php">❯</a>
                </div>
        <h5>Quiz 2: The Sun</h5>

        <?php
        // Define correct answers
        $answers = array(
            "question1" => "B",
            "question2" => "C",
            "question3" => "B",
            "question4" => "C",
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
            <a href="quiz2.php" class="retry-button">Try Again</a>
        <?php else: ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="question">
                    <p>1.What is the Sun mainly made of?</p>
                    <label><input type="radio" name="question1" value="A"> Water and Ice</label><br>
                    <label><input type="radio" name="question1" value="B"> Hydrogen and Helium</label><br>
                    <label><input type="radio" name="question1" value="C"> Iron and Nickel</label><br>
                    <label><input type="radio" name="question1" value="D"> Carbon and Oxygen</label><br>
                </div>
                <div class="question">
                    <p>2.What are sunspots?</p>
                    <label><input type="radio" name="question2" value="A"> Bright spots that are hotter than the rest of the Sun</label><br>
                    <label><input type="radio" name="question2" value="B"> Small planets orbiting the Sun</label><br>
                    <label><input type="radio" name="question2" value="C"> Dark spots that are cooler areas on the Sun's surface</label><br>
                    <label><input type="radio" name="question2" value="D"> Spaceships blocking sunlight</label><br>
                </div>
                <div class="question">
                    <p>3.How does the Sun help plants grow?</p>
                    <label><input type="radio" name="question3" value="A"> By giving them rain</label><br>
                    <label><input type="radio" name="question3" value="B"> By providing sunlight for photosynthesis</label><br>
                    <label><input type="radio" name="question3" value="C"> By giving them soil</label><br>
                    <label><input type="radio" name="question3" value="D"> By scaring away animals</label><br>
                </div>
                <div class="question">
                    <p>4.How long does it take for sunlight to travel from the Sun to Earth?</p>
                    <label><input type="radio" name="question4" value="A"> 1 second</label><br>
                    <label><input type="radio" name="question4" value="B"> 1 minute</label><br>
                    <label><input type="radio" name="question4" value="C"> 8 minutes</label><br>
                    <label><input type="radio" name="question4" value="D"> 8 hours</label><br>
                </div>
                <div class="question">
                    <p>5.How old is the Sun?</p>
                    <label><input type="radio" name="question5" value="A"> 4.6 million years</label><br>
                    <label><input type="radio" name="question5" value="B">100 million years</label><br>
                    <label><input type="radio" name="question5" value="C">1 billion years</label><br>
                    <label><input type="radio" name="question5" value="D"> 10 billion years</label><br>
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