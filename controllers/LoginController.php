<?php
session_start();

include 'Base.php';
require_once 'models/Compte.php';

class LoginController extends Controller
{
  protected $view = 'signin.php'; 

  public function dispatch($match=NULL){
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

    return array("errors"=>$errors, "data"=>$data);
  }

  public function disconnect(){
    session_destroy();
    header("location: /connexion");
  }

  public function get($valide=[]){
    $this->templateEngine->render($this->view, $valide);
  }

  public function post($data){
    $model = new Compte();
    $query = $model->getByEmail($data['email']);
    // looking if the user existe
    $result = array("errors"=>array("db"=>NULL));
    if($query->rowCount() != 1){
      $result['errors']['db'] = "Cet utilisateur n'existe pas; veillez vous inscrire";
      $this->templateEngine->render($this->view, $result);
      exit();
    }
    // if the password is correct
    else{
      $res = $query->fetch();
      $hashed_pwd = $res['password'];
      if(password_verify(trim($data['password']), $hashed_pwd)){
        // set the login session
        if($res['valide'] != '1'){
          $result['errors']['db'] = "Veillez activer votre compte";
          $this->templateEngine->render($this->view, $result);
          exit();
        }
        $_SESSION["loggedin"] = true;
        $_SESSION["id"] = $res['id'];
        $_SESSION["email"] = $res["username"];
        $_SESSION["admin"] = $res["is_admin"];
        header("location: /team");
      }
      else{
        $result['errors']['db'] = "Veillez verifier vos informations";
        $this->templateEngine->render($this->view, $result);
        exit();
      }
    }
  }
}
?>
