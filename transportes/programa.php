<?php

$passageiros = 0 ;

$passageiros = $_POST["passageiros"] ;

	if ($passageiros <= 4){
		echo "você irá gastar " . number_format($passageiros * 1.40, 2,",", ".");

}
if ($passageiros >= 5){
	echo "você irá gastar " . number_format(($passageiros - 4) * 2.80 + 5.60 , 2,",", ".");


}



?>
