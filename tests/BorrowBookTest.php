<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\BorrowBook;


final class BorrowBookTest extends TestCase{
    #[Test]
    public function borrowBook(): void{

        //creating a test stub
        $sut=$this->createStub(BorrowBook::class);

        //configure a test stub
        $sut->method('borrowBook')->willReturn(true,false);

        $this->assertTrue($sut->borrowBook());
        $this->assertFalse($sut->borrowBook());

        $this->assertObjectHasProperty('book_id',(new BorrowBook));
    }
}
