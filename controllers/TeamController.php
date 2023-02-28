<?php
session_start();

require_once 'Base.php';
require_once 'models/Projet.php';
require_once 'models/Porteur.php';


class TeamController extends Controller
{
  protected $view = 'team.php'; 

  public function validate(){
    return array("errors"=>[], "data"=>$_POST);
  }

  public function get(){
    $this->templateEngine->render($this->view);
  }

  public function dispatch(){
    if(!isset($_SESSION['id']))
      header("location: /connexion");
    else
      parent::dispatch();
  }

  function handleProject($data){
    $project_fields = ['nom_projet', 'cible', 'problem', 'solution', 'niveau_projet', 'complement', 'nouveau', 'secteur', 'prototype'];
    $project_values = array_filter($data, fn($key)=>in_array($key, $project_fields), ARRAY_FILTER_USE_KEY);
    $project_values['secteur'] = join(';', $project_values['secteur']);
    $project_values = array_values($project_values);
    array_push($project_values, $_SESSION['id'], 0);
    // insert the project details;
    $model = new Projet(); 
    $result = $model->save($project_values);
    // check if errors
    if(isset($result["errors"]["db"]))
      $result['success'] = false;
    else
      $result['success'] = true;
    // return the result 
    return $result;
  }

  public function handleMembers($total, $data, $id){
    $member_fields = ['prenom', 'email', 'tel', 'classe', 'departement', 'sexe'];
    $pattern = '/('.join('|', $member_fields).')';
    $members = array();
    for($i=1; $i<=$total; $i++){
      $m_data = array_filter($data, fn($key)=>preg_match($pattern.$i.'/', $key), ARRAY_FILTER_USE_KEY);
      $m_data = array_values($m_data);
      array_push($m_data, $_SESSION['id'], $id);
      $members['member'.$i] = $m_data;
    }
    // insertion des membres
    $model = new Porteur();
    $result = $model->save($members);
    return $result;
  }

  public function post($data){
    $total_members = count(array_filter($_POST, fn($key)=>preg_match('/^prenom\d+$/', $key), ARRAY_FILTER_USE_KEY));
    $result = $this->handleProject($data);
    if(!$result['success']){
      $this->templateEngine->render($this->view, $result);
      exit();
    }

    $result = $this->handleMembers($total_members, $data, $result['id']);
    if(isset(['result']['errors'])){
      $this->templateEngine->render($this->view, $result);
      exit();
    }
    else{
      header("location: /good");
    }
  }
}
?>
