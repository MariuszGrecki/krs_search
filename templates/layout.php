<html lang="pl">

<head>
  <title>Zadanie_testowe</title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer="defer" type="text/javascript" src="index.js"></script>
  <link href="/public/style.css" rel="stylesheet">
</head>

<body class="body">
  <div class="wrapper">
    <div class="header">
      <div class="header__title">
        <h1>Wyszukiwarka wpisów z KRS</h1>
      </div>
      <form name="form" method="post" class="search__section" action="/?action=searched" onsubmit="return validateForm()">
        <input 
              required 
              class="form-control" 
              type="text" 
              name="krsNumber" 
              placeholder="<?php if ($subject) {echo $subject['krsNumber'];} else {echo "Numer Przedsiębiorstwa";} ?>" 
              value="<?php if ($subject) {echo $subject['krsNumber']; } ?>">
          <select class="form-select" name="krsType" aria-label="Default select example" id="krsTypeSelect">
          <option selected><?php if ($subject) {
                              echo $subject['krsType'];
                            } else {
                              echo "Typ Przedsiębiorstwa";
                            } ?></option>
          <?php if ($subject['krsType'] == 'Przedsiębiorstwo') : ?>
            <option value="Stowarzyszenie">Stowarzyszenie</option>
          <?php elseif ($subject['krsType'] == 'Stowarzyszenie') : ?>
            <option value="Przedsiębiorstwo">Przedsiębiorstwo</option>
          <?php else : ?>
            <option value="Przedsiębiorstwo">Przedsiębiorstwo</option>
            <option value="Stowarzyszenie">Stowarzyszenie</option>
          <?php endif; ?>
        </select>
        <div class="col-auto">
          <button type="submit" class="btn btn__search btn-success">Szukaj</button>
        </div>
      </form>
    </div>

    <div class="main__body">
      <div class="menu">
        <ul>
          <li><button type="button" class="menu__button title__basic" 
          <?php if ($page == 'welcome'||array_key_exists('Error', $data)) { echo 'disabled';} ?>>Dane podstawowe z KRS</button></li>
          <li><button type="button" class="menu__button title__holders" 
          <?php if ($page == 'welcome'||array_key_exists('Error', $data)) {echo 'disabled';} ?>>Zarząd</button></li>
          <li><button type="button" class="menu__button title__management" 
          <?php if ($page == 'welcome'||array_key_exists('Error', $data)) { echo 'disabled';} ?>>Udziałowcy</button></li>
          <li><button type="button" class="menu__button title__rest" 
          <?php if ($page == 'welcome'||array_key_exists('Error', $data)) {echo 'disabled';} ?>>Pozostałe dane z krs</button></li>
        </ul>
      </div>
      <?php if ($page == 'welcome') : ?>
        <div class="page body__welcome">
          <?php require_once("templates/pages/welcome.php"); ?>
        </div>
      <?php else : ?>
        <?php if (array_key_exists('Error', $data)) : ?>
          <div class="page body__error">
            <?php require_once("templates/pages/error.php"); ?>
          </div>
        <?php else : ?>
          <div class="page body__basic">
            <?php require_once("templates/pages/basic.php"); ?>
          </div>
          <div class="page body__holders display__none">
            <?php require_once("templates/pages/holders.php"); ?>
          </div>
          <div class="page body__management display__none">
            <?php require_once("templates/pages/management.php"); ?>
          </div>
          <div class="page body__rest display__none">
            <?php require_once("templates/pages/rest.php"); ?>
          </div>
        <?php endif; ?>
      <?php endif; ?>
      <div class="page body__alerts display__none">
            <?php require_once("templates/pages/alerts.php"); ?>
          </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>