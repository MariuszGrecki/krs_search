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
            <h3>Zarząd:</h3>
            <?php
             if(!empty($holder['nazwa'])){
              echo "Nazwa Spółki: ".(!empty($holder['nazwa'])?$holder['nazwa']:'Brak zapisanej nazwy Spółki zarządzającej');
              echo "<br/>";
              echo "Numer Regon: ".(!empty($holder['identyfikator']['regon'])?$holder['identyfikator']['regon']:'Brak zapisanego numeru regon Spółki zarządzającej');
              echo "<br/>";
              echo "Numer Krs: ".(!empty($holder['krs']['krs'])?$holder['krs']['krs']:'Brak zapisanego numeru Krs Spółki zarządzającej');
              echo "<br/>";
             } else {
              echo "Nawisko: ".(!empty($holder['nazwisko']['nazwiskoICzlon'])?$holder['nazwisko']['nazwiskoICzlon']:'Brak zapisanego nazwiska członka zarządu');
              echo "<br/>";
              echo "Imie: ".(!empty($holder['imiona']['imie'])?$holder['imiona']['imie']:'Brak zapisanego imienia członka zarządu');
              echo "<br/>";
              echo "Numer Pesel: ".(!empty($holder['identyfikator']['pesel'])?$holder['identyfikator']['pesel']:'Brak zapisanego nr pesel członka zarządu');
              echo "<br/>";
              if(!empty($holder['funkcjaWOrganie'])){
              echo "Funkcja w Organie: ".$holder['funkcjaWOrganie'];
              }
              echo "<br/>";
             }
         }
    } 
    ?> </div>
  </div>
</div>
</div>