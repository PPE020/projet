<?php echo $this->set('title_for_layout', "Connexion - Extranet M2L"); ?>
<?php echo $this->Html->css('form-elements'); ?>
<?php echo $this->Html->css('style'); ?>
<?php echo $this->Html->css('connexion'); ?>

<!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>M2L - Connexion</strong> </h1>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3><strong>Pour vous connecter</strong></h3>
                            		<p><strong>Entrer votre identifiant et votre mot de passe:</strong></p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <?php echo $this->Form->create('User', array('class' => "login-form")); ?>
			                    	<div class="form-group">
                                        <?php echo $this->Form->input('username', array('label' => false, 'class' => "form-username form-control", 'id' => 'form-username', 'placeholder' => "Identifiant")); ?>
			                        </div>
			                        <div class="form-group">
                                        <?php echo $this->Form->input('password', array('label' => false, 'class' => "form-password form-control", 'id' => 'form-password', 'placeholder' => "Mot de passe")); ?>
			                        </div>

			                    <?php echo $this->Form->button('CONNEXION', array('class' => 'btn')); ?>
                                <?php echo $this->Form->end(); ?>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                       
                    </div>
                </div>
            </div>
            
        </div>
