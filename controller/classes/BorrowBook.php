<?php 

/**
 * This class has a functionality to take user input for borrowing book.
 */
class BorrowBook{

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
    public function borrowBook():bool{

        $this->book_id=(int)readline('Enter book id to borrow : ');
        if((new BorrowBookDao)->borrowBookDao($this->book_id))
            return true;

        return false;
    }
}