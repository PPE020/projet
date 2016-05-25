<?php echo $this->set('title_for_layout', $room['Room']['name']); ?>
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

<div class="row">
    
    <div class="col-lg-6">
        <?php echo $room['Room']['description']; ?>
        
       <br> <?php 
                echo $room['Room']['capacity'];
            ?>
            personnes |
            <?php
                echo $room['Room']['taille'].'m2';
                $equipments = explode (';', $room['Room']['equipements']);
            ?>
                <h6>Equipments</h6>
                <ul>
                    <?php foreach($equipments as $equipment){
                    echo "<li>".$equipment."</li>";
                } ?>
                </ul>
    </div>
    <div class='col-lg-6'>
        <?php echo $this->Html->image($room['Room']['photo1'], array('alt' => $room['Room']['name'], 'fullBase' => true)); ?>
    </div>

</div>

<div>
    <h2>Disponibilité</h2>
        <table class="table table-bordered text-center">
            <tr>
                <colgroup>
                    <col style="width : 10px;"/>
                </colgroup>
                <th>DATE</th>
                <?php 
                $joursemaine = array("LUN", "MAR", "MER", "JEU", "VEN", "SAM", "DIM" );
                for($i = 0;$i<18;$i++){
                    ?>
                    <th>
                        <?php if(($i+6)<10){echo "0";} echo $i+6; ?>
                    </th>
                    <?php
                }
            ?>
            </tr>
            <?php 
            $i = 1;
            while($i<date("N")){ 
                $d = date("N")-$i;
                echo "<tr><td>".date("d/m/Y", strtotime('-'.$d.'day', time())).' ['.$joursemaine[date("N", strtotime('-'.$d.'day', time()))-1].'] </td>';
                for($c = 0;$c<18;$c++){ ?>
                <td style="background-color:lightgrey; } ?>;"></td>
                <?php }
                echo "</tr>";
                $i++;
            }
            if($i==date('N')){
                echo "<tr><td>".date("d/m/Y", time()).' ['.$joursemaine[date("N", time())-1]."]</td>";
                for($c = 0;$c<18;$c++){ ?>
                    <td style="background-color:<?php
                        $style='green';
                        foreach($room['Reservation'] as $resa){
                            if(date("d-m-Y", strtotime($resa['date_reservation'])) == date("d-m-Y", time())){
                                    if( ($c+6) >= date("G ", strtotime($resa['hour_start']) ) && ($c+6) < date("G ", strtotime($resa['hour_end']) )  ){
                                                   $style = "red ";
                                    }
                            }
                        }                     
                        echo $style;               
                    ?>;"></td>
                    <?php }
                echo "</tr>";
                $i++;
            }
            while($i<=7){
                $d = $i-date("N");
                echo "<tr><td>".date("d/m/Y", strtotime('+'.$d.'day', time())).' ['.$joursemaine[date("N", strtotime('+'.$d.'day', time()))-1].'] </td>';
                for($c = 0;$c<18;$c++){ ?>
                        <td style="background-color:<?php
                        $style = " green ";
                        foreach($room['Reservation'] as $resa) {
                            if(date("d-m-Y ", strtotime($resa['date_reservation'])) == date("d-m-Y ", strtotime('+'.$d.'day', time()))){
                                    if( ($c+6) >= date("G ", strtotime($resa['hour_start']) ) && ($c+6) < date("G ", strtotime($resa['hour_end']) )  ){
                                                   $style = "red ";
                                    }
                            }
                         }
                    echo $style;
                                       
                                       
                                        ?>;"></td>
                        <?php }
                echo "</tr>";
                $i++;
            }
        ?>

        </table>
    
    <?php echo $this->Html->link('Réserver', array('controller' => 'rooms', 'action' => 'booking', $room['Room']['id']), array('class' => 'btn btn-default')); ?>

</div>