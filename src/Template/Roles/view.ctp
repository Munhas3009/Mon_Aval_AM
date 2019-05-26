<section class="content-header">
    <h1>
        Grupo
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
                    <h3 class="box-title"><?php echo __('Informações'); ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl class="dl-horizontal">

                        <dt scope="row"><?= __('Id') ?></dt>
                        <dd><?= $this->Number->format($role->id) ?></dd>
                        <dt scope="row"><?= __('Nome do grupo') ?></dt>
                        <dd><?= h($role->name) ?></dd>
                        <dt scope="row"><?= __('Comentário') ?></dt>
                        <dd><?= h($role->comment) ?></dd>
                        <dt scope="row"><?= __('Criado') ?></dt>
                        <dd><?= h($role->created) ?></dd>
                        <dt scope="row"><?= __('Actualizado') ?></dt>
                        <dd><?= h($role->modified) ?></dd>
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
                    <h3 class="box-title"><?= __('Permissão') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <?php if (!empty($role->acosroles)): ?>

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
                            <?php foreach ($role->acosroles as $acosroles): ?>
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
                                        $this->Form->postLink(__(''), ['controller' => 'Acosroles', 'action' => 'delete', $acosroles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $acosroles->id)
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
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Requisição') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <?php if (!empty($role->aros)): ?>

                        <table id="example1" class="table table-bordered table-striped">

                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Id do Utilizador') ?></th>
                                <th scope="col"><?= __('Id do Grupo') ?></th>
                                <th scope="col"><?= __('Criado') ?></th>
                                <th scope="col"><?= __('Actualizado') ?></th>
                                <th scope="col" class="actions text-center"><?= __('Acções') ?></th>
                            </tr>
                            <?php foreach ($role->aros as $aros): ?>
                                <tr>
                                    <td><?= h($aros->id) ?></td>
                                    <td><?= h($aros->user_id) ?></td>
                                    <td><?= h($aros->role_id) ?></td>
                                    <td><?= h($aros->created) ?></td>
                                    <td><?= h($aros->modified) ?></td>
                                    <td class="actions text-center">
                                        <?= $this->Html->link(__(''), ['controller' => 'Aros', 'action' => 'view', $aros->id], ['class' => 'btn btn-info btn-xs', 'class' => 'fa fa-eye']) ?>
                                        <?= $this->Html->link(__(''), ['controller' => 'Aros', 'action' => 'edit', $aros->id], ['class' => 'btn btn-warning btn-xs', 'class' => 'fa fa-edit']) ?>
                                        <?=
                                        $this->Form->postLink(__(''), ['controller' => 'Aros', 'action' => 'delete', $aros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aros->id)
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