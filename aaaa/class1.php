<?php
function calculate_grade($marks_array = array()){
	foreach ($marks_array as $marks) {
		# code...
		if($marks < 90 && $marks >= 80)
		{
			echo "Grade A <br />";
		}

		else if($marks < 80 && $marks >= 70)
		{
			echo "Geade B <br />";
		}
		else if($marks < 70 && $marks >=60)
		{
			echo "Grade C <br />";
		}
		else if($marks < 60 && $marks >=50)
		{
			echo "Grade C <br />";
		}
		else{
			echo "fail <br />";
		}
	}
}

$marks_array = array(55,66,66,77,88);
calculate_grade($marks_array);
//function line of codes 
//var_dump($a=10);
#dfgfgsgg
/*gsfhshshshs
fjfjdjy*/
?>

