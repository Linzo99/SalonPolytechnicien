<?php
require_once 'config/TemplateEngine.php';

class Controller
{
  protected $view;
  protected $templateEngine;

  public function __construct()
  {
    $this->templateEngine = new TemplateEngine();
  }

  public function dispatch()
  {
    switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
      $this->get();
      break;

    case 'POST':
      $valide = $this->validate();
      if(count($valide['errors']))
        $this->get($valide);
      else
        $this->post($valide['data']);
      break;

    case 'UPDATE':
      $valide = $this->validate();
      if(count($valide['errors']))
        $this->get($valide);
      else
        $this->update($valide['data']);
      break;
    }
  }

  public function validate(){
    return array("errors"=>[], "data"=>[]);
  }
}
?>
