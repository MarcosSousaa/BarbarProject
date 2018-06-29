<!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3><?= NOME_BARBEARIA ?></h3>
                    <strong><?= NOME_BARBEARIA_AB ?></strong>
                </div>                
                                
                <ul class="list-unstyled components">
                    <li>
                        <a href="<?php echo BASEURL;?>View/index.php">
                            <i class="material-icons">home</i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="material-icons">calendar_today</i>
                            Horarios Marcados
                            <span class="caret"></span>
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#"><i  class="material-icons">add</i>Agendar Horario</a></li>
                            <li><a href="#"><i class="material-icons">search</i>Listar Horarios</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">person_add</i>
                            Cabeleleiros
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">local_offer</i>
                            Produtos
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">store_mall_directory</i>
                            Serviços
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="material-icons">group_add</i>
                            Cadastros
                            <span class="caret"></span>
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                               <a href="<?php echo BASEURL;?>View/cabeleleiros/add.php">
                                   <i class="material-icons">add</i>                                    
                                    Cabeleleiros                                    
                                </a>
                            </li>                                                                
                            <li>
                                <a href="#">
                                    <i class="material-icons">add</i>                                    
                                    Produtos                                    
                                </a>                               
                            </li>
                            <li>
                                <a href="" data-toggle="collapse" aria-expanded="false">
                                    <i class="material-icons">add</i>                                    
                                    Serviços                                    
                                </a>                                
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#reportSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="material-icons">pie_chart</i>
                            Relátorios
                            <span class="caret"></span>
                        </a>
                        <ul class="collapse list-unstyled" id="reportSubmenu">
                            <li><a href="#"><i  class="material-icons">add</i>Díario</a></li>
                            <li><a href="#"><i class="material-icons">search</i>Mensal</a></li>
                            
                        </ul>
                    </li>                    
                    <li>
                        <a href="#">
                            <i class="material-icons">contact_support</i>
                            Contate o Suporte
                        </a>
                    </li>
                    
                </ul>
            </nav>