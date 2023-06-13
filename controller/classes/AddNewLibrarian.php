<?php 
/**
 * This include CreateNewAccount.php interface file in this file.
 */
require_once("./controller/Interfaces/CreateNewAccount.php");


/**
 * This class has a functionality to take user input for adding new librarian.
 */
class AddNewLibrarian implements CreateNewAccount{

    /**
     * @access private
     * 
     * @var Librarian
     */
    private Librarian $lib_obj;

    /**
     * @access public 
     * 
     * @return bool
     */
    public function addAccount(): bool
    {

        $this->lib_obj=$GLOBALS['uof']->create('librarian');
        $this->lib_obj->setId(readline('Enter Librarian id : '));
        $this->lib_obj->setName(readline('Enter Librarian name : '));
        $this->lib_obj->setAge(readline('Enter Librarian age : '));
        $this->lib_obj->setEmail(readline('Enter Librarian email : '));
        $this->lib_obj->setGen(readline('Enter Librarian gender : '));
        $this->lib_obj->setAddr(readline('Enter Librarian address : '));
        $this->lib_obj->setPhon(readline('Enter Librarian phone : '));

        //This will return true or false.
        if((new CreateLibrarianDao())->createAccount($this->lib_obj))
            return true;
        return false;
    }
}
