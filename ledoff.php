<?php
    #include <wiringPi.h>
    system("gpio - g mode 24 out"); // pin 24 output declaration
    system("gpio - gwrite 24 0"); // set logical low
?>
    