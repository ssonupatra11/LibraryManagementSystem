<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Model\classes\ReturnBookDao;

/**
 * This class has a functionality to take user input to return the borrowed book.
 */
class ReturnBook{

    /**
     * @access private
     * 
     * @var int
     */
    private int $book_id;

    /**
     * @access public
     * 
     * @return bool
     */
    public function returnBook():bool{

        $this->book_id=(int)readline('Enter book id to return : ');
        if((new ReturnBookDao)->returnBookDao($this->book_id))
            return true;

        return false;
    }
}