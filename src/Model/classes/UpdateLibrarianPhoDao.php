<?php 

namespace Sonu\LibraryManagementSystem\Model\classes;

use Sonu\LibraryManagementSystem\Model\Interfaces\UpdatePhoneDaoInt;
use \ErrorException;

class UpdateLibrarianPhoDao implements UpdatePhoneDaoInt{

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
     * @param string $new_pho
     */
    public function updatePhoneDao(string $new_pho): bool
    {
        $this->count=0;
        
        try {
            $this->user_file=fopen($this->file_loc,"r");
            
            if(filesize($this->file_loc)>0){
                $content=explode(",",fread($this->user_file,filesize($this->file_loc)));
            }
            else{
                return false;
            }

            fclose($this->user_file);

            $this->user_file=fopen($this->file_loc,"w");
            foreach($content as $val){

                if(strlen($val)>0){
                    $n=explode(" ",$val);
                    if($n[4]===$_SESSION['email']){
                        fwrite($this->user_file,$n[0]);
                        fwrite($this->user_file," ");
                        fwrite($this->user_file,$n[1]);
                        fwrite($this->user_file," ");
                        fwrite($this->user_file,$n[2]);
                        fwrite($this->user_file," ");
                        fwrite($this->user_file,$n[3]);
                        fwrite($this->user_file," ");
                        fwrite($this->user_file,$n[4]);
                        fwrite($this->user_file," ");
                        fwrite($this->user_file,$n[5]);
                        fwrite($this->user_file," ");
                        fwrite($this->user_file,$new_pho);
                        fwrite($this->user_file," ");
                        fwrite($this->user_file,$n[7]);
                        fwrite($this->user_file," ");
                        fwrite($this->user_file,$n[8]);
                        fwrite($this->user_file,",");
                        $this->count++;
                    }
                    else{
                        fwrite($this->user_file,$n[0]);
                        fwrite($this->user_file," ");
                        fwrite($this->user_file,$n[1]);
                        fwrite($this->user_file," ");
                        fwrite($this->user_file,$n[2]);
                        fwrite($this->user_file," ");
                        fwrite($this->user_file,$n[3]);
                        fwrite($this->user_file," ");
                        fwrite($this->user_file,$n[4]);
                        fwrite($this->user_file," ");
                        fwrite($this->user_file,$n[5]);
                        fwrite($this->user_file," ");
                        fwrite($this->user_file,$n[6]);
                        fwrite($this->user_file," ");
                        fwrite($this->user_file,$n[7]);
                        fwrite($this->user_file," ");
                        fwrite($this->user_file,$n[8]);
                        fwrite($this->user_file,",");
                    }
                    if($this->count>0)
                        return true;
                    return false;
                }
                else{
                    return false;
                }
            }
        }
        catch (ErrorException $e) {
            echo "Error".$e;
        }
        finally{
            fclose($this->user_file);   
        }
      
    } 
}