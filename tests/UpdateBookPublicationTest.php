<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateBookPublication;


final class UpdateBookPublicationTest extends TestCase{

    #[Test]
    public function updateBookPublication(): void{
        $obj=new UpdateBookPublication();

        //creating a test stub
        $sut=$this->createStub(UpdateBookPublication::class);

        //configure a test stub
        $sut->method('updateBookPublication')->willReturn(true,false);

        $this->assertTrue($sut->updateBookPublication());
        $this->assertFalse($sut->updateBookPublication());

        $this->assertObjectHasProperty('new_publication',$obj);
        $this->assertObjectHasProperty('book_id',$obj);

    }
}
