<?php 

namespace Sonu\LibraryManagementSystem\Controller\classes;
/**
 * This class demonstrates properties and functions of a Book.
 */

 class Book{
    /**
     * @access private
     * 
     * @var int
     */
    private int $book_id;

    /**
     * @access private
     * 
     * @var string
     */
    private string $book_name;

    /**
     * @access private
     * 
     * @var int
     */
    private int $book_edition;

    /**
     * @access private
     * 
     * @var string
     */
    private string $book_author;

    /**
     * @access private
     * 
     * @var string
     */
    private string $book_publication;

    /**
     * @access private
     * 
     * @var int
     */
    private int $book_quantity;


    /**
     * Constructor
     */
    public function __construct(){}

    /**
     * This function set book id.
     * 
     * @access public
     * 
     * @param int $id
     * 
     * @return void
     */
    public function setId(int $id):void{
        $this->book_id=$id;
    }

    /**
     * This function get book id.
     * 
     * @access public
     * 
     * @return int
     */
    public function getId():int{
        return $this->book_id;
    }

    /**
     * This function set book name.
     * 
     * @access public
     * 
     * @param string $name
     * 
     * @return void
     */
    public function setName(string $name):void{
        $this->book_name=$name;
    }

    /**
     * This function get book name.
     * 
     * @access public
     * 
     * @return string
     */
    public function getName():string{
        return $this->book_name;
    }

    /**
     * This function set book edition.
     * 
     * @access public
     * 
     * @param int $edition
     * 
     * @return void
     */
    public function setEdition(int $edition):void{
        $this->book_edition=$edition;
    }

    /**
     * This function get book edition.
     * 
     * @access public
     * 
     * @return int
     */
    public function getEdition():int{
        return $this->book_edition;
    }

    /**
     * This function set book author.
     * 
     * @access public
     * 
     * @param string $author
     * 
     * @return void
     */
    public function setAuthor(string $author):void{
        $this->book_author=$author;
    }

    /**
     * This function get book author.
     * 
     * @access public
     * 
     * @return string
     */
    public function getAuthor():string{
        return $this->book_author;
    }

    /**
     * This function set book publications.
     * 
     * @access public
     * 
     * @param string $publication
     * 
     * @return void
     */
    public function setPublication(string $publication):void{
        $this->book_publication=$publication;
    }

    /**
     * This function get book Publications.
     * 
     * @access public
     * 
     * @return string
     */
    public function getPublication():string{
        return $this->book_publication;
    }

    /**
     * This function set book quantity.
     * 
     * @access public
     * 
     * @param int $qty
     * 
     * @return void
     */
    public function setQuantity(int $qty):void{
        $this->book_quantity=$qty;
    }

    /**
     * This function get book edition.
     * 
     * @access public
     * 
     * @return int
     */
    public function getQuantity():int{
        return $this->book_quantity;
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
            $this->getAuthor(),
            $this->getEdition(),
            $this->getPublication(),
            $this->getQuantity()
        ];
    }

 }