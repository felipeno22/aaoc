<?php if(!class_exists('Rain\Tpl')){exit;}?>  <div class="divPrincipal">
         <!-- div principal-->
            <article>
             <div id="grid">  

               <div id="linha1" >
                  
                    

          <?php $counter1=-1;  if( isset($conselhos) && ( is_array($conselhos) || $conselhos instanceof Traversable ) && sizeof($conselhos) ) foreach( $conselhos as $key1 => $value1 ){ $counter1++; ?>
         
               <?php if( $line < 3 ){ ?>

                 <div class="divContentConselho">
                        
                        <?php if( $value1["idconselho"] == 1 ){ ?>
                        <img class="imgsConselhos"  height="180px" width="120px" src='<?php if( $value1["path_logo"]!=null ){ ?><?php echo htmlspecialchars( $value1["path_logo"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>../res/img/fundopmcg.jpg<?php } ?>' alt="image not found" >
                        <a class="linksConselhos" href="/colegiados/<?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
                        <?php } ?>

                        <?php if( $value1["idconselho"] == 2 ){ ?>
                        <img class="imgsConselhos" height="120px" width="120px" src='<?php if( $value1["path_logo"]!=null ){ ?><?php echo htmlspecialchars( $value1["path_logo"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>../res/img/fundopmcg.jpg<?php } ?>' alt="image not found" >
                        <a class="linksConselhos" href="/colegiados/<?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
                        <?php } ?>

                        <?php if( $value1["idconselho"] == 3 ){ ?>
                        <img class="imgsConselhos" height="180px" width="120px"  src='<?php if( $value1["path_logo"]!=null ){ ?><?php echo htmlspecialchars( $value1["path_logo"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>../res/img/fundopmcg.jpg<?php } ?>'  alt="image not found" >
                        <a class="linksConselhos" href="/colegiados/<?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
                        <?php } ?>
                     
                  </div>
       
                  <?php } ?>





               <label label="<?php echo htmlspecialchars( $line++, ENT_COMPAT, 'UTF-8', FALSE ); ?>" hidden></label>
            <?php } ?>

      


               </div><!--end line1-->



                <label label="<?php $line=0; ?>" hidden></label>


                <div id="linha2">
                  
                  
               <?php $counter1=-1;  if( isset($conselhos) && ( is_array($conselhos) || $conselhos instanceof Traversable ) && sizeof($conselhos) ) foreach( $conselhos as $key1 => $value1 ){ $counter1++; ?>
         
                  <?php if( $line >= 3  ){ ?>      

                     <div class="divContentConselho">

                         <?php if( $value1["idconselho"] == 4 ){ ?>
                        <img  class="imgsConselhos" height="120px" width="120px" src='<?php if( $value1["path_logo"]!=null ){ ?><?php echo htmlspecialchars( $value1["path_logo"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>../res/img/fundopmcg.jpg<?php } ?>' alt="image not found" >
                        <a class="linksConselhos" href="/colegiados/<?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
                        <?php } ?>
                        
                         <?php if( $value1["idconselho"] == 5 ){ ?>
                        <img class="imgsConselhos"  height="180px" width="120px" src='<?php if( $value1["path_logo"]!=null ){ ?><?php echo htmlspecialchars( $value1["path_logo"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>../res/img/fundopmcg.jpg<?php } ?>' alt="image not found" >
                        <a class="linksConselhos" href="/colegiados/<?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
                        <?php } ?>

                         <?php if( $value1["idconselho"] == 6 ){ ?>
                        <img class="imgsConselhos" height="180px" width="120px" src='<?php if( $value1["path_logo"]!=null ){ ?><?php echo htmlspecialchars( $value1["path_logo"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>../res/img/fundopmcg.jpg<?php } ?>'  alt="image not found" >
                        <a  class="linksConselhos" href="/colegiados/<?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
                        <?php } ?>

                     </div>

                      <?php } ?>



               <label label="<?php echo htmlspecialchars( $line++, ENT_COMPAT, 'UTF-8', FALSE ); ?>" hidden></label>
            <?php } ?>
                     
                     

               </div><!--end line2-->

            </div><!--end grid-->










            </article>






   </div>