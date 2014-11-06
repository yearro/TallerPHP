<?php
foreach ($_POST['languages'] as $language){
	switch ($language) {
		case 'PHP'  : echo "Quieres aprender PHP<br />"; break;
		case 'Perl' : echo "Quieres aprender Perl<br />"; break;
		case 'Ruby' : echo "Quieres aprender Ruby<br />"; break;
		default: echo "No quieres aprender nada ! !";
	}
}
?>