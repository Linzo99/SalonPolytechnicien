<?php
session_start();

require_once 'Base.php';
require_once 'models/Compte.php';
require_once 'config/utils.php';

class CompteController extends Controller
{
  protected $view = 'reset.php'; 

  public function dispatch($match=NULL){
    switch($match){

    case '/activate':
      $this->activate();
      break;

    case '/reset':
      $this->reset();
      break;

    case '/reset_account':
      $this->reset_account();
      break;
    }
  }

  public function validate_pwd(){
    $data = $_POST;
    $errors = array();
    $passwordMinLength = 6;
    // Validate email
    if(strlen($data['password']) < $passwordMinLength)
      $errors['password'] = "Le mot de passe doit contenir au minimum 6 caractères";
    
    else if($data['password'] != $data['password1'])
      $errors['password'] = "Les mots de passe ne sont pas conformes";

    return array("errors"=>$errors, "data"=>$data);
  }

  public function validate(){
    $data = $_POST;
    $errors = array();
    $emailPattern = '/^[a-zA-Z0-9._%+-]+@esp\.sn$/';
    $passwordMinLength = 6;
    // Validate email
    if (!preg_match($emailPattern, $data['email']))
      $errors['email'] = "Ce mail n'est pas valide";

    return array("errors"=>$errors, "data"=>$data);
  }

  public function reset(){
    switch($_SERVER['REQUEST_METHOD']){
      case "POST":
        $valide = $this->validate();
        if(count($valide['errors']))
          $this->templateEngine->render($this->view, $valide);
        // send a reset mail
        $model = new Compte();
        $result = $model->getCodeByEmail($_POST['email']);
        if(!$result->rowCount()){
          $valide['errors']['db'] = "Ce mail ne possède pas de compte";
          $this->templateEngine->render($this->view, $result);
          exit();
        }
        $code = $result->fetch()['activation_code'];
        sendActivationEmail($_POST['email'], $code, '/reset_account');
        break;

      case "GET": 
        $this->templateEngine->render($this->view);
        break;
    }
  }

  public function reset_account(){
    switch($_SERVER['REQUEST_METHOD']){
      case "POST":
        $valide = $this->validate_pwd();
        if(count($valide['errors']))
          $this->templateEngine->render('reset_pwd.php', $valide);
        // reset the password
        $model = new Compte();
        $result = $model->updatePassword($_GET['code'], $valide['data']['password']);
        if(isset($result['errors']['db']))
          $this->templateEngine->render('reset_pwd.php', $result);
        else{
          header("Refresh:3; URL=/connexion");
          $this->templateEngine->render('reset_pwd.php', ["message"=>"Votre mot de passe a été changé"]);
        }
        break;

      case "GET": 
        // security can be enhanced here
        $this->templateEngine->render('reset_pwd.php');
        break;
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
    } 
    else {
      header("location: /inscription");
    }
  }
}
?>

