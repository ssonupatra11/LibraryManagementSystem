<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\UserLogin;


final class UserLoginTest extends TestCase{

    #[Test]
    public function login(): void{
        $obj=new UserLogin();

        //creating a test stub
        $sut=$this->createStub(UserLogin::class);

        //configure a test stub
        $sut->method('login')->willReturn(true,false);

        $this->assertTrue($sut->login());
        $this->assertFalse($sut->login());

        $this->assertObjectHasProperty('email',$obj);
        $this->assertObjectHasProperty('password',$obj);

    }
}
