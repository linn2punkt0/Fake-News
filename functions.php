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


/**
 * Selected drop-down
 *
 * @param string $value1
 * @param integer $value2
 * @return void
 */
function selected(string $value1, int $value2)
   {
     if ($value1 == $value2){
      echo 'selected="selected"';
	 } 
	 else {
       echo '';
     }
     return;
   }



/**
 * Sort by value from drop-down-menu
 *
 * @param array $array
 * @param string $value
 * @return array
 */
function sortByDropDown(array $array,string $value): array{
    usort($array, 'sortByDate');
    if ($value === "2") {
        return $array;
    }
    else {
        return array_reverse($array);
    }
    
};