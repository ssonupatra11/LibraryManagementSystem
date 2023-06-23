<?php 

namespace Sonu\LibraryManagementSystem\Model\Interfaces;

use Sonu\LibraryManagementSystem\Controller\classes\Book;

Interface CreateBookDaoInt{
    /**
     * This functions takes object reference and add new book.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param \Sonu\LibraryManagementSystem\Controller\classes\Book $book_obj
     */
    public function addNewBooks(Book $book_obj):bool;
}