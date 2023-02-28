<?php
require_once 'Base.php';

class Porteur extends Model
{
  public function all(){
    $stmt = $this->db->query('SELECT * FROM porteurs');
    return $stmt->fetchAll();
  }

  public function getById($id){
    $stmt = $this->db->prepare('SELECT * FROM porteurs WHERE id=:id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt;
  }

  public function save($data){
    $result = array("errors"=>array("db"=>NULL));
    foreach($data as $k => $values){
      $stmt = $this->db->prepare("INSERT INTO porteurs (prenom, email, tel, classe, departement, sexe, id_comptes, id_projet) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
      try {
        $stmt->execute($values);
      }
      catch( PDOException $Exception ) {
        $result["errors"]["db"] = $Exception->getMessage();
        break;
      }
    }
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
