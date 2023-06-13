<?php 

Interface CreateLibrarianDaoInt{
    /**
     * This functions takes object reference and create new account for librarian.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param Librarian $lib_obj
     */
    public function createAccount(Librarian $lib_obj):bool;
}