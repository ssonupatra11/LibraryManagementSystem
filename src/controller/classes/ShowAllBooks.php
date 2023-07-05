<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Model\DAO\UserDao;

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
        return (new UserDao)->showAllBooks();
    }
}