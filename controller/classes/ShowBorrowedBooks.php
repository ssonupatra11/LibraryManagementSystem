<?php 

/**
 * This class has a functionality to get array and return it to print.
 */
class ShowBorrowedBooks{
    
    /**
     * @access public
     * 
     * @return array
     */
    public function getData():array{
        return $GLOBALS['show_borrow_books']->getData();
    }
}