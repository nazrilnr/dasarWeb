<?php
// $pattern = '/apple/';
// $replacement = 'banana';
// $text = 'i like apple pie';
// $new_text = preg_replace ($pattern, $replacement, $text);
// echo $new_text;
// echo "<br>";

// echo "$text";
// if (preg_match($pattern, $text, $matches)){
//     echo "Cocokkan: " . $matches[0];
// } else{
//     echo " Tidak ada yang cocok!";
// }

// $pattern = '/go?d/'; // Modified pattern: 'o?' matches 'o' zero or one time
// $text = 'gd is good.';

// if (preg_match($pattern, $text, $matches)){
//     echo "Cocokkan: " . $matches[0];
// } else {
//     echo "Tidak ada yang cocok";
// }

$pattern = '/go{1,2}d/'; // Modified pattern: 'o{1,2}' matches 'o' at least 1 time and at most 2 times
$text = 'gd is good.';

if (preg_match($pattern, $text, $matches)){
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok";
}
?>