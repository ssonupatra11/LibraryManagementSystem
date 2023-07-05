<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateBookEdition;


final class UpdateBookEditionTest extends TestCase{

    #[Test]
    public function updateBookEdition(): void{
        $obj=new UpdateBookEdition();

        //creating a test stub
        $sut=$this->createStub(UpdateBookEdition::class);

        //configure a test stub
        $sut->method('updateBookEdition')->willReturn(true,false);

        $this->assertTrue($sut->updateBookEdition());
        $this->assertFalse($sut->updateBookEdition());

        $this->assertObjectHasProperty('new_edition',$obj);
        $this->assertObjectHasProperty('book_id',$obj);

    }
}
