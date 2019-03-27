<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
<div class="form-group">
    <label for="title">Title</label>
    <input type="input" name="title" class="form-control"/>
</div>
<div class="form-group">
    <label for="text">Text</label>
    <textarea name="text" class="form-control"></textarea>
</div>
<div class="form-group">
    <input type="submit" name="submit" value="Submit" />
</div>
</form>