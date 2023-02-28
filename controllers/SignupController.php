<?php
session_start();

require_once 'Base.php';
require_once 'models/Compte.php';
require_once 'config/utils.php';

class SignupController extends Controller
{
  protected $view = 'signup.php'; 

  public function dispatch(){
    if(isset($_SESSION['id']))
      header("location: /");
    else
      parent::dispatch();
  }

  public function validate(){
    $data = $_POST;
    $errors = array();
    $emailPattern = '/^[a-zA-Z0-9._%+-]+@esp\.sn$/';
    $passwordMinLength = 6;
    // Validate email
    if (!preg_match($emailPattern, $data['email'])) {
      $errors['email'] = "Ce mail n'est pas valide";
    }
    if(strlen($data['password']) < $passwordMinLength){
      $errors['password'] = "Le mot de passe doit contenir au minimum 6 caractères";
    }
    return array("errors"=>$errors, "data"=>$data);
  }

  public function get($valide=[]){
    $this->templateEngine->render($this->view, $valide);
  }

  public function post($data){
    $model = new Compte();
    $result = $model->save($data);
    if(isset($result["errors"]["db"])){
      $this->templateEngine->render($this->view, $result);
      exit();
    }
    else{
      sendActivationEmail($data['email'], $result['activation']);
      header("location: /connexion");
    }
  }

  public function activate(){
    $code = $_GET['code'];
    // Retrieve account with matching activation code
    $model = new Compte();
    $res = $model->getIdByCode($code);
    $account = $res->fetch();
    if ($account) {
      // Activate account
      $res = $model->updateActivation($account['id']);
      header("location: /connexion");
      exit();
    } else {
      // Display error message
      header("location: /inscription");
    }
  }
}
?>
