<?php

/**
 * This includes ShowBorrowedBooksDaoInt.php file in this class.
 */
require("./model/Interfaces/ShowBorredBooksDaoInt.php");

class ShowBorrowedBooksDao implements ShowBorrowedBooksDaoInt{
    /**
     * @access private
     * 
     * @var string
     */
    private string $file_loc='./TextFiles/borrowedBooks.txt';

    /**
     * @access private
     * 
     * @var mixed
     */
    private mixed $book_file;

    /**
     * @access public
     * 
     * @return array
     */
    public function displayData():array{
        try{
            $this->book_file=fopen($this->file_loc,"r");
            if(filesize($this->file_loc)>0){
                $content=explode(",",fread($this->book_file,filesize($this->file_loc)));
                if(sizeof($content)>0)
                    return $content;
                else
                    return [];
            }
        }
        catch(ErrorException $e){
            echo "Error".$e;
        }
        finally{
            fclose($this->book_file);
        }
    }
}