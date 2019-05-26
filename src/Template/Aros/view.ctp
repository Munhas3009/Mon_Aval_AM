<section class="content-header">
    <h1>
        Requisição de Acesso à Objectos
        <small>
            <?php echo __(''); ?>
            <i class="fa fa-eye"></i>
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
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-info"></i>
                    <h3 class="box-title"><?php echo __('Informação'); ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl class="dl-horizontal">

                        <dt scope="row"><?= __('Id') ?></dt>
                        <dd><?= $this->Number->format($aro->id) ?></dd>

                        <dt scope="row"><?= __('Utilizador') ?></dt>
                        <dd><?= $aro->has('user') ? $this->Html->link($aro->user->name, ['controller' => 'Users', 'action' => 'view', $aro->user->id]) : '' ?></dd>
                        <dt scope="row"><?= __('Grupo') ?></dt>
                        <dd><?= $aro->has('role') ? $this->Html->link($aro->role->name, ['controller' => 'Roles', 'action' => 'view', $aro->role->id]) : '' ?></dd>

                        <dt scope="row"><?= __('Criado') ?></dt>
                        <dd><?= h($aro->created) ?></dd>
                        <dt scope="row"><?= __('Actualizado') ?></dt>
                        <dd><?= h($aro->modified) ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

</section>
