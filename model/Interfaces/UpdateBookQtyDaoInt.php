<?php 

Interface UpdateBookQtyDaoInt{
    /**
     * This functions takes quantity and book id to update.
     * 
     * @access public
     * 
     * @return bool
     * 
     * @param int $new_qty
     * 
     * @param int $book_id
     */
    public function updateBookQuantityDao(int $new_qty,int $book_id):bool;
}