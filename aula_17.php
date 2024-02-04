<?php 

$single_quote = 'It\'s a string';
$double_quote = "It\'s another string";

#concatenation

$name = "Guxtavo, " . "My beloved <3" . "<br>";
print $name; 

$name = "Gustavo";
$aka = "\"Djonga\"";
echo "$name $aka". "<br>";
echo '$name $aka'. "<br>";

#single quote is different to double quote

#die() is a function that stop the execution of php script

#HTML entities

# &copy --> copyright

# HEREDOC E NOWDOC #

$customer = "Gordon Freeman";
$email = "gordon.freeman@email.com";

#Heredoc
$text = <<<LABEL
<br>Dear Mr. $customer.
This message is for inform about the schedule of our next course.
We send to you the Meet code in your e-mail: $email.
Kind regards,
Cod3rs&copy. <br>
LABEL;

echo $text;

#Nowdoc
$text = <<<'LABEL'
<br>Dear Mr. $customer.
This message is for inform about the schedule of our next course.
We send to you the Meet code in your e-mail: $email.
Kind regards,
Cod3rs&copy. <br>
LABEL;

echo $text;
?>