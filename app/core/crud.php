<?php
    
    require_once '../config/connection.php';

    class CRUD {
        private $db;
    
        public function __construct(Connection $db) {
            $this->db = $db;
        }
    
    }