<?php 


namespace Sonu\LibraryManagementSystem\Model\classes;

use Sonu\LibraryManagementSystem\Model\Interfaces\LoginDaoInt;
use \ErrorException;

class LibrarianLoginDao implements LoginDaoInt{

    /**
     * @access private
     * 
     * @var string
     */
    private string $file_loc='./src/TextFiles/librarian.txt';

    /**
     * @access private
     * 
     * @var mixed
     */
    private mixed $lib_file;

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
     * @param string @email
     * 
     * @param string $pass
     */
    public function loginDao(string $email,string $pass): bool
    {
        try{
            $this->lib_file=fopen($this->file_loc,"r");
            if(filesize($this->file_loc)>0){
                $content=explode(",",fread($this->lib_file,filesize($this->file_loc)));
            }
            else{
                echo "Librarian not available! Register new Librarian.",PHP_EOL;
                return false;
            }
            foreach($content as $val)
            {
                if(strlen($val)>0){
                    $n=explode(" ",$val);
                    if($n[4]===$email && $n[7]===$pass){
                        $this->uem=$email;
                        $this->nam=$n[1];
                        $this->typ="librarian";
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
                echo "Librarian is not available.Register new User.",PHP_EOL;
                return false;
            }
        }
        catch(ErrorException $e){
            echo "Error".$e;
        }
        finally{
            fclose($this->lib_file);
        }

    }
}