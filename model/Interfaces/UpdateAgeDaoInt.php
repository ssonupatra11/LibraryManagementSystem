<?php 

Interface UpdateAgeDaoInt{
    /**
     * This functions takes age to update.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param string $new_age
     */
    public function updateAgeDao(string $new_age):bool;
}