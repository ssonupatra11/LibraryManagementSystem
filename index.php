<?php 

//ini_set('memory_limit', '536870912');


/**
 * This include AddNewBooks.php file in this file.
 */
require("./controller/classes/AddNewBooks.php");
/**
 * This include AddNewLibrarian.php file in this file.
 */
require("./controller/classes/AddNewLibrarian.php");
/**
 * This include AddNewUser.php file in this file.
 */
require("./controller/classes/AddNewUser.php");
/**
 * This include Books.php file in this file.
 */
require("./controller/classes/Books.php");
/**
 * This include ExitPage.php file in this file.
 */
require("./controller/classes/ExitPage.php");
/**
 * This include Librarian.php file in this file.
 */
require("./controller/classes/Librarian.php");
/**
 * This include UserLogin.php file in this file.
 */
require("./controller/classes/UserLogin.php");
/**
 * This include LibrarianLogin.php file in this file.
 */
require("./controller/classes/LibrarianLogin.php");
/**
 * This include RemoveAccount.php file in this file.
 */
require("./controller/classes/RemoveAccount.php");
/**
 * This include RemoveBook.php file in this file.
 */
require("./controller/classes/RemoveBook.php");
/**
 * This include ShowAllBooks.php file in this file.
 */
require("./controller/classes/ShowAllBooks.php");
/**
 * This include UpdateAddress.php file in this file.
 */
require("./controller/classes/UpdateAddress.php");
/**
 * This include UpdateAge.php file in this file.
 */
require("./controller/classes/UpdateAge.php");
/**
 * This include UpdateBookAuthor.php file in this file.
 */
require("./controller/classes/UpdateBookAuthor.php");
/**
 * This include UpdateBookEdition.php file in this file.
 */
require("./controller/classes/UpdateBookEdition.php");
/**
 * This include UpdateBookName.php file in this file.
 */
require("./controller/classes/UpdateBookName.php");
/**
 * This include UpdateBookPublication.php file in this file.
 */
require("./controller/classes/UpdateBookPublication.php");
/**
 * This include UpdateBookQuantity.php file in this file.
 */
require("./controller/classes/UpdateBookQuantity.php");
/**
 * This include UpdateEmail.php file in this file.
 */
require("./controller/classes/UpdateEmail.php");
/**
 * This include UpdateName.php file in this file.
 */
require("./controller/classes/UpdateName.php");
/**
 * This include UpdatePhone.php file in this file.
 */
require("./controller/classes/UpdatePhone.php");
/**
 * This include User.php file in this file.
 */
require("./controller/classes/User.php");
/**
 * This include ViewProfile.php file in this file.
 */
require("./controller/classes/ViewProfile.php");
/**
 * This include HomeLibrary.php file in this file.
 */
require("./View/HomeLibrary.php");
/**
 * This include UpdateUserNameDao.php file in this file.
 */
require("./model/classes/UpdateUserNameDao.php");
/**
 * This include UpdateUserAddrDao.php file in this file.
 */
require("./model/classes/UpdateUserAddrDao.php");
/**
 * This include UpdateUserAgeDao.php file in this file.
 */
require("./model/classes/UpdateUserAgeDao.php");
/**
 * This include UpdateUserPhoDao.php file in this file.
 */
require("./model/classes/UpdateUserPhoDao.php");
/**
 * This include UpdateUserEmailDao.php file in this file.
 */
require("./model/classes/UpdateUserEmailDao.php");
/**
 * This include UpdateLibrarianNameDao.php file in this file.
 */
require("./model/classes/UpdateLibrarianNameDao.php");
/**
 * This include UpdateLibrarianAddrDao.php file in this file.
 */
require("./model/classes/UpdateLibrarianAddrDao.php");
/**
 * This include UpdateLibrarianAgeDao.php file in this file.
 */
require("./model/classes/UpdateLibrarianAgeDao.php");
/**
 * This include UpdateLibrarianPhoDao.php file in this file.
 */
require("./model/classes/UpdateLibrarianPhoDao.php");
/**
 * This include UpdateLibrarianEmailDao.php file in this file.
 */
require("./model/classes/UpdateLibrarianEmailDao.php");
/**
 * This include UpdateBookAuthorDao.php file in this file.
 */
require("./model/classes/UpdateBookAuthorDao.php");
/**
 * This include UpdateBookEditionDao.php file in this file.
 */
require("./model/classes/UpdateBookEditionDao.php");
/**
 * This include UpdateBookNameDao.php file in this file.
 */
require("./model/classes/UpdateBookNameDao.php");
/**
 * This include UpdateBookPublicationDao.php file in this file.
 */
require("./model/classes/UpdateBookPublicationDao.php");
/**
 * This include UpdateBookQuantityDao.php file in this file.
 */
require("./model/classes/UpdateBookQuantityDao.php");
/**
 * This include UserViewDao.php file in this file.
 */
require("./model/classes/UserViewDao.php");
/**
 * This include UserLoginDao.php file in this file.
 */
require("./model/classes/UserLoginDao.php");
/**
 * This include LibrarianLoginDao.php file in this file.
 */
require("./model/classes/LibrarianLoginDao.php");
/**
 * This include CreateBookDao.php file in this file.
 */
require("./model/classes/CreateBookDao.php");
/**
 * This include CreateLibrarianDao.php file in this file.
 */
require("./model/classes/CreateLibrarianDao.php");
/**
 * This include CreateUserDao.php file in this file.
 */
require("./model/classes/CreateUserDao.php");
/**
 * This include RemoveUserAccDao.php file in this file.
 */
require("./model/classes/RemoveUserAccDao.php");
/**
 * This include LibrarianViewDao.php file in this file.
 */
require("./model/classes/LibrarianViewDao.php");
/**
 * This include BorrowBook.php file in this file.
 */
require("./controller/classes/BorrowBook.php");
/**
 * This include BorrowBookDao.php file in this file.
 */
require("./model/classes/BorrowBookDao.php");
/**
 * This include ReturnBook.php file in this file.
 */
require("./controller/classes/ReturnBook.php");
/**
 * This include ReturnBookDao.php file in this file.
 */
require("./model/classes/ReturnBookDao.php");
/**
 * This include ShowBorrowedBooks.php file in this file.
 */
require("./controller/classes/ShowBorrowedBooks.php");
/**
 * This include ShowBorrowedBooksDao.php file in this file.
 */
require("./model/classes/ShowBorredBooksDao.php");

/**
 * This include ShowBorrowedBooksDao.php file in this file.
 */
require("./controller/classes/UserObjectFactory.php");


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