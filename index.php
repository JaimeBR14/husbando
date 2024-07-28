<?php
   function husbandos()
   {
      $numero = rand(0, 100);
      $respuestas = array(
       "AETHER",
       "ALBEDO",
       "ALHACEN",
       "AYATO",
       "BAIZHU",
       "BENNET",
       "CAPITANO",
       "CHONGYUN",
       "CYNO",
       "DAINSLEIF",
       "DILUC",
       "DOTTORE",
       "FREMINET",
       "GAMING",
       "GOROU",
       "HEIZOU",
       "ITTO",
       "KAEYA",
       "KAZUHA",
       "KAVEH",
       "LYNEY",
       "MIKA",
       "NEUVILLETTE",
       "PANTALONE",
       "PIEROTTO",
       "PULCINELLA",
       "RAZOR",
       "SCARAMOUCHE",
       "TARTAGLIA",
       "TEPPEI",
       "THOMA",
       "TIGHNARI",
       "VARKA",
       "VENTI",
       "WRIOTHESLEY",
       "XIAO",
       "XINGQIU",
       "ZHONGLI",
       "ARGENTI",
       "ARLAN",
       "AVENTURINE",
       "BLADE",
       "CAELUS",
       "DAN HENG",
       "DAN HENG IL",
       "DR RATIO",
       "GALLAGHER",
       "GEPARD",
       "JING YUAN",
       "LUOCHA",
       "LUKA",
       "MISHA",
       "SAM",
       "SAMPO",
       "SUNDAY",
       "TORNILLUM",
       "WELT",
       "YANQING");
      $random = array_rand($respuestas);
      if ($respuestas[$random] == "VENTI" || $respuestas[$random] == "XINGQIU" || $respuestas[$random] == "MISHA"){
         if ($numero <= 50){
            $mensaje = "y " . $respuestas[$random] . " son compatibles en un " . $numero . "%. Veo que te interesan los trapitos Hey ";
         }
         else{
            $mensaje = "y " . $respuestas[$random] . " son compatibles en un " . $numero . "%. Descubrimos que te atraen los trapitos NOTED NOWAYING ";
         } 
      }
      else {
         if ($respuestas[$random] == "TEPPEI"){
            $mensaje = "y " . $respuestas[$random] . " son compatibles en un " . $numero . "%. Veo que te interesa los frios GIGASVAROG WereInTroubleNow ";
         }
         else {
            if ($respuestas[$random] == "JING YUAN"){
               $mensaje = "y " . $respuestas[$random] . " son compatibles en un " . $numero . "%. El...simplemente esta pocho KEKWlaugh ";
            }
            else{
               if ($numero <= 20){
               $mensaje = "y " . $respuestas[$random] . " son compatibles en un " . $numero . "%. Ya no le siga insistiendo, no le quiere WHOLETHIMCOOK ";
               }
               else{
                  if ($numero <= 50){
                     $mensaje = "y " . $respuestas[$random] . " son compatibles en un " . $numero . "%. Son buenos amigos, en pocas palabras frienzoneado cenaJAM PikachuRave ";
                  }
                  else {
                     if ($numero <= 80) {
                        $mensaje = "y " . $respuestas[$random] . " son compatibles en un " . $numero . "%. Algo puede que este surgiendo peepoShy ";
                     }
                     else {
                        $mensaje = "y " . $respuestas[$random] . " son compatibles en un " . $numero . "%. VIVAN LOS NOVIOS Prayge sigma ";
                     }
                  }
               }
            }
         } 
      }
      echo $mensaje;
   }
   husbandos();
?>
