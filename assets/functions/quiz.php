
<?php

// define variables and set to empty values
// $firstNameErr = $lastNameErr = $emailErr = $phoneErr = "";
// $firstName = $lastName =$email = $phone = "";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (empty($_POST["first-name"])) {
//       $firstNameErr = "First name is required";
//     } else {
//       $firstName = test_input($_POST["first-name"]);
//       // check if name only contains letters and whitespace
//       if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
//         $firstNameErr = "Only letters and white space allowed"; 
//       }
//     }
    
//     if (empty($_POST["last-name"])) {
//         $lastNameErr = "Last name is required";
//       } else {
//         $lastName = test_input($_POST["last-name"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
//           $lastNameErr = "Only letters and white space allowed"; 
//         }
//       }
      
//     if (empty($_POST["email"])) {
//       $emailErr = "Email is required";
//     } else {
//       $email = test_input($_POST["email"]);
//       // check if e-mail address is well-formed
//       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $emailErr = "Invalid email format"; 
//       }
//     }
  
//   function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
//   }
add_shortcode ('alumni-quiz', 'alumni_quiz');
function alumni_quiz(){
    include 'variables.php';
//     // define variables and set to empty values
//     $firstNameErr = $lastNameErr = $emailErr = $phoneErr = "";
//     $firstName = $lastName =$email = $phone = "";
//     // Validate input and sanitize
//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         $valid = true; //Your indicator for your condition.
//         if (empty($_POST["first-name"])) {
//             $firstNameErr = "First name is required";
//             $valid = false;
//         } else {
//             $firstName = test_input($_POST["first-name"]);
//             // check if name only contains letters and whitespace
//             if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
//             $firstNameErr = "Only letters and white space allowed";
//             $valid = false; 
//             }
//         }

//         //if valid then redirect
//         // if($valid){
//         //     header('Location: /quiz-results/');
//         //     exit();
//         // }

//     }
//   function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
//   }
    
    ?>
    <!-- <begin remove from here> -->
    <div class="quiz-container">
<div class="quiz-content">
<div class="quiz-content-area">

    <!-- <end remove from here> -->
    
    <div class="quiz-wrap">

            <h3>UC Santa Cruz alumni quiz</h3>
            
            <!-- <form action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="quiz" class="quiz-form"> -->
            <form action="<?php echo  get_permalink(get_page_by_path( 'quiz-results' )); ?>" method="post" id="quiz" class="quiz-form">
            <div class="one-third first yoa">
            <?php echo '<img src="' . plugins_url( 'images/y-o-a-badge-200w.png', __DIR__ ) . '" > ';?>

            </div>
            <div class="two-thirds">
            <ul>
                <li class="one-half first"><input id="first-name" type="text" name="first-name" value="" placeholder="First name*"><span class="error"><?php echo $firstNameErr;?></span></li>
                <li class="one-half"><input id="last-name*" type="text" name="last-name" value="" placeholder="Last name*"></li>
                <li class="one-half first"><input id="email" type="email" name="email" value="" placeholder="Email*"></li>
                <li class="one-half"><input id="phone" type="tel" name="phone" value="" placeholder="Phone"></li>
                <div class="clear"></div>
                <li>* Required fields</li>
            </ul>
            </div>
            <div class="clear"></div>
            <hr>
                <ol>
                
                    <li class="one-fourth first">
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
                    
                    <li class="one-fourth">
                
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
                    
                    <li class="one-fourth">
                    
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
                    
                    <li class="one-fourth">
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
                    
                    <li class="one-fourth first">
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
                <li class="one-fourth">
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
                <li class="one-fourth">
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
                <li class="one-fourth">
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
                <li class="one-fourth first">
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
                <li class="one-fourth">
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
                <li class="one-fourth">
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
                <li class="one-fourth">
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
                <li class="one-fourth first">
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
                </li><div class="three-fourths yoa">
            <?php echo '<img src="' . plugins_url( 'images/y-o-a-badge-200w.png', __DIR__ ) . '" > ';?></div>

                </ol>
                <div class="clear"></div>
                <!-- <input type="hidden" name="action" value="process_quiz"> -->
                <button type="submit" value="Submit Quiz" name="submit-quiz" />Submit Quiz</button>
                <button type="reset" value="Reset the form" />Reset Form</button>
            
            </form>
            
        </div>
        <!-- <begin remove from here> -->
        </div>
<div class="quiz-widget-area">Hello World</div>
</div>
</div>

        <!-- <end remove from here> -->
        
        <?php
    }
// function quiz_processor(){
//     if($_POST['process_quiz']){
//         require_once 'grade.php';
//         //or your form process code here
//       }
// }

// add_action( 'admin_post_nopriv_process_quiz', 'prefix_send_email_to_admin' );
// add_action( 'admin_post_process_quiz', 'prefix_send_email_to_admin' );
    ?>