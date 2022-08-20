<?php if(!class_exists('Rain\Tpl')){exit;}?>


      <div class="conselhos" >


            <article>
                
                <section> <!--Sessao  dados conselho-->
                            <h2 >Conselho Municipal do Idoso-CMI</h2>     
   <fieldset>
                            
                                <legend><h3>Objetivo</h3></legend>
                            
                                <p>
                            Criado com a atribuição de acolhimento, de encaminhamento e busca de soluções para as questões relacionadas com as atividades do níveis de atuação auxiliar , objetivando as condições favoráveis aos órgãos colegiados no desempenho de suas responsabilidades.
                             </p>


                            </fieldset>


                         <fieldset>
                            
                                <legend> <h3>Competências</h3></legend>
                       
                        <p>
                            1. exercitar e coordenar as atividades de apoio técnico e administrativo aos Conselhos Municipais e Regioanais da cidade;<br>
                       
                            2. articular-se com os diversos organismos da Administração Municipal e Órgãos Colegiados, visando assegurar a unidade e trabalho;<br>
                       
                            3. propiciar aos Órgãos Colegiados condições físicas e organizacionais necessárias para o desempenho de suas atividades ;<br>
                        </p>

                    </fieldset>

                     <fieldset>
                            
                                <legend> <h3>Legislação</h3></legend>

                       

                       <p><?php $i=1; ?>
                             <?php $counter1=-1;  if( isset($legislacoes) && ( is_array($legislacoes) || $legislacoes instanceof Traversable ) && sizeof($legislacoes) ) foreach( $legislacoes as $key1 => $value1 ){ $counter1++; ?>
                                   <strong><?php echo htmlspecialchars( $i, ENT_COMPAT, 'UTF-8', FALSE ); ?>.</strong> <?php echo htmlspecialchars( $value1["legislacao"], ENT_COMPAT, 'UTF-8', FALSE ); ?><br>


                                   <label hidden><?php echo htmlspecialchars( $i++, ENT_COMPAT, 'UTF-8', FALSE ); ?></label>
                              <?php } ?>   
                          


                        </p>

                          <?php if( $legislacoes==null ){ ?>
                                <h4>Sem legislações !!!</h4>
                            <?php } ?>  



                    </fieldset>


 <br>

                              


                </section><!--end Sessao  dados conselho-->









          

            <section><!-- aside  dados noticias-->
                    
                    <fieldset>
                         <legend id="legNoticias"><img id="ultimasnoticias" src="../res/img/ultimasnoticias.png" alt="image not found"></legend>



                        <?php $counter1=-1;  if( isset($noticias) && ( is_array($noticias) || $noticias instanceof Traversable ) && sizeof($noticias) ) foreach( $noticias as $key1 => $value1 ){ $counter1++; ?>
                         <div id="divInfoNoticias" >
                                <img  src="..<?php echo htmlspecialchars( $value1["imginformation"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="image not found" width="250" height="200"> 
                                
                               <div id="divDadosNoticias" > <h4><?php echo htmlspecialchars( $value1["title"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <small>publicado: <?php echo htmlspecialchars( $value1["dtinformation"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></h4>

                                
                               <p> <?php echo htmlspecialchars( $value1["information"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p></div>
                                
                            </div>
                            <br>
                        <?php } ?>
                            

                         <?php if( $noticias==null ){ ?>
                                <h4>Sem noticias !!!</h4>
                            <?php } ?>  

                          

                        

                    </fieldset>   
                    

            </section> <!--end aside  dados noticias-->

              </article> 

    </div>

        