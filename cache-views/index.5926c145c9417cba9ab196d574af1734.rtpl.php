<?php if(!class_exists('Rain\Tpl')){exit;}?>

    

      <div class="conselhos" >


            <article>
                
                <section> <!--Sessao  dados conselho-->
                            <h2 >Assessoria de Assistência aos Órgão Colegiados-AAOC</h2>    

                            
                             <fieldset>
                            
                            <legend><h3>Objetivo</h3></legend>
                            

                                 <p>Criado com a atribuição de acolhimento, de encaminhamento e busca de soluções para as questões relacionadas com as atividades do níveis de atuação auxiliar , objetivando as condições favoráveis aos órgãos colegiados no desempenho de suas responsabilidades.</p>


                            </fieldset>
                            <br>

                            
                             <fieldset>
                            
                            <legend><h3>Competências</h3></legend>
                                <p>
                                    1. exercitar e coordenar as atividades de apoio técnico e administrativo aos Conselhos Municipais e Regioanais da cidade;<br>
                               
                                     2. articular-se com os diversos organismos da Administração Municipal e Órgãos Colegiados, visando assegurar a unidade e trabalho;<br>
                               
                                     3. propiciar aos Órgãos Colegiados condições físicas e organizacionais necessárias para o desempenho de suas atividades ;<br>
                             </p>

                            </fieldset>
                             <br>

                           <fieldset>
                            <legend><h3>Legislação</h3></legend>   

                              <p>
                                     1. Lei n° 2.951 de janeiro de 1993;<br> 
                          
                                    2. Resolução/GAPRE no 001 de 01 de outubro de 1996 (Regimento
                                    Interno do Gabinete do Prefeito);<br> 
                                    
                                    3. Decreto n° 10.274 de 22 de novembro de 2007 - Art. 14 – Das
                                    Disposições Finais - Capitulo V;<br> 

                                    4. Decreto n° 12.227 de 14 de novembro de 2013 – Altera dispositivos ao Decreto n. 10.274 de 16 de janeiro de 2009 alterado pelos Decretos n. 11.228 de 14 de junho de 2010 e n° 11.618 de 6 de setembro de 2011 que dispõem sobre a estrutura básica da Secretaria Municipal de Governo e Relações Institucionais e dá outras providencias - Diogrande n° 3.893 de 18 de novembro de 2013;<br>

                            </p>
 

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

        