<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Model\DAO\LibrarianUpdateDao;
use Sonu\LibraryManagementSystem\Model\DAO\UserUpdateDao;

/**
 * This class has a functionality to take user input to update name.
 */
class UpdateName{

    /**
     * @access private
     * 
     * @var string
     */
    private string $new_name;

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
    public function updateName():bool{

        $this->new_name=(string)readline('Enter new name : ');
        $this->user_type=$_SESSION['type'];

        if($this->user_type==='librarian'){
            if(LibrarianUpdateDao::updateNameDao($this->new_name))
                return true;
        }
        else{
            if(UserUpdateDao::updateNameDao($this->new_name))
                return true;
        }
        return false;
    }
}