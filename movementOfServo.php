<?php

	$myleftright = fopen("/var/www/html/smart/leftright.txt", "r");
	
	$leftright = "";
	while ($line = fgets($myleftright)) {
	 	$leftright = $line;
	}
	fclose($myleftright);

	$mytopdown = fopen("/var/www/html/smart/topdown.txt", "r");
	
	$topdown = "";
	while ($line = fgets($mytopdown)) {
	 	$topdown = $line;
	}
	fclose($mytopdown);

echo "Top Down : ". $topdown;
echo "Left Right : ". $leftright;

	$Direction = $_REQUEST["Direction"];
	if($Direction == "Left")
	{
		if($leftright >= 100 && $leftright <= 2400)
		{
			$leftright = $leftright - 100;
			shell_exec("/usr/bin/pigs s 18 " . $leftright);
		}
		
	}
	else if($Direction == "Right")
	{
		if($leftright >= 100 && $leftright <= 2400)
		{
			$leftright = $leftright + 100;
			shell_exec("/usr/bin/pigs s 18 " . $leftright);
		}
	}
	else if($Direction == "Top")
	{
		if($topdown >= 100 && $topdown <= 2400)
		{
			$topdown = $topdown - 100;
			shell_exec("/usr/bin/pigs s 17 " . $topdown);
		}

	}
	else if($Direction == "Down")
	{
		if($topdown >= 100 && $topdown <= 2400)
		{
			$topdown = $topdown + 100;
			shell_exec("/usr/bin/pigs s 17 " . $topdown);
		}
	}
	else
	{
		$leftright = 600;
		$topdown = 1600;
		shell_exec("/usr/bin/pigs s 18 " . $leftright);
		shell_exec("/usr/bin/pigs s 17 " . $topdown);
	}


$myleftright = fopen("/var/www/html/smart/leftright.txt", "w");
fwrite($myleftright, $leftright);
fclose($myleftright);

$mytopdown = fopen("/var/www/html/smart/topdown.txt", "w");
fwrite($mytopdown, $topdown);
fclose($mytopdown);
?>
