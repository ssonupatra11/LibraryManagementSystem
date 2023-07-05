<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Model\DAO\BorrowBookDao;

final class BorrowBookDaoTest extends TestCase{
    #[Test]
    public function borrowBookDao(): void{
        $obj=new BorrowBookDao();

        //creating a mock object
        $mockObj=$this->createMock(BorrowBookDao::class);

        //configure a test stub
        $mockObj->expects($this->any())->method('borrowBookDao')->willReturn(true,false);

        $this->assertTrue($mockObj->borrowBookDao(1));
        $this->assertFalse($mockObj->borrowBookDao(2));
//        $this->assertFalse($mockObj->borrowBookDao("sam"));  //will throw error

        $this->assertObjectHasProperty('name',$obj);
        $this->assertObjectHasProperty('auth',$obj);
        $this->assertObjectHasProperty('public',$obj);
        $this->assertObjectHasProperty('qty',$obj);
        $this->assertObjectHasProperty('edi',$obj);
    }


    #[Test]
    public function returnBookDao(): void{
        $obj=new BorrowBookDao();

        //creating a mock object
        $mockObj=$this->createMock(BorrowBookDao::class);

        //configure a test stub
        $mockObj->expects($this->any())->method('returnBookDao')->willReturn(true,false);

        $this->assertTrue($mockObj->returnBookDao(1));
//        $this->assertFalse($mockObj->returnBookDao("sd"));  //This will throw error

    }
}
?>