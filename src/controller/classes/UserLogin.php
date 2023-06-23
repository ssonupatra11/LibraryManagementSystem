<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Controller\classes\CheckEmailFormat;
use Sonu\LibraryManagementSystem\Controller\classes\CheckPasswordFormat;
use Sonu\LibraryManagementSystem\Model\classes\UserLoginDao;

/**
 * This class has a functionality to take user input of user email and password to login.
 */
class UserLogin{
    /**
     * @access private
     * 
     * @var string
     */
    private string $email;
    /**
     * @access private
     * 
     * @var string
     */
    private string $password;

    /**
     * @access public
     * 
     * @return bool
     */
    public function login():bool{
        /**
         * @var mixed
         */
        $check_password_obj=new CheckPasswordFormat();
        /**
         * @var mixed
         */
        $check_email_obj=new CheckEmailFormat();

        $this->email=(string)readline("Enter email : ");

        //To check whether email is in correct format or not.
        while($check_email_obj->checkEmailFormat($this->email)){
            echo "Email format is incorrect.Type again!",PHP_EOL;
            $this->email=(string)readline("Enter email again : ");
        }
        $this->password=(string)readline("Enter password : ");

        //To check whether password is in correct format or not.
        while($check_password_obj->checkPasswordFormat($this->password)){
            echo "Password format is incorrect.Type again!",PHP_EOL;
            $this->password=(string)readline("Enter password again : ");
        }
        if((new UserLoginDao)->loginDao($this->email,$this->password)){
            return true;
        }   
        return false;
    }
}