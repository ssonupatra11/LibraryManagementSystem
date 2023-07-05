<?php 

namespace Sonu\LibraryManagementSystem\Model\DAO;

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


    /**
     * This functions takes book id to return borrowed book.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param int $book_id
     */
    public function returnBookDao(int $bood_id):bool;
}