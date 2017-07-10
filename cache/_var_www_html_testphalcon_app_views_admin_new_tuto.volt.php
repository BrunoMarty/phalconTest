
<h1><?= $title ?></h1>

<?= $this->tag->form(['admin/tuto/add', 'method' => 'post']) ?>

<?= $this->tag->textField(['name', 'class' => 'form-control']) ?>
<?= $this->tag->textArea(['editor', 'id' => 'editor']) ?>
<?= $this->tag->submitButton(['Send', 'class' => 'btn btn-primary']) ?>

<?= $this->tag->endForm() ?>

<script src="/js/editor.js"></script>