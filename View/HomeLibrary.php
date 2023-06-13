<?php 
require("./controller/classes/DisplayBooksTraits.php");
session_start();

$_SESSION["email"]=null;
$_SESSION["name"]=null;
$_SESSION["type"]=null;

/**
 * This class has functionality to display library home page.
 */
class HomeLibrary{

    use DisplayBooks;

    /**
     * @access private
     * 
     * @var int
     */
    private int $choice;

     /**
     * This function will display choices based on condition.
     * 
     * @access public
     * 
     * @return void
     */
    public function home():void{
        
        if(!isset($_SESSION["email"]) && !isset($_SESSION["type"])){
            echo <<<EOT
            -------------------------
            WELCOME TO LIBRARY
            -------------------------
            Hello User!
            1.User Login
            2.Add New User
            3.Librarian Login
            4.Exit
            \n
        EOT;

            $this->choice=(int)readline("Enter the option : ");
            switch($this->choice){
                case 1:{
                    if($GLOBALS['user_login']->login()){
                        echo "user logged in!",PHP_EOL;
                    }
                    else{
                        echo "Not logged In",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 2:{
                    if($GLOBALS['new_user']->addAccount()){
                        echo "User Added !",PHP_EOL;
                    }
                    else{
                        echo "User Not Added",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 3:{
                    if($GLOBALS['lib_login']->login()){
                        echo "Librarian logged in!",PHP_EOL;
                    }
                    else{
                        echo "Not logged In",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 4:{
                    $GLOBALS['exit']->exit();
                }
                default:{
                    echo "Invalid Option! Enter the option again : ",PHP_EOL;
                    $GLOBALS['home']->home();
                }
            }
        }
        elseif(isset($_SESSION["email"]) && $_SESSION["type"]==="user"){
            echo <<<EOT
            -------------------------
            Hello "$_SESSION[name]"!
            -------------------------
            1.Remove Account
            2.Update User Name
            3.Update User Age
            4.Update User Address
            5.Update User Email
            6.Update User Phone
            7.Borrow Book
            8.Return Book
            9.Show All Books
            10.View Borrowed books
            11.View Profile
            12.Exit
            \n
        EOT;
            $this->choice=(int)readline("Enter the option : ");
            switch($this->choice){
                case 1:{
                    if($GLOBALS['rem_acc']->removeAccount())
                    {
                        echo "Account Removed !",PHP_EOL;
                        session_unset();
                    }
                    $GLOBALS['exit']->exit();
                    break;
                }
                case 2:{
                    if($GLOBALS['update_name']->updateName())
                    {
                        echo "User name updated !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 3:{
                    if($GLOBALS['update_age']->updateAge())
                    {
                        echo "User age updated !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 4:{
                    if($GLOBALS['update_addr']->updateAddress())
                    {
                        echo "User address updated !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 5:{
                    if($GLOBALS['update_email']->updateEmail())
                    {
                        echo "User email updated !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 6:{
                    if($GLOBALS['update_pho']->updatePhone())
                    {
                        echo "User Phone updated !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 7:{
                    if($GLOBALS['borrow_book']->borrowBook())
                    {
                        echo "User borrowed book !",PHP_EOL;
                    }
                    else{
                        echo "Book not available !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;                    
                }
                case 8:{
                    if($GLOBALS['return_book']->returnBook())
                    {
                        echo "User returned book !",PHP_EOL;
                    }
                    else{
                        echo "Book not available !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 9:{
                    if(sizeof($GLOBALS['all_books']->displayData())>0){
                        $this->displayBooks($GLOBALS['all_books']->displayData());
                    }
                    else{
                        echo "No books available",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 10:{
                    if(sizeof($GLOBALS['show_borrow_books']->getData())>0){
                        $this->displayBooks($GLOBALS['show_borrow_books']->getData());
                    }
                    else{
                        echo "No books available",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 11:{
                    if(!is_null($GLOBALS['view_profile']->viewProfile()))
                    {
                        echo $GLOBALS['view_profile']->viewProfile(),PHP_EOL;
                    }
                    else{
                        echo "No Data found!",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;   
                }
                case 12:{
                    $GLOBALS['exit']->exit();
                }
                default:{
                    echo "Invalid Option! Enter the option again :",PHP_EOL;
                    $GLOBALS['home']->home();
                }
            }
        }
        elseif(isset($_SESSION["email"]) && $_SESSION["type"]==="librarian"){
            echo <<<EOT
            -------------------------
            Hello "$_SESSION[name]"!
            -------------------------
            1.Show All Books
            2.View Profile
            3.Update Librarian Name
            4.Update Librarian Age
            5.Update Librarian Address
            6.Update Librarian Email
            7.Update Librarian Phone
            8.Add New Book
            9.Update Book Name
            10.Update Book Author
            11.Update Book Quantity
            12.Update Book Publications
            13.Update Book Edition
            14.Delete Book
            15.Remove Account
            16.Add New Librarian
            17.Exit
            \n
        EOT;
        $this->choice=(int)readline("Enter the option : ");
            switch($this->choice){
                case 1:{
                    if(sizeof($GLOBALS['all_books']->displayData())>0){
                        $this->displayBooks($GLOBALS['all_books']->displayData());
                    }
                    else{
                        echo "No books available",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 2:{
                    if(!is_null($GLOBALS['view_profile']->viewProfile()))
                    {
                        echo $GLOBALS['view_profile']->viewProfile(),PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;   
                }
                case 3:{
                    if($GLOBALS['update_name']->updateName())
                    {
                        echo "Librarian name updated !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 4:{
                    if($GLOBALS['update_age']->updateAge())
                    {
                        echo "Librarian age updated !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 5:{
                    if($GLOBALS['update_addr']->updateAddress())
                    {
                        echo "Librarian address updated !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 6:{
                    if($GLOBALS['update_email']->updateEmail())
                    {
                        echo "Librarian email updated !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 7:{
                    if($GLOBALS['update_pho']->updatePhone())
                    {
                        echo "Librarian Phone updated !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 8:{
                    if($GLOBALS['new_book']->addBooks()){
                        echo "Book Added !",PHP_EOL;
                    }
                    else{
                        echo "Book Not Added",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 9:{
                    if($GLOBALS['update_bname']->updateBookName())
                    {
                        echo "Book name updated !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 10:{
                    if($GLOBALS['update_auth']->updateBookAuthor())
                    {
                        echo "Book author updated !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 11:{
                    if($GLOBALS['update_qty']->updateBookQuantity())
                    {
                        echo "Book Quantity updated !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 12:{
                    if($GLOBALS['update_publi']->updateBookPublication())
                    {
                        echo "Book Ppublication updated !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 13:{
                    if($GLOBALS['update_edition']->updateBookEdition())
                    {
                        echo "Book Edition updated !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 14:{
                    if($GLOBALS['rem_book']->removeBook())
                    {
                        echo "Book removed !",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 15:{
                    if($GLOBALS['rem_acc']->removeAccount())
                    {
                        echo "Account Removed !",PHP_EOL;
                        session_unset();
                    }
                    $GLOBALS['exit']->exit();
                    break;
                }
                case 16:{
                    if($GLOBALS['new_librarian']->addAccount())
                    {
                        echo "Librarian Added !",PHP_EOL;
                    }
                    else{
                        echo "Librarian Not Added",PHP_EOL;
                    }
                    $GLOBALS['home']->home();
                    break;
                }
                case 17:{
                    $GLOBALS['exit']->exit();
                }
                default:{
                    echo "Invalid Option! Enter the option again : ",PHP_EOL;
                    $GLOBALS['home']->home();
                }
            }
        }

    }
}