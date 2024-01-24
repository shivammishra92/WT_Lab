<?php
$greetings = array("Hello", "Hi, WAssup?", "Hey! How You Doin", "Greetings!!!", "Warm Welcome");
$random_greeting = $greetings[rand(0, count($greetings) - 1)];
echo $random_greeting;
?>
