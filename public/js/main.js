$(document).ready(ini);

function ini()
{
	$('#papeleta').change(valor);
}

function valor()
{	
	var nombre = $(this).find('option:selected').attr("name");
	var n = $(this).val();
	if (n == 0) {
		$('#divPapeletas').css('display','none');
		$('#divSobretiempo').css('display','none');
		$('#divAtenMedica').css('display','none');
	}
	else if(n == 1){
		$('#divPapeletas').css('display','none');
		$('#divSobretiempo').css('display','block');
		$('#divAtenMedica').css('display','none');
	}else if(n == 4){
		$('#divPapeletas').css('display','none');
		$('#divAtenMedica').css('display','block');
		$('#divSobretiempo').css('display','none');		
	}else{
		switch(n)
		{
			case '3':
			$msg = "describa el motivo, Lugar y direccion de destino";	
			break;			
			default:
			$msg = "describa el motivo del permiso particular";
			break;
		}
		$('#descripcion').attr("placeholder", $msg);
		$('#divAtenMedica').css('display','none');
		$('#nombrePapeleta').html(nombre);
		$('#id').val(n);
		$('#divSobretiempo').css('display','none');
		$('#divPapeletas').css('display','block');
	}
}