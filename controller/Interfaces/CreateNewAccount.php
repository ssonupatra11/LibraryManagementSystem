<?php 

/**
 * This interface has a function to create new account.
 */
Interface CreateNewAccount{

    /**
     * This functions takes object reference and create new account.
     * 
     * @access public
     * 
     * @return bool
     */
    public function addAccount():bool;
}