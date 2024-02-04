<?php 

# It's for run in the terminal, using 'php name_of_script.php'

$customer = "Gordon Freeman";
$email = "gordon.freeman@email.com";

#Characters using hexadecimal codes

# \u{A9} --> copyright
# \u{AE} --> registered trademark

$text = <<<"LABEL"
Dear Mr. $customer.\n
This message is for inform about the schedule of our next course.
We send to you the Meet code in your e-mail: $email.\n
Kind regards,\n
Cod3rs\u{A9}. 
LABEL;

echo $text;
?>