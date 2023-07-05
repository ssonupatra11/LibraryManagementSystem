<?php 
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Sonu\LibraryManagementSystem\Controller\classes\CheckEmailFormat;


final class CheckEmailFormatTest extends TestCase{
    #[Test]
    public function checkEmailFormat(): void{
        $new_obj=new CheckEmailFormat();
        $this->assertTrue($new_obj->checkEmailFormat("sam@gmail.com")===0);
        $this->assertTrue($new_obj->checkEmailFormat("jack@.com")===1);
        $this->assertNotTrue($new_obj->checkEmailFormat("liza.com")===0);
        $this->assertNotTrue($new_obj->checkEmailFormat("roshni@gmail.com")===1);
        $this->assertFalse($new_obj->checkEmailFormat("zareen@rediffmail.com")===1);
        $this->assertFalse($new_obj->checkEmailFormat("jimy@123hotmail")===0);
        $this->assertStringNotContainsString("carolina@gmail.com","@");
        $this->assertStringNotContainsString("babul123@yahoomail.com"," ");
    }
}
