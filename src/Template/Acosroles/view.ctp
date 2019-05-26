<section class="content-header">
    <h1>
        Permissão
        <small>
            <?php echo __('View'); ?>
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
                        <dd><?= $this->Number->format($acosrole->id) ?></dd>

                        <dt scope="row"><?= __('Objecto') ?></dt>
                        <dd><?= $acosrole->has('aco') ? $this->Html->link($acosrole->aco->id, ['controller' => 'Acos', 'action' => 'view', $acosrole->aco->id]) : '' ?></dd>
                        <dt scope="row"><?= __('Grupo') ?></dt>
                        <dd><?= $acosrole->has('role') ? $this->Html->link($acosrole->role->name, ['controller' => 'Roles', 'action' => 'view', $acosrole->role->id]) : '' ?></dd>
                        <dt scope="row"><?= __('Permissão') ?></dt>
                        <dd><?= h($acosrole->allowed) ?></dd>

                        <dt scope="row"><?= __('Criado') ?></dt>
                        <dd><?= h($acosrole->created) ?></dd>
                        <dt scope="row"><?= __('Actualizado') ?></dt>
                        <dd><?= h($acosrole->modified) ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

</section>
