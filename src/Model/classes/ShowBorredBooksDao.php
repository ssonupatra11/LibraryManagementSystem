<?php

namespace Sonu\LibraryManagementSystem\Model\classes;

use Sonu\LibraryManagementSystem\Model\Interfaces\ShowBorrowedBooksDaoInt;
use \ErrorException;

class ShowBorrowedBooksDao implements ShowBorrowedBooksDaoInt{
    /**
     * @access private
     * 
     * @var string
     */
    private string $file_loc='./src/TextFiles/borrowedBooks.txt';

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
            else{
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