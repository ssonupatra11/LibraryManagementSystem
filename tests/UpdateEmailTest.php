<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateEmail;


final class UpdateEmailTest extends TestCase{

    #[Test]
    public function updateEmail(): void{
        $obj=new UpdateEmail();

        //creating a test stub
        $sut=$this->createStub(UpdateEmail::class);

        //configure a test stub
        $sut->method('updateEmail')->willReturn(true,false);

        $this->assertTrue($sut->updateEmail());
        $this->assertFalse($sut->updateEmail());

        $this->assertObjectHasProperty('new_email',$obj);
        $this->assertObjectHasProperty('user_type',$obj);

    }
}
