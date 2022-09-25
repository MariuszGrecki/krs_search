<div>
<div class="information__header">
  <div class="information__box">
    <div class="information__title">Wspólnicy: </div>
    <div class="information__data"><?php 
    if(!empty($data['odpis']['dane']['dzial1']['wspolnicySpzoo'])||!empty($data['odpis']['dane']['dzial1']['wspolnicyPartnerzy'])){
         $partners = $data['odpis']['dane']['dzial1']['wspolnicySpzoo']??$data['odpis']['dane']['dzial1']['wspolnicyPartnerzy'];
         foreach($partners as $partner) {
            ?>
            <h3 class="title__partners">Wspólnik:</h3>
            <?php
             $flag=0;
             if(!empty($partner['nazwisko']['nazwiskoICzlon'])){
             $flag++;
             echo "Nawisko: ".(!empty($partner['nazwisko']['nazwiskoICzlon'])?$partner['nazwisko']['nazwiskoICzlon']:'Brak zapisanego nazwiska Wspólnika');
             echo "<br/>";
             echo "Imie: ".(!empty($partner['imiona']['imie'])?$partner['imiona']['imie']:'Brak zapisanego imienia Wspólnika');
             echo "<br/>";
             echo "Numer Pesel: ".(!empty($partner['identyfikator']['pesel'])?$partner['identyfikator']['pesel']:'Brak zapisanego nr pesel Wspólnika');
             echo "<br/>";
             echo "Posiadane Udziały: ".(!empty($partner['posiadaneUdzialy'])?$partner['posiadaneUdzialy']:'Brak zapisanego ilości udziałów Wspólnika');
             echo "<div class='break'></div>";
            }
            if(!empty($partner['nazwa'])){
                $flag++;
                echo "Nazwa: ".(!empty($partner['nazwa'])?$partner['nazwa']:'Brak zapisanej nazwy spółki wspólnika Wspólnika');
                echo "<br/>";
                echo "Identyfikator: ".(!empty($partner['identyfikator']['regon'])?$partner['identyfikator']['regon']:'Brak zapisanego nr regon Wspólnika');
                echo "<br/>";
                echo "Numer KRS: ".(!empty($partner['krs']['krs'])?$partner['krs']['krs']:'Brak zapisanego nr krs Wspólnika');
                echo "<br/>";
                echo "Posiadane Udziały: ".(!empty($partner['posiadaneUdzialy'])?$partner['posiadaneUdzialy']:'Brak zapisanego ilości udziałów Wspólnika');
                echo "<div class='break'></div>";
            }
         }
    } else {
        echo 'Nie sa zarejstrowani inni wspólnicy';

    }
    ?> </div>
  </div>
</div>
</div>