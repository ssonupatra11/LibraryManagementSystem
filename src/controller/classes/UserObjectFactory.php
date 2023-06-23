<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Controller\classes\User;
use Sonu\LibraryManagementSystem\Controller\classes\Librarian;

/**
 * This class is example of factory design pattern, which creates objects.
 */
class UserObjectFactory {
 
    /**
     * @access protected
     */
    protected $obj;
    
    /**
     * Determine whose object to create. 
     * @access public
     * 
     * @return mixed
     * 
     * @param string $type
     */
    public function create(string $type):mixed
    {
      if($type === 'user')
        return $this->obj = new User();
      else if($type==='librarian')
        return $this->obj = new Librarian();
    }
  }
  