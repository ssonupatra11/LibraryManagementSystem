<?php 

namespace Sonu\LibraryManagementSystem\Model\DAO;

use Sonu\LibraryManagementSystem\Model\Data\AccountInt;

Interface CreateDaoInt{
    public function create(AccountInt $obj):bool;
}