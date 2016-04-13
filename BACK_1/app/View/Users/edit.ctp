<?php echo $this->Form->create('User'); ?>
    <?php echo $this->Form->input('firstname', array('label' => 'Prenom : ')); ?>
    <?php echo $this->Form->input('lastname', array('label' => 'Nom : ')); ?>
    <?php echo $this->Form->input('email', array('label' => 'Email : ')); ?>
    <?php echo $this->Form->input('RNA_association', array('label' => 'RNA de votre association : ')); ?>
    <?php echo $this->Form->input('poste_association', array('label' => "Votre poste dans l'association : ")); ?>
    <?php echo $this->Form->input('password', array('label' => '', 'style' => 'display:none')); ?>
    <?php echo $this->Form->input('pass1', array('label' => 'Mot de passe : ', 'type' => 'password')); ?>
    <?php echo $this->Form->input('pass2', array('label' => 'Confirmer le mot de passe : ', 'type' => 'password')); ?>
<?php echo $this->Form->end('Modifier'); ?>