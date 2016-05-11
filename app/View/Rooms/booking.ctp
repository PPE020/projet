<?php debug($room); ?>
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

<?php echo $this->Form->create("dateAAfficher"); ?>
    <?php echo $this->Form->input('dateAAfficher', array('label' => 'Date de réservation', 'type' => 'date', 'dateFormat' => 'DMY', 'monthNames' => false)); ?>
<?php echo $this->Form->end("Valider"); ?>

<?php 
    if(isset($this->data['dateAAfficher'])) {
        debug($this->data['dateAAfficher']);
        $joursemaine = array("LUN", "MAR", "MER", "JEU", "VEN", "SAM", "DIM" );
        $dateAAfficher = $this->data['dateAAfficher']['day'].'-'.$this->data['dateAAfficher']['month'].'-'.$this->data['dateAAfficher']['year'];
        
        ?>
        <table>
            <tr>
                <th>Date</th>
                <?php for($i=0; $i<18; $i++){ ?> <th> <?php if(($i+6)%3==0){echo $i+6;} ?> </th> <?php } ?>
            </tr>
            <tr>
                <td><?php echo $dateAAfficher.' ['.$joursemaine[date("N", strtotime($dateAAfficher))-1].']'; ?></td>
                <?php for($c=0; $c<18; $c++){ 
                    ?>
                    <td style="background-color:
                        <?php
                            $style='green';
                            foreach($room['Reservation'] as $resa){
                                if(date("d-m-Y", strtotime($resa['date_reservation'])) == date("d-m-Y", strtotime($dateAAfficher))){
                                    if( ($c+6) >= date("G ", strtotime($resa['hour_start']) ) && ($c+6) < date("G ",        
                                        strtotime($resa['hour_end']) )  ){
                                            $style = "red ";
                                        }
                                    }
                            }                     
                            echo $style;               
                        ?>;"></td> <?php } ?>
            </tr>
        </table>

        <?php echo $this->Form->create('reservation'); ?>
            <label for="reservationhour_start">Heure de début</label>
            <?php echo $this->Form->hour('hour_start', true); ?>
            <label for="reservationhour_end">Heure de fin</label>
            <?php echo $this->Form->hour('hour_end', true); ?>
            <?php echo $this->Form->input('date_reservation', array('hiddenField' => true, 'type' => 'date', 'dateFormat' => 'DYM', 'monthNames' => false, 'value' => $dateAAfficher)); ?>
        <?php echo $this->Form->end('Valider'); ?>

    <?php

?>