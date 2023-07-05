<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Model\DAO\BookUpdateDao;

/**
 * This class has a functionality to take user input of book edition to update it.
 */
class UpdateBookEdition{
    /**
     * @access private
     * 
     * @var int
     */
    private int $new_edition;

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
    public function updateBookEdition():bool{

        $this->new_edition=(int)readline('Enter new book edition : ');
        
        $this->book_id=(int)readline('Enter book id : ');

        if(BookUpdateDao::updateBookEditionDao($this->new_edition,$this->book_id))
                return true;
        return false;
    }
}