<?php 
function display($number){

    if($number <= 10){
        echo "$number  Recursive function is a function that calls itself <br>";
        display($number + 1);
    }
    
}
display(1);

// 1. Recursive function is a function that calls itself.
// 2. Recursive function is a function that calls itself.
// 3. Recursive function is a function that calls itself.
// 4. Recursive function is a function that calls itself.
// 5. Recursive function is a function that calls itself.
// 6. Recursive function is a function that calls itself.
// 7. Recursive function is a function that calls itself.
// 8. Recursive function is a function that calls itself.
// 9. Recursive function is a function that calls itself.   

function factorial($n){
    if($n==0){
        return 1;
    }else{
        return $n * factorial($n-1);
    }
}
echo factorial(5);

?>