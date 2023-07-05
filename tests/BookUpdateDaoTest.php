<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Model\DAO\BookUpdateDao;

final class BookUpdateDaoTest extends TestCase{
    #[Test]
    public function updateBookAuthorDao(): void{

        //creating a mock object
        $mockObj=$this->createMock(BookUpdateDao::class);

        //configure a test stub
        $mockObj->expects($this->any())->method('updateBookAuthorDao')->willReturn(true,false);

        $this->assertTrue($mockObj->updateBookAuthorDao("robert",1));

    }
}
?>