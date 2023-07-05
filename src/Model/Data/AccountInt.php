<?php 

namespace Sonu\LibraryManagementSystem\Model\Data;

Interface AccountInt{

    /**
     * This function set user id.
     * 
     * @access public
     * 
     * @return string
     */
    public function setId(int $id):void;

    /**
     * This function set user age.
     * 
     * @access public
     * 
     * @return string
     */
    public function setAge(int $age):void;

    /**
     * This function set user address.
     * 
     * @access public
     * 
     * @return string
     */
    public function setAddr(string $addr):void;

    /**
     * This function set user name.
     * 
     * @access public
     * 
     * @return string
     */
    public function setName(string $name):void;

    /**
     * This function set user email.
     * 
     * @access public
     * 
     * @return string
     */
    public function setEmail(string $email):void;

    /**
     * This function set user gender.
     * 
     * @access public
     * 
     * @return string
     */
    public function setGen(string $gen):void;

    /**
     * This function set user phone.
     * 
     * @access public
     * 
     * @return string
     */
    public function setPhon(int $phon):void;

    /**
     * This function set user password.
     * 
     * @access public
     * 
     * @return string
     */
    public function setPassword(string $password):void;

    /**
     * This function set user confirm password.
     * 
     * @access public
     * 
     * @return string
     */
    public function setConPass(string $con_pass):void;

    /**
     * This function get user id.
     * 
     * @access public
     * 
     * @return string
     */
    public function getId():int;

    /**
     * This function get user age.
     * 
     * @access public
     * 
     * @return string
     */
    public function getAge():int;

    /**
     * This function get user address.
     * 
     * @access public
     * 
     * @return string
     */
    public function getAddr():string;

    /**
     * This function get user name.
     * 
     * @access public
     * 
     * @return string
     */
    public function getName():string;

    /**
     * This function get user em.
     * 
     * @access public
     * 
     * @return string
     */
    public function getEmail():string;

    /**
     * This function get user id.
     * 
     * @access public
     * 
     * @return string
     */
    public function getGen():string;

    /**
     * This function get user id.
     * 
     * @access public
     * 
     * @return string
     */
    public function getPho():int;

    /**
     * This function get user id.
     * 
     * @access public
     * 
     * @return string
     */
    public function getPassword():string;

    /**
     * This function get user id.
     * 
     * @access public
     * 
     * @return string
     */
    public function getConPass():string;
}