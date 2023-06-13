<?php 

Interface LoginDaoInt{
    /**
     * This functions takes email and password to login.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param string $email
     * 
     * @param string $pass
     */
    public function loginDao(string $email,string $pass):bool;
}