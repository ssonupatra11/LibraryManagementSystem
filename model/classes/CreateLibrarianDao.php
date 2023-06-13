<?php 

/**
 * This includes CreateLibrarianDaoInt.php file in this class.
 */
require_once("./model/Interfaces/CreateLibrarianDaoInt.php");
class CreateLibrarianDao implements CreateLibrarianDaoInt{

    /**
     * @access public
     * 
     * @return bool
     * 
     * @param Librarian $obj
     */
    public function createAccount(Librarian $obj): bool
    {
        try {
            
            $myfile=fopen('./TextFiles/librarian.txt','a');
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