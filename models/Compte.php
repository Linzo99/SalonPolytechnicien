<?php
require_once 'Base.php';

class Compte extends Model
{
  public function all(){
    $stmt = $this->db->query('SELECT * FROM comptes');
    return $stmt->fetchAll();
  }

  public function getIdbyCode($code){
    $stmt = $this->db->prepare('SELECT id FROM comptes WHERE activation_code=:code');
    $stmt->bindValue(':code', $code);
    $stmt->execute();
    return $stmt;
  }

  public function getById($id){
    $stmt = $this->db->prepare('SELECT * FROM comptes WHERE id=:id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt;
  }

  public function getByEmail($email){
    $stmt = $this->db->prepare('SELECT * FROM comptes WHERE username=:username');
    $stmt->bindValue(':username', $email);
    $stmt->execute();
    return $stmt;
  }

  public function save($data){
    $data = (object)$data;
    $activationCode = uniqid();
    $stmt = $this->db->prepare('INSERT INTO comptes (username, password, nom_equipe, activation_code, valide) VALUES(:email, :password, :nom_equipe, :activation_code, 0)');
    // Remplacement des paramètres par les valeurs correspondantes
    $stmt->bindValue(':email', $data->email);
    $stmt->bindValue(':password', password_hash($data->password, PASSWORD_BCRYPT));
    $stmt->bindValue(':activation_code', $activationCode);
    $stmt->bindValue(':nom_equipe', $data->nom_equipe);
    // Exécution de la requête
    $result = array("errors"=>array("db"=>NULL), "activation"=>$activationCode);
    try {
      $stmt->execute();
    }
    catch( PDOException $Exception ) {
      if($Exception->getCode() == 23000);
        $result["errors"]["db"] = "Cet utilisateur existe déja";
    }
    return $result;
  }

  public function updateActivation($id){
      $stmt = $this->db->prepare('UPDATE comptes SET valide="1" WHERE id=:id');
      $stmt->bindValue(':id', $id);
      $stmt->execute();
      return $stmt;

  }
}
?>
