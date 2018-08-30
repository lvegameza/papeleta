$(document).ready(ini);

function ini()
{
	$('#papeleta').change(valor);
}

function valor()
{	
	var nombre = $(this).find('option:selected').attr("name");
	var n = $(this).val();
	if (n == 1) {
		$('#divPapeletas').css('display','none');
		$('#divSobretiempo').css('display','block');
	}
	else{
		$('#nombrePapeleta').html(nombre);
		$('#id').val(n);
		$('#divSobretiempo').css('display','none');
		$('#divPapeletas').css('display','block');
	}
}