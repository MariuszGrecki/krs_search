<?php

declare(strict_types=1);

namespace App\View;


class View
{
  public function render(string $page, array $subject, array $data ): void
  {
    require_once("templates/layout.php");
  }
}
