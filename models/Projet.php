<?php
require_once 'Base.php';

class Projet extends Model
{
  public function all(){
    $stmt = $this->db->query('SELECT * FROM projects');
    return $stmt->fetchAll();
  }

  public function getById($id){
    $stmt = $this->db->prepare('SELECT * FROM projects WHERE id=:id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt;
  }

  public function save($data){
    $stmt = $this->db->prepare("INSERT INTO projets (nom_projet, cible, problem, solution, niveau_projet, complement, nouveau, secteur, prototype, id_compte, valide) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $result = array("errors"=>array("db"=>NULL));
    try {
      $stmt->execute($data);
    }
    catch( PDOException $Exception ) {
      $result["errors"]["db"] = $Exception->getMessage();
    }
    $result['id'] = $this->db->lastInsertId();
    return $result;
  }

  public function updateValide($id){
      $stmt = $this->db->prepare('UPDATE projets SET valide="1" WHERE id=:id');
      $stmt->bindValue(':id', $id);
      $stmt->execute();
      return $stmt;

  }
}
?>

