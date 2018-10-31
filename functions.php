<?php

declare(strict_types=1);

/**
 * Sort articles by date
 *
 * @param array $a
 * @param array $b
 * @return integer
 */
function sortByDate(array $a, array $b): int {
    return $a['publishDate'] - $b['publishDate'];

};



// Receive value from drop-down-menu
if (isset($_GET['sortBy'])) {
    $selectedVal = $_GET['sortBy'];
}
else{
    $selectedVal = "0";
}


/**
 * Selected drop-down
 *
 * @param string $value1
 * @param integer $value2
 * @return void
 */
function selected(string $value1, int $value2)
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



/**
 * Sort by value from drop-down-menu
 *
 * @param array $array
 * @param string $sortBy
 * @return array
 */
function sortByDropDown(array $array,string $sortBy): array{
    usort($array, 'sortByDate');
    if ($sortBy === "2") {
        return $array;
    }
    else {
       
        return array_reverse($array);
    }
    
};