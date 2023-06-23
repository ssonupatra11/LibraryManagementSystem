<?php 

require("./vendor/autoload.php");

use Sonu\LibraryManagementSystem\Controller\classes\UserObjectFactory;
use Sonu\LibraryManagementSystem\View\HomeLibrary;
use Sonu\LibraryManagementSystem\Model\classes\CreateBookDao;
use Sonu\LibraryManagementSystem\Controller\classes\ExitPage;
use Sonu\LibraryManagementSystem\Controller\classes\AddNewBooks;
use Sonu\LibraryManagementSystem\Controller\classes\BorrowBook;
use Sonu\LibraryManagementSystem\Controller\classes\ReturnBook;
use Sonu\LibraryManagementSystem\Controller\classes\AddNewLibrarian;
use Sonu\LibraryManagementSystem\Controller\classes\AddNewUser;
use Sonu\LibraryManagementSystem\Controller\classes\UserLogin;
use Sonu\LibraryManagementSystem\Controller\classes\LibrarianLogin;
use Sonu\LibraryManagementSystem\Controller\classes\RemoveAccount;
use Sonu\LibraryManagementSystem\Controller\classes\RemoveBook;
use Sonu\LibraryManagementSystem\Controller\classes\ShowAllBooks;
use Sonu\LibraryManagementSystem\Controller\classes\ShowBorrowedBooks;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateAddress;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateAge;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateEmail;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateName;
use Sonu\LibraryManagementSystem\Controller\classes\UpdatePhone;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateBookAuthor;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateBookEdition;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateBookName;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateBookPublication;
use Sonu\LibraryManagementSystem\Controller\classes\UpdateBookQuantity;
use Sonu\LibraryManagementSystem\Controller\classes\ViewProfile;


/**
 * @global UserObjectFactory $GLOBALS['uof']
 */
$GLOBALS['uof']=new UserObjectFactory();

/**
 * @global HomeLibrary $GLOBALS['home']
 */
$GLOBALS['home']=new HomeLibrary();

/**
 * @global CreateBookDao $GLOBALS['createBookDao']
 */
$GLOBALS['createBookDao']=new CreateBookDao();


/**
 * @global ExitPage $GLOBALS['exit']
 */
$GLOBALS['exit']=new ExitPage();

/**
 * @global AddNewBooks $GLOBALS['new_book']
 */
$GLOBALS['new_book']=new AddNewBooks();

/**
 * @global BorrowBook $GLOBALS['borrow_book']
 */
$GLOBALS['borrow_book']=new BorrowBook();

/**
 * @global ReturnBook $GLOBALS['return_book']
 */
$GLOBALS['return_book']=new ReturnBook();

/**
 * @global AddNewLibrarian $GLOBALS['new_librarian']
 */
$GLOBALS['new_librarian']=new AddNewLibrarian();

/**
 * @global AddNewUser $GLOBALS['new_user']
 */
$GLOBALS['new_user']=new AddNewUser();

/**
 * @global UserLogin $GLOBALS['user_login']
 */
$GLOBALS['user_login']=new UserLogin();

/**
 * @global LibrarianLogin $GLOBALS['lib_login']
 */
$GLOBALS['lib_login']=new LibrarianLogin();

/**
 * @global RemoveAccount $GLOBALS['rem_acc']
 */
$GLOBALS['rem_acc']=new RemoveAccount();

/**
 * @global RemoveBook $GLOBALS['rem_book']
 */
$GLOBALS['rem_book']=new RemoveBook();

/**
 * @global ShowAllBooks $GLOBALS['all_books']
 */
$GLOBALS['all_books']=new ShowAllBooks();

/**
 * @global ShowBorrowedBooks $GLOBALS['show_borrow_books']
 */
$GLOBALS['show_borrow_books']=new ShowBorrowedBooks();

/**
 * @global UpdateName $GLOBALS['update_name']
 */
$GLOBALS['update_name']=new UpdateName();

/**
 * @global UpdateAge $GLOBALS['update_age']
 */
$GLOBALS['update_age']=new UpdateAge();

/**
 * @global UpdateEmail $GLOBALS['update_email']
 */
$GLOBALS['update_email']=new UpdateEmail();

/**
 * @global UpdateAddress $GLOBALS['update_addr']
 */
$GLOBALS['update_addr']=new UpdateAddress();

/**
 * @global UpdatePhone $GLOBALS['update_pho']
 */
$GLOBALS['update_pho']=new UpdatePhone();

/**
 * @global UpdateBookName $GLOBALS['update_bname']
 */
$GLOBALS['update_bname']=new UpdateBookName();

/**
 * @global UpdateBookAuthor $GLOBALS['update_auth']
 */
$GLOBALS['update_auth']=new UpdateBookAuthor();

/**
 * @global UpdateBookEdition $GLOBALS['update_edition']
 */
$GLOBALS['update_edition']=new UpdateBookEdition();

/**
 * @global UpdateBookPublication $GLOBALS['update_publi']
 */
$GLOBALS['update_publi']=new UpdateBookPublication();

/**
 * @global UpdateBookQuantity $GLOBALS['update_qty']
 */
$GLOBALS['update_qty']=new UpdateBookQuantity();

/**
 * @global ViewProfile $GLOBALS['view_profile']
 */
$GLOBALS['view_profile']=new ViewProfile();




/**
 * Index is a Anonymous function which calls home().
 * 
 * @return void
 */
$index=function():void{
    $GLOBALS['home']->home();
};

$index();