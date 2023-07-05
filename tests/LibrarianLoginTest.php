<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\LibrarianLogin;


final class LibrarianLoginTest extends TestCase{
    #[Test]
    public function addBooks(): void{
        $obj=new LibrarianLogin();
        //creating a test stub
        $sut=$this->createStub(LibrarianLogin::class);

        //configure a test stub
        $sut->method('login')->willReturn(true,false);

        $this->assertTrue($sut->login());
        $this->assertFalse($sut->login());

        $this->assertObjectHasProperty('email',$obj);
        $this->assertObjectHasProperty('password',$obj);
    }
}
?>