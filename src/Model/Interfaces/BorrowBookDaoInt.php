<?php 

namespace Sonu\LibraryManagementSystem\Model\Interfaces;

Interface BorrowBookDaoInt{
    /**
     * This functions takes book id to borrow.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param int $book_id
     */
    public function borrowBookDao(int $bood_id):bool;
}