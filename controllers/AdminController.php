<?php
session_start();

require_once 'Base.php';
require_once 'models/Projet.php';

class AdminController extends Controller
{
  protected $view = 'dashboard.php'; 

  public function dispatch($match=NULL){
    if(!isset($_SESSION['id']))
      header("location: /connexion");
    // some links should be accessible to admin only
    else if(isset($_SESSION['admin']) && $_SESSION['admin']){
      if($match == "/projet")
        $this->detailProjet();
      else if($match == "/validate")
        $this->validateProjet();
      else
        parent::dispatch();
    }
    else
      header("location: /");
  }

  public function validate(){
    return array("errors"=>[], "data"=>$_POST);
  }

  public function detailProjet(){
    $id = $_GET['id'];
    $model = new Projet();
    $stmt = $model->getById($id);
    if(!$stmt->rowCount())
      header("location: /404");
    $res = $stmt->fetch();
    $res['porteurs'] = explode('|', $res['porteurs']);
    $res['porteurs'] = array_map(fn($str)=>json_decode($str), $res['porteurs']);
    $this->templateEngine->render('details.php', $res);
  }

  public function validateProject(){
    $id = $_GET['id'];
    $model = new Projet();
    $$result = $model->updateValide($id);
    if(isset($result['errors']['db'])){
      $this->templateEngine->render($this->view, $result);
      exit();
    }
    else{
      header("location: /dashboard");
    }
  }

  public function get(){
    $model = new Projet();
    $res = $model->all();
    $res = array("projets"=>$res);
    $res['statistiques'] = $model->statistiques();
    $this->templateEngine->render($this->view, $res);
  }

}
?>
