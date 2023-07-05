<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\CheckPasswordFormat;


final class CheckPasswordFormatTest extends TestCase{
    #[Test]
    public function checkPasswordFormat(): void{
        $new_obj=new CheckPasswordFormat();
        $this->assertTrue($new_obj->checkPasswordFormat("Xac$$@23fs")===0);
        $this->assertTrue($new_obj->checkPasswordFormat("aaaaa")===1);
        $this->assertNotTrue($new_obj->checkPasswordFormat("2831ndsans")===0);
        $this->assertNotTrue($new_obj->checkPasswordFormat("nJa12&$$/sjd")===1);
    }
}
