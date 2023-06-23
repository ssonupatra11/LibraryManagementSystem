<?php 

namespace Sonu\LibraryManagementSystem\Model\Interfaces;

Interface RemoveBookDaoInt{
    /**
     * This functions takes book id to remove book.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param int $book_id
     */
    public function removeBookDao(int $book_id):bool;
}