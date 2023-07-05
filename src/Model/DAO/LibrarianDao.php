<?php

namespace Sonu\LibraryManagementSystem\Model\DAO;

use ErrorException;
use Sonu\LibraryManagementSystem\Controller\classes\Librarian as Librarian;
use Sonu\LibraryManagementSystem\Model\DAO\AbstractViewDao;
use Sonu\LibraryManagementSystem\Model\DAO\CreateDaoInt;
use Sonu\LibraryManagementSystem\Model\DAO\RemoveDaoInt;
use Sonu\LibraryManagementSystem\Model\Data\AccountInt;

class LibrarianDao extends AbstractViewDao implements CreateDaoInt,RemoveDaoInt{
    /**
     * @access private
     * 
     * @staticvar string $file_loc
     */
    private static string $file_loc='./src/TextFiles/librarian.txt';


    /**
     * @access public
     * 
     * @return bool
     * 
     * @param \Sonu\LibraryManagementSystem\Controller\classes\Librarian $obj
     */
    public function create(AccountInt $obj): bool
    {
        try {
            
            $myfile=fopen(self::$file_loc,'a');
            
            $val='';
            foreach($obj->getPropertiesAsArray() as $items){
                $val.=$items.' ';
            }
            $val.=',';


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
    
    /**
     * @access public
     * 
     * @return bool
     * 
     * @param string $email
     */
    public function remove(string|int $email): bool
    {
        $count=0;

        try{
            $user_file=fopen(self::$file_loc,"r");
            if(filesize(self::$file_loc)>0){
                $content=explode(",",fgets($user_file));
            }
            fclose($user_file);
    
           $user_file=fopen(self::$file_loc,"w");
            foreach($content as $val){
    
                if(strlen($val)>0){
                    $n=explode(" ",$val);
                    if($n[4]!=$email){
                        for ($i=0; $i <9 ; $i++) { 
                            fwrite($user_file,$n[$i].' ');
                        }
                        fwrite($user_file,',');
                        $count++;
                    }
                }
            }
            if($count>0){
                return true;
            }
            return false;
        }
        catch(ErrorException $e){
            echo "Error".$e;
        }
        finally{
            fclose($user_file);
        }
    }


    

    /**
     * @access public
     * 
     * @return string|null
     */
    public function viewProfile(): string|null
    {
        try{
            $lib_file=fopen(self::$file_loc,"r");
            if(filesize(self::$file_loc)>0){
                $content=explode(",",fgets($lib_file));
            }
            else{
                return null;
            }
            foreach($content as $val){
                $n=explode(" ",$val);
                if(strlen($val)>0){
                    if($n[4]===$_SESSION["email"]){
                        return $val;
                    }
                    else
                        return null;
                }
                else 
                    return null;
            }
        }
        catch(ErrorException $e){
            echo "Error".$e;
        }
        finally{
            fclose($lib_file);
        }
    }
}