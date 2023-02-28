<?php
require_once 'Base.php';
require_once 'models/Compte.php';

class CompteController extends Controller
{
  protected $view = 'compte.php'; 

  public function validate(){
    $data = $_POST;
    $errors = array();
    $emailPattern = '/^[a-zA-Z0-9._%+-]+@esp\.sn$/';
    $passwordMinLength = 6;
    // Validate email
    if (!preg_match($emailPattern, $data->email)) {
      $errors['email'] = "Ce mail n'est pas valide";
    }
    if(strlen($data->password) < $passwordMinLength){
      $errors['password'] = "Le mot de passe doit contenir au minimum 6 caractères";
    }
    return array("errors"=>$errors, "data"=>$data);
  }


  public function get()
  {
    $model = new Compte();
    $data = $model->all();
    $this->templateEngine->render($this->view, $data);
  }
}
?>
