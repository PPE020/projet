<div class="row">
    <h2><?php echo $room['Room']['name']; ?></h2>
    <div>
        <?php echo $room['Room']['description']; ?>
    </div>
    <div>
        <?php echo $this->Html->image($room['Room']['photo1'], array('alt' => $room['Room']['name'], 'fullBase' => true)); ?>
    </div>
    <div>
        <?php 
                echo $room['Room']['capacity'];
            ?>
            <i class="glyphicon glyphicon-user"></i> |
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
</div>

<div>
    <h2>Disponibilité</h2>
    <?php 

    debug(date("d-m-Y", strtotime($room['Reservation'][2]['date_reservation'])));
    debug(date("d-m-Y", time()));

    ?>
        <table>
            <tr>
                <th></th>
                <?php 
                for($i = 0;$i<18;$i++){
                    ?>
                    <th>
                        <?php if(($i+6)%3==0){echo $i+6;} ?>
                    </th>
                    <?php
                }
            ?>
            </tr>
            <?php 
            $i = 1;
            while($i<date("N")){ 
                $d = date("N")-$i;
                echo "<tr><td>".date("d/m/Y", strtotime('-'.$d.'day', time()))."</td>";
                for($c = 0;$c<18;$c++){ ?>
                <td style="background-color:lightgrey; } ?>;"></td>
                <?php }
                echo "</tr>";
                $i++;
            }
            if($i==date('N')){
                echo "<tr><td>".date("d/m/Y", time())."</td>";
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
                echo "<tr><td>".date("d/m/Y", strtotime('+'.$d.'day', time()))."</td>";
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

</div>