<?php 

Interface ReturnBookDaoInt{
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