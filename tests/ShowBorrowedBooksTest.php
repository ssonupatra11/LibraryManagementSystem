<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\ShowBorrowedBooks;


final class ShowBorrowedBooksTest extends TestCase{

    #[Test]
    public function getData(): void{
        $obj=new ShowBorrowedBooks();

        //creating a test stub
        $sut=$this->createStub(ShowBorrowedBooks::class);

        //configure a test stub
        $sut->method('getData')->willReturn([]);

        $this->assertIsArray($sut->getData());
    }
}
