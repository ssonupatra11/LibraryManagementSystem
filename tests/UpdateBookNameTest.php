<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateBookName;


final class UpdateBookNameTest extends TestCase{

    #[Test]
    public function updateBookName(): void{
        $obj=new UpdateBookName();

        //creating a test stub
        $sut=$this->createStub(UpdateBookName::class);

        //configure a test stub
        $sut->method('updateBookName')->willReturn(true,false);

        $this->assertTrue($sut->updateBookName());
        $this->assertFalse($sut->updateBookName());

        $this->assertObjectHasProperty('new_name',$obj);
        $this->assertObjectHasProperty('book_id',$obj);

    }
}
