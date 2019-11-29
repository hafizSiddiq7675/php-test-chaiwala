<?php
$input_text                 = $_POST['input_text'];
$words_count                = str_word_count($input_text);
$words_array                = explode(' ', $input_text);
$word_checked               = array();
foreach ($words_array as $key => $value) {
    $curr_word_count = 0;
    foreach ($words_array as $key_new => $value_new) {
        if($value == $value_new) {
            $curr_word_count++;
        }
    }
    if(!in_array($value,$word_checked)) {
        echo "Word ".$value . " occurs " .$curr_word_count . " times in '". $input_text ."'<br>";
        array_push($word_checked,$value);
        echo "<br>";
    } 
}
echo "Actual Input is: " .$input_text . "<br><br>";
?>
<a href="form.php" >Go back</a>
