<?php 

namespace Sonu\LibraryManagementSystem\Model\Interfaces;

Interface ShowBorrowedBooksDaoInt{
    /**
     * This functions returns data in array format.
     * 
     * @access public
     * 
     * @return array
     */
    public function displayData():array;
}