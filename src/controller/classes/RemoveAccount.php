<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Controller\Interfaces\RemoveAccountInt;
use Sonu\LibraryManagementSystem\Model\classes\RemoveLibAccDao;
use Sonu\LibraryManagementSystem\Model\classes\RemoveUserAccDao;

/**
 * This class has a functionality to remove account.
 */
class RemoveAccount implements RemoveAccountInt{

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
    private string $user_type;

    /**
     * @access public 
     * 
     * @return bool
     */
    public function removeAccount(): bool
    {

        $this->email=$_SESSION['email'];
        $this->user_type=$_SESSION['type'];

        if($this->user_type==='librarian'){
            if((new RemoveLibAccDao)->removeAccountDao($this->email))
                return true;
        }
        else{
            if((new RemoveUserAccDao)->removeAccountDao($this->email))
                return true;
        }
        return false;
    }
}