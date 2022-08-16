<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="tela_lista">


  <h2>
    Lista de Usuários
  </h2>

  <div class="divsearch">
                <form action="/users">
                 
                    <input  id="inputbusca" type="text" name="search"  placeholder="buscador" value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    <button id="btbusca" type="submit" id="btcad"><i class="fa fa-search">buscar</i></button>
                    
                  
                </form>
     </div>  


  <a id="insertUserLink"  href="/user/insert">Cadastrar Usuário</a>
   <div class="box-tools">
                


<!-- Main content -->

              <table >
                <thead>
                  <tr>
                    <th hidden style="width: 10px">ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Login</th>
                     <th>Status</th>
                     <th>Admin</th>
                    <th  style="width: 200px;">Opções</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $counter1=-1;  if( isset($users) && ( is_array($users) || $users instanceof Traversable ) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?>
                  <tr>
                    <td hidden><?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td/>
                    <td><?php echo htmlspecialchars( $value1["status_user"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td/>
                    <td><?php echo htmlspecialchars( $value1["inadmin"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td/>
                    <td>
                  <a id="updateUserLink" href="/update/<?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                  <a  id="deleteUserLink" href="/user/delete/<?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                   </tr>
                  <?php } ?>
                 
                </tbody>
              </table>
              

<!-- /.content -->
</div>

 <!-- /.box-body -->
             <div class="divpagination">
              <ul class="ulpagination">
                <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
                <li><a href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                <?php } ?>
              </ul>
            </div>
<!-- /.content-wrapper -->