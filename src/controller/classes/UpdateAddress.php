<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Model\DAO\LibrarianUpdateDao;
use Sonu\LibraryManagementSystem\Model\DAO\UserUpdateDao;

/**
 * This class has a functionality to take user input of address and update it.
 */
class UpdateAddress{

    /**
     * @access private
     * 
     * @var string
     */
    private string $new_addr;
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
    public function updateAddress():bool{

        $this->new_addr=(string)readline('Enter new address : ');
        $this->user_type=$_SESSION['type'];

        if($this->user_type==='librarian'){
            if(LibrarianUpdateDao::updateAddressDao($this->new_addr))
                return true;
        }
        else{
            if(UserUpdateDao::updateAddressDao($this->new_addr))
                return true;
        }
        return false;
    }
}