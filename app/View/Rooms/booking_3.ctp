<?php echo $this->set('title_for_layout', "Réservation - ".$room['Room']['name']); ?>
<!-- Custom CSS -->
<?php echo $this->Html->css('freelancer'); ?>
<?php echo $this->Html->css('style-view-room'); ?>


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
                <h3><strong><?php echo $room['Room']['name']; ?></strong></h3>
            <br>
                <br>

            <?php
                if($hourSup == 0){
                    echo "ATTENTION : L'heure de fin doit être supérieure à l'heure de début.";
                }
                else if ($hours == 0){
                        echo "ATTENTION : Horraires erronées.<br/>";
                }
                else {
                    echo "Reservation validée.<br/>";
                }
                
            ?>

                
                
                

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