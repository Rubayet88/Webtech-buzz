<!DOCTYPE html>
<html>
<body>
<center>
    <?php
    $str = $_POST["box"];
    $index = 0;
    $x=0;
    echo $str;
    echo "<br>";
    $count = [];
    $length = strlen($str);
    $str[$length] = '1';
    $ascii = ord('a');
    for($i = 0; $i<26; $i++){
        $count[$i] = 0;
    }
    echo "<br></br>";
    while($str[$index] != '1'){
        if($str[$index] >= 'a' && $str[$index] <= 'z'){
            $x = ord($str[$index]) - $ascii;
            $count[$x]=$count[$x]+1;
        }
        $index++;
    }
    for($i = 0; $i<26; $i++){
            if($count[$i] != 0){
            $letter = chr($ascii+$i);
            echo $letter;
            echo " appears ";
            echo $count[$i];
            echo " times";
            echo "<br>";
            }
    }
	        echo"Word Count";
			echo substr_count($str, ' ')+1;
			echo "<br>";
	        echo"Spaces Count";
			echo substr_count($str," ");
			echo "<br>";
			echo "<br>";
			
			$textToCount = explode(' ',$str);
	        $words = array_count_values($textToCount);
	        foreach($words as $word => $counts)
	      {
		     printf('%s is %u times',$word, $counts);
		     echo"<br>";
	      }
			
?>
</center>
</body>
</html>