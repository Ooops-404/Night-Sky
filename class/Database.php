<?php

class Database {

  public function initDB() {

    if (empty($this->database)) {
      $this->database = new mysqli(_db_host, _db_user, _db_password, _db_database);

      if ($this->database->connect_error) {
         echo "Not connected, error: " .   $this->database->connect_error;
         exit;
      }

    }

  }

  public function getConnection() {

      return $this->database;

  }

}

 ?>