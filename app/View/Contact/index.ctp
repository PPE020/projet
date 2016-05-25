<?php echo $this->set('title_for_layout', "Contact - Extranet M2L"); ?>
    <?php echo $this->Html->css('style'); ?>
        <?php echo $this->Html->css('form-elements'); ?>
            <?php echo $this->Html->css('Contact'); ?>

                <!-- Top content -->
                <div class="top-content">

                    <div class="inner-bg">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2 text">
                                    <h1><strong>Contactez-nous !</strong> </h1>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3 form-box">
                                    <div class="form-top">
                                        <div class="form-top-left">
                                            <h3> <strong>Contactez l'équipe de la M2L</strong></h3>
                                            <p><strong>Remplissez le formulaire suivant:</strong></p>
                                            <?php 
                                                if(isset($env)){
                                                    if($env == 1){
                                                        echo $this->Session->Flash('Message envoyé.');
                                                    }
                                                    else{
                                                        echo $this->Session->Flash("Erreure lors de l'envois du message");
                                                    }
                                                }
                                            ?>
                                        </div>
                                        <div class="form-top-right">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="form-bottom contact-form">
                                        <?php echo $this->Form->create('Contact'); ?>
                                            <div class="form-group">
                                                <?php echo $this->Form->input('email', array('label' => false, 'type' => 'email', 'requiered' => true, 'placeholder' => 'Email', 'class' => 'contact-email form-control')); ?>
                                            </div>
                                            <div class="form-group">
                                                <?php echo $this->Form->input('name', array('label' => false, 'requiered' => true, 'placeholder' => "Nom", 'class' => 'contact-subject form-control')); ?>
                                            </div>
                                            <div class="form-group">
                                                <?php echo $this->Form->input('content', array('label' => false,  'type' => 'textarea', 'requiered' => true, 'placeholder' => 'Message...', 'class' => 'contact-message form-control')); ?>
                                            </div>
                                            <?php echo $this->Form->button('Envoyer', array('class' => 'btn')); ?>
                                                <?php echo $this->Form->end(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>