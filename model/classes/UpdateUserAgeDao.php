<?php 


/**
 * This includes UpdateAgeDaoInt.php file in this class.
 */
require_once("./model/Interfaces/UpdateAgeDaoInt.php");

class UpdateUserAgeDao implements UpdateAgeDaoInt{

    /**
     * @access private
     * 
     * @var string
     */
    private string $file_loc='./TextFiles/user.txt';

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
     * @param string $new_age
     */
    public function updateAgeDao(string $new_age): bool
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
                        fwrite($this->user_file,$new_age);
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