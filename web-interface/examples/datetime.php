
<?php
$given = new DateTime();
$given->setTimezone(new DateTimeZone("UTC"));
echo $given->format("e:Y,m,d,H,i,s") . "#";?>
