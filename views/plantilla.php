<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6f8129a9b1.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CERTIFICADO</title>
</head>
<body>
  
<section class="container">
    <h2 class="text-center m-5">CERTIFICADOS <b>TALLER OFIMATICA</b></h2>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>*</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>DNI</th>
                <th>CELULAR</th>
                <th>CORREO</th>
                <th>HORARIO</th>
                <th>CARRERA</th>
                <th>CICLO</th>
                <th>FECHA DE REGISTRO</th>
                <th>CERTIFICADO</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $alumnos = DataController::ConsultaTaller();
            foreach ($alumnos as $key => $value) {
            ?>
            <tr>
                <td><?= $key+1 ?></td>
                <td><?= $value['nombres'] ?></td>
                <td><?= $value['apellidos'] ?></td>
                <td><?= $value['dni'] ?></td>
                <td><?= $value['celular'] ?></td>
                <td><?= $value['correo'] ?></td>
                <td><?= $value['horario'] ?></td>
                <td><?= $value['carrera'] ?></td>
                <td><?= $value['ciclo'] ?></td>
                <td><?= $value['fecha_registro'] ?></td>
                <td class="text-center"><a href="JavaScript:void(0);" class="btn btn-success btnIDalumno" nombreAlumno="<?= $value['nombres'].' '.$value['apellidos'] ?>" idAlumno="<?= $value['id'] ?>" ><i class="fa-solid fa-certificate"></i></a></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</section>







<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/index.js"></script>
<script>
    new DataTable('#example');
</script>
</body>
</html>