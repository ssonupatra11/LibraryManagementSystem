<?php 


namespace Sonu\LibraryManagementSystem\Model\classes;

use Sonu\LibraryManagementSystem\Model\Interfaces\UpdateBookAuthDaoInt;
use \ErrorException;

class UpdateBookAuthorDao implements UpdateBookAuthDaoInt{

    /**
     * @access private
     * 
     * @var string
     */
    private string $file_loc='./src/TextFiles/books.txt';

    /**
     * @access private
     * 
     * @var mixed
     */
    private mixed $book_file;

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
     * @param string $new_auth
     * 
     * @param int $book_id
     */
    public function updateBookAuthorDao(string $new_auth,int $book_id): bool
    {
        $this->count=0;
        
        try {
            $this->book_file=fopen($this->file_loc,"r");
            
            if(filesize($this->file_loc)>0){
                $content=explode(",",fread($this->book_file,filesize($this->file_loc)));
            }
            else{
                return false;
            }

            fclose($this->book_file);

            $this->book_file=fopen($this->file_loc,"w");
            foreach($content as $val){

                if(strlen($val)>0){
                    $n=explode(" ",$val);
                    if((int)$n[0]==$book_id){
                        fwrite($this->book_file,$n[0]);
                        fwrite($this->book_file," ");
                        fwrite($this->book_file,$n[1]);
                        fwrite($this->book_file," ");
                        fwrite($this->book_file,$new_auth);
                        fwrite($this->book_file," ");
                        fwrite($this->book_file,$n[3]);
                        fwrite($this->book_file," ");
                        fwrite($this->book_file,$n[4]);
                        fwrite($this->book_file," ");
                        fwrite($this->book_file,$n[5]);
                        fwrite($this->book_file,",");
                        $this->count++;
                    }
                    else{
                        fwrite($this->book_file,$n[0]);
                        fwrite($this->book_file," ");
                        fwrite($this->book_file,$n[1]);
                        fwrite($this->book_file," ");
                        fwrite($this->book_file,$n[2]);
                        fwrite($this->book_file," ");
                        fwrite($this->book_file,$n[3]);
                        fwrite($this->book_file," ");
                        fwrite($this->book_file,$n[4]);
                        fwrite($this->book_file," ");
                        fwrite($this->book_file,$n[5]);
                        fwrite($this->book_file,",");
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
            fclose($this->book_file);   
        }
      
    } 
}