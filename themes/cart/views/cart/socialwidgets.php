<div class="social_container">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="fb-page" data-href="https://www.facebook.com/MBAtrekIndia" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                    <blockquote cite="https://www.facebook.com/MBAtrekIndia" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/MBAtrekIndia">MBAtrek Pvt Ltd.</a>
                    </blockquote></div>
            </div>
            <div class="col-md-4">
                <?php $feeds = getLinkedInFeeds();
                foreach($feeds['values'] as $feed){
//                    foreach($feedContents as $feed){
                ?>
                <ul>
                    <li class="linked-in-status">
                        <?php echo $feed->updateContent->companyStatusUpdate->share->comment;?>
                    </li>
                    <li class="linked-in-image">
                        <img src="<?php echo $feed->updateContent->companyStatusUpdate->share->content->eyebrowUrl;?>" height="200" width="200">
                    </li>
                </ul>
                <?php }?>
            </div>
        </div>
    </div>
</div>