<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;

use Sonu\LibraryManagementSystem\Model\Data\Librarian;
use Sonu\LibraryManagementSystem\Model\Data\User;

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
  