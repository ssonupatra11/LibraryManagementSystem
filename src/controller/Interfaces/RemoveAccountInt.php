<?php 

namespace Sonu\LibraryManagementSystem\Controller\Interfaces;

/**
 * This interface has a function to remove account.
 */
Interface RemoveAccountInt{

    /**
     * This functions takes object reference and create new account.
     * 
     * @access public
     * 
     * @return bool
     */
    public function removeAccount():bool;
}