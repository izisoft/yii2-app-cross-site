<section class="elementor-section elementor-top-section elementor-element elementor-element-2d5e31e7 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=2d5e31e7 data-element_type=section data-settings={&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;gradient&quot;}>
    <div class="elementor-container elementor-column-gap-default">
        <div class=elementor-row>
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-57371e75" data-id=57371e75 data-element_type=column>
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class=elementor-widget-wrap>
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-471dda8c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=471dda8c data-element_type=section>
                            <div class="elementor-container elementor-column-gap-no">
                                <div class=elementor-row>
<?php                                
$advs = Yii::$app->f->getAdvert('ADV_COUNTER');
if(!(isset($advs['data']) && !empty($advs['data']))){
    $advs = [
        'name' => 'Counter', 
        'code' => 'ADV_COUNTER',
        'data' => [
            ['name' => 'Thực tập sinh mỗi tháng', 'src' => '#', 'link' => '#', 'description' => 1000],
            ['name' => 'Lao động đi nhật mỗi năm', 'src' => '#', 'link' => '#', 'description' => 5000],
            ['name' => 'Trung tâm đào tạo', 'src' => '#', 'link' => '#', 'description' => 20],
            ['name' => 'Bài giảng chất lượng', 'src' => '#', 'link' => '#', 'description' => 3000],
        ],
    ];
}
if((isset($advs['data']) && !empty($advs['data']))){
    foreach($advs['data'] as $adv){
        echo '<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4d2f207a" data-id=4d2f207a data-element_type=column>
        <div class="elementor-column-wrap elementor-element-populated">
            <div class=elementor-widget-wrap>
                <div class="elementor-element elementor-element-12167efe elementor-widget elementor-widget-counter" data-id=12167efe data-element_type=widget data-widget_type=counter.default>
                    <div class=elementor-widget-container>
                        <div class=elementor-counter>
                            <div class="elementor-counter-number-wrapper">
                                <span class="elementor-counter-number-prefix"></span>
                                <span class="elementor-counter-number" data-duration=2000 data-to-value="'.uh($adv['description']).'" data-from-value=0 data-delimiter=.>0</span>
                                <span class="elementor-counter-number-suffix">++</span>
                            </div>
                            <div class="elementor-counter-title">'.uh($adv['name']).'</div>
                        </div>
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