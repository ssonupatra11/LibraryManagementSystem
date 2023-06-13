<?php 

Interface UpdateBookNameDaoInt{
    /**
     * This functions takes name and book id to update.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param string $new_name
     * 
     * @param int $book_id
     */
    public function updateBookNameDao(string $new_name,int $book_id):bool;
}