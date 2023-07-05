<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Model\DAO\BookDao;

/**
 * This class has a functionality to remove book from list.
 */
class RemoveBook{

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
    public function removeBook(): bool
    {

        $this->book_id=(int)readline('Enter book id : ');
        if((new BookDao)->remove($this->book_id))
                return true;
        return false;
    }
}