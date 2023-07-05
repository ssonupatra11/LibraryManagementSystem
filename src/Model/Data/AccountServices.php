<?php 

namespace Sonu\LibraryManagementSystem\Model\Data;

use Sonu\LibraryManagementSystem\Controller\classes\CheckEmailFormat;
use Sonu\LibraryManagementSystem\Controller\classes\CheckPasswordFormat;
use Sonu\LibraryManagementSystem\Model\DAO\LibrarianDao;
use Sonu\LibraryManagementSystem\Model\DAO\UserDao;
use Sonu\LibraryManagementSystem\Model\Data\User;
use Sonu\LibraryManagementSystem\Model\Data\Librarian;

/**
 * This class has a functionality to take user input for adding new user.
 */
class AccountServices{


    private $user_type_obj;

    public function __construct(AccountInt $user_type_obj){
        $this->user_type_obj=$user_type_obj;
    }

    /**
     * @access public
     * 
     * @return bool
     */
    public function create(): bool
    {
        /**
         * @var mixed
         */
        $check_password_obj=new CheckPasswordFormat();
        /**
         * @var mixed
         */
        $check_email_obj=new CheckEmailFormat();

        echo <<<EOT
            ---------------------------------
                  Create New Account
            ---------------------------------
            \n
        EOT;

        $this->user_type_obj=$GLOBALS['uof']->create('user');
        $this->user_type_obj->setId(readline('Enter User id : '));
        $this->user_type_obj->setName(readline('Enter User name : '));
        $this->user_type_obj->setAge(readline('Enter User age : '));
        $this->user_type_obj->setEmail(readline('Enter User email : '));

        //This checks whether the email is in correct format or not.
        while($check_email_obj->checkEmailFormat($this->user_type_obj->getEmail())){
            echo "Email format is incorrect.Type again!",PHP_EOL;
            $this->user_type_obj->setEmail((string)readline("Enter email again : "));
        }
        $this->user_type_obj->setGen(readline('Enter User gender : '));
        $this->user_type_obj->setAddr(readline('Enter user address : '));
        $this->user_type_obj->setPhon(readline('Enter User phone : '));

        $this->user_type_obj->setPassword((string)readline("Enter user password : "));

        //This checks whether the password is in correct format or not.
        while($check_password_obj->checkPasswordFormat($this->user_type_obj->getPassword())){
            echo "Password format is incorrect.Type again!",PHP_EOL;
            $this->user_type_obj->setPassword((string)readline("Enter password again : "));
        }
        
        $this->user_type_obj->setConPass((string)readline("Enter confirm password : "));

        //This checks whether the confirm password is in correct format or not.
        while($check_password_obj->checkPasswordFormat($this->user_type_obj->getConPass())){
            echo "Confirm Password format is incorrect.Type again!",PHP_EOL;
            $this->user_type_obj->setConPass((string)readline("Enter confirm password again : "));
        }

        if($check_password_obj->matchPassword($this->user_type_obj->getPassword(),$this->user_type_obj->getConPass())){

            if($this->user_type_obj instanceof User){
                if((new UserDao)->create($this->user_type_obj))
                    return true;
                return false;   
            }
            else if($this->user_type_obj instanceof Librarian){
                if((new LibrarianDao)->create($this->user_type_obj))
                    return true;
                return false;
            }
        }
        else{
            echo "Password and confirm Password did not match. Try again!",PHP_EOL;
            return false;
        }

    }
}
