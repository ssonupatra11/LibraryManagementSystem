<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Model\classes\ShowBorrowedBooksDao;

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
        return (new ShowBorrowedBooksDao)->displayData();
    }
}