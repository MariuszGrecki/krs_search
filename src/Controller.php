<?php

declare(strict_types=1);

namespace App;

use SearchData;

require_once("src/View.php");
require_once("src/Utils/getData.php");

class Controller
{
  private const DEFAULT_ACTION = 'welcome';
  private $request;
  private $view;
 
  public function __construct(array $request)
  {
    $this->request = $request;
    $this->view = new View();
  }

  public function run(): void
  {
    $viewParams = [];
  
  
    switch ($this->action()) {
      case 'searched':
        $page = 'basic';
        $created = false;

        $data = $this->getRequestPost();
        if(!empty($data)){
          SearchData::getDataFromKrs($data);
        };
        
        $viewParams['created'] = $created;
        break;
      case 'basic':
        $page = 'basic';
        $viewParams = [
          'title' => 'Moja notatka',
          'description' => 'Opis'
        ];
        break;
      case 'management':
        $page = 'management';
          $viewParams = [
            'title' => 'Moja notatka',
            'description' => 'Opis'
          ];
          break;
      case 'holders':
        $page = 'holders';
          $viewParams = [
              'title' => 'Moja notatka',
              'description' => 'Opis'
            ];
            break;
      case 'rest':
        $page = 'rest';
          $viewParams = [
                'title' => 'Moja notatka',
                'description' => 'Opis'
              ];
              break;
      default:
        $page = 'welcome';
        $viewParams['resultList'] = "wyświetlamy notatki";
        break;
    }

    $this->view->render($page, $viewParams, $this->getRequestPost(), SearchData::$response??[]);
  }

  private function action(): string
  {
    $data = $this->getRequestGet();
    return $data['action'] ?? self::DEFAULT_ACTION;
  }

  private function getRequestGet(): array
  {
    return $this->request['get'] ?? [];
  }

  private function getRequestPost(): array
  {

    return $this->request['post'] ?? [];
  }
}
