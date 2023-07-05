<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateBookQuantity;


final class UpdateBookQuantityTest extends TestCase{

    #[Test]
    public function updateBookQuantity(): void{
        $obj=new UpdateBookQuantity();

        //creating a test stub
        $sut=$this->createStub(UpdateBookQuantity::class);

        //configure a test stub
        $sut->method('updateBookQuantity')->willReturn(true,false);

        $this->assertTrue($sut->updateBookQuantity());
        $this->assertFalse($sut->updateBookQuantity());

        $this->assertObjectHasProperty('new_quantity',$obj);
        $this->assertObjectHasProperty('book_id',$obj);

    }
}
