<?php 

namespace Sonu\LibraryManagementSystem\Model\classes;

use Sonu\LibraryManagementSystem\Model\Interfaces\CreateLibrarianDaoInt;
use Sonu\LibraryManagementSystem\Controller\classes\Librarian;
use \ErrorException;

class CreateLibrarianDao implements CreateLibrarianDaoInt{

    /**
     * @access public
     * 
     * @return bool
     * 
     * @param \Sonu\LibraryManagementSystem\Controller\classes\Librarian $obj
     */
    public function createAccount(Librarian $obj): bool
    {
        try {
            
            $myfile=fopen('./src/TextFiles/librarian.txt','a');
            $val=$obj->getId()." ".$obj->getName()." ".$obj->getAge()." ".$obj->getAddr()." ".$obj->getEmail()." ".$obj->getGen()." ".$obj->getPho().$obj->getPassword()." ".$obj->getConPass().",";
            $a=fwrite($myfile, $val);
            if($a)
                return true;
            return false;   
        } 
        catch (ErrorException $e) {
            echo "Error".$e;
        }
        finally{
            fclose($myfile);
        }
    }
}