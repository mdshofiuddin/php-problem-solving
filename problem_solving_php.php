<?php 

function countIdentical($arr) {
	$result=0;
        foreach ($arr as $value){
            if(count(array_unique($value))==1){
                $result+=1;
            }
        }
        return $result;
    }
echo countIdentical([
    [33, 33],
    [5],
    ["a", "a"],
    [2, 2, 2],
    [1, 1, 1],
    [3, 1]
]);
  
// -------------------------------------------

function fixImport($s) {
	$arr = explode(" ", $s);
	return ($arr[2]) . " " . ($arr[3]) . " " . ($arr[0]) . " " . ($arr[1]);
}

echo fixImport("import pi from math");

// ------------------------------------------------

function reverse($s) {
	if (strlen($s) < 1) {
			return $s;
    }
	return reverse(substr($s, 1)) . $s[0];
}

function reverse1($s) {
	return strrev($s);
}

echo reverse("hello");

// --------------------------------------------------
function totalOvers($balls) {
	$ball = $balls % 6;
	return floor( $balls / 6 ) . ( $ball ? ".$ball" : "" );
}

echo totalOvers(164);

// --------------------------------------------------------

function countUppercase($arr) {
    return preg_match_all("/[A-Z]/", implode($arr));
   }

  echo countUppercase(["SOLO", "hello", "Tea", "wHat"]);


//   -------------------------------------------------------

function numberSplit($n) {
    return [floor($n / 2), ceil($n / 2)];
   }

print_r(numberSplit(4));

// echo numberSplit(10); 

// echo numberSplit(11) ;

// echo numberSplit(-9);
// --------------------------------------------------------------------
function checkPrime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}

echo '<h2>Prime Numbers between 1 and 100</h2> ';
for($num = 1; $num <= 100; $num++) {
	$flag = checkPrime($num);
	if ($flag == 1) {
		echo $num." ";
	}	
} 
// ----------------------------------------------------------------------
// Recursion
function countdown($num_arg) 
{
	if($num_arg > 0)
	{
		print("Number is $num_arg<br>");
		countdown($num_arg - 1);
	}
}
countdown(10);
// Audio to text------------------------------------------
if(isset($_POST['txt'])){
    $txt=$_POST['txt'];
    $txt=htmlspecialchars($txt);
    $txt=rawurlencode($txt);
    $audio=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=en-IN');
    $speech="<audio controls='controls' autoplay></audio>";
    echo $speech;
  }

        ?>

<form method="post">
<input id="txt" name="txt" type="textbox" />
<input name="submit" type="submit" value="Convert to Speech" />
</form>