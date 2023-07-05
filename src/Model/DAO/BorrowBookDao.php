<?php 

namespace Sonu\LibraryManagementSystem\Model\DAO;

use Sonu\LibraryManagementSystem\Model\DAO\BorrowBookDaoInt;
use \ErrorException;

class BorrowBookDao implements BorrowBookDaoInt{

    /**
     * @access private
     * 
     * @staticvar string $file_loc
     */
    private static string $file_loc='./src/TextFiles/books.txt';

    /**
     * @access private
     * 
     * @staticvar string $file_loc_1
     */
    private static string $file_loc_1='./src/TextFiles/borrowedBooks.txt';

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
     * @access public
     * 
     * @return bool
     * 
     * @param int $book_id
     */
    public function borrowBookDao(int $book_id): bool
    {
     $count=0;
        
        try {
            $book_file=fopen(self::$file_loc,"r");
            
            if(filesize(self::$file_loc)>0){
                $content=explode(",",fgets($book_file));
            }
            else{
                return false;
            }

            fclose($book_file);

            $book_file=fopen(self::$file_loc,"w");
            foreach($content as $val){

                if(strlen($val)>0){
                    $n=explode(" ",$val);
                    if($n[0]==$book_id){
                        for ($i=0; $i <6 ; $i++) { 
                            if($i===5)
                                fwrite($book_file,($n[$i]-1).' ');
                            else
                                fwrite($book_file,$n[$i].' ');
                        }
                        fwrite($book_file,',');
                        $this->name=$n[1];
                        $this->auth=$n[2];
                        $this->edi=$n[3];
                        $this->qty=1;
                        $this->public=$n[4];
                        $count++;
                    }
                    else{
                        for ($i=0; $i <6 ; $i++) { 
                            fwrite($book_file,$n[$i].' ');
                        }
                        fwrite($book_file,',');
                    }
                    fclose($book_file);   

                    $book_file=fopen(self::$file_loc_1,"a+");

                    fwrite($book_file,$book_id." ".$this->name." ".$this->auth." ".$this->edi." ".$this->public." ".$this->qty.",");

                    if($count>0)
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
            fclose($book_file);   
        }   
    }


    /**
     * @access public
     * 
     * @return bool
     * 
     * @param int $book_id
     */
    public function returnBookDao(int $book_id): bool
    {
     $count=0;
        
        try {
            $book_file=fopen(self::$file_loc,"r");
            
            if(filesize(self::$file_loc)>0){
                $content=explode(",",fgets($book_file));
            }
            else{
                return false;
            }

            fclose($book_file);

            $book_file=fopen(self::$file_loc,"w");
            foreach($content as $val){

                if(strlen($val)>0){
                    $n=explode(" ",$val);
                    if($n[0]!=$book_id){
                        for ($i=0; $i <6 ; $i++) { 
                            fwrite($book_file,$n[$i].' ');
                        }
                        fwrite($book_file,',');
                    }
                    fclose($book_file);      

                    $book_file=fopen(self::$file_loc_1,"r");
            
                    if(filesize(self::$file_loc_1)>0){
                        $content=explode(",",fread($book_file,filesize(self::$file_loc_1)));
                    }
                    else{
                        return false;
                    }
        
                    fclose($book_file);

                    $book_file=fopen(self::$file_loc_1,"w");
                    foreach($content as $val){
        
                        if(strlen($val)>0){
                            $n=explode(" ",$val);
                            if($n[0]==$book_id){
                                for ($i=0; $i <6 ; $i++) { 
                                    if($i===5)
                                        fwrite($book_file,($n[$i]+1).' ');
                                    else
                                        fwrite($book_file,$n[$i].' ');
                                }
                                fwrite($book_file,',');
                                $count++;
                            }
                            else{
                                for ($i=0; $i <6 ; $i++) { 
                                    fwrite($book_file,$n[$i].' ');
                                }
                                fwrite($book_file,',');
                            }
                        }
                        else{
                            return false;
                        }
                    }
                    if($count>0)
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
            fclose($book_file);   
        }   
    }
}