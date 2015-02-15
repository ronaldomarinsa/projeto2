<h1 class="page-header">Resumo</h1>


<div class="row">
  <div class="col-sm-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Resumo</h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
              <tr>
                <td><strong>Total de Grupo de Fornec.: </strong></td>
                <td><?= wcms_db_select('grupofornece', ['count(ID) as total'])[0]->total; ?></td>
              </tr>
              <tr>
                <td><strong>Total de Bancos</strong> </td>
                <td><?= wcms_db_select('bancos', ['count(ID) as total'])[0]->total; ?></td>
              </tr>
              <tr>
                <td><strong>Total de Fornecedores</strong> </td>
                <td><?= wcms_db_select('fornecedores', ['count(ID) as total'])[0]->total; ?></td>
              </tr>
              <tr>
                <td><strong>Total de Usuários:</strong> </td>
                <td><?= wcms_db_select('usuarios', ['count(ID) as total'])[0]->total; ?></td>
              </tr>
            </table>
        </div>  
    </div>
  </div>

  <div class="col-sm-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Últimos Posts</h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
              <?php 
                $latestPost = wcms_db_select('posts', ['*'], ['post_type' => 'post'], [0,4], ['post_date', 'DESC']);

                foreach($latestPost as $post) : 
              ?>
                <tr>
                  <td><?= $post->post_title; ?></td>
                  <td><?= date('d/m/Y', strtotime($post->post_date) ); ?></td>
                </tr>
              <?php endforeach; ?>
            </table>
        </div>  
    </div>
  </div>
</div>

<div class="row">
    <div class="col-sm-6">

    <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Últimos Usuários Cadastrados</h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
            <?php 
              $ultimosUsuarios = wcms_db_select('usuarios', ['*'], [], [0,5], ['ID', 'DESC']); 
              foreach($ultimosUsuarios as $usuario ):
            ?>
              <tr>
                <td><? echo substr($usuario->usu_nome, 0, 15); ?></td>
                <td><? echo substr($usuario->usu_email, 0, 30); ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
      
  </div>

</div>