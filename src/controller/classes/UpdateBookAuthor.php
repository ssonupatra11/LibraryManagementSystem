<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Model\classes\UpdateBookAuthorDao;

/**
 * This class has a functionality to take user input of author name to update it.
 */
class UpdateBookAuthor{

    /**
     * @access private
     * 
     * @var string
     */
    private string $new_author;
    
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
    public function updateBookAuthor():bool{

        $this->new_author=(string)readline('Enter new book author : ');
        
        $this->book_id=(int)readline('Enter book id : ');

        if((new UpdateBookAuthorDao)->updateBookAuthorDao($this->new_author,$this->book_id))
                return true;
        return false;
    }
}