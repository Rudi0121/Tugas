<?php 

	$ball = 'purple'; 
	//Coba ubah ke "yellow", "blue", "green", "purple", atau warna lain
	if ($ball == 'red') { 
		$redbox = $ball;
		$yellowbox = $ball;
} 	elseif 
		($ball == 'blue') {
 		$bluebox = $ball;
} 	elseif 
		($ball == 'green') {
 		$greenbox = $ball;
} 	elseif 
		($ball == 'purple') {
 		$purplebox = $ball;
} 	else 
	{
 		$colorlessbox = $ball;
}
		echo "red box : $redbox <br>\n";
		echo "yellow box : $yellowbox <br>\n";
		echo "blue box : $bluebox <br>\n";
		echo "green box : $greenbox <br>\n";
		echo "purple box : $purplebox <br>\n";
		echo "colorless box : $colorlessbox <br>\n"; 
?>

