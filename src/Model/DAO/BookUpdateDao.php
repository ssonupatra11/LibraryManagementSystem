<?php 

namespace Sonu\LibraryManagementSystem\Model\DAO;

use ErrorException;

final class BookUpdateDao{


    /**
     * @access private
     * 
     * @staticvar string $file_loc
     */
    private static string $file_loc='./src/TextFiles/books.txt';


    /**
     * @access public
     * 
     * @return bool
     * 
     * @static
     * 
     * @param string $new_auth
     * 
     * @param int $book_id
     */
    public static function updateBookAuthorDao(string $new_auth,int $book_id): bool
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
                    if((int)$n[0]===$book_id){
                        for ($i=0; $i <6 ; $i++) { 
                            if($i===2)
                                fwrite($book_file,$new_auth.' ');
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
     * @static
     * 
     * @param int $new_edi
     * 
     * @param int $book_id
     */
    public static function updateBookEditionDao(int $new_edi,int $book_id): bool
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
                    if((int)$n[0]===$book_id){
                        for ($i=0; $i <6 ; $i++) { 
                            if($i===3)
                                fwrite($book_file,$new_edi.' ');
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
     * @static
     * 
     * @param string $new_name
     * 
     * @param int $book_id
     */
    public static function updateBookNameDao(string $new_name,int $book_id): bool
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
                    if((int)$n[0]===$book_id){
                        for ($i=0; $i <6 ; $i++) { 
                            if($i===1)
                                fwrite($book_file,$new_name.' ');
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
     * @static
     * 
     * @param string $new_publi
     * 
     * @param int $book_id
     */
    public static function updateBookPublicationDao(string $new_publi,int $book_id): bool
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
                    if((int)$n[0]===$book_id){
                        for ($i=0; $i <6 ; $i++) { 
                            if($i===4)
                                fwrite($book_file,$new_publi.' ');
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
     * @static
     * 
     * @param int $new_qty
     * 
     * @param int $book_id
     */
    public static function updateBookQuantityDao(int $new_qty,int $book_id): bool
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
                    if((int)$n[0]===$book_id){
                        for ($i=0; $i <6 ; $i++) { 
                            if($i===5)
                                fwrite($book_file,$new_qty.' ');
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
        catch (ErrorException $e) {
            echo "Error".$e;
        }
        finally{
            fclose($book_file);   
        }
      
    } 
}