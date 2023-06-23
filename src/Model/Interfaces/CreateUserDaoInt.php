<?php 

namespace Sonu\LibraryManagementSystem\Model\Interfaces;

use Sonu\LibraryManagementSystem\Controller\classes\User;

Interface CreateUserDaoInt{
    /**
     * This functions takes object reference and create new account for user.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param \Sonu\LibraryManagementSystem\Controller\classes\User $user_obj
     */
    public function createAccount(User $user_obj):bool;
}