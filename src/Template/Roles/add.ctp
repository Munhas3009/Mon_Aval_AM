<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Grupo
        <small>
            <?php echo __(''); ?>
            <i class="fa fa-plus-circle"></i>
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
                <?php echo $this->Form->create($role, ['role' => 'form']); ?>
                <div class="box-body">

                    <div class="col-md-6">
                        <div class="form-group has-feedback">

                            <?php echo $this->Form->control('name', ['label' => false, 'placeholder' => 'Nome do grupo']); ?>
                            <span class="glyphicon glyphicon-th-list form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <?php echo $this->Form->control('comment', ['label' => false, 'placeholder' => 'Comentário']); ?>
                            <span class="glyphicon glyphicon-text-background form-control-feedback"></span>
                        </div>
                    </div>      

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
