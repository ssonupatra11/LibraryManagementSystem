<?php 

/**
 * This includes CreateUserDaoInt.php file in this class.
 */
require_once("./model/Interfaces/CreateUserDaoInt.php");
class CreateUserDao implements CreateUserDaoInt{

    /**
     * @access public
     * 
     * @return bool
     * 
     * @param User $obj
     */
    public function createAccount(User $obj): bool
    {
        try {
         
        $myfile=fopen('./TextFiles/user.txt','a');
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