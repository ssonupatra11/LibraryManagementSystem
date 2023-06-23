<?php 

namespace Sonu\LibraryManagementSystem\Model\classes;

use Sonu\LibraryManagementSystem\Model\Interfaces\BorrowBookDaoInt;
use \ErrorException;

class BorrowBookDao implements BorrowBookDaoInt{

    /**
     * @access private
     * 
     * @var string
     */
    private string $file_loc='./src/TextFiles/books.txt';

    /**
     * @access private
     * 
     * @var string
     */
    private string $file_loc_1='./src/TextFiles/borrowedBooks.txt';

    /**
     * @access private
     * 
     * @var mixed
     */
    private mixed $book_file;

    /**
     * @access private
     * 
     * @var string
     */
    private string $name;

    /**
     * @access private
     * 
     * @var string
     */
    private string $auth;
    /**
     * @access private
     * 
     * @var string
     */
    private string $public;

    /**
     * @access private
     * 
     * @var int
     */
    private int $qty;

    /**
     * @access private
     * 
     * @var int
     */
    private int $edi;

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
     * @param int $book_id
     */
    public function borrowBookDao(int $book_id): bool
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
                    if($n[0]==$book_id){
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
                        fwrite($this->book_file,($n[5]-1));
                        fwrite($this->book_file,",");
                        $this->name=$n[1];
                        $this->auth=$n[2];
                        $this->edi=$n[3];
                        $this->qty=1;
                        $this->public=$n[4];
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
                    fclose($this->book_file);   

                    $this->book_file=fopen($this->file_loc_1,"a+");

                    fwrite($this->book_file,$book_id." ".$this->name." ".$this->auth." ".$this->edi." ".$this->public." ".$this->qty.",");

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