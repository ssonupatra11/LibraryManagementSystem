<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\RemoveBook;


final class RemoveBookTest extends TestCase{

    #[Test]
    public function removeBook(): void{
        $obj=new RemoveBook();

        //creating a test stub
        $sut=$this->createStub(RemoveBook::class);

        //configure a test stub
        $sut->method('removeBook')->willReturn(true,false);

        $this->assertTrue($sut->removeBook());
        $this->assertFalse($sut->removeBook());

        $this->assertObjectHasProperty('book_id',$obj);

    }
}
