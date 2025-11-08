<?php 


$grade = array(
    "Math"=>"5",
    "Chem"=>"4",
    "Art"=>"5"

);

$grade ['Math']="9";

// echo "Nota per Math eshte: " . $grade['Math'];

foreach($grade as $emriLendes => $nota){
    echo "per lenden : " . $emriLendes. " nota eshte: ". $nota."<br>";
}

?>