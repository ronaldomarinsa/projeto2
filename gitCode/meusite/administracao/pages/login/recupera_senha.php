<script>
				$(document).ready(function(){//Equivalente ao window.onload porem mais rapido
			if($("input:radio[name='tipo']:checked").val()=="j"){
				$("input[name=documento]").mask("99.999.999/9999-99");
						$("#cpfcnpj").text('Digite o CNPJ:');
			} else {
				$("input[name=documento]").mask("999.999.999-99");
						$("#ie").hide();
			}

		   $("input[name=tipo]:radio").change(function(){
				 $('input[name=documento]').unmask();//Remove a mascara
				 if($(this).val()=="cpf"){//Acaso seja CPF
						$("input[name=documento]").mask("999.999.999-99");
						$("#ie").hide();
						$("#cpfcnpj").text('Digite o CPF:');
				 } else {//Acaso seja Cnpj
						$("input[name=documento]").mask("99.999.999/9999-99");
						$("#ie").show();
						$("#cpfcnpj").text('Digite o CNPJ:');
				 }
		   })
		});
	</script>
	<label><span>CPF:</span><input type="radio" name="tipo" value="cpf"></label>
	<label><span>CNPJ:</span><input type="radio" name="tipo" value="cnpj"></label>

	<label id="cpfcnpj"><span>Digite o CPF:</span><input type="text" name="documento"></label>