<?php

    require('fpdf/fpdf.php');

    class PDF extends FPDF{

        public $nombre;
        public $curso ;

        function hoja1()
        {
        
            /* TIPO DE LETRA */
            /* $this->AddFont('Lobster','','Lobster.php'); */


    /*         $name = $this->nombre;
            $participacion = "Asistente";
            $course = "Taller de Ofimática";
            $dia = "15";
            $mes = "Agosto";
            $anio = "2023"; */

            $P1Turno = "Noche";
            $P1Sexo = "Femenino";
            $P1Edad = "18";
            $P1Distrito = "CHORRILLOS";

            $P2R1 = "TV";
            $P3R1 = "Canal 2(Frecuencia Latina)";
            $P4R1 = "Otros";

            $P4R2 = "esto es otros";

            $P5R1 = "Google Buscador";

            $P6R1 = "no";

            $P6R2 = "no";

            $P6R3 = "no";

            $P6R4 = "no";

            $P6R5 = "no";

            $P6R6 = "no";

            $P6R7 = "no";

            $P7R1 = "no";

            $P7R2 = "ESTO ES EL no xd";

            $this->Image('Imagen.png','0','0','210','280','PNG');								
            /*         
            $this->Ln(35);
            $this->SetFont('Lobster','',31);
            $this->SetXY(83, 71);
            $this->Cell(130,50, utf8_decode($name),0,'','L','');
            */

            /* PREGUNTA 1 TURNO */
            if($P1Turno == "Mañana"){
                $this->SetFont('Arial','',13);
                $this->SetXY(40.2,71.3);
                $this->Cell(15,21, 'x' ,'','','L','');            
            }else if($P1Turno == "Tarde"){
                $this->SetFont('Arial','',13);
                $this->SetXY(57.2,71.3);
                $this->Cell(15,21, 'x' ,'','','L','');    
            }else if($P1Turno == "Noche"){
                $this->SetFont('Arial','',13);
                $this->SetXY(73.7 ,71.3);
                $this->Cell(15,21, 'x' ,'','','L','');    
            }
            /* PREGUNTA 1 SEXO */
            if($P1Sexo == "Femenino"){
                $this->SetFont('Arial','',13);
                $this->SetXY(42.5 ,77.5);
                $this->Cell(15,21, 'x' ,'','','L','');   
            }else if($P1Sexo == "Masculino"){
                $this->SetFont('Arial','',13);
                $this->SetXY(73.5 ,77.5);
                $this->Cell(15,21, 'x' ,'','','L','');   
            }
            /* PREGUNTA 1 EDAD */
            $this->SetFont('Arial','',7.5);
            $this->SetXY(35.4 ,83.9);
            $this->Cell(15,21, $P1Edad ,'','','L','');   
            /* PREGUNTA 1 DISTRITO */
            $this->SetFont('Arial','',7.5);
            $this->SetXY(49 ,89.2);
            $this->Cell(15,21, $P1Distrito ,'','','L','');   

            /* PREGUNTA 2 */
            if($P2R1 == "TV"){
                $this->SetFont('Arial','',13);
                $this->SetXY(45.5 ,103.6);
                $this->Cell(15,21, 'x' ,'','','L','');   
            }else if($P2R1 == "Periodicos"){
                $this->SetFont('Arial','',13);
                $this->SetXY(45.5 ,107.4);
                $this->Cell(15,21, 'x' ,'','','L','');   
            }else if($P2R1 == "Internet"){
                $this->SetFont('Arial','',13);
                $this->SetXY(45.5 ,111.4);
                $this->Cell(15,21, 'x' ,'','','L','');   
            }else if($P2R1 == "Recomendacion"){
                $this->SetFont('Arial','',13);
                $this->SetXY(82.9 ,103.6);
                $this->Cell(15,21, 'x' ,'','','L','');   
            }else if($P2R1 == "Paneles"){
                $this->SetFont('Arial','',13);
                $this->SetXY(82.9 ,107.4);
                $this->Cell(15,21, 'x' ,'','','L','');   
            }

            /* PREGUNTA 3 */
            if($P3R1 == "Canal 5(Panamericana TV)"){
                $this->SetFont('Arial','',13);
                $this->SetXY(64.2 ,124.8);
                $this->Cell(15,21, 'x' ,'','','L','');   
            }else if($P3R1 == "Canal 4(América TV)"){
                $this->SetFont('Arial','',13);
                $this->SetXY(64.2 ,128.8);
                $this->Cell(15,21, 'x' ,'','','L','');   
            }else if($P3R1 == "Canal 9(ATV)"){
                $this->SetFont('Arial','',13);
                $this->SetXY(64.2 ,132.7);
                $this->Cell(15,21, 'x' ,'','','L','');   
            }else if($P3R1 == "Canal 2(Frecuencia Latina)"){
                $this->SetFont('Arial','',13);
                $this->SetXY(64.2 ,136.6);
                $this->Cell(15,21, 'x' ,'','','L','');   
            }

            /* PREGUNTA 4 */
            if($P4R1 == "Ojo"){
                $this->SetFont('Arial','',13);
                $this->SetXY(64 ,151);
                $this->Cell(15,21, 'x' ,'','','L','');  
            }else if($P4R1 == "Expreso"){
                $this->SetFont('Arial','',13);
                $this->SetXY(64 ,154.9);
                $this->Cell(15,21, 'x' ,'','','L','');  
            }else if($P4R1 == "Otros"){
                $this->SetFont('Arial','',13);
                $this->SetXY(64 ,158.8);
                $this->Cell(15,21, 'x' ,'','','L','');  

                $this->SetFont('Arial','',7.5);
                $this->SetXY(29 ,158.8);
                $this->Cell(15,21, $P4R2 ,'','','L','');  
            }

            /* PREGUNTA 5 */
            if($P5R1 == "Google Buscador"){
                $this->SetFont('Arial','',13);
                $this->SetXY(64 ,169.8);
                $this->Cell(15,21, 'x' ,'','','L','');  
            }else if($P5R1 == "Instagram"){
                $this->SetFont('Arial','',13);
                $this->SetXY(64 ,173.7);
                $this->Cell(15,21, 'x' ,'','','L','');  
            }else if($P5R1 == "Facebook"){
                $this->SetFont('Arial','',13);
                $this->SetXY(64 ,177.6);
                $this->Cell(15,21, 'x' ,'','','L','');  
            }else if($P5R1 == "Youtube"){
                $this->SetFont('Arial','',13);
                $this->SetXY(64 ,181.5);
                $this->Cell(15,21, 'x' ,'','','L','');  
            }else if($P5R1 == "Página Web"){
                $this->SetFont('Arial','',13);
                $this->SetXY(64 ,185.3);
                $this->Cell(15,21, 'x' ,'','','L','');  
            }

            /* PREGUNTA 6 */
            if($P6R1 == "si"){
                $this->SetFont('Arial','',13);
                $this->SetXY(58 ,196.3);
                $this->Cell(15,21, 'x' ,'','','L','');  
            }else if($P6R1 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(71.6 ,196.3);
                $this->Cell(15,21, 'x' ,'','','L','');  
            }
            if($P6R2 == "si"){
                $this->SetFont('Arial','',13);
                $this->SetXY(58 ,213);
                $this->Cell(15,21, 'x' ,'','','L','');  
            }else if($P6R2 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(71.6 ,200.3);
                $this->Cell(15,21, 'x' ,'','','L','');  
            }
            if($P6R3 == "si"){
                $this->SetFont('Arial','',13);
                $this->SetXY(58 ,217.3);
                $this->Cell(15,21, 'x' ,'','','L','');  
            }else if($P6R3 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(71.6 ,217.3);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }
            if($P6R4 == "si"){
                $this->SetFont('Arial','',13);
                $this->SetXY(58 ,221.5);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P6R4 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(71.6 ,221.5);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }
            if($P6R5 == "si"){
                $this->SetFont('Arial','',13);
                $this->SetXY(58 ,225.8);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P6R5 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(71.6 ,225.8);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }
            if($P6R6 == "si"){
                $this->SetFont('Arial','',13);
                $this->SetXY(58 ,230);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P6R6 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(71.6 ,230);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }
            if($P6R7 == "si"){
                $this->SetFont('Arial','',13);
                $this->SetXY(58 ,234.3);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P6R7 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(71.6 ,234.3);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }

            /* PREGUNTA 7 */
            if($P7R1 == "si"){
                $this->SetFont('Arial','',13);
                $this->SetXY(37 ,255.9);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P7R1 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(63 ,238.6);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }
                        
        }
    }

    if(isset($_GET["nombre"])){
        $pdf = new PDF('P', 'mm','A4');
        $pdf -> AddPage();
        $pdf -> nombre = $_GET["nombre"];
        $pdf -> curso = $_GET["curso"];
        $pdf -> hoja1();
        $pdf -> Output();        
    }else{
        echo "Hubo un error , Intentelo mas tarde";
    }



