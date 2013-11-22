<?php
$f_contents = file("quotes.txt");
echo $f_contents[array_rand($f_contents)];
