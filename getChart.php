<?php
$data_array;
if($_GET["v"]==0)
{
	$data_array= [20, 10, 10, 36, 20, 5];	
}
else
{
	$data_array= [5, 20, 36, 10, 10, 20];	
}


$data_json = json_encode($data_array);

echo $data_json;
?>