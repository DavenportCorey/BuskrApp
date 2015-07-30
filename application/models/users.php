<?php

class Users extends MY_Model {
    
    const DB_TABLE = 'Artist';
    const DB_TABLE_PK = 'id';
    

    /**
     * Publication unique identifier.
     * @var string
     */
    public $name;
    
    /**
     * Publication name.
     * @var string
     */
    public $message;
    
    // function getMessages(username)
    // {



    // }
}