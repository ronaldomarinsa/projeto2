            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-ui.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/plugins/dataTables/dataTables.bootstrap.js"></script> 

    <!-- Extras -->
    <script src="assets/js/docs.min.js"></script>
    <script src="assets/js/dataTable.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/masked.js"></script>
    
    <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });

        jQuery(function($){
           $("#for_fone1").mask("(99) 99999-999?9");
           $("#for_fone2").mask("(99) 99999-999?9");
           $("#for_cep").mask("99999-999");
        });
    </script>

    <? include ('include/modal.php'); ?>
	
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                $("#for_endereco").val("");
                $("#for_bairro").val("");
                $("#for_cidade").val("");
                $("#for_uf").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#for_cep").blur(function() {

                //Nova variável com valor do campo "cep".
                var cep = $(this).val();

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{5}-?[0-9]{3}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#for_endereco").val("...")
                        $("#for_bairro").val("...")
                        $("#for_cidade").val("...")
                        $("#for_uf").val("...")

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#for_endereco").val(dados.logradouro);
                                $("#for_bairro").val(dados.bairro);
                                $("#for_cidade").val(dados.localidade);
                                $("#for_uf").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
	<script>
		function aplicaMascara(opcao) {
		  if (opcao == "PF")
			document.getElementById("for_cpfcnpj").setAttribute("onfocus","mascaraCPF()");
		  if (opcao == "PJ")
			document.getElementById("for_cpfcnpj").setAttribute("onfocus","mascaraCNPJ()");
		}

		function mascaraCPF() {
		  $("#for_cpfcnpj").mask("999.999.999-99");
		}

		function mascaraCNPJ() {
		  $("#for_cpfcnpj").mask("99.999.999/9999-99");
		}
	</script>

	
</body>

</html>