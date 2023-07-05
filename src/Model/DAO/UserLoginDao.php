<?php 

namespace Sonu\LibraryManagementSystem\Model\DAO;

use Sonu\LibraryManagementSystem\Model\DAO\LoginDaoInt;
use \ErrorException;

class UserLoginDao implements LoginDaoInt{

    /**
     * @access private
     * 
     * @staticvar string $file_loc
     */
    private static string $file_loc='./src/TextFiles/user.txt';

    /**
     * @access private
     * 
     * @var string|null
     */
    private string|null $uem=null;

    /**
     * @access private
     * 
     * @var string|null
     */
    private string|null $nam=null;

    /**
     * @access private
     * 
     * @var string|null
     */
    private string|null $typ=null;
    
    /**
     * @access public
     * 
     * @return bool
     * 
     * @param string $email
     * 
     * @param string $pass
     */
    public function loginDao(string $email,string $pass): bool
    {
        try{
            $user_file=fopen(self::$file_loc,"r");
            if(filesize(self::$file_loc)>0){
                $content=explode(",",fgets($user_file));
            }
            else{
                echo "User not available! Register new User.",PHP_EOL;
                return false;
            }
            foreach($content as $val)
            {
                if(strlen($val)>0){
                    $n=explode(" ",$val);
                    if($n[4]===$email && $n[7]===$pass){
                        $this->uem=$email;
                        $this->nam=$n[1];
                        $this->typ="user";
                    }
                    elseif($n[4]===$email && $n[7]!=$pass){
                        echo "Password is incorrect.Login again!",PHP_EOL;
                        return false;
                    }
                }
            }
            if(!is_null($this->uem) && !is_null($this->nam) && !is_null($this->typ)){
                $_SESSION["email"]=$this->uem;
                $_SESSION["name"]=$this->nam;
                $_SESSION["type"]=$this->typ;
                return true;
            }
            else{
                echo "User is not available.Register new User.",PHP_EOL;
                return false;
            }

        }
        catch(ErrorException $e){
            echo "Error".$e;
        }
        finally{
            fclose($user_file);
        }
    }
}