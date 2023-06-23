<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Model\classes\CreateUserDao;
use Sonu\LibraryManagementSystem\Controller\Interfaces\CreateNewAccount;

/**
 * This class has a functionality to take user input for adding new user.
 */
class AddNewUser implements CreateNewAccount{

    /**
     * @access private
     * 
     * @var \Sonu\LibraryManagementSystem\Controller\classes\User
     */
    private User $user_obj;

    /**
     * @access public
     * 
     * @return bool
     */
    public function addAccount(): bool
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

        $this->user_obj=$GLOBALS['uof']->create('user');
        $this->user_obj->setId(readline('Enter User id : '));
        $this->user_obj->setName(readline('Enter User name : '));
        $this->user_obj->setAge(readline('Enter User age : '));
        $this->user_obj->setEmail(readline('Enter User email : '));

        //This checks whether the email is in correct format or not.
        while($check_email_obj->checkEmailFormat($this->user_obj->getEmail())){
            echo "Email format is incorrect.Type again!",PHP_EOL;
            $this->user_obj->setEmail((string)readline("Enter email again : "));
        }
        $this->user_obj->setGen(readline('Enter User gender : '));
        $this->user_obj->setAddr(readline('Enter user address : '));
        $this->user_obj->setPhon(readline('Enter User phone : '));

        $this->user_obj->setPassword((string)readline("Enter user password : "));

        //This checks whether the password is in correct format or not.
        while($check_password_obj->checkPasswordFormat($this->user_obj->getPassword())){
            echo "Password format is incorrect.Type again!",PHP_EOL;
            $this->user_obj->setPassword((string)readline("Enter password again : "));
        }
        
        $this->user_obj->setConPass((string)readline("Enter confirm password : "));

        //This checks whether the confirm password is in correct format or not.
        while($check_password_obj->checkPasswordFormat($this->user_obj->getConPass())){
            echo "Confirm Password format is incorrect.Type again!",PHP_EOL;
            $this->user_obj->setConPass((string)readline("Enter confirm password again : "));
        }

        if($check_password_obj->matchPassword($this->user_obj->getPassword(),$this->user_obj->getConPass())){
            if((new CreateUserDao())->createAccount($this->user_obj))
                return true;
            return false;
        }
        else{
            echo "Password and confirm Password did not match. Try again!",PHP_EOL;
            return false;
        }

    }
}
