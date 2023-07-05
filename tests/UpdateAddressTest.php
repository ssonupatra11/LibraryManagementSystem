<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateAddress;


final class UpdateAddressTest extends TestCase{

    #[Test]
    public function updateAddress(): void{
        $obj=new UpdateAddress();

        //creating a test stub
        $sut=$this->createStub(UpdateAddress::class);

        //configure a test stub
        $sut->method('updateAddress')->willReturn(true,false);

        $this->assertTrue($sut->updateAddress());
        $this->assertFalse($sut->updateAddress());

        $this->assertObjectHasProperty('new_addr',$obj);
        $this->assertObjectHasProperty('user_type',$obj);

    }
}
