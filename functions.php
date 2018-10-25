<?php

declare(strict_types=1);


// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.


// Sort articles by date
function sortByDate($a,$b){
    return $a['publishDate'] - $b['publishDate'];

};




// Receive value from drop-down-menu
if (isset($_GET['sortBy'])) {
    $selectedVal = $_GET['sortBy'];
}
else{
    $selectedVal = 0;
}

//Selected drop-down
function selected($value1,$value2)
   {
     if ($value1 == $value2) 
     {
      echo 'selected="selected"';
     } else 
     {
       echo '';
     }
     return;
   }


// Sort by value from drop-down-menu
function sortByDropDown($array,$sortBy){
    usort($array, 'sortByDate');
    if ($sortBy === "2") {
        return $array;
    }
    else {
       
        return array_reverse($array);
    }
    
};


// function to get author by ID
// function getAuthor(){

// };


// Click-counter for Like-button
// function clickCounter(){

// };