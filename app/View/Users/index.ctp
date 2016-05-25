<?php echo $this->set('title_for_layout', "Extranet M2L"); ?>
<!-- Custom styles for this template -->
<?php echo $this->Html->css('cover'); ?>
    <?php echo $this->Html->css('accueil'); ?>


        <div class="site-wrapper">

            <div class="site-wrapper-inner">

                <div class="cover-container">

                    <div class="masthead clearfix">
                        <div class="inner">
                            <h3 class="masthead-brand">M2L</h3>
                            <nav>
                                <ul class="nav masthead-nav">

                                    <!--<li><a style="color: #333 !important; border-bottom: #333 !important;" href="#">Connexion</a></li>-->
                                    <li><?php echo $this->Html->link('Connexion', array('action' => 'login')); ?></li>
                                    <li><?php echo $this->Html->link('Contactez-nous', array('controller' => 'contact', 'action' => 'index')); ?></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="inner cover">
                        <h1 class="cover-heading">Réservez votre salle de réunion </h1>
                        <p class="lead">Pour pouvoir vous connectez, aller sur l'onglet connexion. Si vous n'avez pas d'identifiant et mot de passe veuillez nous contacter. </p>
                        <p class="lead">
                            <li><?php echo $this->Html->link('Connexion', array('action' => 'login'), array('class' => 'btn btn-lg btn-default')); ?></li>
                        </p>
                    </div>

                    <div class="mastfoot">
                        <div class="inner">
                            <p>M2L
                                <a href="http://getbootstrap.com"></a>, by PPE2.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>