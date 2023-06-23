<?php 

namespace Sonu\LibraryManagementSystem\Model\classes;

use Sonu\LibraryManagementSystem\Model\AbstractClass\AbstractViewDao;
use \ErrorException;

class LibrarianViewDao extends AbstractViewDao{

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
     * @access public
     * 
     * @return string|null
     */
    public function viewProfile(): string|null
    {
        try{
            $this->lib_file=fopen($this->file_loc,"r");
            if(filesize($this->file_loc)>0){
                $content=explode(",",fread($this->lib_file,filesize($this->file_loc)));
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
            fclose($this->lib_file);
        }
    }
}