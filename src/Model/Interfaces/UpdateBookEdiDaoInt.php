<?php 

namespace Sonu\LibraryManagementSystem\Model\Interfaces;

Interface UpdateBookEdiDaoInt{
    /**
     * This functions takes edition and book id to update.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param int $new_edi
     * 
     * @param int $book_id
     */
    public function updateBookEditionDao(int $new_edi,int $book_id):bool;
}