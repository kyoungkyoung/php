<?php

// read a line
$line = readline();
var_dump($line);

// add readline history
readline_add_history($line); //기록 남기기

// clear history
readline_clear_history();
