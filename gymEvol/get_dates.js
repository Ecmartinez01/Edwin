document.getElementById("usuario").onclick=function(){
	var tabla = "SELECT * FROM login";
	$.ajax({
		url:"mostrar_usuarios.php",
		type:"post",
		data:{tabla:tabla},
		success:function(){
			$("#contenedorrr").html(data);
		}
	});

}

