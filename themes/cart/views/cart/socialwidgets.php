<?php $baseUrl = "";?>
<div class="social_container">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
				<div class="social_title">
					<img src="images/facebook_home.png"/>
				</div>
                <div class="fb-page" data-href="https://www.facebook.com/MBAtrekIndia" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                    <blockquote cite="https://www.facebook.com/MBAtrekIndia" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/MBAtrekIndia">MBAtrek Pvt Ltd.</a>
                    </blockquote></div>
            </div>
            <?php $feeds = getLinkedInFeeds();
            if (isset($feeds['values'])) {?>
            <div class="col-md-6">
				<div class="social_title">
					<img src="images/linkedin_home.png"/>
				</div>
				<div class="linked_in_feeds">
					<div class="linked_header">
                        <a href="https://www.linkedin.com/company/mbatrek-private-ltd/" target="_blank"><img src="<?php echo $baseUrl; ?>/images/linked_img.jpg"/></a>
                        <a href="https://www.linkedin.com/company/mbatrek-private-ltd/" target="_blank"><h2>MBAtrek Private Limited</h2></a>
                        <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                        <script type="IN/FollowCompany" data-id="7955944" data-counter="top"></script>
					</div>

					<div class="feeds_blocks">
					<?php
					foreach($feeds['values'] as $feedLin){
	//                    foreach($feedContents as $feed){
					?>
					
					<ul>
						<li class="linked-in-status">
							<?php echo $feedLin->updateContent->companyStatusUpdate->share->comment;?>
						</li>
						<li class="linked-in-image">
							<img src="<?php echo $feedLin->updateContent->companyStatusUpdate->share->content->eyebrowUrl;?>" height="280" width="150">
						</li>
					</ul>
					<?php }?>
					</div>

				</div>
            </div>
            <?php }?>
            <div class="col-md-6">
				<div class="social_title">
					<img src="images/instagram_home.png"/>
				</div>
				<div class="linked_in_feeds">
					<div class="linked_header">
                        <a href="https://www.instagram.com/mbatrek/" target="_blank"><img src="<?php echo $baseUrl; ?>/images/linked_img.jpg"/></a>
                        <a href="https://www.instagram.com/mbatrek/" target="_blank"><h2>MBAtrek Private Limited</h2></a>
						<div class="linked_link">
                        <a class="" target="_blank" href="https://www.instagram.com/mbatrek/"><i class="fa fa-instagram" aria-hidden="true"></i> Follow Us on Instagram</a>
						</div>
					</div>
					<div class="feeds_blocks">
					<?php $feeds = getInstaFeeds();
					foreach($feeds['data'] as $feed){
	//                    foreach($feedContents as $feed){
					?>
					<ul>
						<li class="instagram-image">
                                                        <?php if(isset($feed->videos->standard_resolution->url)){?>
                                                        <video src="<?php echo $feed->images->standard_resolution->url;?>" height="200" width="200" type="video/mp4"></video>
							
                                                        <?php }else {?>
                                                        <img src="<?php echo $feed->images->standard_resolution->url;?>" height="200" width="200">
                                                        <?php }?>
							<!--<img src="<?php // echo $feedLin->updateContent->companyStatusUpdate->share->content->eyebrowUrl;?>" height="280" width="150">-->
						</li>
						<li>
							<?php echo $feed->caption->text;?>
						</li>
					</ul>
					<?php }?>
					</div>
				</div>
            </div>
            <div class="col-md-6">
				<div class="social_title">
					<img src="images/youtube_home.png"/>
				</div>
			<div class="linked_in_feeds">
					<div class="linked_header">
                        <a href="https://www.youtube.com/channel/UCJg7bO36Hii_AXTDL6TLY4A" target="_blank"><img src="<?php echo $baseUrl; ?>/images/linked_img.jpg"/></a>
                        <a href="https://www.youtube.com/channel/UCJg7bO36Hii_AXTDL6TLY4A" target="_blank"><h2>MBAtrek Private Limited</h2></a>
                        <script src="https://apis.google.com/js/platform.js"></script>

                        <div class="g-ytsubscribe" data-channelid="UCJg7bO36Hii_AXTDL6TLY4A" data-layout="default" data-count="default"></div>
					</div>
					<div class="feeds_blocks">
                <?php $feeds = getYoutubeFeeds();
                foreach($feeds->items as $item){
//                    foreach($feedContents as $feed){
                    if(isset($item->id->videoId)){
                ?>
                <ul>
                    <li class="youtube-title">
                        <?php echo $item->snippet->title;?>
                    </li>
                    <li class="youtube-video">
                        <iframe width="280" height="150" src="https://www.youtube.com/embed/<?php echo $item->id->videoId;?>" frameborder="0" allowfullscreen></iframe>
                    </li>
                </ul>
                <?php }}?>
				</div>
				</div>
            </div>
        </div>
    </div>
</div>
