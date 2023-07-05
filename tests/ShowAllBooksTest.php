<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\ShowAllBooks;


final class ShowAllBooksTest extends TestCase{

    #[Test]
    public function displayData(): void{
        $obj=new ShowAllBooks();

        //creating a test stub
        $sut=$this->createStub(ShowAllBooks::class);

        //configure a test stub
        $sut->method('displayData')->willReturn([]);

        $this->assertIsArray($sut->displayData());
    }
}
