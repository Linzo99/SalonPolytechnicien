<?php
require_once 'Base.php';

class Projet extends Model
{
  public function all(){
    $stmt = $this->db->query('SELECT c.username, p.* FROM projets p JOIN comptes c ON p.id_compte = c.id');
    return $stmt->fetchAll();
  }

  public function statistiques(){
    $stmt = $this->db->query("SELECT 
      COUNT(DISTINCT p.id) AS nb_projets, 
      COUNT(DISTINCT pr.id_projet) AS nb_projets_retenus, 
      COUNT(CASE WHEN po.sexe = 'femme' THEN 1 END) AS nb_filles,
      COUNT(CASE WHEN po.sexe = 'homme' THEN 1 END) AS nb_garcons
      FROM 
      projets p 
      LEFT JOIN projet_retenus pr ON p.id = pr.id_projet
      LEFT JOIN porteurs po ON p.id = po.id_projet;
    ");
    return $stmt->fetch();
  }

  public function getSelected(){
    $stmt = $this->db->query("SELECT p.nom_projet
      FROM projets p
      INNER JOIN projet_retenus rt ON p.id = rt.id_projet;
    "); 
    return $stmt->fetchAll();
  }

  public function getByUserId($id){
    $stmt = $this->db->prepare('SELECT id FROM projets where id_compte = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt;
  }

  public function getById($id){
    $stmt = $this->db->prepare("SELECT 
      p.*, 
      GROUP_CONCAT(
        JSON_OBJECT(
          'id', po.id,
          'prenom', po.prenom,
          'email', po.email,
          'tel', po.tel,
          'classe', po.classe,
          'departement', po.departement,
          'sexe', po.sexe
    ) SEPARATOR '|'
    ) AS porteurs
    FROM projets p
    LEFT JOIN porteurs po ON po.id_projet = p.id
    WHERE p.id=:id GROUP BY p.id");

    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt;
  }

  public function save($data){
    $stmt = $this->db->prepare("INSERT INTO projets (nom_projet, cible, problem, solution, nouveau, complement, niveau_projet, secteur, prototype, id_compte, valide) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
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
    $result = array("errors"=>array("db"=>NULL));
    try{
      $stmt->execute();
      $retained = $this->db->prepare('INSERT INTO projet_retenus (id_projet) VALUES(:id)');
      $retained->bindValue(':id', $id);
      $retained->execute();
    }
    catch( PDOException $Exception ) {
      $result["errors"]["db"] = $Exception->getMessage();
    }
    $result['id'] = $id;
    return $result;

  }
}
?>

