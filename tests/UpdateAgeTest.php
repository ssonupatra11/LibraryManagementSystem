<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateAge;


final class UpdateAgeTest extends TestCase{

    #[Test]
    public function updateAge(): void{
        $obj=new UpdateAge();

        //creating a test stub
        $sut=$this->createStub(UpdateAge::class);

        //configure a test stub
        $sut->method('updateAge')->willReturn(true,false);

        $this->assertTrue($sut->updateAge());
        $this->assertFalse($sut->updateAge());

        $this->assertObjectHasProperty('new_age',$obj);
        $this->assertObjectHasProperty('user_type',$obj);

    }
}
