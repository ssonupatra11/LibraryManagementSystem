<?php 


namespace Sonu\LibraryManagementSystem\Model\classes;

use Sonu\LibraryManagementSystem\Model\Interfaces\CreateUserDaoInt;
use Sonu\LibraryManagementSystem\Controller\classes\User;
use \ErrorException;

class CreateUserDao implements CreateUserDaoInt{

    /**
     * @access public
     * 
     * @return bool
     * 
     * @param \Sonu\LibraryManagementSystem\Controller\classes\User $obj
     */
    public function createAccount(User $obj): bool
    {
        try {
         
        $myfile=fopen('./src/TextFiles/user.txt','a');
        $val=$obj->getId()." ".$obj->getName()." ".$obj->getAge()." ".$obj->getAddr()." ".$obj->getEmail()." ".$obj->getGen()." ".$obj->getPho()." ".$obj->getPassword()." ".$obj->getConPass().",";
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