<?php 
/**
 * This include CreateNewBook.php interface file in this file.
 */
require("./controller/Interfaces/CreateNewBook.php");


/**
 * This class has a functionality to take user input for adding new book.
 */
class AddNewBooks implements CreateNewBook{

    /**
     * @access private
     * 
     * @var Book
     */
    private Book $book_obj;


    /**
     * @access public 
     * 
     * @return bool
     */
    public function addBooks(): bool
    {
        
        $this->book_obj=new Book();
        $this->book_obj->setId((int)readline('Enter Book id : '));
        $this->book_obj->setName((string)readline('Enter Book name : '));
        $this->book_obj->setAuthor((string)readline('Enter Book author : '));
        $this->book_obj->setEdition((int)readline('Enter Book edition : '));
        $this->book_obj->setPublication((string)readline('Enter Book publication : '));
        $this->book_obj->setQuantity((int)readline('Enter Book quantity : '));

        //If this condition is true then it returns true else false.
        if($GLOBALS['createBookDao']->addNewBooks($this->book_obj))
            return true;
        return false;
   
    }
}
