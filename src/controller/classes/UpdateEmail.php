<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Model\DAO\LibrarianUpdateDao;
use Sonu\LibraryManagementSystem\Model\DAO\UserUpdateDao;

/**
 * This class has a functionality to take user input to update email.
 */
class UpdateEmail{

    /**
     * @access private
     * 
     * @var string
     */
    private string $new_email;


    /**
     * @access private
     * 
     * @var string
     */
    private string $user_type;

    /**
     * @access public
     * 
     * @return bool
     */
    public function updateEmail():bool{

        $this->new_email=(string)readline('Enter new email : ');
        $this->user_type=$_SESSION['type'];

        if($this->user_type==='librarian'){
            if(LibrarianUpdateDao::updateEmailDao($this->new_email))
                return true;
        }
        else{
            if(UserUpdateDao::updateEmailDao($this->new_email))
                return true;
        }
        return false;
    }
}