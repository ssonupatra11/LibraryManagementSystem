<?php 

namespace Sonu\LibraryManagementSystem\Model\DAO;

use Sonu\LibraryManagementSystem\Model\DAO\CreateDaoInt;
use Sonu\LibraryManagementSystem\Model\DAO\RemoveDaoInt;
use Sonu\LibraryManagementSystem\Controller\classes\Book;
use \ErrorException;

class BookDao implements CreateDaoInt,RemoveDaoInt{

    /**
     * @access private
     * 
     * @staticvar string $file_loc
     * 
     */
    private static $file_loc='./src/TextFiles/books.txt';

    /**
     * @access public
     * 
     * @return bool
     * 
     * @param \Sonu\LibraryManagementSystem\Controller\classes\Book $obj
     */
    public function create($obj): bool
    {
        try{
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
        catch(ErrorException $e){
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
     * @param int $book_id
     */
    public function remove(string|int $book_id): bool
    {
        
        $count=0;

        try{

            $book_file=fopen(self::$file_loc,"r");

            if(filesize(self::$file_loc)>0){
                $content=explode(",",fgets($book_file));
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
            fclose($book_file);
        }
    }
}