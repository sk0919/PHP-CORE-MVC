<?php



/*
*Objective is to create connection with the Classes and Model class should be abstract
*/
abstract class UsingClassModel {
    protected $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    abstract public function getUsers();
    // Other common methods...
}
