<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Utilizador
        <small>
            <?php echo __(''); ?>
            <i class="fa fa-edit"></i>
        </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo __('Formulário'); ?></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php echo $this->Form->create($user, ['role' => 'form', 'type' => 'file']); ?>
                <div class="box-body">

                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <?php echo $this->Form->control('name', ['label' => false, 'placeholder' => 'Nome']); ?>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <?php echo $this->Form->control('apelido', ['label' => false, 'placeholder' => 'Apelido']); ?>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <?php echo $this->Form->control('email', ['label' => false, 'placeholder' => 'Correio electrónico']); ?>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <?php echo $this->Form->control('username', ['label' => false, 'placeholder' => 'Nome do utilizador']); ?>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <?php echo $this->Form->control('password', ['label' => false, 'placeholder' => 'Palavra pass']); ?>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">             
                            <?php echo $this->Form->input('confirm_password', ['type' => 'password', 'label' => false, 'placeholder' => 'Confirmar a senha']); ?>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <?php echo $this->Form->control('passkey', ['label' => false, 'placeholder' => 'Correio electronico']); ?>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <?php echo $this->Form->control('photo', ['type' => 'file', 'label' => false, 'placeholder' => 'Fotografia']); ?>
                            <span class="glyphicon glyphicon-file form-control-feedback"></span>
                        </div>
                    </div>

                    <!--                    <div class="col-md-6">
                                            <div class="form-group has-feedback">
                    <?php echo $this->Form->control('photo_dir'); ?>
                                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            </div>
                                        </div>
                    
                    
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                    <?php echo $this->Form->control('timeout'); ?>
                                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            </div>
                                        </div>-->


                </div>
                <!-- /.box-body -->

                <?php echo $this->Form->submit(__('Salvar'), ['class' => 'btn btn-primary']); ?>

                <?php echo $this->Form->end(); ?>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->
</section>
