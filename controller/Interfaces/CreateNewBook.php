<?php 

/**
 * This interface has a function to add new Books.
 */
Interface CreateNewBook{

    /**
     * This functions takes object reference and add new books.
     * 
     * @access public
     * 
     * @param mixed $obj
     * 
     * @return bool
     */
    public function addBooks():bool;
}