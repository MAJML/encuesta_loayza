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
            $P8R1 = "vacio";
            $P8R2 = "por las recomendaciones que me dieron mis compañeras";
            $P9R1 = "no";
            $P9R2 = "esto es el porque no xd";
            $P10R1 = "no";
            $P10R2 = "este es el porque del 10";
            $P11R1 = "Por ser un instituto reconocido y de un buen prestigio ";
            $P12R1 = "esto es el texto de prueba de la pregunta 12";
            $P13R1 = "si";
            $P13R2 = "esto es el porque de la pregunta numero 13";

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
                $this->SetXY(58 ,204.3);
                $this->Cell(15,21, 'x' ,'','','L','');  
            }else if($P6R3 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(71.6 ,204.3);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }
            if($P6R4 == "si"){
                $this->SetFont('Arial','',13);
                $this->SetXY(58 ,208.1);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P6R4 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(71.6 ,208.1);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }
            if($P6R5 == "si"){
                $this->SetFont('Arial','',13);
                $this->SetXY(58 ,212.2);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P6R5 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(71.6 ,212.2);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }
            if($P6R6 == "si"){
                $this->SetFont('Arial','',13);
                $this->SetXY(58 ,216.2);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P6R6 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(71.6 ,216.2);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }
            if($P6R7 == "si"){
                $this->SetFont('Arial','',13);
                $this->SetXY(58 ,220.2);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P6R7 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(71.6 ,220.2);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }

            /* PREGUNTA 7 */
            if($P7R1 == "si"){
                $this->SetFont('Arial','',13);
                $this->SetXY(37 ,244.3);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P7R1 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(63 ,238.6);
                $this->Cell(15,21, 'x' ,'','','L',''); 

                $this->SetFont('Arial','',7,5);
                $this->SetXY(15.5 ,254);
                $this->Cell(15,21, utf8_decode($P7R2) ,'','','L',''); 
            }

            /* PREGUNTA 8 */
            if($P8R1 == "Por su Prestigio"){
                $this->SetFont('Arial','',13);
                $this->SetXY(117.7 ,71.7);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P8R1 == "Por sus años de experiencia"){
                $this->SetFont('Arial','',13);
                $this->SetXY(117.7 ,75.7);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P8R1 == "Por recomendaciones a otras personas"){
                $this->SetFont('Arial','',13);
                $this->SetXY(117.7 ,79.7);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P8R1 == "Por su Infraestructura y Equipos de última tecnología"){
                $this->SetFont('Arial','',13);
                $this->SetXY(117.7 ,83.7);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P8R1 == "Porque complementa tu carrera con Computación e Inglés"){
                $this->SetFont('Arial','',13);
                $this->SetXY(117.7 ,87.3);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P8R1 == "Por las prácticas"){
                $this->SetFont('Arial','',13);
                $this->SetXY(117.7 ,91.3);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P8R1 == "vacio"){
                $this->SetFont('Arial','',7.5);
                $this->SetXY(115.7 ,100.3);
                $this->Cell(15,21, utf8_decode($P8R2) ,'','','L',''); 
            }

            /* PREGUNTA 9 */
            if($P9R1 == "si"){
                $this->SetFont('Arial','',13);
                $this->SetXY(139 ,115.8);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P9R1 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(165 ,115.8);
                $this->Cell(15,21, 'x' ,'','','L',''); 

                $this->SetFont('Arial','',7.5);
                $this->SetXY(116.2 ,126);
                $this->Cell(15,21, utf8_decode($P9R2) ,'','','L',''); 
            }
                  
            /* PREGUNTA 10 */
            if($P10R1 == "si"){
                $this->SetFont('Arial','',13);
                $this->SetXY(139 ,145.8);
                $this->Cell(15,21, 'x' ,'','','L',''); 
            }else if($P10R1 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(165 ,145.8);
                $this->Cell(15,21, 'x' ,'','','L',''); 

                $this->SetFont('Arial','',7.5);
                $this->SetXY(116.2 ,156);
                $this->Cell(15,21, utf8_decode($P10R2) ,'','','L',''); 
            }

            /* PREGUNTA 11 */
            $this->SetFont('Arial','',7.5);
            $this->SetXY(116.2 ,177.4);
            $this->Cell(15,21, utf8_decode($P11R1) ,'','','L','');   

            /* PREGUNTA 12 */
            $this->SetFont('Arial','',7.5);
            $this->SetXY(116.2 ,196.9);
            $this->Cell(15,21, utf8_decode($P12R1) ,'','','L','');   

            /* PREGUNTA 13 */
            if($P13R1 == "si"){
                $this->SetFont('Arial','',13);
                $this->SetXY(138.8 ,222.2);
                $this->Cell(15,21, 'x' ,'','','L','');   

                $this->SetFont('Arial','',7.5);
                $this->SetXY(116.2 ,231.9);
                $this->Cell(15,21, $P13R2 ,'','','L','');   
            }else if($P13R1 == "no"){
                $this->SetFont('Arial','',13);
                $this->SetXY(164.9 ,222.2);
                $this->Cell(15,21, 'x' ,'','','L','');   

                $this->SetFont('Arial','',7.5);
                $this->SetXY(116.2 ,231.9);
                $this->Cell(15,21, utf8_decode($P13R2) ,'','','L','');   
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



