<?php
# SPACESHIP OPERATOR!

#returns 0, 1 or -1

# 0 = is equal to
# 1 = is greater than
# -1 = is less than

$x = 1 <=> 1; # return 0 (1 == 1)
$x = 3 <=> 2; # return 1 (3 > 2)
$x = 1 <=> 2; # return -1 (1 < 2)

# logical operators

# && --> and
# ||  --> or
# !   --> not

$a = 100;
$b = 200;

$c = ($a < 150) && (!($b > 300)); #true

print '$a = 100;<br>$b = 200;<br>';
print '$c = ($a < 150) && (!($b > 300))<br>';
print 'Result: ' . $c;
?>