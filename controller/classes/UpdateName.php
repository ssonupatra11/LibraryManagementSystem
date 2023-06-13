<?php 
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
            if((new UpdateLibrarianNameDao)->updateNameDao($this->new_name))
                return true;
        }
        else{
            if((new UpdateUserNameDao)->updateNameDao($this->new_name))
                return true;
        }
        return false;
    }
}