<?php echo $this->set('title_for_layout', "Mon profil - Extranet M2L"); ?>
<!-- Custom CSS -->
<?php echo $this->Html->css('freelancer'); ?>

<!-- Custom Fonts -->
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">M2L - Réservation de salles</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <?php echo $this->Html->link('Salles', array('controller' => 'rooms', 'action' => 'index')); ?>
                    </li>
                    <li class="page-scroll">
                        <?php echo $this->Html->link('Profil', array('controller' => 'users', 'action' => 'edit')); ?>
                    </li>
                    <li class="page-scroll">
                        <?php echo $this->Html->link('Déconnexion', array('controller' => 'users', 'action' => 'logout')); ?>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <h3><strong>Votre Profil</strong></h3>
            <br>
                <br>
                <div class="form-bottom contact-form">
                                <?php echo $this->Form->create('User'); ?>
                                    
                                    <div class="form-group"> <h5><strong> Votre prénom : </strong></h5>
                                        <?php echo $this->Form->input('firstname', array('label' => false, 'class' => 'profil-prenom form-control')); ?>
			                        </div>
                                    <div class="form-group"> <h5><strong>Votre nom : </strong></h5>
                                        <?php echo $this->Form->input('lastname', array('label' => false, 'class' => 'profil-nom form-control')); ?>
			                        </div>
                                    <div class="form-group"> <h5><strong>Votre Email :</strong></h5>
                                        <?php echo $this->Form->input('email', array('label' => false, 'class' => 'profil-email form-control')); ?>
			                        </div>
                                        <div class="form-group"> <h5><strong>RNA de votre association : </strong></h5>
                                        <?php echo $this->Form->input('RNA_association', array('label' => false, 'class' => 'profil-rna form-control')); ?>
			                        </div>
                                    <?php echo $this->Form->input('password', array('label' => '', 'style' => 'display:none')); ?>
                                    <div class="form-group"><h5><strong>Votre mot de passe : </strong></h5>
                                        <?php echo $this->Form->input('pass1', array('label' => false, 'type' => 'password', 'class' => 'profil-motdepasse form-control')); ?>
			                        </div>
                                    <div class="form-group"> <h5><strong>Modifier votre mot de passe : </strong></h5>
                                        <?php echo $this->Form->input('pass2', array('label' => false, 'type' => 'password', 'class' => 'profil-modifiermotdepasse form-control')); ?>
                                        <h4><strong><?php echo $this->Form->button('Modifier', array('class' => 'btn text-uppercase' )); ?></strong></h4>
			                        </div>
			                    <?php echo $this->Form->end(); ?>
		                    </div>
                
                
                
            </div>
        </div>
    </header>

    
    
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-7">
                        <h3>Adresse</h3>
                        <p>134 Rue de la Liberté <br>Levallois-Perret 92300, France</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Contactez-nous !</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#Mail" > Par Mail, Pour plus d'informations ! </a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; M2L
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

   

