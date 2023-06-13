<?php 
/**
 * This include RemoveAccountInt.php interface file in this file.
 */
include("./controller/Interfaces/RemoveAccountInt.php");

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