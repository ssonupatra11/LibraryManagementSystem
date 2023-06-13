<?php 

/**
 * This class has a functionality to take user input of age to upate age.
 */
class UpdateAge{

    /**
     * @access private
     * 
     * @var string
     */
    private string $new_age;
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
    public function updateAge():bool{

        $this->new_age=(string)readline('Enter new age : ');
        $this->user_type=$_SESSION['type'];

        if($this->user_type==='librarian'){
            if((new UpdateLibrarianAgeDao)->updateAgeDao($this->new_age))
                return true;
        }
        else{
            if((new UpdateUserAgeDao)->updateAgeDao($this->new_age))
                return true;
        }
        return false;
    }
}