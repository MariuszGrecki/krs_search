<div>
<div class="information__header">
<div class="information__box">
    <div class="information__title">Sposob Reprezentacji: </div>
    <div class="information__data"><?php echo $data['odpis']['dane']['dzial2']['reprezentacja']['sposobReprezentacji']??'Nie udało się pobrać wartości'?></div>
  </div>
  <div class="information__box">
    <div class="information__title">Zarząd: </div>
    <div class="information__data"><?php 
    if(!empty($data['odpis']['dane']['dzial2']['reprezentacja']['sklad'])){
         $holders = $data['odpis']['dane']['dzial2']['reprezentacja']['sklad'];
         foreach($holders as $holder) {
            ?>
            <h3>Członek:</h3>
            <?php
             echo "Nawisko: ".$holder['nazwisko']['nazwiskoICzlon'];
             echo "<br/>";
             echo "Imie: ".$holder['imiona']['imie'];
             echo "<br/>";
             echo "Numer Pesel: ".$holder['identyfikator']['pesel'];
             echo "<br/>";
             echo "Funkcja w Organie: ".$holder['funkcjaWOrganie'];
             echo "<br/>";
         }
    }
    ?> </div>
  </div>
</div>
</div>