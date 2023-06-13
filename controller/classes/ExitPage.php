<?php 
if (isset($_SESSION))
{
    session_unset();
    session_destroy();
    
}

/**
 * This class has a functionality to exit.
 */
class ExitPage{

    /**
     * This function close the db connection and exit from project.
     * 
     * @access public
     * 
     * @return void
     */

    public function exit() : void{
        exit();
    }
}