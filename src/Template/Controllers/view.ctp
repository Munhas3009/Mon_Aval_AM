<section class="content-header">
    <h1>
        Controlador
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
                        <dd><?= $this->Number->format($controller->id) ?></dd>

                        <dt scope="row"><?= __('Nome do controlador') ?></dt>
                        <dd><?= h($controller->name) ?></dd>
                        <dt scope="row"><?= __('Nickname') ?></dt>
                        <dd><?= h($controller->nickname) ?></dd>

                        <dt scope="row"><?= __('Criado') ?></dt>
                        <dd><?= h($controller->created) ?></dd>
                        <dt scope="row"><?= __('Actualizado') ?></dt>
                        <dd><?= h($controller->modified) ?></dd>
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
                    <h3 class="box-title"><?= __('Controlo de Acesso à Objectos') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if (!empty($controller->acos)): ?>

                        <table id="example1" class="table table-bordered table-striped">

                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Id do Controlador') ?></th>
                                <th scope="col"><?= __('Id da Função') ?></th>
                                <th scope="col"><?= __('Criado') ?></th>
                                <th scope="col"><?= __('Actualizado') ?></th>
                                <th scope="col" class="actions text-center"><?= __('Acções') ?></th>
                            </tr>
                            <?php foreach ($controller->acos as $acos): ?>
                                <tr>
                                    <td><?= h($acos->id) ?></td>
                                    <td><?= h($acos->controller_id) ?></td>
                                    <td><?= h($acos->action_id) ?></td>
                                    <td><?= h($acos->created) ?></td>
                                    <td><?= h($acos->modified) ?></td>
                                    <td class="actions text-center">
                                        <?= $this->Html->link(__(''), ['controller' => 'Acos', 'action' => 'view', $acos->id], ['class' => 'btn btn-info btn-xs', 'class' => 'fa fa-eye']) ?>
                                        <?= $this->Html->link(__(''), ['controller' => 'Acos', 'action' => 'edit', $acos->id], ['class' => 'btn btn-warning btn-xs', 'class' => 'fa fa-edit']) ?>
                                        <?=
                                        $this->Form->postLink(__(''), ['controller' => 'Acos', 'action' => 'delete', $acos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $acos->id)
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