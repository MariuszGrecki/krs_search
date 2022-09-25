<?php

declare(strict_types=1);

namespace Controller;
use App\Search\SearchData;
use App\View\View;

require_once("src/View.php");
require_once("src/Utils/getData.php");

class Controller extends SearchData
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
    switch ($this->action()) {
      case 'searched':
        $page = 'basic';
        $data = $this->getRequestPost();
        if(!empty($data)){
          SearchData::getDataFromKrs($data);
        };
        break;
      default:
        $page = 'welcome';
        break;
    }

    $this->view->render($page, $this->getRequestPost(), SearchData::$response??[]);
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
