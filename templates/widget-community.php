<section class="section-community section-home">
    <div class="container">
        <h1 class="text-center">Community</h1>
        <div class="row">
            <div class="col-md-6 community-outer">
                <div class="community-wrapper">
                    <div class="fb-page" data-href="<?php the_field('facebook_link', 'option')?>" data-tabs="timeline" data-width="800" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="<?php the_field('facebook_link', 'option')?>" class="fb-xfbml-parse-ignore">
                            <a href="<?php the_field('facebook_link', 'option')?>"></a>
                        </blockquote>
                    </div>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=940263266091451";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                </div>

            </div>
            <div class="col-md-6 community-outer">
                <div class="community-wrapper">
                <a class="twitter-timeline"
                   href="<?php the_field('twiter_link', 'option')?>"
                   data-height="600"
                   data-chrome="nofooter"
                   data-link-color="#820bbb"
                   data-border-color="#a80000">

                </a>
                <script>!function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + "://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");</script>
                </div>
            </div>
        </div>
    </div>
</section>


