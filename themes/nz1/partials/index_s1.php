<section class="elementor-section elementor-top-section elementor-element elementor-element-7d5d19f dichvugojapan elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7d5d19f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-39848f9c" data-id="39848f9c" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-13e8932d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="13e8932d" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-497063ee" data-id="497063ee" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-c594852 elementor-widget elementor-widget-heading" data-id="c594852" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default"><?=uh($widget['name'])?></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-2f25ed17 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default" data-id="2f25ed17" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
<?php                                    
$advs = Yii::$app->f->getAdvert('ADV_SERVICE');
if(!(isset($advs['data']) && !empty($advs['data']))){
    $advs = [
        'name' => 'Dịch vụ của chúng tôi', 
        'code' => 'ADV_SERVICE',
        'data' => [
            ['name' => 'Tư vấn XKLĐ Nhật Bản', 'src' => '/img/02_banner-XKLD-2.jpg', 'link' => '/tu-van-xkld-nhat-ban'],
            ['name' => 'Du học Nhật Bản', 'src' => '/img/03_banner-DuHocNhatBan.jpg', 'link' => '/du-hoc-nhat-ban'],
            ['name' => 'Đào tạo tiếng Nhật', 'src' => '/img/01.banner-Tieng-Nhat-Online-02.jpg', 'link' => '/dao-tao-tieng-nhat']
        ],
    ];
}
if((isset($advs['data']) && !empty($advs['data']))){
    foreach($advs['data'] as $adv){
        echo '<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-'.($r = '29e988cc').' clm__service" data-id="'.$r.'" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-column-wrap elementor-element-populated" style="background-image: url('.$adv['src'].')">
                <div class="elementor-widget-wrap">
                    <div class="elementor-element elementor-element-'.($r = 'a167a8f').' elementor-widget elementor-widget-heading" data-id="'.($r).'" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">
                                <a href="'.$adv['link'].'">'.uh($adv['name']).'</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
} 
?>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>