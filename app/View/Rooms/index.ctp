<?php
    foreach($rooms as $room){ ?>
    
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

    <?php
    }
?>
<div>
    <?php echo $this->paginator->numbers(); ?>
</div>