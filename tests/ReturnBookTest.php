<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\ReturnBook;


final class ReturnBookTest extends TestCase{

    #[Test]
    public function returnBook(): void{
        $obj=new ReturnBook();

        //creating a test stub
        $sut=$this->createStub(ReturnBook::class);

        //configure a test stub
        $sut->method('returnBook')->willReturn(true,false);

        $this->assertTrue($sut->returnBook());
        $this->assertFalse($sut->returnBook());

        $this->assertObjectHasProperty('book_id',$obj);
    }
}
