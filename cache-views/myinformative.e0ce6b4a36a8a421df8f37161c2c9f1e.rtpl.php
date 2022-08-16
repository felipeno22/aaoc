<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div  class="tela_lista">


  <h1>
    Lista de meus Informativos
  </h1>



   <div class="divsearch">
                <form action='/myinformative'>
                 
                    <input  id="inputbusca" type="text" name="search"  placeholder="buscador" value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    <button id="btbusca" type="submit" id="btcad"><i class="fa fa-search">buscar</i></button>
                    
                  
                </form>
     </div>  


  <a id="insertInfoLink" href="/myinformative/insert">Cadastrar Informativo</a>
  

<!-- Main content -->

              <table >
                <thead>
                  <tr>
                    <th hidden style="width:100px">ID</th>
                    <th  style="width:250px">Titulo</th>
                    <th hidden>Informação</th>
                    <th style="width:100px">Data</th>
                     <th hidden>iduser</th>
                    <th style="width: 400px">Opções</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $counter1=-1;  if( isset($informatives) && ( is_array($informatives) || $informatives instanceof Traversable ) && sizeof($informatives) ) foreach( $informatives as $key1 => $value1 ){ $counter1++; ?>
                  <tr>
                    <td hidden><?php echo htmlspecialchars( $value1["idinformative"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["title"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td hidden ><?php echo htmlspecialchars( $value1["information"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["dtinformation"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td/>
                    <td hidden><?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td/>
                    <td>
                <a  id="updateInfoLink" href="/myupdateInfo/<?php echo htmlspecialchars( $value1["idinformative"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                  <a  id="deleteInfoLink"  href="/myinformative/delete/<?php echo htmlspecialchars( $value1["idinformative"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                   </tr>
                  <?php } ?>
                </tbody>
              </table>
                <!-- /.box-body -->
             <div class="divpagination">
              <ul class="ulpagination">
                <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
                <li><a href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                <?php } ?>
              </ul>
            </div>

<!-- /.content -->
</div>
<!-- /.content-wrapper -->