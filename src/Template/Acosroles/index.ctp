<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Permissões
        <small>
            <?php echo __(''); ?>
            <i class="fa fa-list"></i>
        </small>

        <div class="pull-right"><?php echo $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'btn btn-success btn-xs']) ?></div>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?php echo __('Listar'); ?></h3>

                    <div class="box-tools">
                        <form action="<?php echo $this->Url->build(); ?>" method="POST">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Objecto') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Grupos') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Permissão ') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Criado') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Actualizado') ?></th>
                                <th scope="col" class="actions text-center"><?= __('Acções') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($acosroles as $acosrole): ?>
                                <tr>
                                    <td><?= $this->Number->format($acosrole->id) ?></td>
                                    <td><?= $acosrole->has('aco') ? $this->Html->link($acosrole->aco->id, ['controller' => 'Acos', 'action' => 'view', $acosrole->aco->id]) : '' ?></td>
                                    <td><?= $acosrole->has('role') ? $this->Html->link($acosrole->role->name, ['controller' => 'Roles', 'action' => 'view', $acosrole->role->id]) : '' ?></td>
                                    <td><?= h($acosrole->allowed) ?></td>
                                    <td class="actions text-center"><?= h($acosrole->created) ?></td>
                                    <td class="actions text-center"><?= h($acosrole->modified) ?></td>
                                    <td class="actions text-center">
                                        <?= $this->Html->link(__(''), ['action' => 'view', $acosrole->id], ['class' => 'btn btn-info btn-xs', 'class' => 'fa fa-eye']) ?>
                                        <?= $this->Html->link(__(''), ['action' => 'edit', $acosrole->id], ['class' => 'btn btn-warning btn-xs', 'class' => 'fa fa-edit']) ?>
                                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $acosrole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $acosrole->id)
                                            , 'class' => 'btn btn-danger btn-xs', 'class' => 'fa fa-trash-o']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
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