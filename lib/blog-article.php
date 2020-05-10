

<!-- start post -->
<div class="col-lg-6 col-md-12 margin-30px-bottom sm-margin-20px-bottom">
    <div class="blog-grid">
        <div class="blog-grid-img position-relative"><img src="<?php echo $article['img'];?>" alt="" /></div>
        <div class="blog-grid-text padding-25px-all sm-padding-20px-all">
            <h4><a href="<?php echo $article['url'];?>"><?php echo $article['title'];?></a></h4>
            <p><?php echo $article['short'];?> &hellip;</p>
            <div class="meta border-top border-color-medium-gray padding-15px-top xs-padding-10px-top">
                <ul class="no-margin">
                    <li><a href="javascript:void(0)"><i class="fas fa-calendar-alt "></i><?php echo date('d M, Y', strtotime($article['created']));?></a></li>
                    <li><a href="javascript:void(0)"><i class="fas fa-user"></i><?php echo $article['author'];?></a></li>
                    <li><a href="javascript:void(0)"><i class="fas fa-comments"></i><?php echo $article['comments'];?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end post -->