<?php 

namespace Sonu\LibraryManagementSystem\Model\Interfaces;

use Sonu\LibraryManagementSystem\Controller\classes\Librarian;

Interface CreateLibrarianDaoInt{
    /**
     * This functions takes object reference and create new account for librarian.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param \Sonu\LibraryManagementSystem\Controller\classes\Librarian $lib_obj
     */
    public function createAccount(Librarian $lib_obj):bool;
}