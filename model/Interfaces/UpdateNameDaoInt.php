<?php 

Interface UpdateNameDaoInt{
    /**
     * This functions takes new name to update.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param string $new_name
     */
    public function updateNameDao(string $new_name):bool;
}