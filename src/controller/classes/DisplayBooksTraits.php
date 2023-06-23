<?php

namespace Sonu\LibraryManagementSystem\Controller\classes;

/**
 * This Trait has a functionality to print array values.
 */
trait DisplayBooks{

    /**
     * @access public
     * 
     * @return void
     */
    public function displayBooks(array $arr):void{
        echo "List!",PHP_EOL;

        foreach($arr as $value){
            echo $value,PHP_EOL;
        }
    }
}
