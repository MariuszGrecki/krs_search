<div class="information__header">
<div class="information__box">
    <div class="information__title">Adres Poczty Elektronicznej:</div>
    <div class="information__data"><?php echo $data['odpis']['dane']['dzial1']['siedzibaIAdres']['adresPocztyElektronicznej']??'Nie udało się pobrać wartości'?></div>
  </div>
  <div class="information__box">
    <div class="information__title">Adres Strony Internetowej:</div>
    <div class="information__data"><?php echo "<a target='_blank' href=".$data['odpis']['dane']['dzial1']['siedzibaIAdres']['adresStronyInternetowej'].">".$data['odpis']['dane']['dzial1']['siedzibaIAdres']['adresStronyInternetowej']."</a>"??'Nie udało się pobrać wartości'?></div>
  </div>

  <div class="information__box">
    <div class="information__title">Przedmiot Przeważający Działalności: </div>
    <div class="information__data"><?php 
    if(!empty($data['odpis']['dane']['dzial3']['przedmiotDzialalnosci']['przedmiotPrzewazajacejDzialalnosci'])){
         $mainActivity = $data['odpis']['dane']['dzial3']['przedmiotDzialalnosci']['przedmiotPrzewazajacejDzialalnosci'];
             echo "Opis: ".$mainActivity[0]['opis'];
             echo "<br/>";
             echo "Kod: ".$mainActivity[0]['kodDzial'].".".$mainActivity[0]['kodKlasa'].".".$mainActivity[0]['kodPodklasa'];
             echo "<br/>";
    }
    ?> </div>
  </div>

  <div class="information__box">
    <div class="information__title">Przedmiot Pozostałej Działalności: </div>
    <div class="information__data"><?php 
    if(!empty($data['odpis']['dane']['dzial3']['przedmiotDzialalnosci']['przedmiotPozostalejDzialalnosci'])){
         $activities = $data['odpis']['dane']['dzial3']['przedmiotDzialalnosci']['przedmiotPozostalejDzialalnosci'];
         foreach($activities as $activity) {
            echo "Opis: ".$activity['opis'];
            echo "<br/>";
            echo "Kod: ".$activity['kodDzial'].".".$activity['kodKlasa'].".".$activity['kodPodklasa'];
            echo "<br/>";
         }
    }
    ?> </div>
  </div>



</div>