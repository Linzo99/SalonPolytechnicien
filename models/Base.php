<?php
class Model
{
  protected $db;

  public function __construct()
  {
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $this->db = new PDO('mysql:host=127.0.0.1;dbname=sdp', 'root', 'passer', $options);
  }

  public function __destruct() {
    $this->db = null;
  }
}
?>
