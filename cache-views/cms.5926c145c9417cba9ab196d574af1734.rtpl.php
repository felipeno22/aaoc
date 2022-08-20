<?php if(!class_exists('Rain\Tpl')){exit;}?>


      <div class="conselhos" >


            <article>
                
                <section> <!--Sessao  dados conselho-->
                             <h2 >Conselho Municipal de Saúde-CMS</h2>   

                            
                    

                        

                        <fieldset>
                             <legend><h3>Objetivo</h3></legend>
                        


                        <p>
                            Criado inicialmente como órgão de caráter consultivo, com a finalidade de auxiliar a administração na orientação, planejamento e interpretação de assuntos relacionados as atividades de saúde do município, passando a ter caráter permanente e deliberativo para atuar na formulação de estratégias e no controle da execução da Política Municipal de Saúde, inclusive nos aspectos econômicos e financeiros, cujas decisões são homologadas pelo Chefe do Executivo Municipal.
                        </p>

                    </fieldset>


                     <fieldset>
                             <legend><h3>Competências</h3></legend>   
                        

                        <p>
                           1. Emitir parecer sobre planos, programas, projetos globais ou específicos que venham a ser inseridos na Política Municipal de Saúde, bem como sobre a regulamentação, fiscalização e controle sobre ações e serviços no âmbito do município;<br> 

                           2. Estabelecer critérios e diretrizes para a implementação do controle social no Sistema Único de Saúde/SUS e seus respectivos Regimentos Internos nas esferas Municipal, Distritais e Locais;<br> 

                           3. Propor a adoção de critérios que definam qualidade e resolutividade, verificando o processo de incorporação dos avanços e tecnológicos no Sistema Único de Saúde/SUS; <br>

                           4. Propor medidas para o aperfeiçoamento da organização e do funcionamento do Sistema Único de Saúde/SUS;<br> 

                           5. Fiscalizar e acompanhar o desenvolvimento das ações e serviços de saúde, explicitando os critérios definidos para tal;<br> 

                           6. Traçar diretrizes de elaboração e aprovaçãoo e ces de elaboração e aprovação e aprovar o Plano Municipal de Saúde, bem como a sua atualização periódica, adequando-o sempre a realidade epidemiológica e a capacidade operacional dos serviços de saúde;<br> 

                           7. Estabelecer critérios para a elaboração da Programação Orçamentária e Financeira e pronunciar-se conclusivamente, sobre a versão final encaminhada ao Poder Legislativo;<br> 

                           8. Fiscalizar a movimentação e destinação de todos os recursos financeiros do Fundo Municipal de Saúde;<br> 

                           9. Estimular a participação da sociedade civil organizada e o movimento popular nas instâncias colegiadas do Sistema Único de Saúde/SUS, estabelecendo critérios e diretrizes para implementação do controle social no município;<br> 

                           10. Estabelecer critérios e diretrizes quanto à localização e ao tipo de unidades prestadoras de serviço da Rede Municipal de Saúde – REMUS no âmbito do Sistema Único de Saúde/SUS;<br> 

                           11. Acompanhar e avaliar atividades das instituições públicas e privadas de saúde, credenciadas pelo Sistema Único de Saúde/SUS, definindo critérios mínimos de qualidade para o seu funcionamento;<br> 

                           12. Estimular ou promover estudos e pesquisas sobre assuntos e temas na área de saúde de interesse para o desenvolvimento do Sistema Único de Saúde/SUS;<br> 

                           13. pronunciar-se sempre que necessário, sobre a criação, adequação e reformulação da grade curricular de cursos da área de saúde no âmbito do município;<br> 

                           14. Participar da formulação e avaliação das políticas públicas de saneamento, meio ambiente, transporte e trânsito, habitação, educação, alimentação, assistência Social, segurança pública, garantindo a inter setorialidade das políticas com o setor da saúde pública;<br> 

                           15. Apreciar e pronunciar-se, conclusivamente, sobre o Relatório de Gestão do Sistema Único de Saúde/SUS apresentado anualmente pela Secretaria Municipal de Saúde Pública de Campo Grande - MS;<br> 

                           16. Deliberar sobre a política de saúde em consonância com as 12 propostas das Conferências de Saúde;<br> 

                           17. Manifestar-se sobre os Projetos de Lei de interesse da saúde em tramitação na Câmara Municipal;<br>

                           18. Tomar as medidas necessárias para permanente orienta dos usuários sobre os serviços oferecidos pelas Unidades Saúde de Campo Grande - MS;<br> 

                           19. Apreciar previamente os contratos e convênios a serem estabelecidos com os prestadores de serviços para o Sistema Unico de Saúde/SUS de acordo co a legislação pertinente;<br> 

                           20. Estabelecer ações de informacão, educação, comunicação em saúde e divulgar as funções e competências deste Conselho, seus trabalhos e decisões pelos meios de comunicação, incluindo informações sobre as agendas, as datas e o local das reuniões plenárias; <br>

                           21. Acompanhar o cumprimento das deliberações constantes das atas do pleno do Conselho Municipal de Saúde de campo Grande - MS. <br>
 

                        </p>

                    </fieldset>

                    <fieldset>
                             <legend ><h3>Legislação</h3></legend>     
                        

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
