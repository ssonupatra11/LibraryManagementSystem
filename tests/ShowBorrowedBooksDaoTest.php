<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Model\DAO\ShowBorrowedBooksDao;

final class ShowBorrowedBooksDaoTest extends TestCase{
    #[Test]
    public function displayData(): void{
        $obj=new ShowBorrowedBooksDao();

        //creating a mock object
        $mockObj=$this->createMock(ShowBorrowedBooksDao::class);

        //configure a test stub
        $mockObj->expects($this->any())->method('displayData')->willReturn([]);

        $this->assertIsArray($mockObj->displayData());

    }
}
?>