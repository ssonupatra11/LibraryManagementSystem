<?php

namespace Sonu\LibraryManagementSystem\Model\Interfaces;

Interface RemoveAccountDaoInt{
    /**
     * This functions takes email to delete account.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param string $email
     */
    public function removeAccountDao(string $email):bool;
}