<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/update/'.$news_item['id']); ?>
<div class="form-group">
    <label for="title">Title</label>
    <input type="input" name="title" class="form-control" value="<?php echo $news_item['title'] ?>"/>
</div>
<div class="form-group">
    <label for="text">Text</label>
    <textarea name="text" class="form-control" style="min-height: 200px;"><?php echo $news_item['text'] ?></textarea>
</div>
<div class="form-group">
    <input type="submit" name="submit" value="Submit" class="btn btn-info" />
</div>
</form>
</div>