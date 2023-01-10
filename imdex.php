<?php 
echo "<h1>Indexed Array</h1>";
$x = [1,2,3,4,5];
foreach($x as $val){
	echo "<br>";
	echo $val;
}
echo "<br>";

echo "<h1>Associate Array</h1>";
$assoc = ["name"=>"Raman", "age"=>28, "Education"=>"BE"];

foreach($assoc as $key=>$val){
	echo "<br>";
	echo "$key"."$val";
}

// foreach(array_keys($assoc) as $key=>$val){
// 	echo "<br>";
// 	echo "$key"."$val";
// }
echo "<br>";

echo "<h1>Multidimentional Array</h1>";

$multi = array(array(1,2,3,4,5),
			   array(6,7,8,9,10),
			   array(11,12,13,14,15)
				);
// var_dump($multi);
for($i=0;$i<count($multi); $i++){
	echo "<br>";
	for($j=0; $j<count($multi[$i]); $j++){
		echo "<br>";
		echo $multi[$i][$j];
	}
}

echo "<h1>Multidimentional Associate Array</h1>";

$multi = array(array('name'=>'Raman','age'=>'25','education'=>'BE'),
			   array('name'=>'Ravi','age'=>'26','education'=>'BSC'),
			   array('name'=>'Varma','age'=>'30','education'=>'MBA')
				);
		foreach($multi as $key=>$val){
			// echo "<br>";
			// echo $val;
			foreach($val as $nkey=>$value){
				echo $nkey." ".$value;
			}
		}
?>