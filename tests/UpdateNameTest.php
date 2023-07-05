<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateName;


final class UpdateNameTest extends TestCase{

    #[Test]
    public function updateName(): void{
        $obj=new UpdateName();

        //creating a test stub
        $sut=$this->createStub(UpdateName::class);

        //configure a test stub
        $sut->method('updateName')->willReturn(true,false);

        $this->assertTrue($sut->updateName());
        $this->assertFalse($sut->updateName());

        $this->assertObjectHasProperty('new_name',$obj);
        $this->assertObjectHasProperty('user_type',$obj);

    }
}
