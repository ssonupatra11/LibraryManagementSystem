<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Model\classes\UserViewDao;

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