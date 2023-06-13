<?php 

/**
 * This class has a functionality to get array and return it to print.
 */
class ShowAllBooks{

    /**
     * @access public
     * 
     * @return array
     */
    public function displayData():array{
        return (new UserViewDao)->showAllBooks();
    }
}