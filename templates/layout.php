<html lang="pl">

<head>
  <title>Zadanie_testowe</title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
  rel="stylesheet"
   integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link href="/public/style.css" rel="stylesheet">
</head>

<body class="body">
  <div class="wrapper">
    <div class="header">
      <div class="header__title">
      <h1>Wyszukiwarka wpisów z KRS</h1>
      </div>
      <form method="post" class="search__section" action="/?action=searched">
      <input 
              class="form-control" 
              type="text" 
              name="krsNumber" 
              placeholder="<?php if($getData){echo $getData['krsNumber'];}else{echo "Numer Przedsiębiorstwa";}?>"
              value="<?php if($getData){echo $getData['krsNumber'];}?>"
              >

      <select class="form-select" name="krsType" aria-label="Default select example">
          <option selected><?php if($getData){echo $getData['krsType'];}else{echo "Typ Przedsiębiorstwa";}?></option>
          <option value="Przedsiębiorstwo">Przedsiębiorstwo</option>
          <option value="Stowarzyszenie">Stowarzyszenie</option>
      </select>
      <div class="col-auto">
        <button type="submit" class="btn btn__search btn-success">Szukaj</button>
      </div>
      </form>
    </div>

    <div class="main__body">
      <div class="menu">
        <ul>
          <li><a href="/?action=basic">Dane podstawowe z KRS</a></li>
          <li><a href="/?action=management">Zarząd</a></li>
          <li><a href="/?action=holders">Udziałowcy</a></li>
          <li><a href="/?action=rest">Pozostałe dane z krs</a></li>
        </ul>
      </div>
      <div class="page">
        <?php require_once("templates/pages/$page.php"); ?>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>