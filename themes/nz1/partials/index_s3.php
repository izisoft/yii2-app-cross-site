


<section class="elementor-section elementor-top-section elementor-element elementor-element-429efa11 elementor-section-stretched elementor-section-full_width section__why elementor-section-height-default elementor-section-height-default" data-id=429efa11 data-element_type=section data-settings={&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}>
    <div class="elementor-container elementor-column-gap-default">
        <div class=elementor-row>
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6d2812a8" data-id=6d2812a8 data-element_type=column>
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class=elementor-widget-wrap>
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-6e228fb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=6e228fb data-element_type=section>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class=elementor-row>
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-195a2580" data-id=195a2580 data-element_type=column>
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class=elementor-widget-wrap>
                                                <div class="elementor-element elementor-element-608671d0 elementor-widget elementor-widget-heading" data-id=608671d0 data-element_type=widget data-widget_type=heading.default>
                                                    <div class=elementor-widget-container>
                                                        <h2 class="elementor-heading-title elementor-size-default"><?=uh($widget['name']); ?></h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-240651b elementor-widget elementor-widget-text-editor" data-id=240651b data-element_type=widget data-widget_type=text-editor.default>
                                                    <div class=elementor-widget-container>
                                                        <div class="elementor-text-editor elementor-clearfix"><p><strong><?=uh($widget['description']); ?></strong></p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-74d05473 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=74d05473 data-element_type=section>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class=elementor-row>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7d61eff0" data-id=7d61eff0 data-element_type=column>
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class=elementor-widget-wrap>
<?php
$advs = Yii::$app->f->getAdvert('ADV_WHY_US');
if(!(isset($advs['data']) && !empty($advs['data']))){
    $advs = [
        'name' => 'Why choosse', 
        'code' => 'ADV_WHY_US',
        'data' => [
            [
                'name' => 'Lộ trình vững chắc', 'src' => '#', 'link' => '#', 
                'description' => 'Đào tạo tiếng Nhật - Tư vấn đơn hàng miễn phí - Hoàn thiện thủ tục đi Nhật - Giới thiệu việc làm khi về nước.',
                'image' => '/img/Asset-17.png ',
            ],
            [
                'name' => 'HỌC TIẾNG NHẬT HIỆU QUẢ', 'src' => '#', 'link' => '#', 'description' => 'Giáo trình tối ưu - Học qua video sinh động, dễ hiểu - Ôn tập kiến thức qua game - Thi thử không giới hạn.',
                'image' => '/img/Asset-18.png ',
            ],
            [
                'name' => 'ĐV tư vấn XKLĐ Nhật uy tín', 'src' => '#', 'link' => '#', 'description' => 'Mỗi năm đưa hơn 10,000 người đi Nhật - Trên 20 Trung tâm đào tạo quy mô lớn.',
                'image' => '/img/Asset-21.png ',
            ],
            [
                'name' => 'Đơn hàng thu nhập cao', 'src' => '#', 'link' => '#', 'description' => 'Đơn hàng liên tục - Công việc ổn định - Lương cơ bản từ 30 - 40 triệu/tháng - Chi phí thấp.',
                'image' => '/img/Asset-20.png ',
            ],
        ],
    ];
}
if(isset($advs['data']) && !empty($advs['data'])){
    foreach($advs['data'] as $k => $adv){
        if($k > 1) break;
        echo '<div class="elementor-element elementor-element-686869b2 elementor-position-left elementor-vertical-align-middle item_why'.($k+1).' elementor-widget elementor-widget-image-box" data-id="686869b2" data-element_type="widget" data-widget_type="image-box.default">                                                    
            <div class="elementor-widget-container">
                <div class="elementor-image-box-wrapper">
                    <figure class="elementor-image-box-img">
                        <img width="61" height="68" src="'.$adv['image'].'" class="attachment-full size-full" alt="'.$adv['name'].'" loading="lazy" title="'.$adv['name'].'">
                    </figure>
                    <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">'.$adv['name'].'</h3>
                        <p class="elementor-image-box-description">'.$adv['description'].'</p>
                    </div>
                </div>
            </div>
        </div>';
    }
}
?>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2a1eec20 elementor-hidden-phone" data-id=2a1eec20 data-element_type=column>
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class=elementor-widget-wrap>
                                                <div class="elementor-element elementor-element-2e97d3f3 elementor-widget elementor-widget-image" data-id=2e97d3f3 data-element_type=widget data-widget_type=image.default>
                                                    <div class=elementor-widget-container>
                                                        <div class=elementor-image>
                                                            <img width=199 height=199 src="/img/bg2.png" class="attachment-full size-full" alt="" loading="lazy" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7261527c" data-id=7261527c data-element_type=column>
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class=elementor-widget-wrap>
<?php
if(isset($advs['data']) && !empty($advs['data'])){
    foreach($advs['data'] as $k => $adv){
        if($k < 2) continue;
        echo '<div class="elementor-element elementor-element-686869b2 elementor-position-left elementor-vertical-align-middle item_why'.($k+1).' elementor-widget elementor-widget-image-box" data-id="686869b2" data-element_type="widget" data-widget_type="image-box.default">                                                    
            <div class="elementor-widget-container">
                <div class="elementor-image-box-wrapper">
                    <figure class="elementor-image-box-img">
                        <img width="61" height="68" src="'.$adv['image'].'" class="attachment-full size-full" alt="'.$adv['name'].'" loading="lazy" title="'.$adv['name'].'">
                    </figure>
                    <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">'.$adv['name'].'</h3>
                        <p class="elementor-image-box-description">'.$adv['description'].'</p>
                    </div>
                </div>
            </div>
        </div>
        ';
    }
}
?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


