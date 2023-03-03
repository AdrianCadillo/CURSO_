<?php 
 
session_start();
/// Fecha de nacimiento dia , Mes , Año programación

$FechaNacimiento = $_POST['fecha'] ?? ''; /// 2023-02-23
if(isset($_POST['procesar'])):
 if(!empty($FechaNacimiento)):

    $_SESSION['input'] = $FechaNacimiento;
    
    $Dia = substr($FechaNacimiento,8,2);

    $Mes = substr($FechaNacimiento,5,2);
    
    $Persona_Signo = "";
    
    switch($Mes):
    
        case 1: /// enero
          if($Dia<=20):
            $Persona_Signo = "Capricornio";
            
          else:
            $Persona_Signo = "Acuario";
          endif;
    
        break;
    
        case 2: /// Febrero
            if($Dia<=19):
              $Persona_Signo = "Acuario";
              
            else:
              $Persona_Signo = "Piscis";
            endif;
            
        break;
    
        case 3: /// Marzo
            if($Dia<=20):
              $Persona_Signo = "Piscis";
              
            else:
              $Persona_Signo = "Aries";
            endif;
            
        break;
    
        case 4: /// Abril
             if($Dia<=20):
              $Persona_Signo = "Aries";
              
            else:
              $Persona_Signo = "Tauro";
            endif;
            
          break;
        
          case 5: /// Mayo
            if($Dia<=20):
              $Persona_Signo = "Tauro";
              
            else:
              $Persona_Signo = "Géminis";
            endif;
            
          break; 
          
          case 6: /// Junio
            if($Dia<=21):
              $Persona_Signo = "Géminis";
              
            else:
              $Persona_Signo = "Cáncer";
            endif;
            
          break; 
    
          case 7: /// Julio
            if($Dia<=22):
    
              $Persona_Signo = "Cáncer";
              
            else:
              $Persona_Signo = "Leo";
            endif;
            
          break; 
    
          case 8: // Agosto
            if($Dia<=23):
              $Persona_Signo = "Leo";
              
            else:
              $Persona_Signo = "Virgo";
            endif;
            
          break;
    
          case 9: /// Septiembre
            if($Dia<=22):
              $Persona_Signo = "Virgo";
              
            else:
              $Persona_Signo = "Libra";
            endif;
            
          break;
    
          case 10: /// Octubre
            if($Dia<=22):
              $Persona_Signo = "Libra";
              
            else:
              $Persona_Signo = "Escorpio";
            endif;
            
          break;
    
          case 11: /// Noviembre
            if($Dia<=22):
              $Persona_Signo = "Escorpio";
              
            else:
              $Persona_Signo = "Sagitario";
            endif;
            
          break;
    
          case 12: /// diciembre
            if($Dia<=21):
              $Persona_Signo = "Sagitario";
              
            else:
              $Persona_Signo = "Capricornio";
            endif;
            
          break;
    
    endswitch;
    
    $_SESSION['mensaje'] = $Persona_Signo;

    # redirija a la vista

    header("Location:views/zodiacal.php");
 endif;
endif;
