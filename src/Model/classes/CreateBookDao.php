<?php 

namespace Sonu\LibraryManagementSystem\Model\classes;

use Sonu\LibraryManagementSystem\Model\Interfaces\CreateBookDaoInt;
use Sonu\LibraryManagementSystem\Controller\classes\Book;
use \ErrorException;

class CreateBookDao implements CreateBookDaoInt{

    /**
     * @access public
     * 
     * @return bool
     * 
     * @param \Sonu\LibraryManagementSystem\Controller\classes\Book $obj
     */
    public function addNewBooks(Book $obj): bool
    {
        try{
            $myfile=fopen('./src/TextFiles/books.txt','a');
            $val=$obj->getId()." ".$obj->getName()." ".$obj->getAuthor()." ".$obj->getEdition()." ".$obj->getPublication()." ".$obj->getQuantity().",";
            $a=fwrite($myfile, $val);
            if($a)
                return true;
            return false;
        }
        catch(ErrorException $e){
            echo "Error".$e;
        }
        finally{
            fclose($myfile);
        }
    }
}