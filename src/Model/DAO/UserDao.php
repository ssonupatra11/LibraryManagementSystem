<?php

namespace Sonu\LibraryManagementSystem\Model\DAO;

use ErrorException;
use Sonu\LibraryManagementSystem\Model\DAO\AbstractViewDao;
use Sonu\LibraryManagementSystem\Model\DAO\CreateDaoInt;
use Sonu\LibraryManagementSystem\Model\DAO\RemoveDaoInt;
use Sonu\LibraryManagementSystem\Model\Data\AccountInt;

class UserDao extends AbstractViewDao implements CreateDaoInt,RemoveDaoInt{

    /**
     * @access public
     * 
     * @return bool
     * 
     * @param \Sonu\LibraryManagementSystem\Controller\classes\User $obj
     */
    public function create(AccountInt $obj):bool
    {
        try {
         
            $myfile=fopen('./src/TextFiles/user.txt','a');
    
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
     * @access private
     * 
     * @var string
     */
    private string $file_loc='./src/TextFiles/user.txt';

    /**
     * @access private
     * 
     * @var mixed
     */
    private mixed $user_file;

    /**
     * @access private
     * 
     * @var int
     */
    private int $count;

    /**
     * @access public
     * 
     * @return bool
     * 
     * @param string $email
     */
    public function remove(string|int $email): bool
    {
        $this->count=0;

        try{
            $this->user_file=fopen($this->file_loc,"r");
            if(filesize($this->file_loc)>0){
                $content=explode(",",fgets($this->user_file));
            }
            fclose($this->user_file);
    
           $this->user_file=fopen($this->file_loc,"w");
            foreach($content as $val){
    
                if(strlen($val)>0){
                    $n=explode(" ",$val);
                    if($n[4]!=$email){
                        for ($i=0; $i <9 ; $i++) { 
                            fwrite($this->user_file,$n[$i].' ');
                        }
                        fwrite($this->user_file,',');
                        $this->count++;
                    }
                }
            }            
            if($this->count>0){
                return true;
            }
            return false;
        }
        catch(ErrorException $e){
            echo "Error".$e;
        }
        finally{
            fclose($this->user_file);
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
            $this->user_file=fopen($this->file_loc,"r");
            if(filesize($this->file_loc)>0){
                $content=explode(",",fgets($this->user_file));
            }
            else {
                return null;
            }
            foreach($content as $val){
                $n=explode(" ",$val);
                if(strlen($val)>0){
                    if($n[4]===$_SESSION["email"]){
                        return $val;
                    }
                }
                else 
                    return null;
            }
        }
        catch(ErrorException $e){
            echo "Error".$e;
        }
        finally{
            fclose($this->user_file);
        }
    }
    
}