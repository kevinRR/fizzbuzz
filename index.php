<?php
declare(strict_types = 1);
class FizzBuzz {
// PHP program to print Fizz Buzz
// Accoding to question I came to know that it has a pattern like 
//if the number is  divisible by 15 there is  "FizzBuzz" 
//if the number divisible by 3 then there is "Fizz" and 
// if the number is divisible by 5 then there is "Buzz"
// is rest we can simply print the number 
// Code contribute by Khem Raj Regmi as coding task
    function getResult(int $i) {
        for ($i = 1; $i <= 100; $i++)
            {
                // number divisible by 3 and
                // 5 will always be divisible
                // by 15, print 'FizzBuzz' in
                // place of the number
                if ($i % 15 == 0){
                    echo "FizzBuzz"  ."\r\n";
                }
                // number divisible by 3? print
                // 'Fizz' in place of the number
                else if (($i % 3) == 0){
                    echo "Fizz"  ."\r\n";
                }
                // number divisible by 5, print
                // 'Buzz' in place of the number
                else if (($i % 5) == 0)	{			
                    echo "Buzz" ."\r\n";
                }
                else // print the number
                {
                    echo $i. "\r\n";
                }
                            
            }
    }
}
$finalData = new FizzBuzz;
$finalData->getResult($int = 1);

