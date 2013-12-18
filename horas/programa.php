<?php
echo "<center>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "Hora Certa: ";

echo '<meta http-equiv="refresh" content="1">';

$horaAtual = getdate();
echo $horaAtual["hours"] - 4;
echo ":";
echo $horaAtual["minutes"];
echo ":";
echo $horaAtual["seconds"];
echo "<br/>";

echo "<br/>";
echo "Data Certa: ";
$dataAtual = getdate();
echo $dataAtual["mday"];
echo "/";
echo $dataAtual["mon"];
echo "/";
echo $dataAtual["year"];
echo "<br/>";
echo "<br/>";

	switch($dataAtual["wday"]){
		case 0 :
			echo "Domingo";
			break;
		case 1:
			echo "Segunda-feira";
			break;
		case 2:
			echo "Terça-feira";
			break;

		case 3:
			echo "Quarta-feira";
			break;
		case 4:
			echo "Quinta-feira";
			break;

		case 5:
			echo "Sexta-feira";
			break;

		case 6:
			echo "Sabado";
			break;





}
echo "<center/>";
?>
