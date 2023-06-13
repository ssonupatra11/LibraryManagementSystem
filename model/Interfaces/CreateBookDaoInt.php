<?php 

Interface CreateBookDaoInt{
    /**
     * This functions takes object reference and add new book.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param Book $book_obj
     */
    public function addNewBooks(Book $book_obj):bool;
}