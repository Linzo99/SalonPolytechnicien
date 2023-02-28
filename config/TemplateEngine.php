<?php
class TemplateEngine
{
    protected $templatePath;

    public function __construct(){
        $this->templatePath = 'templates/';
    }

    public function render($view, $data=[]){
      if (!file_exists($this->templatePath.$view)) {
          throw new Exception('Template file does not exist: ' . $view);
      }

      extract($data);

      $templateFile = $this->templatePath.$view;
      include $templateFile;
      exit();
    }

}
?>
