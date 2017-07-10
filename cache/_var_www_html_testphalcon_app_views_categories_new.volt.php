<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous"><?= $this->tag->linkTo(['/categories', 'Go Back']) ?></li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Create categories
    </h1>
</div>

<?= $this->getContent() ?>

<?= $this->tag->form(['categories/create', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-horizontal']) ?>

<div class="form-group">
    <label for="fieldNom" class="col-sm-2 control-label">Nom</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['nom', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldNom']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldParentId" class="col-sm-2 control-label">Parent</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['parent_id', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldParentId']) ?>
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?= $this->tag->submitButton(['Save', 'class' => 'btn btn-default']) ?>
    </div>
</div>

</form>
