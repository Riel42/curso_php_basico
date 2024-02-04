<?php 

#Strings

$phrase = 'This phrase has 30 characters.';

echo $phrase[0]  . "<br>"; #The first character

echo $phrase[5] . "<br>"; #The 6th character

$length_of_string = strlen($phrase);

echo "<br>" . $length_of_string . "<br>"; #echo

$first_word = substr($phrase,0, 4);

echo "<br>" . $first_word . "<br>"; #echo

$upper_word = strtoupper($phrase);

echo "<br>" . $upper_word . "<br>"; #echo

$lower_word = strtolower($phrase);

echo "<br>" . $lower_word . "<br>"; #echo

$replace = str_replace('a', 'x', $phrase);

echo "<br>" . $replace . "<br>"; #echo

$position_of_char = strpos($phrase, 'T'); # returns the position 0

echo "<br>" . $position_of_char . "<br>"; #echo

/********************************************************************/
                                        # String functions -- PHP 8 #
/********************************************************************/

$string_contains_anything = str_contains($phrase, 'This'); #Returns true (1)

echo "<br>" . $string_contains_anything . "<br>"; #echo

$string_starts_with = str_starts_with($phrase, 'This'); #Returns true (1)

echo "<br>" . $string_starts_with . "<br>"; #echo

$string_ends_with = str_ends_with($phrase, 'characters.'); #Returns true (1)

echo "<br>" . $string_ends_with . "<br>"; #echo