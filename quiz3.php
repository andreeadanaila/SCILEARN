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
                 <a href="quiz2.php">❮</a>
                  <a href="quiz4.php">❯</a>
                </div>
        <h5>Quiz 3: Mercury</h5>

        <?php
        // Define correct answers
        $answers = array(
            "question1" => "A",
            "question2" => "D",
            "question3" => "B",
            "question4" => "C",
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
            <a href="quiz3.php" class="retry-button">Try Again</a>
        <?php else: ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="question">
                    <p>1.What is Mercury?</p>
                    <label><input type="radio" name="question1" value="A"> A planet</label><br>
                    <label><input type="radio" name="question1" value="B"> A star</label><br>
                    <label><input type="radio" name="question1" value="C"> A moon</label><br>
                    <label><input type="radio" name="question1" value="D"> A asteroid</label><br>
                </div>
                <div class="question">
                    <p>2.What is Mercury's surface primarily covered with?</p>
                    <label><input type="radio" name="question2" value="A"> Water</label><br>
                    <label><input type="radio" name="question2" value="B"> Sand</label><br>
                    <label><input type="radio" name="question2" value="C"> Forests</label><br>
                    <label><input type="radio" name="question2" value="D"> Craters</label><br>
                </div>
                <div class="question">
                    <p>3.Why does Mercury experience extreme temperatures?</p>
                    <label><input type="radio" name="question3" value="A"> It has no atmosphere</label><br>
                    <label><input type="radio" name="question3" value="B"> It is very close to the Sun</label><br>
                    <label><input type="radio" name="question3" value="C"> It has a thick cloud cover</label><br>
                    <label><input type="radio" name="question3" value="D"> It rotates very fast</label><br>
                </div>
                <div class="question">
                    <p>4.How long is one day on Mercury compared to Earth?</p>
                    <label><input type="radio" name="question4" value="A"> About 1 Earth day</label><br>
                    <label><input type="radio" name="question4" value="B"> About 24 Earth days</label><br>
                    <label><input type="radio" name="question4" value="C"> About 59 Earth days</label><br>
                    <label><input type="radio" name="question4" value="D"> About 365 Earth days</label><br>
                </div>
                <div class="question">
                    <p>5.What spacecraft explored Mercury and provided valuable information about its surface and atmosphere?</p>
                    <label><input type="radio" name="question5" value="A"> Voyager</label><br>
                    <label><input type="radio" name="question5" value="B">Curiosity</label><br>
                    <label><input type="radio" name="question5" value="C">Hubble</label><br>
                    <label><input type="radio" name="question5" value="D"> Messenger</label><br>
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