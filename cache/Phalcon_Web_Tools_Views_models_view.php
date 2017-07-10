<div class="row">
    <div class="col-sm-12">
        <?= $this->getContent() ?>
        <?= $this->flashSession->output() ?>
        <div class="box box-warning">
            <div class="box-header with-border">
                <p><?= $model_name ?> - [<?= $model_path ?>]</p>
            </div>
            <div class="box-body">
                <form role="form">
                    <div class="form-group">
                        <?= $this->tag->textArea(['code', 'cols' => 50, 'rows' => 25, 'class' => 'form-control']) ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->assets->outputJs('codemirror') ?>
