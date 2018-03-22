<?php

add_shortcode ('quiz-results','quiz_results');
    function quiz_results(){
		?><!-- <begin remove from here> -->
		<div class="quiz-container">
	<div class="quiz-content">
	<div class="quiz-content-area">
	
		<!-- <end remove from here> --><?php
    echo "<div class='quiz-wrap'><h3>UC Santa Cruz alumni quiz results</h3>";
		
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
					echo "<p>Excellent <strong>$firstName</strong>, $totalCorrect / 13 correct!</p><p>Your name has been submitted for a drawing to win free admission for a guest when you <a href='http://alumniweekend.ucsc.edu/sessions/annual-beer-and-wine-reception/' title='Register for Alumni Weekend'><strong>register for the Alumni Weekend beer and wine reception on April 28, 2018</strong></a>.</p><hr>";
					echo "<div class='results'>
					<ol>
					
					<li class='one-fourth first'>
					<img src=".plugins_url('images/alonso-200h.png', __DIR__)."><h3>".$alumni1."</h3><p class='alumni-job'>".$alumni1Job."</p><hr>
					</li>
					<li class='one-fourth'>
					<img src=".plugins_url('images/barnes-200h.png', __DIR__)."><h3>".$alumni2."</h3><p class='alumni-job'>".$alumni2Job."</p><hr>
					</li>
					<li class='one-fourth'>
					<img src=".plugins_url('images/beggs-200h.png', __DIR__)."><h3>".$alumni3."</h3><p class='alumni-job'>".$alumni3Job."</p><hr>
					</li>
					<li class='one-fourth'>
					<img src=".plugins_url('images/grande-200h.png', __DIR__)."><h3>".$alumni4."</h3><p class='alumni-job'>".$alumni4Job."</p><hr>
					</li>
					<li class='one-fourth first'>
					<img src=".plugins_url('images/laird-200h.png', __DIR__)."><h3>".$alumni5."</h3><p class='alumni-job'>".$alumni5Job."</p><hr>
					</li>
					<li class='one-fourth'>
					<img src=".plugins_url('images/mendoza-200h.png', __DIR__)."><h3>".$alumni6."</h3><p class='alumni-job'>".$alumni6Job."</p><hr>
					</li>
					<li class='one-fourth'>
					<img src=".plugins_url('images/nagano-200h.png', __DIR__)."><h3>".$alumni7."</h3><p class='alumni-job'>".$alumni7Job."</p><hr>
					</li>
					<li class='one-fourth'>
					<img src=".plugins_url('images/packard-200h.png', __DIR__)."><h3>".$alumni8."</h3><p class='alumni-job'>".$alumni8Job."</p><hr>
					</li>
					<li class='one-fourth first'>
					<img src=".plugins_url('images/perry-200h.png', __DIR__)."><h3>".$alumni9."</h3><p class='alumni-job'>".$alumni9Job."</p><hr>
					</li>
					<li class='one-fourth'>
					<img src=".plugins_url('images/sanjayan-200h.png', __DIR__)."><h3>".$alumni10."</h3><p class='alumni-job'>".$alumni10Job."</p><hr>
					</li>
					<li class='one-fourth'>
					<img src=".plugins_url('images/sullivan-200h.png', __DIR__)."><h3>".$alumni11."</h3><p class='alumni-job'>".$alumni11Job."</p><hr>
					</li>
					<li class='one-fourth'>
					<img src=".plugins_url('images/weil-200h.png', __DIR__)."><h3>".$alumni12."</h3><p class='alumni-job'>".$alumni12Job."</p><hr>
					</li>
					<li class='one-fourth first'>
					<img src=".plugins_url('images/wojcicki-200h.png', __DIR__)."><h3>".$alumni13."</h3><p class='alumni-job'>".$alumni13Job."</p><hr>
					</li>
					</ol></div>";
							$dir = plugin_dir_path( __FILE__ );
							$file = $dir.'results.php';
							$json = json_encode($_POST);
							//var_dump($json);
							file_put_contents($file,$json, FILE_APPEND | LOCK_EX);
				} else {
					echo "<p>Nice try <strong>$firstName</strong>! You got <strong>$totalCorrect / 13 correct.</strong></p><p>Review your answers below. If you'd like give it another shot, click <strong>try again</strong> at the bottom of the page.</p><hr>";
							echo "<div class='results'>";
					echo "<ol>";
					
					echo "<li class='one-fourth first'>";
					echo '<img src="' . plugins_url( 'images/alonso-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni1."</h3><p class='alumni-job'>".$alumni1Job."</p><hr>";
					if ($answer1 == $k){
						echo "<p class='correct'>Correct!</p><hr>";
					} else {
						echo "<p class='incorrect'><span>Your answer:</span><br> ".$answer1."</p><hr>";
					};
					echo "</li>";
					echo "<li class='one-fourth'>";
					echo '<img src="' . plugins_url( 'images/barnes-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni2."</h3><p class='alumni-job'>".$alumni2Job."</p><hr>";
					if ($answer2 == $b){
						echo "<p class='correct'>Correct!</p><hr>";
					} else {
						echo "<p class='incorrect'><span>Your answer:</span><br> ".$answer2."</p><hr>";
					};
					echo "</li>";
					echo "<li class='one-fourth'>";
					echo '<img src="' . plugins_url( 'images/beggs-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni3."</h3><p class='alumni-job'>".$alumni3Job."</p><hr>";
					if ($answer3 == $g){
						echo "<p class='correct'>Correct!</p><hr>";
					} else {
						echo "<p class='incorrect'><span>Your answer:</span><br>".$answer3."</p><hr>";
					};
					echo "</li>";
					echo "<li class='one-fourth'>";
					echo '<img src="' . plugins_url( 'images/grande-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni4."</h3><p class='alumni-job'>".$alumni4Job."</p><hr>";
					if ($answer4 == $m){
						echo "<p class='correct'>Correct!</p><hr>";
					} else {
						echo "<p class='incorrect'><span>Your answer:</span><br>".$answer4."</p><hr>";
					};
					echo "</li>";
					echo "<li class='one-fourth first'>";
					echo '<img src="' . plugins_url( 'images/laird-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni5."</h3><p class='alumni-job'>".$alumni5Job."</p><hr>";
					if ($answer5 == $c){
						echo "<p class='correct'>Correct!</p><hr>";
					} else {
						echo "<p class='incorrect'><span>Your answer:</span><br>".$answer5."</p><hr>";
					};
					echo "</li>";
					echo "<li class='one-fourth'>";
					echo '<img src="' . plugins_url( 'images/mendoza-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni6."</h3><p class='alumni-job'>".$alumni6Job."</p><hr>";
					if ($answer6 == $f){
						echo "<p class='correct'>Correct!</p><hr>";
					} else {
						echo "<p class='incorrect'><span>Your answer:</span><br>".$answer6."</p><hr>";
					};
					echo "</li>";
					echo "<li class='one-fourth'>";
					echo '<img src="' . plugins_url( 'images/nagano-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni7."</h3><p class='alumni-job'>".$alumni7Job."</p><hr>";
					if ($answer7 == $h){
						echo "<p class='correct'>Correct!</p><hr>";
					} else {
						echo "<p class='incorrect'><span>Your answer:</span><br>".$answer7."</p><hr>";
					};
					echo "</li>";
					echo "<li class='one-fourth'>";
					echo '<img src="' . plugins_url( 'images/packard-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni8."</h3><p class='alumni-job'>".$alumni8Job."</p><hr>";
					if ($answer8 == $i){
						echo "<p class='correct'>Correct!</p><hr>";
					} else {
						echo "<p class='incorrect'><span>Your answer:</span><br>".$answer8."</p><hr>";
					};
					echo "</li>";
					echo "<li class='one-fourth first'>";
					echo '<img src="' . plugins_url( 'images/perry-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni9."</h3><p class='alumni-job'>".$alumni9Job."</p><hr>";
					if ($answer9 == $l){
						echo "<p class='correct'>Correct!</p><hr>";
					} else {
						echo "<p class='incorrect'><span>Your answer:</span><br>".$answer9."</p><hr>";
					};
					echo "</li>";
					echo "<li class='one-fourth'>";
					echo '<img src="' . plugins_url( 'images/sanjayan-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni10."</h3><p class='alumni-job'>".$alumni10Job."</p><hr>";
					if ($answer10 == $j){
						echo "<p class='correct'>Correct!</p><hr>";
					} else {
						echo "<p class='incorrect'><span>Your answer:</span><br>".$answer10."</p><hr>";
					};
					echo "</li>";
					echo "<li class='one-fourth'>";
					echo '<img src="' . plugins_url( 'images/sullivan-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni11."</h3><p class='alumni-job'>".$alumni11Job."</p><hr>";
					if ($answer11 == $d){
						echo "<p class='correct'>Correct!</p><hr>";
					} else {
						echo "<p class='incorrect'><span>Your answer:</span><br>".$answer11."</p><hr>";
					};
					echo "</li>";
					echo "<li class='one-fourth'>";
					echo '<img src="' . plugins_url( 'images/weil-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni12."</h3><p class='alumni-job'>".$alumni12Job."</p><hr>";
					if ($answer12 == $e){
						echo "<p class='correct'>Correct!</p><hr>";
					} else {
						echo "<p class='incorrect'><span>Your answer:</span><br>".$answer12."</p><hr>";
					};
					echo "</li>";
                    echo "<li class='one-fourth first'>";
                    echo '<img src="' . plugins_url( 'images/wojcicki-200h.png', __DIR__ ) . '" > ';
					echo "<h3>".$alumni13."</h3><p class='alumni-job'>".$alumni13Job."</p><hr>";
					if ($answer13 == $a){
						echo "<p class='correct'>Correct!</p><hr>";
					} else {
						echo "<p class='incorrect'><span>Your answer:</span><br>".$answer13."</p><hr>";
					};
					echo "</li>";
					echo "</ol></div>";
					echo "<div class='clear'></div>";
					echo '<div id="try-again"><form method="post"><input type="button" value="Try again" OnClick="history.go( -1 );return true;"></form></div>';
				}
	
	echo '</div>';
	?><!-- <begin remove from here> -->
    </div>
<div class="quiz-widget-area">Hello World</div>
</div>
</div>

    <!-- <end remove from here> --><?php
            }

    ?>