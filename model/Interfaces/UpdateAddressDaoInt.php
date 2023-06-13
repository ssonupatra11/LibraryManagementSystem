<?php 

Interface UpdateAddressDaoInt{
    /**
     * This functions takes address to update.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param string $new_addr
     */
    public function updateAddressDao(string $new_addr):bool;
}