<?php

declare(strict_types=1);

namespace App;

class View
{
  public function render(string $page, array $params, array $getData, array $data ): void
  {
    require_once("templates/layout.php");
  }
}
