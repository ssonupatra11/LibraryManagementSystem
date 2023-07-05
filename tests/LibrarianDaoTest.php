<?php 

declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\Librarian;
use Sonu\LibraryManagementSystem\Model\DAO\LibrarianDao;


final class LibrarianDaoTest extends TestCase{
    #[Test]
    public function create(): void{

        $obj=new LibrarianDao();

        //creating a mock object
        $mockObj=$this->createMock(LibrarianDao::class);

        //configure a test stub
        $mockObj->expects($this->any())->method('create')->willReturn(true,false);

        $this->assertTrue($mockObj->create(new Librarian()));
        $this->assertFalse($mockObj->create(new Librarian()));


         $this->assertInstanceOf(LibrarianDao::class,$obj);
        $this->assertIsNotCallable($obj);
        $this->assertIsObject($obj);
//       $this->assertTrue($obj->createAccount((new Librarian())));
    }


    #[Test]
    public function remove(): void{
        $obj=new LibrarianDao();

        //creating a mock object
        $mockObj=$this->createMock(LibrarianDao::class);

        //configure a test stub
        $mockObj->expects($this->any())->method('remove')->willReturn(true,false);

        $this->assertTrue($mockObj->remove("jack@hotmali.com"));

    }


    #[Test]
    public function viewProfile(): void{
        $obj=new LibrarianDao();

        //creating a mock object
        $mockObj=$this->createMock(LibrarianDao::class);

        //configure a test stub
        $mockObj->expects($this->any())->method('viewProfile')->willReturn("");

        $this->assertIsString($mockObj->viewProfile());

    }
}
