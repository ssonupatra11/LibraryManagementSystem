<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Model\DAO\LibrarianLoginDao;

final class LibrarianLoginDaoTest extends TestCase{
    #[Test]
    public function loginDao(): void{
        $obj=new LibrarianLoginDao();

        //creating a mock object
        $mockObj=$this->createMock(LibrarianLoginDao::class);

        //configure a test stub
        $mockObj->expects($this->any())->method('loginDao')->willReturn(true,false);

        $this->assertTrue($mockObj->loginDao("ram@gmail.com","jksjda#T"));
        $this->assertFalse($mockObj->loginDao(2,"2"));

        $this->assertObjectHasProperty('file_loc',$obj);
        $this->assertObjectHasProperty('uem',$obj);
        $this->assertObjectHasProperty('nam',$obj);
        $this->assertObjectHasProperty('typ',$obj);
    }
}
?>
