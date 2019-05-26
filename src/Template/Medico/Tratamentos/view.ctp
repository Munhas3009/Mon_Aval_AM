<section class="content-header">
  <h1>
    Tratamento
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
            <dt scope="row"><?= __('Unidade') ?></dt>
            <dd><?= $tratamento->has('unidade') ? $this->Html->link($tratamento->unidade->name, ['controller' => 'Unidades', 'action' => 'view', $tratamento->unidade->id]) : '' ?></dd>
            <dt scope="row"><?= __('User') ?></dt>
            <dd><?= $tratamento->has('user') ? $this->Html->link($tratamento->user->name, ['controller' => 'Users', 'action' => 'view', $tratamento->user->id]) : '' ?></dd>
            <dt scope="row"><?= __('Paciente') ?></dt>
            <dd><?= $tratamento->has('paciente') ? $this->Html->link($tratamento->paciente->name, ['controller' => 'Pacientes', 'action' => 'view', $tratamento->paciente->id]) : '' ?></dd>
            <dt scope="row"><?= __('Diagnostico') ?></dt>
            <dd><?= $tratamento->has('diagnostico') ? $this->Html->link($tratamento->diagnostico->name, ['controller' => 'Diagnosticos', 'action' => 'view', $tratamento->diagnostico->id]) : '' ?></dd>
            <dt scope="row"><?= __('Tratament') ?></dt>
            <dd><?= h($tratamento->tratament) ?></dd>
            <dt scope="row"><?= __('Estado') ?></dt>
            <dd><?= h($tratamento->estado) ?></dd>
            <dt scope="row"><?= __('S Vacinacao') ?></dt>
            <dd><?= h($tratamento->s_vacinacao) ?></dd>
            <dt scope="row"><?= __('Obs') ?></dt>
            <dd><?= h($tratamento->obs) ?></dd>
            <dt scope="row"><?= __('Category') ?></dt>
            <dd><?= $tratamento->has('category') ? $this->Html->link($tratamento->category->name, ['controller' => 'Categories', 'action' => 'view', $tratamento->category->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($tratamento->id) ?></dd>
            <dt scope="row"><?= __('Contador Mensal') ?></dt>
            <dd><?= $this->Number->format($tratamento->contador_mensal) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($tratamento->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($tratamento->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
