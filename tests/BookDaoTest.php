<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\Book;
use Sonu\LibraryManagementSystem\Model\DAO\BookDao;


final class BookDaoTest extends TestCase{
    #[Test]
    public function create(): void{

        //creating a mock object
        $mockObj=$this->createMock(BookDao::class);

        //configure a test stub
        $mockObj->expects($this->any())->method('create')->willReturn(true,false);

        $this->assertTrue($mockObj->create(new Book()));
        $this->assertFalse($mockObj->create(new Book()));
    }

    public function remove(): void{
        $obj=new BookDao();

        //creating a mock object
        $mockObj=$this->createMock(BookDao::class);

        //configure a test stub
        $mockObj->expects($this->any())->method('remove')->willReturn(true,false);

        $this->assertTrue($mockObj->remove(1));
        $this->assertFalse($mockObj->remove(2));

    }
}
