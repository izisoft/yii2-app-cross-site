<?php
$adv = Yii::$app->f->getAdvert('ADV_SLIDER');
if(!(isset($adv['data']) && !empty($adv['data']))){
    $adv = [
        'name' => 'SLIDER (DESKTOP)', 
        'code' => 'ADV_SLIDER',
        'data' => [
            ['name' => '', 'src' => '/img/bg1.jpg', 'link' => '#s1'],
            ['name' => '', 'src' => '/img/bg1.jpg', 'link' => '#s2']
        ],
    ];
}

$adv_mobile = Yii::$app->f->getAdvert('ADV_SLIDER_MOBILE');
if(!(isset($adv['data']) && !empty($adv['data']))){
    $adv = [
        'name' => 'SLIDER (MOBILE)', 
        'code' => 'ADV_SLIDER_MOBILE',
        'data' => [
            ['name' => '', 'src' => '/img/bg1_mobile.jpg', 'link' => '']
        ],
    ];
}


?>
<section class="elementor-section elementor-top-section elementor-element elementor-element-62d580f3 elementor-section-full_width elementor-hidden-phone elementor-section-height-default elementor-section-height-default" data-id=62d580f3 data-element_type=section>
    <div class="elementor-container elementor-column-gap-no">
        <div class=elementor-row>
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2578cba7" data-id=2578cba7 data-element_type=column>
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class=elementor-widget-wrap>
                        <div class="elementor-element elementor-element-6295b9c5 elementor--h-position-center elementor--v-position-middle elementor-arrows-position-inside elementor-pagination-position-inside elementor-widget elementor-widget-slides" data-id=6295b9c5 data-element_type=widget data-settings={&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500} data-widget_type=slides.default>
                            <div class=elementor-widget-container>
                                <div class=elementor-swiper>
                                    <div class="elementor-slides-wrapper elementor-main-swiper swiper-container" dir=ltr data-animation=fadeInUp>
                                        <div class="swiper-wrapper elementor-slides">

                                            <?php
                                            if(isset($adv['data']) && !empty($adv['data'])){
                                                foreach ($adv['data'] as $v){
                                                    echo '<div class="elementor-repeater-item-cf1b38b swiper-slide">
                                                    <div class="swiper-slide-bg" style="background-image:url('.$v['src'].');"></div>
                                                    <a class=swiper-slide-inner href="'.$v['link'].'" >
                                                        <div class=swiper-slide-contents></div>
                                                    </a>
                                                </div>';
                                                }
                                            }
                                            ?>
                                            
                                        </div>
                                        <div class=swiper-pagination></div>
                                        <div class="elementor-swiper-button elementor-swiper-button-prev">
                                            <i class=eicon-chevron-left aria-hidden=true></i>
                                            <span class=elementor-screen-only>Previous</span>
                                        </div>
                                        
                                        <div class="elementor-swiper-button elementor-swiper-button-next">
                                            <i class=eicon-chevron-right aria-hidden=true></i>
                                            <span class=elementor-screen-only>Next</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="elementor-section elementor-top-section elementor-element elementor-element-ef25723 elementor-section-full_width elementor-hidden-desktop elementor-hidden-tablet elementor-section-height-default elementor-section-height-default" data-id=ef25723 data-element_type=section>
    <div class="elementor-container elementor-column-gap-no">
        <div class=elementor-row>
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-de43f9b" data-id=de43f9b data-element_type=column>
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class=elementor-widget-wrap>
                        <div class="elementor-element elementor-element-19f1019 elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel" data-id=19f1019 data-element_type=widget data-settings={&quot;navigation&quot;:&quot;dots&quot;,&quot;slides_to_scroll_mobile&quot;:&quot;1&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500} data-widget_type=image-carousel.default>
                            <div class=elementor-widget-container>

                                <div class="elementor-image-carousel-wrapper swiper-container" dir=ltr>
                                    <div class="elementor-image-carousel swiper-wrapper">

                                        <?php
                                        if(isset($adv_mobile['data']) && !empty($adv_mobile['data'])){
                                            foreach ($adv_mobile['data'] as $v){
                                                echo '<div class=swiper-slide>                                                
                                                    <a class=swiper-slide-inner href="'.$v['link'].'" >
                                                        <figure class=swiper-slide-inner>
                                                            <img class="swiper-slide-image" src="'.$v['src'].'" alt="'.$v['name'].'" title="'.$v['name'].'">
                                                        </figure>
                                                    </a>
                                                </div>';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class=swiper-pagination></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$this->registerJs(<<<JS
var mySwiper = new Swiper('.elementor-image-carousel-wrapper', {
    speed: 300,
    autoplay: {
        delay: 3000,
    },
});
JS
);
?>