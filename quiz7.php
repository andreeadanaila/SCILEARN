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
                 <a href="quiz6.php">❮</a>
                  <a href="quiz8.php">❯</a>
                </div>
        <h5>Quiz 7: Jupiter</h5>

        <?php
        // Define correct answers
        $answers = array(
            "question1" => "B",
            "question2" => "D",
            "question3" => "C",
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
            <a href="quiz7.php" class="retry-button">Try Again</a>
        <?php else: ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="question">
                    <p>1.What is Jupiter primarily composed of?</p>
                    <label><input type="radio" name="question1" value="A"> Rocks and metals</label><br>
                    <label><input type="radio" name="question1" value="B">  Hydrogen and helium</label><br>
                    <label><input type="radio" name="question1" value="C"> Water and ice</label><br>
                    <label><input type="radio" name="question1" value="D"> Carbon dioxide and nitrogen</label><br>
                </div>
                <div class="question">
                    <p>2.What is the Great Red Spot on Jupiter?</p>
                    <label><input type="radio" name="question2" value="A"> A giant mountain</label><br>
                    <label><input type="radio" name="question2" value="B"> A massive ocean</label><br>
                    <label><input type="radio" name="question2" value="C"> A large crater </label><br>
                    <label><input type="radio" name="question2" value="D">  An enormous storm system</label><br>
                </div>
                <div class="question">
                    <p>3.How many moons does Jupiter have?</p>
                    <label><input type="radio" name="question3" value="A">  4</label><br>
                    <label><input type="radio" name="question3" value="B">  12</label><br>
                    <label><input type="radio" name="question3" value="C"> Over 70</label><br>
                    <label><input type="radio" name="question3" value="D"> 100</label><br>
                </div>
                <div class="question">
                    <p>4.What are the names of Jupiter's four largest moons?</p>
                    <label><input type="radio" name="question4" value="A"> Titan, Enceladus, Tethys, Rhea</label><br>
                    <label><input type="radio" name="question4" value="B"> Io, Europa, Ganymede, Callisto</label><br>
                    <label><input type="radio" name="question4" value="C"> Phobos, Deimos, Triton, Charon</label><br>
                    <label><input type="radio" name="question4" value="D"> Miranda, Ariel, Umbriel, Titania</label><br>
                </div>
                <div class="question">
                    <p>5.What is unique about Jupiter's ring system?</p>
                    <label><input type="radio" name="question5" value="A"> It consists of faint dust particles and is not easily visible from Earth</label><br>
                    <label><input type="radio" name="question5" value="B">It is more prominent than Saturn's rings</label><br>
                    <label><input type="radio" name="question5" value="C">It is made of solid</label><br>
                    <label><input type="radio" name="question5" value="D">It glows in the dark</label><br>
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