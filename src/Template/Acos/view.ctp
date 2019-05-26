<section class="content-header">
    <h1>
        Controlo de Acesso à Objectos
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
                        <dd><?= $this->Number->format($aco->id) ?></dd>

                        <dt scope="row"><?= __('Controlador') ?></dt>
                        <dd><?= $aco->has('controller') ? $this->Html->link($aco->controller->name, ['controller' => 'Controllers', 'action' => 'view', $aco->controller->id]) : '' ?></dd>
                        <dt scope="row"><?= __('Função') ?></dt>
                        <dd><?= $aco->has('action') ? $this->Html->link($aco->action->name, ['controller' => 'Actions', 'action' => 'view', $aco->action->id]) : '' ?></dd>

                        <dt scope="row"><?= __('Criado') ?></dt>
                        <dd><?= h($aco->created) ?></dd>
                        <dt scope="row"><?= __('Actualizado') ?></dt>
                        <dd><?= h($aco->modified) ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Permissões') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if (!empty($aco->acosroles)): ?>

                        <table id="example1" class="table table-bordered table-striped">

                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Id do Objecto') ?></th>
                                <th scope="col"><?= __('Id do Grupo') ?></th>
                                <th scope="col"><?= __('Permissão') ?></th>
                                <th scope="col"><?= __('Criado') ?></th>
                                <th scope="col"><?= __('Actualizado') ?></th>
                                <th scope="col" class="actions text-center"><?= __('Acções') ?></th>
                            </tr>
                            <?php foreach ($aco->acosroles as $acosroles): ?>
                                <tr>
                                    <td><?= h($acosroles->id) ?></td>
                                    <td><?= h($acosroles->aco_id) ?></td>
                                    <td><?= h($acosroles->role_id) ?></td>
                                    <td><?= h($acosroles->allowed) ?></td>
                                    <td><?= h($acosroles->created) ?></td>
                                    <td><?= h($acosroles->modified) ?></td>
                                    <td class="actions text-center">
                                        <?= $this->Html->link(__(''), ['controller' => 'Acosroles', 'action' => 'view', $acosroles->id], ['class' => 'btn btn-info btn-xs', 'class' => 'fa fa-eye']) ?>
                                        <?= $this->Html->link(__(''), ['controller' => 'Acosroles', 'action' => 'edit', $acosroles->id], ['class' => 'btn btn-warning btn-xs', 'class' => 'fa fa-edit']) ?>
                                        <?=
                                        $this->Form->postLink(__(''), ['controller' => 'Acosroles', 'action' => 'delete', $acosroles->id]
                                                , ['confirm' => __('Are you sure you want to delete # {0}?', $acosroles->id)
                                                    , 'class' => 'btn btn-danger btn-xs', 'class' => 'fa fa-trash-o'])
                                        ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DataTables -->
<?php echo $this->Html->css('AdminLTE./bower_components/datatables.net-bs/css/dataTables.bootstrap.min', ['block' => 'css']); ?>

<!-- DataTables -->
<?php echo $this->Html->script('AdminLTE./bower_components/datatables.net/js/jquery.dataTables.min', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./bower_components/datatables.net-bs/js/dataTables.bootstrap.min', ['block' => 'script']); ?>

<?php $this->start('scriptBottom'); ?>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
<?php $this->end(); ?>