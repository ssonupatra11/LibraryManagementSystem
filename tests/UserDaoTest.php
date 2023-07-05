<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\User;
use Sonu\LibraryManagementSystem\Model\DAO\UserDao;

final class UserDaoTest extends TestCase{
    #[Test]
    public function createAccount(): void{
        $obj=new UserDao();

        //creating a mock object
        $mockObj=$this->createMock(UserDao::class);

        //configure a test stub
        $mockObj->expects($this->any())->method('create')->willReturn(true,false);

        $this->assertTrue($mockObj->create(new User));
        $this->assertFalse($mockObj->create(new User));
    }

    #[Test]
    public function remove(): void{
        $obj=new UserDao();

        //creating a mock object
        $mockObj=$this->createMock(UserDao::class);

        //configure a test stub
        $mockObj->expects($this->any())->method('remove')->willReturn(true,false);

        $this->assertTrue($mockObj->remove("user@123gamil.com"));
        $this->assertFalse($mockObj->remove("sam@gmail.com"));
    }
}
?>