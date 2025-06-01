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
                 <a href="quiz3.php">❮</a>
                  <a href="quiz5.php">❯</a>
                </div>
        <h5>Quiz 4: Venus</h5>

        <?php
        // Define correct answers
        $answers = array(
            "question1" => "B",
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
            <a href="quiz4.php" class="retry-button">Try Again</a>
        <?php else: ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="question">
                    <p>1.What type of planet is Venus?</p>
                    <label><input type="radio" name="question1" value="A"> Gas giant</label><br>
                    <label><input type="radio" name="question1" value="B"> Rocky planet</label><br>
                    <label><input type="radio" name="question1" value="C"> Dwarf planet</label><br>
                    <label><input type="radio" name="question1" value="D"> Ice planet</label><br>
                </div>
                <div class="question">
                    <p>2.Why does Venus appear incredibly bright from Earth?</p>
                    <label><input type="radio" name="question2" value="A"> It has a highly reflective surface</label><br>
                    <label><input type="radio" name="question2" value="B"> It emits its own light</label><br>
                    <label><input type="radio" name="question2" value="C"> It is covered in ice crystals</label><br>
                    <label><input type="radio" name="question2" value="D">  It has thick clouds of sulfuric acid</label><br>
                </div>
                <div class="question">
                    <p>3.What makes Venus the hottest planet in our solar system?</p>
                    <label><input type="radio" name="question3" value="A">  It is closest to the sun</label><br>
                    <label><input type="radio" name="question3" value="B">  It has a thick atmosphere that traps heat</label><br>
                    <label><input type="radio" name="question3" value="C"> It has active volcanoes</label><br>
                    <label><input type="radio" name="question3" value="D"> It is covered in ice</label><br>
                </div>
                <div class="question">
                    <p>4.How does Venus' rotation differ from most other planets?</p>
                    <label><input type="radio" name="question4" value="A"> It does not rotate</label><br>
                    <label><input type="radio" name="question4" value="B"> It spins very fast</label><br>
                    <label><input type="radio" name="question4" value="C"> It spins in the opposite direction</label><br>
                    <label><input type="radio" name="question4" value="D"> It has a tilted axis</label><br>
                </div>
                <div class="question">
                    <p>5.Why is Venus often called the "morning star" or the "evening star"?</p>
                    <label><input type="radio" name="question5" value="A"> Because it twinkles</label><br>
                    <label><input type="radio" name="question5" value="B">Because it is visible during the day</label><br>
                    <label><input type="radio" name="question5" value="C">Because it is very close to Earth</label><br>
                    <label><input type="radio" name="question5" value="D"> Because it is one of the brightest objects in the sky</label><br>
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