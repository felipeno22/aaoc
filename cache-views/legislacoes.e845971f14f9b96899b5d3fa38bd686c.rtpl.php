<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div  class="tela_listaLegis">


  <h2 id="titleListLegis">
    Lista de Legislações
  </h2>



   <div class="divsearchLegis">
                <form action='/legislacoes'>
                 
                    <input  id="inputbuscaLegis" type="text" name="search"  placeholder="buscador" value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    <button id="btbuscaLegis" type="submit" ><i class="fa fa-search">buscar</i></button>
                    
                  
                </form>
     </div>  


  <a id="insertLegisLink" href="/legislacao/insert">Cadastrar Legislacao</a>
  

<!-- Main content -->

              <table id="tbLegis" >
                <thead>
                  <tr>
                    <th hidden style="width:100px">ID</th>
                    <th  style="width:250px">Legislação</th>
                    <th hidden >iduser</th>
                    <th hidden >idconselho</th>
                    <th style="width: 400px">Opções</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $counter1=-1;  if( isset($legislacoes) && ( is_array($legislacoes) || $legislacoes instanceof Traversable ) && sizeof($legislacoes) ) foreach( $legislacoes as $key1 => $value1 ){ $counter1++; ?>
                  <tr>
                    <td hidden><?php echo htmlspecialchars( $value1["idlegislacao"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["legislacao"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td hidden ><?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td/>
                    <td  hidden><?php echo htmlspecialchars( $value1["idconselho"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td/>
                    <td>
                <a  id="updateLegisLink" href="/updateLegis/<?php echo htmlspecialchars( $value1["idlegislacao"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                  <a  id="deleteLegisLink"  href="/legislacao/delete/<?php echo htmlspecialchars( $value1["idlegislacao"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                   </tr>
                  <?php } ?>
                </tbody>
              </table>

               <?php if( $legislacoes==null ){ ?>
                  
                    <p>sem dados</p>
                  <?php } ?>
                <!-- /.box-body -->
             <div class="divpaginationLegis">
              <ul class="ulpaginationLegis">
                <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
                <li><a href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                <?php } ?>
              </ul>
            </div>

<!-- /.content -->
</div>
<!-- /.content-wrapper -->