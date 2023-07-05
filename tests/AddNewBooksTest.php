<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use Sonu\LibraryManagementSystem\Controller\classes\AddNewBooks;


final class AddNewBooksTest extends TestCase{
    #[Test]
    #[TestDox("It returns true if book is added else false.")]
    public function addBooks(): void{

        //creating a test stub
        $sut=$this->createStub(AddNewBooks::class);

        //configure a test stub
        $sut->method('addBooks')->willReturn(true,false);

        $this->assertTrue($sut->addBooks());
        $this->assertFalse($sut->addBooks());
    }
}