<!-- Modal -->
    <!-- exclusao de usuários -->
	<div class="modal fade" id="excluirUsuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    	<div class="modal-dialog">
			<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    				<h4 class="modal-title" id="myModalLabel">Deseja Excluir este Usuário?</h4>
    			</div>

    			<div class="modal-footer">
    			    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    				<a href="<?= do_action('delete_usuarios', ['id' => $usuario->id]); ?>"><button type="button" class="btn btn-danger">Excluir</button></a>
    			</div>
		    </div>
		    <!-- /.modal-content -->
    	</div>
    	<!-- /.modal-dialog -->
    </div>

    <!-- exclusao de bancos -->
    <div class="modal fade" id="excluirBancos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Deseja Excluir este Banco?</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <a href="<?= do_action('delete_bancos', ['id' => $banco->id]); ?>"><button type="button" class="btn btn-danger">Excluir</button></a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- exclusao de grupo fornecedores -->
    <div class="modal fade" id="excluirGrupoFornece" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Deseja Excluir este Grupo de Fornecedor?</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <a href="<?= do_action('delete_grupofornecedores', ['id' => $grupoforne->id]); ?>"><button type="button" class="btn btn-danger">Excluir</button></a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- exclusao de fornecedores -->
    <div class="modal fade" id="excluirFornecedores" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Deseja Excluir este Fornecedor?</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <a href="<?= do_action('delete_fornecedores', ['id' => $fornecedor->id]); ?>"><button type="button" class="btn btn-danger">Excluir</button></a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- recuperar email -->
    <div class="modal fade" id="recuperaEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Esqueceu a senha?</h4>
                </div>

                <div class="modal-body">
                <form role="form" method="GET" action="<?= do_action('login'); ?>">
                    <div class="form-group">
                        <input type="text" maxlength="45" class="form-control" placeholder="E-mail" name="usu_email1" id="usu_email1" type="email" autofocus value="<?= $_COOKIE['usuario'] ?>">
                    </div>
                    <input type="hidden" value="1" name="_recupera_form">
                </form>
                </div>
                <button type=button class="btn btn-success">Enviar</button></a>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
	
	<!-- consulta banco -->
    <div class="modal fade" id="consultaBanco" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Consulta de Bancos</h4>
                </div>

                <div class="modal-body">
					<table class="table table-bordered table-hover table-striped" id="wcms-table">
                    <form method="get" name="v">
						<thead>
						<tr>
							<th>Id</th>
							<th>Banco</th>
							<th>Agencia</th>
							<th>Conta</th>
							<th>Nome Reduzido</th>
							<th>Ativo</th>
							<th>Ações</th>
						</tr>
						</thead>

						<tbody>
						<?php
    						$bancos = wcms_db_select('bancos', ['*'], ['bco_ativo' => 'Sim']);
    						foreach($bancos as $banco) :
						?>
							<tr>
								<td>
                                <input type="text" value="<?= $banco->id; ?>" id="<?= $banco->id; ?>" name="agencia"></td>
								<td><?= $banco->bco_cod; ?></td>
								<td><?= $banco->bco_agencia; ?></td>
								<td><?= $banco->bco_conta; ?></td>
								<td><?= $banco->bco_nomereduz; ?></td>
								<td><?= $banco->bco_ativo; ?></td>
								<td>
									<a class="btn btn-success btn-sm" onclick="teste(valor);" data-dismiss="modal" >Selecionar</a>
								</td>
							</tr>
						<?php endforeach; ?>



                        <script>
							
                            valor = getValueAt(getSelectedRow("<?= $banco->id; ?>"), "<?= $banco->id; ?>"); 
							//document.getElementById("teste[<?= $banco->id; ?>]").id;
							
                        </script>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    