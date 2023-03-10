<?php
    //Date
    date_default_timezone_set('UTC');
    $this_time = "This Time is";
    $this_time .= " ";
    $this_time .= date("l, d-M-Y");
    echo "$this_time<br>";
    echo date(DATE_RFC2822);
    echo "<br>";
    echo "Maret 7, 2023 is on a " . date("l", mktime(0, 0, 0, 3, 7, 2023));
    echo "<br>";
    echo date("l", strtotime("13 march 2023"));
?>
