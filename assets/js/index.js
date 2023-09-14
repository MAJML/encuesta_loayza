console.log("aaa")

$(document).on("click", ".btnIDalumno", function(){ 
    var curso = $(this).attr("idAlumno")
    var nombre_a = $(this).attr("nombreAlumno")
    window.location.href = 'lib/certificado/index.php'+ "?nombre=" + nombre_a + "&curso=" + curso;      

})
