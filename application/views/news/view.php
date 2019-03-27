<div class="card">
<?php
echo '<h2 class="card-header">'.$news_item['title'].'</h2>';
?>
<div class="card-body">
<?php
echo '<p class="card-text">'.$news_item['text'].'</p>';
?>
 <a href="<?php echo site_url('news/'); ?>"  role="button" class="btn btn-info">Back to Results</a>
  </div>
</div>