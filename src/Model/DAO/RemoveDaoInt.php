<?php 

namespace Sonu\LibraryManagementSystem\Model\DAO;

Interface RemoveDaoInt{
    public function remove(string|int $data):bool;
}