<?php 

Interface UpdateEmailDaoInt{
    /**
     * This functions takes email to update user email.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param string $new_email
     */
    public function updateEmailDao(string $new_email):bool;
}