<?php 
/**
 * This includes CreateBookDaoInt.php file in this class.
 */
require_once("./model/Interfaces/CreateBookDaoInt.php");
class CreateBookDao implements CreateBookDaoInt{

    /**
     * @access public
     * 
     * @return bool
     * 
     * @param Book $obj
     */
    public function addNewBooks(Book $obj): bool
    {
        try{
            $myfile=fopen('./TextFiles/books.txt','a');
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