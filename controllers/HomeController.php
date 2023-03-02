<?php
session_start();

require_once 'Base.php';
require_once 'models/Projet.php';

class HomeController extends Controller
{
  protected $view = 'welcome.php'; 

  public function resultats(){
    $model = new Projet();
    $result = $model->getSelected();
    $this->templateEngine->render('resultats.php',["projets"=>$result]);
  }
}
?>


