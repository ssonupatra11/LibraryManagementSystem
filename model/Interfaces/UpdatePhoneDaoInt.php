<?php 

Interface UpdatePhoneDaoInt{

    /**
     * This functions takes phone to update user number.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param string $new_phone
     */
    public function updatePhoneDao(string $new_phone):bool;
}