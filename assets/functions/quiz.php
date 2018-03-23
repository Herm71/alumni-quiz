
<?php
add_shortcode ('alumni-quiz', 'alumni_quiz');
function alumni_quiz(){
    include 'variables.php';
    include 'top-wrap.php'
?>
    
    <div class="quiz-wrap">

            <!-- <h3>UC Santa Cruz alumni quiz</h3> -->
            <p>Match the alumni illustration with the corresponding job title, career, or achievement and enter to win free admission for a guest when you <a href='http://alumniweekend.ucsc.edu/sessions/annual-beer-and-wine-reception/' title='Register for Alumni Weekend'><strong>register for the Alumni Weekend beer and wine reception on April 28, 2018</strong></a>&mdash;a $25 value!</p>
            <form action="<?php echo  get_permalink(get_page_by_path( 'quiz-results' )); ?>" method="post" id="quiz" class="quiz-form">
            <div class="one-third first yoa">
            <?php echo '<img src="' . plugins_url( 'images/y-o-a-badge-200w.png', __DIR__ ) . '" > ';?>

            </div>
            <div class="two-thirds">
            <ul>
                <li class="one-half first"><input id="first-name" type="text" name="first-name" value="" placeholder="First name*" required><span class="error"><?php echo $firstNameErr;?></span></li>
                <li class="one-half"><input id="last-name*" type="text" name="last-name" value="" placeholder="Last name*" required></li>
                <li class="one-half first"><input id="email" type="email" name="email" value="" placeholder="Email*" required></li>
                <li class="one-half"><input id="phone" type="tel" name="phone" value="" placeholder="Phone"></li>
                <div class="clear"></div>
                <li>* Required fields</li>
            </ul>
            </div>
            <div class="clear"></div>
            <hr>
                <ol>
                
                    <li >
                     <?php echo '<img src="' . plugins_url( 'images/alonso-200h.png', __DIR__ ) . '" > ';?>
                    
                        <h3><?php echo $alumni1?></h3>
                        <select name="question-1-answers">
                    <option value="">Select one</option>
                    <option id="question-1-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                    <option id="question-1-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                    <option id="question-1-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                    <option id="question-1-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?></option>
                    <option id="question-1-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                    <option id="question-1-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                    <option id="question-1-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                    <option id="question-1-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                    <option id="question-1-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                    <option id="question-1-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                    <option id="question-1-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                    <option id="question-1-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                    <option id="question-1-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                </select>                   
                    </li>
                    
                    <li >
                
                    <?php echo '<img src="' . plugins_url( 'images/barnes-200h.png', __DIR__ ) . '" > ';?>
                        <h3><?php echo $alumni2?></h3>
                        <select name="question-2-answers">
                    <option value="">Select one</option>
                    <option id="question-2-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                    <option id="question-2-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                    <option id="question-2-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                    <option id="question-2-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                    <option id="question-2-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                    <option id="question-2-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                    <option id="question-2-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                    <option id="question-2-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                    <option id="question-2-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                    <option id="question-2-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                    <option id="question-2-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                    <option id="question-2-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                    <option id="question-2-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                </select>             
                
                    </li>
                    
                    <li >
                    
                    <?php echo '<img src="' . plugins_url( 'images/beggs-200h.png', __DIR__ ) . '" > ';?>
                        <h3><?php echo $alumni3?></h3>
                        <select name="question-3-answers">
                    <option value="">Select one</option>
                    <option id="question-3-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                    <option id="question-3-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                    <option id="question-3-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                    <option id="question-3-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                    <option id="question-3-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                    <option id="question-3-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                    <option id="question-3-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                    <option id="question-3-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                    <option id="question-3-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                    <option id="question-3-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                    <option id="question-3-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                    <option id="question-3-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                    <option id="question-3-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                </select>             
                    
                    </li>
                    
                    <li >
                    <?php echo '<img src="' . plugins_url( 'images/grande-200h.png', __DIR__ ) . '" > ';?>
                        <h3><?php echo $alumni4?></h3>
                        <select name="question-4-answers">
                    <option value="">Select one</option>
                    <option id="question-4-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                    <option id="question-4-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                    <option id="question-4-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                    <option id="question-4-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                    <option id="question-4-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                    <option id="question-4-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                    <option id="question-4-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                    <option id="question-4-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                    <option id="question-4-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                    <option id="question-4-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                    <option id="question-4-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                    <option id="question-4-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                    <option id="question-4-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                </select>             
                    
                    </li>
                    
                    <li >
                    <?php echo '<img src="' . plugins_url( 'images/laird-200h.png', __DIR__ ) . '" > ';?>
                   
                        <h3><?php echo $alumni5?></h3>
                        <select name="question-5-answers">
                    <option value="">Select one</option>
                    <option id="question-5-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                    <option id="question-5-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                    <option id="question-5-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                    <option id="question-5-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                    <option id="question-5-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                    <option id="question-5-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                    <option id="question-5-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                    <option id="question-5-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                    <option id="question-5-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                    <option id="question-5-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                    <option id="question-5-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                    <option id="question-5-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                    <option id="question-5-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                </select>  
                    
                    </li>
                <li >
                <?php echo '<img src="' . plugins_url( 'images/mendoza-200h.png', __DIR__ ) . '" > ';?>
                        <h3><?php echo $alumni6?></h3>
                        <select name="question-6-answers">
                    <option value="">Select one</option>
                    <option id="question-6-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                    <option id="question-6-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                    <option id="question-6-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                    <option id="question-6-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                    <option id="question-6-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                    <option id="question-6-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                    <option id="question-6-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                    <option id="question-6-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                    <option id="question-6-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                    <option id="question-6-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                    <option id="question-6-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                    <option id="question-6-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                    <option id="question-6-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                        </select>                  
                </li>
                <li >
                <?php echo '<img src="' . plugins_url( 'images/nagano-200h.png', __DIR__ ) . '" > ';?>
                        <h3><?php echo $alumni7?></h3>
                        <select name="question-7-answers">
                    <option value="">Select one</option>
                    <option id="question-7-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                    <option id="question-7-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                    <option id="question-7-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                    <option id="question-7-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                    <option id="question-7-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                    <option id="question-7-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                    <option id="question-7-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                    <option id="question-7-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                    <option id="question-7-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                    <option id="question-7-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                    <option id="question-7-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                    <option id="question-7-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                    <option id="question-7-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                        </select>                  
                </li>
                <li >
                <?php echo '<img src="' . plugins_url( 'images/packard-200h.png', __DIR__ ) . '" > ';?>
                        <h3><?php echo $alumni8?></h3>
                        <select name="question-8-answers">
                    <option value="">Select one</option>
                    <option id="question-8-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                    <option id="question-8-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                    <option id="question-8-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                    <option id="question-8-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                    <option id="question-8-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                    <option id="question-8-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                    <option id="question-8-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                    <option id="question-8-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                    <option id="question-8-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                    <option id="question-8-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                    <option id="question-8-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                    <option id="question-8-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                    <option id="question-8-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                        </select>                  
                </li>
                <li >
                <?php echo '<img src="' . plugins_url( 'images/perry-200h.png', __DIR__ ) . '" > ';?>
                        <h3><?php echo $alumni9?></h3>
                        <select name="question-9-answers">
                    <option value="">Select one</option>
                    <option id="question-9-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                    <option id="question-9-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                    <option id="question-9-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                    <option id="question-9-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                    <option id="question-9-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                    <option id="question-9-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                    <option id="question-9-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                    <option id="question-9-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                    <option id="question-9-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                    <option id="question-9-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                    <option id="question-9-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                    <option id="question-9-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                    <option id="question-9-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                        </select>                  
                </li>
                <li >
                <?php echo '<img src="' . plugins_url( 'images/sanjayan-200h.png', __DIR__ ) . '" > ';?>
             
                        <h3><?php echo $alumni10?></h3>
                        <select name="question-10-answers">
                    <option value="">Select one</option>
                    <option id="question-10-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                    <option id="question-10-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                    <option id="question-10-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                    <option id="question-10-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                    <option id="question-10-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                    <option id="question-10-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                    <option id="question-10-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                    <option id="question-10-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                    <option id="question-10-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                    <option id="question-10-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                    <option id="question-10-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                    <option id="question-10-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                    <option id="question-10-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                        </select>                  
                </li>
                <li >
                <?php echo '<img src="' . plugins_url( 'images/sullivan-200h.png', __DIR__ ) . '" > ';?>
                
                        <h3><?php echo $alumni11?></h3>
                        <select name="question-11-answers">
                    <option value="">Select one</option>
                    <option id="question-11-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                    <option id="question-11-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                    <option id="question-11-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                    <option id="question-11-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                    <option id="question-11-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                    <option id="question-11-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                    <option id="question-11-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                    <option id="question-11-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                    <option id="question-11-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                    <option id="question-11-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                    <option id="question-11-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                    <option id="question-11-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                    <option id="question-11-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                        </select>                  
                </li>
                <li >
                <?php echo '<img src="' . plugins_url( 'images/weil-200h.png', __DIR__ ) . '" > ';?>
                   
                        <h3><?php echo $alumni12?></h3>
                        <select name="question-12-answers">
                    <option value="">Select one</option>
                    <option id="question-12-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                    <option id="question-12-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                    <option id="question-12-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                    <option id="question-12-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                    <option id="question-12-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                    <option id="question-12-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                    <option id="question-12-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                    <option id="question-12-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                    <option id="question-12-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                    <option id="question-12-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                    <option id="question-12-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                    <option id="question-12-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                    <option id="question-12-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                        </select>                  
                </li>
                <li >
                <?php echo '<img src="' . plugins_url( 'images/wojcicki-200h.png', __DIR__ ) . '" > ';?>
                        <h3><?php echo $alumni13?></h3>
                        <select name="question-13-answers">
                    <option value="">Select one</option>
                    <option id="question-13-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                    <option id="question-13-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                    <option id="question-13-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                    <option id="question-13-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?></option>
                    <option id="question-13-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                    <option id="question-13-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                    <option id="question-13-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                    <option id="question-13-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                    <option id="question-13-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                    <option id="question-13-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                    <option id="question-13-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                    <option id="question-13-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                    <option id="question-13-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                        </select>                  
                </li><div class="yoa">
            <?php echo '<img src="' . plugins_url( 'images/y-o-a-badge-200w.png', __DIR__ ) . '" > ';?></div>

                </ol>
                <div class="clear"></div>
                <!-- <input type="hidden" name="action" value="process_quiz"> -->
                <button type="submit" value="Submit Quiz" name="submit-quiz" />Submit Quiz</button>
                <button type="reset" value="Reset the form" />Reset Form</button>
            
            </form>
            
        </div>
        <?php 
        include 'bottom-wrap.php';
        ?>
        <script>
        $(document).ready(function(){
$('#quiz').validate();
});
        </script>
        <?php
    }
    ?>