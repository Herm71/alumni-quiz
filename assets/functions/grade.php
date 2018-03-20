<?php

add_shortcode ('quiz-results','quiz_results');
    function quiz_results(){
    echo "<div class='quiz-wrap'><h1>UC Santa Cruz Alumni Quiz Results</h1>";
		
		include 'variables.php';
            $firstName = $_POST['first-name'];	
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
			$answer5 = $_POST['question-5-answers'];
			$answer6 = $_POST['question-6-answers'];
			$answer7 = $_POST['question-7-answers'];
			$answer8 = $_POST['question-8-answers'];
			$answer9 = $_POST['question-9-answers'];
			$answer10 = $_POST['question-10-answers'];
			$answer11 = $_POST['question-11-answers'];
			$answer12 = $_POST['question-12-answers'];
			$answer13 = $_POST['question-13-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == $k) { $totalCorrect++; }
            if ($answer2 == $b) { $totalCorrect++; }
            if ($answer3 == $g) { $totalCorrect++; }
            if ($answer4 == $m) { $totalCorrect++; }
			if ($answer5 == $c) { $totalCorrect++; }
			if ($answer6 == $f) { $totalCorrect++; }
			if ($answer7 == $h) { $totalCorrect++; }
			if ($answer8 == $i) { $totalCorrect++; }
			if ($answer9 == $l) { $totalCorrect++; }
			if ($answer10 == $j) { $totalCorrect++; }
			if ($answer11 == $d) { $totalCorrect++; }
			if ($answer12 == $e) { $totalCorrect++; }
			if ($answer13 == $a) { $totalCorrect++; }
			// Correct $answers
			if($answer1 == $k && $answer2 == $b && $answer3 == $g && $answer4 == $m && $answer5 == $c && $answer6 == $f && $answer7 == $h && $answer8 == $i && $answer9 == $l && $answer10 == $j && $answer11 == $d && $answer12 == $e && $answer13 == $a)
				{
					echo "<p>Nice try, ".$firstName."</p>";
					echo "<div class='results'>
					<ol>
					
                    <li><img src=".plugins_url('images/alonso-200h.png', __DIR__)."><h3>".$alumni1."</h3><p>".$alumni1Job."</p>
                    
					<p>
					</li>
					<li>
					<img src=".plugins_url('images/barnes-200h.png', __DIR__)."><h3>".$alumni2."</h3><p>".$alumni2Job."</p>
					</li>
					<li>
					<img src=".plugins_url('images/beggs-200h.png', __DIR__)."><h3>".$alumni3."</h3><p>".$alumni3Job."</p>
					</li>
					<li>
					<img src=".plugins_url('images/grande-200h.png', __DIR__)."><h3>".$alumni4."</h3><p>".$alumni4Job."</p>
					</li>
					<li>
					<img src=".plugins_url('images/laird-200h.png', __DIR__)."><h3>".$alumni5."</h3><p>".$alumni5Job."</p>
					</li>
					<li>
					<img src=".plugins_url('images/mendoza-200h.png', __DIR__)."><h3>".$alumni6."</h3><p>".$alumni6Job."</p>
					</li>
					<li>
					<img src=".plugins_url('images/nagano-200h.png', __DIR__)."><h3>".$alumni7."</h3><p>".$alumni7Job."</p>
					</li>
					<li>
					<img src=".plugins_url('images/packard-200h.png', __DIR__)."><h3>".$alumni8."</h3><p>".$alumni8Job."</p>
					</li>
					<li>
					<img src=".plugins_url('images/perry-200h.png', __DIR__)."><h3>".$alumni9."</h3><p>".$alumni9Job."</p>
					</li>
					<li>
					<img src=".plugins_url('images/sanjayan-200h.png', __DIR__)."><h3>".$alumni10."</h3><p>".$alumni10Job."</p>
					</li>
					<li>
					<img src=".plugins_url('images/sullivan-200h.png', __DIR__)."><h3>".$alumni11."</h3><p>".$alumni11Job."</p>
					</li>
					<li>
					<img src=".plugins_url('images/weil-200h.png', __DIR__)."><h3>".$alumni12."</h3><p>".$alumni12Job."</p>
					</li>
					<li>
					<img src=".plugins_url('images/wojcicki-200h.png', __DIR__)."><h3>".$alumni13."</h3><p>".$alumni13Job."</p>
					</li>
					</ol></div>";
							echo "<div id='results'>$totalCorrect / 13 correct</div>";
							$file = plugin_dir_path('results.php', __DIR__);
							$json = json_encode($_POST);
							var_dump($file);
							file_put_contents($file,$json, FILE_APPEND | LOCK_EX);
				} else {
					echo "<p>You Lose! ".$firstName."</p>";
							echo "<div id='results'>$totalCorrect / 13 correct</div>";
							echo "<div class='results'>";
					echo "<ol>";
					
					echo "<li>";
					echo '<img src="' . plugins_url( 'images/alonso-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni1."</h3><p>".$alumni1Job."</p>";
					if ($answer1 == $k){
						echo "<p class='correct'>Correct!</p>";
					} else {
						echo "<p class='incorrect'>Your answer: ".$answer1."</p>";
					};
					echo "</li>";
					echo "<li>";
					echo '<img src="' . plugins_url( 'images/barnes-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni2."</h3><p>".$alumni2Job."</p>";
					if ($answer2 == $b){
						echo "<p class='correct'>Correct!</p>";
					} else {
						echo "<p class='incorrect'>Your answer: ".$answer2."</p>";
					};
					echo "</li>";
					echo "<li>";
					echo '<img src="' . plugins_url( 'images/beggs-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni3."</h3><p>".$alumni3Job."</p>";
					if ($answer3 == $g){
						echo "<p class='correct'>Correct!</p>";
					} else {
						echo "<p class='incorrect'>Your answer: ".$answer3."</p>";
					};
					echo "</li>";
					echo "<li>";
					echo '<img src="' . plugins_url( 'images/grande-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni4."</h3><p>".$alumni4Job."</p>";
					if ($answer4 == $m){
						echo "<p class='correct'>Correct!</p>";
					} else {
						echo "<p class='incorrect'>Your answer: ".$answer4."</p>";
					};
					echo "</li>";
					echo "<li>";
					echo '<img src="' . plugins_url( 'images/laird-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni5."</h3><p>".$alumni5Job."</p>";
					if ($answer5 == $c){
						echo "<p class='correct'>Correct!</p>";
					} else {
						echo "<p class='incorrect'>Your answer: ".$answer5."</p>";
					};
					echo "</li>";
					echo "<li>";
					echo '<img src="' . plugins_url( 'images/mendoza-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni6."</h3><p>".$alumni6Job."</p>";
					if ($answer6 == $f){
						echo "<p class='correct'>Correct!</p>";
					} else {
						echo "<p class='incorrect'>Your answer: ".$answer6."</p>";
					};
					echo "</li>";
					echo "<li>";
					echo '<img src="' . plugins_url( 'images/nagano-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni7."</h3><p>".$alumni7Job."</p>";
					if ($answer7 == $h){
						echo "<p class='correct'>Correct!</p>";
					} else {
						echo "<p class='incorrect'>Your answer: ".$answer7."</p>";
					};
					echo "</li>";
					echo "<li>";
					echo '<img src="' . plugins_url( 'images/packard-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni8."</h3><p>".$alumni8Job."</p>";
					if ($answer8 == $i){
						echo "<p class='correct'>Correct!</p>";
					} else {
						echo "<p class='incorrect'>Your answer: ".$answer8."</p>";
					};
					echo "</li>";
					echo "<li>";
					echo '<img src="' . plugins_url( 'images/perry-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni9."</h3><p>".$alumni9Job."</p>";
					if ($answer9 == $l){
						echo "<p class='correct'>Correct!</p>";
					} else {
						echo "<p class='incorrect'>Your answer: ".$answer9."</p>";
					};
					echo "</li>";
					echo "<li>";
					echo '<img src="' . plugins_url( 'images/sanjayan-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni10."</h3><p>".$alumni10Job."</p>";
					if ($answer10 == $j){
						echo "<p class='correct'>Correct!</p>";
					} else {
						echo "<p class='incorrect'>Your answer: ".$answer10."</p>";
					};
					echo "</li>";
					echo "<li>";
					echo '<img src="' . plugins_url( 'images/sullivan-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni11."</h3><p>".$alumni11Job."</p>";
					if ($answer11 == $d){
						echo "<p class='correct'>Correct!</p>";
					} else {
						echo "<p class='incorrect'>Your answer: ".$answer11."</p>";
					};
					echo "</li>";
					echo "<li>";
					echo '<img src="' . plugins_url( 'images/weil-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni12."</h3><p>".$alumni12Job."</p>";
					if ($answer12 == $e){
						echo "<p class='correct'>Correct!</p>";
					} else {
						echo "<p class='incorrect'>Your answer: ".$answer12."</p>";
					};
					echo "</li>";
                    echo "<li>";
                    echo '<img src="' . plugins_url( 'images/wojcicki-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni13."</h3><p>".$alumni13Job."</p>";
					if ($answer13 == $a){
						echo "<p class='correct'>Correct!</p>";
					} else {
						echo "<p class='incorrect'>Your answer: ".$answer13."</p>";
					};
					echo "</li>";
					echo "</ol></div>";
					echo "<div class='clear'></div>";
							echo '<button type="reset" value="Try again" />Try Again</button>';
				}
	
    echo '</div>';
            }

    ?>