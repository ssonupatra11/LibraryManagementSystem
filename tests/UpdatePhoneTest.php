<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\UpdatePhone;


final class UpdatePhoneTest extends TestCase{

    #[Test]
    public function updatePhone(): void{
        $obj=new UpdatePhone();

        //creating a test stub
        $sut=$this->createStub(UpdatePhone::class);

        //configure a test stub
        $sut->method('updatePhone')->willReturn(true,false);

        $this->assertTrue($sut->updatePhone());
        $this->assertFalse($sut->updatePhone());

        $this->assertObjectHasProperty('new_pho',$obj);
        $this->assertObjectHasProperty('user_type',$obj);

    }
}
