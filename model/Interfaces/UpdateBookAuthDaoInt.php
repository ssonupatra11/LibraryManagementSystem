<?php 

Interface UpdateBookAuthDaoInt{

    /**
     * This functions takes author and book id to update.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param string $new_auth
     * 
     * @param int $book_id
     */
    public function updateBookAuthorDao(string $new_auth,int $book_id):bool;
}