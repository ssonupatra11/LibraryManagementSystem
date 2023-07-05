<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\ViewProfile;


final class ViewProfileTest extends TestCase{

    #[Test]
    public function viewProfile(): void{
        $obj=new ViewProfile();

        //creating a test stub
        $sut=$this->createStub(ViewProfile::class);

        //configure a test stub
        $sut->method('viewProfile')->willReturn("");

        $this->assertIsString($sut->viewProfile());

        $this->assertObjectHasProperty('profile_data',$obj);
        $this->assertObjectHasProperty('user_type',$obj);

    }
}
