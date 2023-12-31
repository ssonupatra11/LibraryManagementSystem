<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Model\classes\LibrarianViewDao;
use Sonu\LibraryManagementSystem\Model\classes\UserViewDao;

/**
 * This class has a functionality to view profile based on user type.
 */
class ViewProfile{

    /**
     * @access private
     * 
     * @var string
     */
    private string $user_type;

    /**
     * @access private
     * 
     * @var string|null
     */
    private string|null $profile_data;

    /**
     * @access public
     * 
     * @return string|null
     */
    public function viewProfile():string|null{
        $this->user_type=$_SESSION['type'];

        if($this->user_type==='librarian'){
            $this->profile_data=(new LibrarianViewDao)->viewProfile();
            if(isset($this->profile_data))
                return $this->profile_data;
            else
                return null;
        }
        else{
            $this->profile_data=(new UserViewDao)->viewProfile();
            if(isset($this->profile_data))
                return $this->profile_data;
            else
                return null;
        }
    }
}