<?php 
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
            if((new UpdateLibrarianPhoDao)->updatePhoneDao($this->new_pho))
                return true;
        }
        else{
            if((new UpdateUserPhoDao)->updatePhoneDao($this->new_pho))
                return true;
        }
        return false;
    }
}