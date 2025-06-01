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
                 <a href="quizzes.html">❮</a>
                  <a href="quiz2.php">❯</a>
                </div>
        <h5>Quiz 1: The Big Bang</h5>

        <?php
        // Define correct answers
        $answers = array(
            "question1" => "B",
            "question2" => "C",
            "question3" => "C",
            "question4" => "B",
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
            <a href="quiz1.php" class="retry-button">Try Again</a>
        <?php else: ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="question">
                    <p>1. What did the universe start as before the Big Bang</p>
                    <label><input type="radio" name="question1" value="A"> A large star</label><br>
                    <label><input type="radio" name="question1" value="B"> A tiny dot</label><br>
                    <label><input type="radio" name="question1" value="C"> A black hole</label><br>
                    <label><input type="radio" name="question1" value="D"> A giant planet</label><br>
                </div>
                <div class="question">
                    <p>2.When did the Big Bang occur?</p>
                    <label><input type="radio" name="question2" value="A"> 14 million years ago</label><br>
                    <label><input type="radio" name="question2" value="B"> 14 thousand years ago</label><br>
                    <label><input type="radio" name="question2" value="C"> 14 billion years ago</label><br>
                    <label><input type="radio" name="question2" value="D"> 140 billion years ago</label><br>
                </div>
                <div class="question">
                    <p>3.Who first came up with the idea of the Big Bang?</p>
                    <label><input type="radio" name="question3" value="A"> Isaac Newton</label><br>
                    <label><input type="radio" name="question3" value="B"> Albert Einstein</label><br>
                    <label><input type="radio" name="question3" value="C"> Georges Lemaître</label><br>
                    <label><input type="radio" name="question3" value="D"> Galileo Galilei</label><br>
                </div>
                <div class="question">
                    <p>4.What did the universe begin to form shortly after the Big Bang?</p>
                    <label><input type="radio" name="question4" value="A"> Galaxies and planets</label><br>
                    <label><input type="radio" name="question4" value="B"> AtOms of hydrogen and helium</label><br>
                    <label><input type="radio" name="question4" value="C"> Oceans and continents</label><br>
                    <label><input type="radio" name="question4" value="D"> Plants and animals</label><br>
                </div>
                <div class="question">
                    <p>5.What is the study of the universe, its creation, and development called?</p>
                    <label><input type="radio" name="question5" value="A"> Astrology</label><br>
                    <label><input type="radio" name="question5" value="B">Meteorology</label><br>
                    <label><input type="radio" name="question5" value="C">Biology</label><br>
                    <label><input type="radio" name="question5" value="D"> Cosmology</label><br>
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