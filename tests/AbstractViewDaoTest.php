<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Model\DAO\AbstractViewDao;


final class AbstractViewDaoTest extends TestCase{
    #[Test]
    public function showAllBooks(): void{

        //creating a test stub
        $stub=$this->createMock(AbstractViewDao::class);

        //configure a test stub
        $stub->expects($this->any())->method('showAllBooks')->willReturn([]);

        $this->assertIsArray($stub->showAllBooks());
    }
}