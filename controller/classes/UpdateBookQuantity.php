<?php 
/**
 * This class has a functionality to take user input of quantity to update it.
 */
class UpdateBookQuantity{

    /**
     * @access private
     * 
     * @var int
     */
    private int $new_quantity;

    /**
     * @access private
     * 
     * @var int
     */
    private int $book_id;

    public function updateBookQuantity():bool{

        $this->new_quantity=(int)readline('Enter new book quantity : ');
        
        $this->book_id=(int)readline('Enter book id : ');

        if((new UpdateBookQuantityDao)->updateBookQuantityDao($this->new_quantity,$this->book_id))
                return true;
        return false;
    }
}