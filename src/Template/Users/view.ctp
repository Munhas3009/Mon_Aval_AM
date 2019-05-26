<section class="content-header">
    <h1>
        Utilizador
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

                        <dd><?=
                            $this->Html->image('../webroot/uploads/users' . $user->photo_dir . '/' . $user->photo
                                    , array('width' => 50, 'height' => 50, 'class' => 'img-circle', 'alt' => 'User Image'));
                            ?></dd>

                        <dt scope="row"><?= __('Id') ?></dt>
                        <dd><?= $this->Number->format($user->id) ?></dd>
                        <dt scope="row"><?= __('Nome') ?></dt>
                        <dd><?= h($user->name) ?></dd>
                        <dt scope="row"><?= __('Apelido') ?></dt>
                        <dd><?= h($user->apelido) ?></dd>
                        <dt scope="row"><?= __('Correio electrónico ') ?></dt>
                        <dd><?= h($user->email) ?></dd>
                        <dt scope="row"><?= __('Nome de Utilizador') ?></dt>
                        <dd><?= h($user->username) ?></dd>
            <!--            <dt scope="row"><?= __('Password') ?></dt>
                        <dd><?= h($user->password) ?></dd>-->
                        <dt scope="row"><?= __('Passkey') ?></dt>
                        <dd><?= h($user->passkey) ?></dd>
            <!--            <dt scope="row"><?= __('Photo') ?></dt>
                        <dd><?= h($user->photo) ?></dd>
                        <dt scope="row"><?= __('Photo Dir') ?></dt>
                        <dd><?= h($user->photo_dir) ?></dd>-->

                        <dt scope="row"><?= __('Timeout') ?></dt>
                        <dd><?= h($user->timeout) ?></dd>
                        <dt scope="row"><?= __('Criado') ?></dt>
                        <dd><?= h($user->created) ?></dd>
                        <dt scope="row"><?= __('Actualizado') ?></dt>
                        <dd><?= h($user->modified) ?></dd>
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
                    <h4 class="box-title"><?= __('Requisição de Acesso à Objectos') ?></h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <?php if (!empty($user->aros)): ?>

                        <table id="example1" class="table table-bordered table-striped">

                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Id do utilizador') ?></th>
                                <th scope="col"><?= __('Id do grupo') ?></th>
                                <th scope="col"><?= __('Criado') ?></th>
                                <th scope="col"><?= __('Actualizado') ?></th>
                                <th scope="col" class="actions text-center"><?= __('Acções') ?></th>
                            </tr>
                            <?php foreach ($user->aros as $aros): ?>
                                <tr>
                                    <td><?= h($aros->id) ?></td>
                                    <td><?= h($aros->user_id) ?></td>
                                    <td><?= h($aros->role_id) ?></td>
                                    <td><?= h($aros->created) ?></td>
                                    <td><?= h($aros->modified) ?></td>
                                    <td class="actions text-right">
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
        $('#example1').DataTable({
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