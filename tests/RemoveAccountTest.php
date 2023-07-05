<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\RemoveAccount;


final class RemoveAccountTest extends TestCase{

    #[Test]
    public function removeAccount(): void{
        $obj=new RemoveAccount();

        //creating a test stub
        $sut=$this->createStub(RemoveAccount::class);

        //configure a test stub
        $sut->method('removeAccount')->willReturn(true,false);

        $this->assertTrue($sut->removeAccount());
        $this->assertFalse($sut->removeAccount());

        $this->assertObjectHasProperty('email',$obj);
        $this->assertObjectHasProperty('user_type',$obj);

    }
}
