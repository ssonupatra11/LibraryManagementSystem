<?php 

namespace Sonu\LibraryManagementSystem\Model\DAO;

use ErrorException;

final class LibrarianUpdateDao{

     /**
     * @access private
     * 
     * @staticvar string $file_loc
     */
    private static string $file_loc='./src/TextFiles/librarian.txt';

    /**
     * @access public
     * 
     * @static
     * 
     * @return bool
     * 
     * @param string $new_addr
     */
    public static function updateAddressDao(string $new_addr): bool
    {

        $count=0;
        
        try {
            $user_file=fopen(self::$file_loc,"r");
            
            if(filesize(self::$file_loc)>0){
                $content=explode(",",fgets($user_file));
            }
            else{
                return false;
            }

            fclose($user_file);

            $user_file=fopen(self::$file_loc,"w");
            foreach($content as $val){

                if(strlen($val)>0){
                    $n=explode(" ",$val);
                    if($n[4]===$_SESSION['email']){
                        for ($i=0; $i <9 ; $i++) { 
                            if($i===3)
                                fwrite($user_file,$new_addr.' ');
                            else
                                fwrite($user_file,$n[$i].' ');
                        }
                        fwrite($user_file,',');
                        $count++;
                    }
                    else{
                        for ($i=0; $i <9 ; $i++) { 
                            fwrite($user_file,$n[$i].' ');
                        }
                        fwrite($user_file,',');

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
            fclose($user_file);   
        }
    } 



    /**
     * @access public
     * 
     * @static
     * 
     * @return bool
     * 
     * @param string $new_age
     */
    public static function updateAgeDao(string $new_age): bool
    {
        $count=0;

        try {
            $user_file=fopen(self::$file_loc,"r");
            
            if(filesize(self::$file_loc)>0){
                $content=explode(",",fgets($user_file));
            }
            else{
                return false;
            }

            fclose($user_file);

            $user_file=fopen(self::$file_loc,"w");
            foreach($content as $val){

                if(strlen($val)>0){
                    $n=explode(" ",$val);
                    if($n[4]===$_SESSION['email']){
                        for ($i=0; $i <9 ; $i++) { 
                            if($i===2)
                                fwrite($user_file,$new_age.' ');
                            else
                                fwrite($user_file,$n[$i].' ');
                        }
                        fwrite($user_file,',');
                        $count++;
                    }
                    else{
                        for ($i=0; $i <9 ; $i++) { 
                            fwrite($user_file,$n[$i].' ');
                        }
                        fwrite($user_file,',');
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
            fclose($user_file);   
        }
    } 

    /**
     * @access public
     * 
     * @static
     * 
     * @return bool
     * 
     * @param string $new_email
     */
    public static function updateEmailDao(string $new_email): bool
    {
        $count=0;
        
        try {
            $user_file=fopen(self::$file_loc,"r");
            
            if(filesize(self::$file_loc)>0){
                $content=explode(",",fgets($user_file));
            }
            else{
                return false;
            }

            fclose($user_file);

            $user_file=fopen(self::$file_loc,"w");
            foreach($content as $val){

                if(strlen($val)>0){
                    $n=explode(" ",$val);
                    if($n[4]===$_SESSION['email']){
                        for ($i=0; $i <9 ; $i++) { 
                            if($i===4)
                                fwrite($user_file,$new_email.' ');
                            else
                                fwrite($user_file,$n[$i].' ');
                        }
                        fwrite($user_file,',');
                        $count++;
                    }
                    else{
                        for ($i=0; $i <9 ; $i++) { 
                            fwrite($user_file,$n[$i].' ');
                        }
                        fwrite($user_file,',');
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
            fclose($user_file);   
        }
      
    } 



    /**
     * @access public
     * 
     * @static
     * 
     * @return bool
     * 
     * @param string $new_name
     */
    public static function updateNameDao(string $new_name): bool
    {
        $count=0;
        
        try {
            $user_file=fopen(self::$file_loc,"r");
            
            if(filesize(self::$file_loc)>0){
                $content=explode(",",fgets($user_file));
            }
            else{
                return false;
            }

            fclose($user_file);

            $user_file=fopen(self::$file_loc,"w");
            foreach($content as $val){

                if(strlen($val)>0){
                    $n=explode(" ",$val);
                    if($n[4]===$_SESSION['email']){
                        for ($i=0; $i <9 ; $i++) { 
                            if($i===1)
                                fwrite($user_file,$new_name.' ');
                            else
                                fwrite($user_file,$n[$i].' ');
                        }
                        fwrite($user_file,',');
                        $count++;
                    }
                    else{
                        for ($i=0; $i <9 ; $i++) { 
                            fwrite($user_file,$n[$i].' ');
                        }
                        fwrite($user_file,',');
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
            fclose($user_file);   
        }
    }



    /**
     * @access public
     * 
     * @static
     * 
     * @return bool
     * 
     * @param string $new_pho
     */
    public static function updatePhoneDao(string $new_pho): bool
    {
        $count=0;
        
        try {
            $user_file=fopen(self::$file_loc,"r");
            
            if(filesize(self::$file_loc)>0){
                $content=explode(",",fgets($user_file));
            }
            else{
                return false;
            }

            fclose($user_file);

            $user_file=fopen(self::$file_loc,"w");
            foreach($content as $val){

                if(strlen($val)>0){
                    $n=explode(" ",$val);
                    if($n[4]===$_SESSION['email']){
                        for ($i=0; $i <9 ; $i++) { 
                            if($i===6)
                                fwrite($user_file,$new_pho.' ');
                            else
                                fwrite($user_file,$n[$i].' ');
                        }
                        fwrite($user_file,',');

                        $count++;
                    }
                    else{
                        for ($i=0; $i <9 ; $i++) { 
                            fwrite($user_file,$n[$i].' ');
                        }
                        fwrite($user_file,',');
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
            fclose($user_file);   
        }
      
    } 
}