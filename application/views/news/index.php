
<?php foreach ($news as $news_item): ?>
        <div class="card mb-3">
            <?php echo '<h2 class="card-header">'.$news_item['title'].'</h2>'; ?>
            <div class="card-body">
            <?php echo '<p class="card-text">'.$news_item['text'].'</p>'; ?>
            <div class="btn-group float-right" role="group">
                <a href="<?php echo site_url('news/'.$news_item['slug']); ?>" class="btn btn-info mr-1" role="button">View</a> 
                <a href="<?php echo site_url('news/update/'.$news_item['id']); ?>" class="btn btn-success mr-1" role="button">update</a> 
                <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>" class="btn btn-danger mr-1" role="button">Delete</a>
            </div>
            </div>
            </div>
            
            
        
<?php endforeach; ?>


