<?php 

namespace Sonu\LibraryManagementSystem\Model\AbstractClass;

use \ErrorException;

/**
 * Abstract class contains two functionalities viewProfile and showAllBooks.
 */
abstract class AbstractViewDao{
    
    /**
     * @access private
     * 
     * @var string
     */
    private string $file_loc='./src/TextFiles/books.txt';

    /**
     * @access private
     * 
     * @var mixed
     */
    private mixed $book_file;

    /**
     * @access public
     * 
     * @return string|null
     * 
     */
    abstract public function viewProfile():string|null;

    /**
     * @access public
     * 
     * @return array
     */
    public function showAllBooks():array{
        
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