<h2>
    Sign up using this form
</h2>

{{ form("user/register", "method": "post") }}

<p>
    <label for="name">
        Name
    </label>

    <?php echo $this->tag->textField("name"); ?>
</p>

<p>
    <label for="email">
        E-Mail
    </label>

    <?php echo $this->tag->textField("email"); ?>
</p>

<p>
    <?php echo $this->tag->submitButton("Register"); ?>
</p>

</form>