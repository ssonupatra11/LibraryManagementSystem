<?php 

/**
 * This class demonstrates properties and functions of a User.
 */

 class User{
    /**
     * @access private
     * 
     * @var int
     */
    private int $user_id;

    /**
     * @access private
     * 
     * @var string
     */
    private string $user_name;

    /**
     * @access private
     * 
     * @var int
     */
    private int $user_pho;

    /**
     * @access private
     * 
     * @var int
     */
    private int $user_age;

    /**
     * @access private
     * 
     * @var string
     */
    private string $user_email;

    /**
     * @access private
     * 
     * @var string
     */
    private string $user_addr;

    /**
     * @access private
     * 
     * @var string
     */
    private string $user_gender;


    /**
     * @access private
     * 
     * @var string
     */
    private string $user_pass;

    /**
     * @access private
     * 
     * @var string
     */
    private string $user_con_pass;

    /**
     * Constructor
     */
    public function __construct(){}


    /**
     * This function set user id.
     * 
     * @access public
     * 
     * @param int $id
     * 
     * @return void
     */
    public function setId(int $id):void{
        $this->user_id=$id;
    }

    /**
     * This function get user id.
     * 
     * @access public
     * 
     * @return int
     */
    public function getId():int{
        return $this->user_id;
    }

    /**
     * This function set user name.
     * 
     * @access public
     * 
     * @param string $name
     * 
     * @return void
     */
    public function setName(string $name):void{
        $this->user_name=$name;
    }

    /**
     * This function get user name.
     * 
     * @access public
     * 
     * @return string
     */
    public function getName():string{
        return $this->user_name;
    }

    /**
     * This function set user age.
     * 
     * @access public
     * 
     * @param int $age
     * 
     * @return void
     */
    public function setAge(int $age):void{
        $this->user_age=$age;
    }

    /**
     * This function get user age.
     * 
     * @access public
     * 
     * @return int
     */
    public function getAge():int{
        return $this->user_age;
    }

    /**
     * This function set user phone.
     * 
     * @access public
     * 
     * @param int $phon
     * 
     * @return void
     */
    public function setPhon(int $phon):void{
        $this->user_pho=$phon;
    }

    /**
     * This function get user Phone.
     * 
     * @access public
     * 
     * @return int
     */
    public function getPho():int{
        return $this->user_pho;
    }

    /**
     * This function set user email.
     * 
     * @access public
     * 
     * @param string $email
     * 
     * @return void
     */
    public function setEmail(string $email):void{
        $this->user_email=$email;
    }

    /**
     * This function get user email.
     * 
     * @access public
     * 
     * @return string
     */
    public function getEmail():string{
        return $this->user_email;
    }

    /**
     * This function set user address.
     * 
     * @access public
     * 
     * @param string $addr
     * 
     * @return void
     */
    public function setAddr(string $addr):void{
        $this->user_addr=$addr;
    }

    /**
     * This function get user address.
     * 
     * @access public
     * 
     * @return string
     */
    public function getAddr():string{
        return $this->user_addr;
    }

    /**
     * This function set user gender.
     * 
     * @access public
     * 
     * @param string $gen
     * 
     * @return void
     */
    public function setGen(string $gen):void{
        $this->user_gender=$gen;
    }

    /**
     * This function get user gender.
     * 
     * @access public
     * 
     * @return string
     */
    public function getGen():string{
        return $this->user_gender;
    }

    /**
     * This function set user password.
     * 
     * @access public
     * 
     * @param string $pass
     * 
     * @return void
     */
    public function setPassword(string $pass):void{
        $this->user_pass=$pass;
    }

    /**
     * This function get user password.
     * 
     * @access public
     * 
     * @return string
     */
    public function getPassword():string{
        return $this->user_pass;
    }


    /**
     * This function set user confirm password.
     * 
     * @access public
     * 
     * @param string $con_pass
     * 
     * @return void
     */
    public function setConPass(string $con_pass):void{
        $this->user_con_pass=$con_pass;
    }

    /**
     * This function get user confirm password.
     * 
     * @access public
     * 
     * @return string
     */
    public function getConPass():string{
        return $this->user_con_pass;
    }
 }