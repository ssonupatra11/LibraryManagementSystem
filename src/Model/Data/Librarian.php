<?php 

namespace Sonu\LibraryManagementSystem\Model\Data;

/**
 * This class demonstrates properties and functions of a Librarian.
 */

 class Librarian implements AccountInt{
    /**
     * @access private
     * 
     * @var int
     */
    private int $librarian_id;

    /**
     * @access private
     * 
     * @var string
     */
    private string $librarian_name;

    /**
     * @access private
     * 
     * @var int
     */
    private int $librarian_pho;

    /**
     * @access private
     * 
     * @var int
     */
    private int $librarian_age;

    /**
     * @access private
     * 
     * @var string
     */
    private string $librarian_email;

    /**
     * @access private
     * 
     * @var string
     */
    private string $librarian_addr;

    /**
     * @access private
     * 
     * @var string
     */
    private string $librarian_gender;

    /**
     * @access private
     * 
     * @var string
     */
    private string $librarian_pass;

    /**
     * @access private
     * 
     * @var string
     */
    private string $librarian_con_pass;

    /**
     * Constructor
     */
    public function __construct(){}

    /**
     * This function set librarian id.
     * 
     * @access public
     * 
     * @param int $id
     * 
     * @return void
     */
    public function setId(int $id):void{
        $this->librarian_id=$id;
    }

    /**
     * This function get librarian id.
     * 
     * @access public
     * 
     * @return int
     */
    public function getId():int{
        return $this->librarian_id;
    }

    /**
     * This function set librarian name.
     * 
     * @access public
     * 
     * @param string $name
     * 
     * @return void
     */
    public function setName(string $name):void{
        $this->librarian_name=$name;
    }

    /**
     * This function get librarian name.
     * 
     * @access public
     * 
     * @return string
     */
    public function getName():string{
        return $this->librarian_name;
    }

    /**
     * This function set librarian age.
     * 
     * @access public
     * 
     * @param int $age
     * 
     * @return void
     */
    public function setAge(int $age):void{
        $this->librarian_age=$age;
    }

    /**
     * This function get librarian age.
     * 
     * @access public
     * 
     * @return int
     */
    public function getAge():int{
        return $this->librarian_age;
    }

    /**
     * This function set librarian phone.
     * 
     * @access public
     * 
     * @param int $phon
     * 
     * @return void
     */
    public function setPhon(int $phon):void{
        $this->librarian_pho=$phon;
    }

    /**
     * This function get librarian Phone.
     * 
     * @access public
     * 
     * @return int
     */
    public function getPho():int{
        return $this->librarian_pho;
    }

    /**
     * This function set librarian email.
     * 
     * @access public
     * 
     * @param string $email
     * 
     * @return void
     */
    public function setEmail(string $email):void{
        $this->librarian_email=$email;
    }

    /**
     * This function get librarian email.
     * 
     * @access public
     * 
     * @return string
     */
    public function getEmail():string{
        return $this->librarian_email;
    }

    /**
     * This function set librarian address.
     * 
     * @access public
     * 
     * @param string $addr
     * 
     * @return void
     */
    public function setAddr(string $addr):void{
        $this->librarian_addr=$addr;
    }

    /**
     * This function get librarian address.
     * 
     * @access public
     * 
     * @return string
     */
    public function getAddr():string{
        return $this->librarian_addr;
    }

    /**
     * This function set librarian gender.
     * 
     * @access public
     * 
     * @param string $gen
     * 
     * @return void
     */
    public function setGen(string $gen):void{
        $this->librarian_gender=$gen;
    }

    /**
     * This function get librarian gender.
     * 
     * @access public
     * 
     * @return string
     */
    public function getGen():string{
        return $this->librarian_gender;
    }


    /**
     * This function set librarian password.
     * 
     * @access public
     * 
     * @param string $pass
     * 
     * @return void
     */
    public function setPassword(string $pass):void{
        $this->librarian_pass=$pass;
    }

    /**
     * This function get librarian password.
     * 
     * @access public
     * 
     * @return string
     */
    public function getPassword():string{
        return $this->librarian_pass;
    }


    /**
     * This function set librarian confirm password.
     * 
     * @access public
     * 
     * @param string $con_pass
     * 
     * @return void
     */
    public function setConPass(string $con_pass):void{
        $this->librarian_con_pass=$con_pass;
    }

    /**
     * This function get librarian confirm password.
     * 
     * @access public
     * 
     * @return string
     */
    public function getConPass():string{
        return $this->librarian_con_pass;
    }

    /**
     * This function gets all the method calls.
     * 
     * @access public
     * 
     * @return array
     */
    public function getPropertiesAsArray():array{
        return [
            $this->getId(),
            $this->getName(),
            $this->getAge(),
            $this->getAddr(),
            $this->getEmail(),
            $this->getGen(),
            $this->getPho(),
            $this->getPassword(),
            $this->getConPass()
        ];
    }
 }