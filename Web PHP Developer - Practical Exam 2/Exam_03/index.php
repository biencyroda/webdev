<?php 
check_fibonacci(16);
function check_fibonacci($n){
	for ($x = 0; $x <= $n; $x++) {
		if(checkfibonacci($x)) echo "$x is a Fibonacci Number <br>";
		else echo "$x is a not Fibonacci Number <br>" ;
	 
	}

}
function ispersquare($x)
{
    $s = (int)(sqrt($x));
    return ($s * $s == $x);
}
function checkfibonacci($n)
{
    return ispersquare(5 * $n * $n + 4) ||
           ispersquare(5 * $n * $n - 4);
}
?>



 
