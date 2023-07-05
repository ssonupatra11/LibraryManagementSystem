<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Model\DAO\LibrarianUpdateDao;
use Sonu\LibraryManagementSystem\Model\DAO\UserUpdateDao;

/**
 * This class has a functionality to take user input for adding new librarian.
 */
class UpdatePhone{

    /**
     * @access private
     * 
     * @var string
     */
    private string $new_pho;

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
    public function updatePhone():bool{

        $this->new_pho=(string)readline('Enter new phone : ');
        $this->user_type=$_SESSION['type'];

        if($this->user_type==='librarian'){
            if(LibrarianUpdateDao::updatePhoneDao($this->new_pho))
                return true;
        }
        else{
            if(UserUpdateDao::updatePhoneDao($this->new_pho))
                return true;
        }
        return false;
    }
}