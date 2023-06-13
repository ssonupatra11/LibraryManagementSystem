<?php 

/**
 * This class has a functionality to take user input to login librarian.
 */
class LibrarianLogin{
    /**
     * @access private
     * 
     * @var string
     */
    private string $email;

    /**
     * @access private
     * 
     * @return string
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

        //This checks whether email is in correct format or not.
        while($check_email_obj->checkEmailFormat($this->email)){
            echo "Email format is incorrect.Type again!",PHP_EOL;
            $this->email=(string)readline("Enter email again : ");
        }

        //This checks whether password is in correct format or not.
        $this->password=(string)readline("Enter password : ");
        while($check_password_obj->checkPasswordFormat($this->password)){
            echo "Password format is incorrect.Type again!",PHP_EOL;
            $this->password=(string)readline("Enter password again : ");
        }

        
        if((new LibrarianLoginDao)->loginDao($this->email,$this->password))
            return true;
        return false;
    }
}