<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Model\classes\UpdateBookNameDao;

/**
 * This class has a functionality to take user input of book name to update it.
 */
class UpdateBookName{

    /**
     * @access private
     * 
     * @var string
     */
    private string $new_name;

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
    public function updateBookName():bool{

        $this->new_name=(string)readline('Enter new book name : ');

        $this->book_id=(int)readline('Enter book id : ');

        if((new UpdateBookNameDao)->updateBookNameDao($this->new_name,$this->book_id))
                return true;
        return false;
    }
}