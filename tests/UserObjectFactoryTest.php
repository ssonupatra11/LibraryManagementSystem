<?php 

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\User;
use Sonu\LibraryManagementSystem\Controller\classes\Librarian;
use Sonu\LibraryManagementSystem\Controller\classes\UserObjectFactory;


final class UserObjectFactoryTest extends TestCase{
    #[Test]
    public function create(): void{

         $obj=new UserObjectFactory();
         $this->assertInstanceOf(User::class,$obj->create('user'));
         $this->assertInstanceOf(Librarian::class,$obj->create('librarian'));
         $this->assertIsObject($obj->create('user'));
         $this->assertIsObject($obj->create('librarian'));
         $this->assertIsNotObject('user');
         $this->assertNotInstanceOf(Librarian::class,$obj->create('user'));
         $this->assertNotInstanceOf(User::class,$obj->create('librarian'));
    }
}
