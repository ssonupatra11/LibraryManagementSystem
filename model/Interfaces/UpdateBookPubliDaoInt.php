<?php 

Interface UpdateBookPubliDaoInt{
    /**
     * This functions takes publication and book id to update.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param string $new_publi
     * 
     * @param int $book_id
     */
    public function updateBookPublicationDao(string $new_publi,int $book_id):bool;
}