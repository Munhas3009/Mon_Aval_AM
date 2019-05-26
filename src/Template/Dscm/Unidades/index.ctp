<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Unidades Sanitárias
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
                    <h3 class="box-title"><?php echo __('Lista'); ?></h3>

                    <div class="box-tools">
<!--                        <form action="<?php echo $this->Url->build(); ?>" method="POST">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>-->
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('nome_da_US') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('slogan') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('NUIT') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('correio') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('data_fundação') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('classif') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('distrito') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Nº_camas') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('criado') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('actualizado') ?></th>
                                <th scope="col" class="actions text-center"><?= __('Acções') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($unidades as $unidade): ?>
                                <tr>
                                    <td><?= $this->Number->format($unidade->id) ?></td>
                                    <td><?= h($unidade->name) ?></td>
                                    <td><?= h($unidade->slogan) ?></td>
                                    <td><?= h($unidade->nuit) ?></td>
                                    <td><?= h($unidade->email) ?></td>
                                    <td><?= h($unidade->data_fundacao) ?></td>
                                    <td><?= $unidade->has('classificacao') ? $this->Html->link($unidade->classificacao->name, ['controller' => 'Classificacaos', 'action' => 'view', $unidade->classificacao->id]) : '' ?></td>
                                    <td><?= $unidade->has('distrito') ? $this->Html->link($unidade->distrito->name, ['controller' => 'Distritos', 'action' => 'view', $unidade->distrito->id]) : '' ?></td>
                                    <td><?= $this->Number->format($unidade->numero_camas) ?></td>
                                    <td><?= h($unidade->created) ?></td>
                                    <td><?= h($unidade->modified) ?></td>
                                    <td class="actions text-right">
                                        <?= $this->Html->link(__(''), ['action' => 'view', $unidade->id], ['class' => 'btn btn-info btn-xs', 'class' => 'fa fa-eye']) ?>
                                        <?= $this->Html->link(__(''), ['action' => 'edit', $unidade->id], ['class' => 'btn btn-warning btn-xs', 'class' => 'fa fa-edit']) ?>
                                        <?=
                                        $this->Form->postLink(__(''), ['action' => 'delete', $unidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unidade->id)
                                            , 'class' => 'btn btn-danger btn-xs', 'class' => 'fa fa-trash-o'])
                                        ?>
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
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
<?php $this->end(); ?>