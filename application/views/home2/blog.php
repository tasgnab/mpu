
<!--START BLOG-->
<section id="blog" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <!-- section title-->
            <h2 class="text-uppercase">latest from blog</h2>
            <p>Latest news from our company</p>
        </div>
        <div class="slick-carousel-3">
            <?php foreach ($blog as $b): ?>
            <div class="item">
                <div class="single-blog text-left">
                    <div class="single-blog-thumb">
                        <a href="single-blog.html"> <img src="<?=base_url();?>assets/images/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="blog-caption">
                        <h2 class="text-uppercase"><a href="<?=base_url('blog/single/').$b->id;?>"><?=$b->title;?> </a></h2>
                        <div class="blog-meta"><?=$b->updated_timestamp;?></div>
                        <p><?=(strlen(strip_tags($b->body))>200)?substr(strip_tags($b->body), 0, 200):strip_tags($b->body);?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="view-all">
            <a href="<?=base_url('blog');?>" class="btn btn-action">View all</a>
        </div>
    </div>
</section>
<!--END BLOG-->