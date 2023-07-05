<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateBookAuthor;


final class UpdateBookAuthorTest extends TestCase{

    #[Test]
    public function updateBookAuthor(): void{
        $obj=new UpdateBookAuthor();

        //creating a test stub
        $sut=$this->createStub(UpdateBookAuthor::class);

        //configure a test stub
        $sut->method('updateBookAuthor')->willReturn(true,false);

        $this->assertTrue($sut->updateBookAuthor());
        $this->assertFalse($sut->updateBookAuthor());

        $this->assertObjectHasProperty('new_author',$obj);
        $this->assertObjectHasProperty('book_id',$obj);

    }
}
