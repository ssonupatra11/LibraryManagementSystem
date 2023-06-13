<?php 

Interface CreateUserDaoInt{
    /**
     * This functions takes object reference and create new account for user.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param User $user_obj
     */
    public function createAccount(User $user_obj):bool;
}