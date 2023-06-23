<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Model\classes\UpdateBookPublicationDao;

/**
 * This class has a functionality to take user input of publication to update it.
 */
class UpdateBookPublication{

    /**
     * @access private
     * 
     * @var string
     */
    private string $new_publication;

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
    public function updateBookPublication():bool{

        $this->new_publication=(string)readline('Enter new book publication : ');
        
        $this->book_id=(int)readline('Enter book id : ');

        if((new UpdateBookPublicationDao)->updateBookPublicationDao($this->new_publication,$this->book_id))
                return true;
        return false;
    }
}