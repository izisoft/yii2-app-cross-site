<div class="elementor elementor-1641">

<div class=elementor-inner>
    <div class=elementor-section-wrap>
        
<?php 
$this->renderPartial('slider');


$widgets = Yii::$app->f->getWidgets('index');

if(!(isset($widgets['data']) && !empty($widgets['data']))){
    $widgets = [
        'code' => 'index',
        'name' => 'Widget module trang chủ',        
        'data' => [
            ['name' => 'Dịch vụ của chúng tôi', 'layout' => 'index_s1'],
            ['name' => 'Đếm số lượng TTS', 'layout' => 'index_s2'],
            [
                'name' => 'Tại sao bạn nên chọn NozomiJAPAN', 'layout' => 'index_s3',
                'description' => 'Mở rộng cánh cửa bay tới Nhật Bản'
            ],


        ],
    ];
}

if((isset($widgets['data']) && !empty($widgets['data']))){
    foreach($widgets['data'] as $widget){
        $fp = dirname(__DIR__) . '/partials/' . $widget['layout'] . '.php';
        if(file_exists($fp)){
            $this->renderPartial( $widget['layout'], ['widget' => $widget]);
        }
    }

}

?>

























<section
class="elementor-section elementor-top-section elementor-element elementor-element-164f90d5 elementor-section-stretched elementor-section-full_width section__video elementor-section-height-default elementor-section-height-default" data-id=164f90d5 data-element_type=section data-settings={&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;gradient&quot;}><div
class="elementor-container elementor-column-gap-default"><div
class=elementor-row><div
class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-596a717e" data-id=596a717e data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><section
class="elementor-section elementor-inner-section elementor-element elementor-element-4d9112e0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=4d9112e0 data-element_type=section><div
class="elementor-container elementor-column-gap-default"><div
class=elementor-row><div
class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c42d654" data-id=c42d654 data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-5a7b1188 elementor-widget elementor-widget-heading" data-id=5a7b1188 data-element_type=widget data-widget_type=heading.default><div
class=elementor-widget-container><h2 class="elementor-heading-title elementor-size-default">gojapan và câu chuyện học viên</h2></div></div><div
class="elementor-element elementor-element-76c41d48 elementor-widget elementor-widget-text-editor" data-id=76c41d48 data-element_type=widget data-widget_type=text-editor.default><div
class=elementor-widget-container><div
class="elementor-text-editor elementor-clearfix"><p><strong>Hãy lắng nghe các học viên tại GoJapan chia sẻ những khoảnh khắc đáng nhớ trong hành trình đi Nhật của họ bạn nhé!</strong></p></div></div></div></div></div></div></div></div></section>




<section
class="elementor-section elementor-inner-section elementor-element elementor-element-4492c81d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=4492c81d data-element_type=section><div
class="elementor-container elementor-column-gap-default"><div
class=elementor-row><div
class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-15661b81" data-id=15661b81 data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-fc0ffe4 elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id=fc0ffe4 data-element_type=widget data-settings={&quot;lightbox&quot;:&quot;yes&quot;,&quot;aspect_ratio&quot;:&quot;169&quot;} data-widget_type=video.default><div
class=elementor-widget-container><div
class="elementor-wrapper elementor-open-lightbox"><div
class=elementor-custom-embed-image-overlay data-elementor-open-lightbox=yes data-elementor-lightbox="{&quot;type&quot;:&quot;video&quot;,&quot;videoType&quot;:&quot;youtube&quot;,&quot;url&quot;:&quot;https:\/\/www.youtube.com\/embed\/I0OlOtutbvw?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0&quot;,&quot;modalOptions&quot;:{&quot;id&quot;:&quot;elementor-lightbox-fc0ffe4&quot;,&quot;entranceAnimation&quot;:&quot;&quot;,&quot;entranceAnimation_tablet&quot;:&quot;&quot;,&quot;entranceAnimation_mobile&quot;:&quot;&quot;,&quot;videoAspectRatio&quot;:&quot;169&quot;}}">
<img
src=https://gojapan.vn/wp-content/uploads/elementor/thumbs/picture23-scaled-osgn8b6g2l8kokr1qw7jcir0rwhfe7xqieb7op9wiu.jpg title=picture23 alt=picture23><div
class=elementor-custom-embed-play role=button>
<i
class=eicon-play aria-hidden=true></i>
<span
class=elementor-screen-only>Chơi Video</span></div></div></div></div></div></div></div></div><div
class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-635bc1d3" data-id=635bc1d3 data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-110f7881 elementor-widget elementor-widget-template" data-id=110f7881 data-element_type=widget data-widget_type=template.default><div
class=elementor-widget-container><div
class=elementor-template><div
data-elementor-type=section data-elementor-id=1228 class="elementor elementor-1228" data-elementor-settings=[]><div
class=elementor-section-wrap><section
class="elementor-section elementor-top-section elementor-element elementor-element-df24658 tem__video elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=df24658 data-element_type=section><div
class="elementor-container elementor-column-gap-no"><div
class=elementor-row><div
class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5ca37a3" data-id=5ca37a3 data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><section
class="elementor-section elementor-inner-section elementor-element elementor-element-2e41514 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=2e41514 data-element_type=section><div
class="elementor-container elementor-column-gap-narrow"><div
class=elementor-row><div
class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-35c72a3" data-id=35c72a3 data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-4af1f0a elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id=4af1f0a data-element_type=widget data-settings={&quot;lightbox&quot;:&quot;yes&quot;,&quot;aspect_ratio&quot;:&quot;169&quot;} data-widget_type=video.default><div
class=elementor-widget-container><div
class="elementor-wrapper elementor-open-lightbox"><div
class=elementor-custom-embed-image-overlay data-elementor-open-lightbox=yes data-elementor-lightbox="{&quot;type&quot;:&quot;video&quot;,&quot;videoType&quot;:&quot;youtube&quot;,&quot;url&quot;:&quot;https:\/\/www.youtube.com\/embed\/krotXFAsnjs?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0&quot;,&quot;modalOptions&quot;:{&quot;id&quot;:&quot;elementor-lightbox-4af1f0a&quot;,&quot;entranceAnimation&quot;:&quot;&quot;,&quot;entranceAnimation_tablet&quot;:&quot;&quot;,&quot;entranceAnimation_mobile&quot;:&quot;&quot;,&quot;videoAspectRatio&quot;:&quot;169&quot;}}">
<img
src=https://gojapan.vn/wp-content/uploads/2020/04/219a07d31ef2e3acbae3-360x180.jpg title=219a07d31ef2e3acbae3 alt=219a07d31ef2e3acbae3><div
class=elementor-custom-embed-play role=button>
<i
class=eicon-play aria-hidden=true></i>
<span
class=elementor-screen-only>Chơi Video</span></div></div></div></div></div></div></div></div><div
class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-eb25a52" data-id=eb25a52 data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-0d01a15 elementor-widget elementor-widget-text-editor" data-id=0d01a15 data-element_type=widget data-widget_type=text-editor.default><div
class=elementor-widget-container><div
class="elementor-text-editor elementor-clearfix"><p>Với GoJapan mình có thể tự học tại nhà mỗi ngày 1-2 tiếng mà không cần đến trung tâm&#8230; Mình dễ dàng học từ trình độ N5 đến N4.</p></div></div></div></div></div></div></div></div></section><section
class="elementor-section elementor-inner-section elementor-element elementor-element-53125c7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=53125c7 data-element_type=section><div
class="elementor-container elementor-column-gap-narrow"><div
class=elementor-row><div
class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-002cd0b" data-id=002cd0b data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-a1669de elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id=a1669de data-element_type=widget data-settings={&quot;lightbox&quot;:&quot;yes&quot;,&quot;aspect_ratio&quot;:&quot;169&quot;} data-widget_type=video.default><div
class=elementor-widget-container><div
class="elementor-wrapper elementor-open-lightbox"><div
class=elementor-custom-embed-image-overlay data-elementor-open-lightbox=yes data-elementor-lightbox="{&quot;type&quot;:&quot;video&quot;,&quot;videoType&quot;:&quot;youtube&quot;,&quot;url&quot;:&quot;https:\/\/www.youtube.com\/embed\/x3poVJkZLqs?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0&quot;,&quot;modalOptions&quot;:{&quot;id&quot;:&quot;elementor-lightbox-a1669de&quot;,&quot;entranceAnimation&quot;:&quot;&quot;,&quot;entranceAnimation_tablet&quot;:&quot;&quot;,&quot;entranceAnimation_mobile&quot;:&quot;&quot;,&quot;videoAspectRatio&quot;:&quot;169&quot;}}">
<img
width=600 height=337 src=https://gojapan.vn/wp-content/uploads/2020/04/diep.jpg class="attachment-full size-full" alt="Trang chủ" loading=lazy srcset="https://gojapan.vn/wp-content/uploads/2020/04/diep.jpg 600w, https://gojapan.vn/wp-content/uploads/2020/04/diep-300x169.jpg 300w, https://gojapan.vn/wp-content/uploads/2020/04/diep-150x84.jpg 150w, https://gojapan.vn/wp-content/uploads/2020/04/diep-768x432.jpg 768w, https://gojapan.vn/wp-content/uploads/2020/04/diep-750x422.jpg 750w" sizes="(max-width: 600px) 100vw, 600px" title="Trang chủ 44"><div
class=elementor-custom-embed-play role=button>
<i
class=eicon-play aria-hidden=true></i>
<span
class=elementor-screen-only>Chơi Video</span></div></div></div></div></div></div></div></div><div
class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ecf5349" data-id=ecf5349 data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-991d9ba elementor-widget elementor-widget-text-editor" data-id=991d9ba data-element_type=widget data-widget_type=text-editor.default><div
class=elementor-widget-container><div
class="elementor-text-editor elementor-clearfix"><p
style="text-align: justify;">Mình có nhu cầu đi làm ở Nhật nhưng không biết bắt đầu từ đâu, nhờ tư vấn của các anh chị ở GoJapan mà mình đã xác định được con đường của mình</p></div></div></div></div></div></div></div></div></section><section
class="elementor-section elementor-inner-section elementor-element elementor-element-0a867cf elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=0a867cf data-element_type=section><div
class="elementor-container elementor-column-gap-narrow"><div
class=elementor-row><div
class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ecad8fa" data-id=ecad8fa data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-b3e5aea elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id=b3e5aea data-element_type=widget data-settings={&quot;lightbox&quot;:&quot;yes&quot;,&quot;aspect_ratio&quot;:&quot;169&quot;} data-widget_type=video.default><div
class=elementor-widget-container><div
class="elementor-wrapper elementor-open-lightbox"><div
class=elementor-custom-embed-image-overlay data-elementor-open-lightbox=yes data-elementor-lightbox="{&quot;type&quot;:&quot;video&quot;,&quot;videoType&quot;:&quot;youtube&quot;,&quot;url&quot;:&quot;https:\/\/www.youtube.com\/embed\/bQyiA4V_JfU?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0&quot;,&quot;modalOptions&quot;:{&quot;id&quot;:&quot;elementor-lightbox-b3e5aea&quot;,&quot;entranceAnimation&quot;:&quot;&quot;,&quot;entranceAnimation_tablet&quot;:&quot;&quot;,&quot;entranceAnimation_mobile&quot;:&quot;&quot;,&quot;videoAspectRatio&quot;:&quot;169&quot;}}">
<img
width=600 height=337 src=https://gojapan.vn/wp-content/uploads/2020/04/maxresdefault-2.jpg class="attachment-full size-full" alt="Trang chủ" loading=lazy srcset="https://gojapan.vn/wp-content/uploads/2020/04/maxresdefault-2.jpg 600w, https://gojapan.vn/wp-content/uploads/2020/04/maxresdefault-2-300x169.jpg 300w, https://gojapan.vn/wp-content/uploads/2020/04/maxresdefault-2-150x84.jpg 150w, https://gojapan.vn/wp-content/uploads/2020/04/maxresdefault-2-768x431.jpg 768w, https://gojapan.vn/wp-content/uploads/2020/04/maxresdefault-2-750x421.jpg 750w" sizes="(max-width: 600px) 100vw, 600px" title="Trang chủ 45"><div
class=elementor-custom-embed-play role=button>
<i
class=eicon-play aria-hidden=true></i>
<span
class=elementor-screen-only>Chơi Video</span></div></div></div></div></div></div></div></div><div
class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ce50c72" data-id=ce50c72 data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-6208bc4 elementor-widget elementor-widget-text-editor" data-id=6208bc4 data-element_type=widget data-widget_type=text-editor.default><div
class=elementor-widget-container><div
class="elementor-text-editor elementor-clearfix"><p
style="text-align: justify;">Cơ sở ở đây rất khang trang sạch đẹp, ngoài được đào tạo Tiếng Nhật mình còn được đào tạo về chuyên môn, kỹ năng sống và cả an toàn lao động</p></div></div></div></div></div></div></div></div></section></div></div></div></div></div></section></div></div></div></div></div></div></div></div></div></div></section></div></div></div></div></div></section><section
class="elementor-section elementor-top-section elementor-element elementor-element-5cb97dc elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=5cb97dc data-element_type=section data-settings={&quot;stretch_section&quot;:&quot;section-stretched&quot;}><div
class="elementor-container elementor-column-gap-default"><div
class=elementor-row><div
class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-52310bec" data-id=52310bec data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-62e06499 elementor-blockquote--skin-clean elementor-blockquote--align-center trichdan elementor-blockquote--button-color-official elementor-widget elementor-widget-blockquote" data-id=62e06499 data-element_type=widget data-widget_type=blockquote.default><div
class=elementor-widget-container><blockquote
class=elementor-blockquote><p
class=elementor-blockquote__content>
Sứ mệnh của GoJapan là giúp bạn đến Nhật <br> với tâm thế vững chắc nhất</p></blockquote></div></div><div
class="elementor-element elementor-element-5a2a9ee6 elementor-widget elementor-widget-image" data-id=5a2a9ee6 data-element_type=widget data-widget_type=image.default><div
class=elementor-widget-container><div
class=elementor-image>
<img
width=136 height=30 src=https://gojapan.vn/wp-content/uploads/2020/04/Go-japan-xkld-nhat-ban.png class="attachment-full size-full" alt="Trang chủ" loading=lazy title="Trang chủ 46"></div></div></div></div></div></div></div></div></section><section
class="elementor-section elementor-top-section elementor-element elementor-element-705da0b elementor-section-full_width elementor-section-content-top elementor-section-height-default elementor-section-height-default" data-id=705da0b data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}><div
class=elementor-background-overlay></div><div
class="elementor-container elementor-column-gap-no"><div
class=elementor-row><div
class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-73e1397" data-id=73e1397 data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><section
class="elementor-section elementor-inner-section elementor-element elementor-element-20d1064 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=20d1064 data-element_type=section><div
class="elementor-container elementor-column-gap-no"><div
class=elementor-row><div
class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-53d6040" data-id=53d6040 data-element_type=column data-settings={&quot;background_background&quot;:&quot;classic&quot;}><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-background-overlay></div><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-a2ac03a elementor-widget elementor-widget-image" data-id=a2ac03a data-element_type=widget data-widget_type=image.default><div
class=elementor-widget-container><div
class=elementor-image>
<img
width=353 height=276 src=https://gojapan.vn/wp-content/uploads/2020/04/Asset-3.png class="attachment-full size-full" alt="Trang chủ" loading=lazy srcset="https://gojapan.vn/wp-content/uploads/2020/04/Asset-3.png 353w, https://gojapan.vn/wp-content/uploads/2020/04/Asset-3-300x235.png 300w, https://gojapan.vn/wp-content/uploads/2020/04/Asset-3-150x117.png 150w" sizes="(max-width: 353px) 100vw, 353px" title="Trang chủ 47"></div></div></div><div
class="elementor-element elementor-element-dc44585 elementor-widget elementor-widget-heading" data-id=dc44585 data-element_type=widget data-widget_type=heading.default><div
class=elementor-widget-container><h2 class="elementor-heading-title elementor-size-default">Chỉ <strong>100 suất. </strong>Thời gian còn lại chỉ còn:</h2></div></div><div
class="elementor-element elementor-element-68485e2 elementor-countdown--label-inline elementor-widget elementor-widget-countdown" data-id=68485e2 data-element_type=widget data-widget_type=countdown.default><div
class=elementor-widget-container><div
class=elementor-countdown-wrapper data-date=1596137400><div
class=elementor-countdown-item><span
class="elementor-countdown-digits elementor-countdown-days"></span> <span
class=elementor-countdown-label>Ngày</span></div><div
class=elementor-countdown-item><span
class="elementor-countdown-digits elementor-countdown-hours"></span> <span
class=elementor-countdown-label>Giờ</span></div><div
class=elementor-countdown-item><span
class="elementor-countdown-digits elementor-countdown-minutes"></span> <span
class=elementor-countdown-label>Phút</span></div><div
class=elementor-countdown-item><span
class="elementor-countdown-digits elementor-countdown-seconds"></span> <span
class=elementor-countdown-label>Giây</span></div></div></div></div></div></div></div><div
class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-fe46909" data-id=fe46909 data-element_type=column data-settings={&quot;background_background&quot;:&quot;classic&quot;}><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-background-overlay></div><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-4b7bc1b elementor-widget elementor-widget-heading" data-id=4b7bc1b data-element_type=widget data-widget_type=heading.default><div
class=elementor-widget-container><h2 class="elementor-heading-title elementor-size-default">Đăng ký nhận quà  tặng</h2></div></div><div
class="elementor-element elementor-element-8f42fde elementor-widget elementor-widget-html" data-id=8f42fde data-element_type=widget data-widget_type=html.default><div
class=elementor-widget-container><div
id=formPanel class="center custom-crm-form"><script>function initWebform(){new CrmvietForm({portalId:"formPanel",formId:"crm_form",key:"5296c319-b9b0-4f88-aa62-6d5fb0a11fea",host:"https://crm.gojapan.vn:8443/crm"}).init()}window.addEventListener("DOMContentLoaded",e=>{if(document.getElementById("crmvietWebformJs"))initWebform();else{var t=document.createElement("script");t.id="crmvietWebformJs",t.src="https://crm.gojapan.vn:8443/crm/webform/js/webform.js",t.charset="utf-8",document.head.appendChild(t),t.addEventListener("load",function(e){initWebform()})}});</script> </div></div></div></div></div></div></div></section></div></div></div></div></div></section><section
class="elementor-section elementor-top-section elementor-element elementor-element-398f0ad1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=398f0ad1 data-element_type=section data-settings={&quot;background_background&quot;:&quot;gradient&quot;}><div
class="elementor-container elementor-column-gap-default"><div
class=elementor-row><div
class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-575480b1" data-id=575480b1 data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-641aa992 elementor-widget elementor-widget-heading" data-id=641aa992 data-element_type=widget data-widget_type=heading.default><div
class=elementor-widget-container><h2 class="elementor-heading-title elementor-size-default">góc tư vấn học tiếng nhật và xuất khẩu lao động nhật bản</h2></div></div><div
class="elementor-element elementor-element-5d04c4f5 elementor-grid-4 elementor-grid-mobile-2 elementor-grid-tablet-2 elementor-posts--thumbnail-top elementor-widget elementor-widget-posts" data-id=5d04c4f5 data-element_type=widget data-settings={&quot;classic_columns&quot;:&quot;4&quot;,&quot;classic_columns_mobile&quot;:&quot;2&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;classic_columns_tablet&quot;:&quot;2&quot;} data-widget_type=posts.classic><div
class=elementor-widget-container><div
class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid"><article
class="elementor-post elementor-grid-item post-5164 post type-post status-publish format-standard has-post-thumbnail hentry category-chia-se-kinh-nghiem category-ky-nang-dac-dinh">
<a
class=elementor-post__thumbnail__link href=https://gojapan.vn/ky-nang-dac-dinh-nhat-ban/ ><div
class=elementor-post__thumbnail><img
src=https://gojapan.vn/wp-content/uploads/2020/09/Capture.jpg title=Capture alt=Capture></div>
</a><div
class=elementor-post__text><h3 class="elementor-post__title">
<a
href=https://gojapan.vn/ky-nang-dac-dinh-nhat-ban/ >
Visa Kỹ Năng Đặc Định Nhật Bản Và Những Điều Cần Biết	</a></h3><div
class=elementor-post__excerpt><p>Từ tháng 4/2019, chính phủ Nhật Bản sẽ bổ sung thêm 1 loại visa khác dành cho người nước ngoài với tên gọi là visa kỹ</p></div></div></article><article
class="elementor-post elementor-grid-item post-3146 post type-post status-publish format-standard has-post-thumbnail hentry category-kinh-nghiem-hoc-tieng-nhat">
<a
class=elementor-post__thumbnail__link href=https://gojapan.vn/hoc-tieng-nhat-moi-ngay/ ><div
class=elementor-post__thumbnail><img
src=https://gojapan.vn/wp-content/uploads/2020/06/Hoc-tieng-Nhat-moi-ngay-lop-hoc-truc-tuyen-768x512-1-350x250.jpg title=Hoc-tieng-Nhat-moi-ngay-lop-hoc-truc-tuyen-768&#215;512 alt=Hoc-tieng-Nhat-moi-ngay-lop-hoc-truc-tuyen-768x512></div>
</a><div
class=elementor-post__text><h3 class="elementor-post__title">
<a
href=https://gojapan.vn/hoc-tieng-nhat-moi-ngay/ >
Học tiếng Nhật mỗi ngày	</a></h3><div
class=elementor-post__excerpt><p>Có thể khẳng định rằng tiếng Nhật là một trong những ngôn ngữ khó học nhất trên thế giới. Tiếng Nhật khó ở cả chữ</p></div></div></article><article
class="elementor-post elementor-grid-item post-2972 post type-post status-publish format-standard has-post-thumbnail hentry category-tai-lieu-hoc-tieng-nhat category-hoc-tieng-nhat">
<a
class=elementor-post__thumbnail__link href=https://gojapan.vn/hoc-tieng-nhat-qua-hinh-anh/ ><div
class=elementor-post__thumbnail><img
src=https://gojapan.vn/wp-content/uploads/2020/06/bang-chu-cai-tieng-nhat-hiragana-768x502-1-350x250.jpg title=bang-chu-cai-tieng-nhat-hiragana-768&#215;502 alt="Học bảng chữ cái qua hình ảnh minh hoạ"></div>
</a><div
class=elementor-post__text><h3 class="elementor-post__title">
<a
href=https://gojapan.vn/hoc-tieng-nhat-qua-hinh-anh/ >
Cách học tiếng Nhật qua hình ảnh cực kì hiệu quả	</a></h3><div
class=elementor-post__excerpt><p>Học tiếng Nhật qua hình ảnh có lẽ không quá xa lạ với trẻ em cũng như người Việt Nam. Bằng phương pháp ghi nhớ</p></div></div></article><article
class="elementor-post elementor-grid-item post-1334 post type-post status-publish format-standard has-post-thumbnail hentry category-xuat-khau-lao-dong-nhat-ban category-chia-se-kinh-nghiem tag-xuat-khau-lao-dong-nhat-ban">
<a
class=elementor-post__thumbnail__link href=https://gojapan.vn/nhung-dieu-can-biet-ve-xuat-khau-lao-dong-nhat-ban/ ><div
class=elementor-post__thumbnail><img
src=https://gojapan.vn/wp-content/uploads/2020/04/xuat-khau-lao-dong-nhat-ban-gojapan-350x250.jpg title=xuat-khau-lao-dong-nhat-ban-gojapan alt=xuat-khau-lao-dong-nhat-ban></div>
</a><div
class=elementor-post__text><h3 class="elementor-post__title">
<a
href=https://gojapan.vn/nhung-dieu-can-biet-ve-xuat-khau-lao-dong-nhat-ban/ >
[Chi tiết A-Z] thông tin xuất khẩu lao động Nhật Bản 2020	</a></h3><div
class=elementor-post__excerpt><p>Đi xuất khẩu lao động Nhật Bản thường có công việc tốt, mức thu nhập từ 25 – 50 triệu/tháng nhưng nếu chọn sai đơn</p></div></div></article></div></div></div><div
class="elementor-element elementor-element-59027bfd elementor-align-center elementor-widget elementor-widget-button" data-id=59027bfd data-element_type=widget data-widget_type=button.default><div
class=elementor-widget-container><div
class=elementor-button-wrapper>
<a
href=https://gojapan.vn/goc-tu-van-hoc-tieng-nhat-va-di-nhat/ class="elementor-button-link elementor-button elementor-size-sm" role=button>
<span
class=elementor-button-content-wrapper>
<span
class=elementor-button-text>Xem thêm</span>
</span>
</a></div></div></div></div></div></div></div></div></section><section
class="elementor-section elementor-top-section elementor-element elementor-element-5bb5a4c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=5bb5a4c data-element_type=section><div
class="elementor-container elementor-column-gap-default"><div
class=elementor-row><div
class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b8896f4" data-id=b8896f4 data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-d3e5465 elementor-widget elementor-widget-template" data-id=d3e5465 data-element_type=widget data-widget_type=template.default><div
class=elementor-widget-container><div
class=elementor-template><div
data-elementor-type=section data-elementor-id=3955 class="elementor elementor-3955" data-elementor-settings=[]><div
class=elementor-section-wrap><section
class="elementor-section elementor-top-section elementor-element elementor-element-85d4b08 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=85d4b08 data-element_type=section><div
class="elementor-container elementor-column-gap-default"><div
class=elementor-row><div
class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fa2976e" data-id=fa2976e data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-83fff5f elementor-widget elementor-widget-heading" data-id=83fff5f data-element_type=widget data-widget_type=heading.default><div
class=elementor-widget-container><h2 class="elementor-heading-title elementor-size-default">Báo chí nói về gojapan</h2></div></div><section
class="elementor-section elementor-inner-section elementor-element elementor-element-811869f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=811869f data-element_type=section><div
class="elementor-container elementor-column-gap-default"><div
class=elementor-row><div
class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4c96dc9" data-id=4c96dc9 data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-0b40718 elementor-widget elementor-widget-image" data-id=0b40718 data-element_type=widget data-widget_type=image.default><div
class=elementor-widget-container><div
class=elementor-image>
<img
src=https://gojapan.vn/wp-content/uploads/elementor/thumbs/24h_logo_trang_chu_2015-osgmvut87hzyeio4vvpcuwt5d5ityc4zkd0owyj4lc.png title=24h_logo_trang_chu_2015 alt=24h_logo_trang_chu_2015></div></div></div><div
class="elementor-element elementor-element-c7411d0 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id=c7411d0 data-element_type=widget data-widget_type=image-box.default><div
class=elementor-widget-container><div
class=elementor-image-box-wrapper><figure
class=elementor-image-box-img><a
href=https://www.24h.com.vn/tin-tuc-giao-duc/gojapan-tien-phong-nang-buoc-uoc-mo-den-xu-phu-tang-c678a1162259.html target=_blank rel="nofollow noopener"><img
width=600 height=338 src=https://gojapan.vn/wp-content/uploads/2020/07/Gojapan-tien-phong-nang-buoc-uoc-mo-den-xu-Phu-Tang-nang-buoc-4-1593682445-162-width600height338.jpg class="attachment-full size-full" alt="Trang chủ" loading=lazy srcset="https://gojapan.vn/wp-content/uploads/2020/07/Gojapan-tien-phong-nang-buoc-uoc-mo-den-xu-Phu-Tang-nang-buoc-4-1593682445-162-width600height338.jpg 600w, https://gojapan.vn/wp-content/uploads/2020/07/Gojapan-tien-phong-nang-buoc-uoc-mo-den-xu-Phu-Tang-nang-buoc-4-1593682445-162-width600height338-300x169.jpg 300w, https://gojapan.vn/wp-content/uploads/2020/07/Gojapan-tien-phong-nang-buoc-uoc-mo-den-xu-Phu-Tang-nang-buoc-4-1593682445-162-width600height338-150x85.jpg 150w" sizes="(max-width: 600px) 100vw, 600px" title="Trang chủ 48"></a></figure><div
class=elementor-image-box-content><h3 class="elementor-image-box-title"><a
href=https://www.24h.com.vn/tin-tuc-giao-duc/gojapan-tien-phong-nang-buoc-uoc-mo-den-xu-phu-tang-c678a1162259.html target=_blank rel="nofollow noopener">Gojapan – Tiên phong nâng bước ước mơ đến xứ Phù Tang</a></h3></div></div></div></div></div></div></div><div
class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6f5b4dd" data-id=6f5b4dd data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-9d723cd elementor-widget elementor-widget-image" data-id=9d723cd data-element_type=widget data-widget_type=image.default><div
class=elementor-widget-container><div
class=elementor-image>
<img
src=https://gojapan.vn/wp-content/uploads/elementor/thumbs/lg_dantri_dktop-osid6phjo4alagsw7d64exod3msgmg3t9g5p1p15og.png title=lg_dantri_dktop alt=lg_dantri_dktop></div></div></div><div
class="elementor-element elementor-element-cdc7930 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id=cdc7930 data-element_type=widget data-widget_type=image-box.default><div
class=elementor-widget-container><div
class=elementor-image-box-wrapper><figure
class=elementor-image-box-img><a
href=https://dantri.com.vn/giao-duc-khuyen-hoc/ung-dung-gojapan-de-viec-hoc-tieng-nhat-khong-con-dang-so-20200715125200335.htm target=_blank rel="nofollow noopener"><img
width=600 height=338 src=https://gojapan.vn/wp-content/uploads/2020/07/Gojapan.jpg class="attachment-full size-full" alt="Trang chủ" loading=lazy srcset="https://gojapan.vn/wp-content/uploads/2020/07/Gojapan.jpg 600w, https://gojapan.vn/wp-content/uploads/2020/07/Gojapan-300x169.jpg 300w, https://gojapan.vn/wp-content/uploads/2020/07/Gojapan-150x85.jpg 150w" sizes="(max-width: 600px) 100vw, 600px" title="Trang chủ 49"></a></figure><div
class=elementor-image-box-content><h3 class="elementor-image-box-title"><a
href=https://dantri.com.vn/giao-duc-khuyen-hoc/ung-dung-gojapan-de-viec-hoc-tieng-nhat-khong-con-dang-so-20200715125200335.htm target=_blank rel="nofollow noopener">Ứng dụng Gojapan - Để việc học tiếng Nhật không còn "đáng sợ"</a></h3></div></div></div></div></div></div></div><div
class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-18bbf7a" data-id=18bbf7a data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-29919e1 elementor-widget elementor-widget-image" data-id=29919e1 data-element_type=widget data-widget_type=image.default><div
class=elementor-widget-container><div
class=elementor-image>
<img
src=https://gojapan.vn/wp-content/uploads/elementor/thumbs/logo-k14-osgmp66jlwujucdnwzov4lj5aigv7tlpba0e24fwu8.png title=logo-k14 alt=logo-k14></div></div></div><div
class="elementor-element elementor-element-9d69213 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id=9d69213 data-element_type=widget data-widget_type=image-box.default><div
class=elementor-widget-container><div
class=elementor-image-box-wrapper><figure
class=elementor-image-box-img><a
href=https://kenh14.vn/ung-dung-gojapan-de-viec-hoc-tieng-nhat-khong-con-dang-so-20200713172451155.chn target=_blank rel="nofollow noopener"><img
width=792 height=436 src=https://gojapan.vn/wp-content/uploads/2020/07/Banner_báo-trang-home.jpg class="attachment-full size-full" alt="Trang chủ" loading=lazy srcset="https://gojapan.vn/wp-content/uploads/2020/07/Banner_báo-trang-home.jpg 792w, https://gojapan.vn/wp-content/uploads/2020/07/Banner_báo-trang-home-300x165.jpg 300w, https://gojapan.vn/wp-content/uploads/2020/07/Banner_báo-trang-home-150x83.jpg 150w, https://gojapan.vn/wp-content/uploads/2020/07/Banner_báo-trang-home-768x423.jpg 768w" sizes="(max-width: 792px) 100vw, 792px" title="Trang chủ 50"></a></figure><div
class=elementor-image-box-content><h3 class="elementor-image-box-title"><a
href=https://kenh14.vn/ung-dung-gojapan-de-viec-hoc-tieng-nhat-khong-con-dang-so-20200713172451155.chn target=_blank rel="nofollow noopener">Gojapan - Ứng dụng hàng đầu cho người học tiếng Nhật đi XKLĐ</a></h3></div></div></div></div></div></div></div><div
class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-5b1ac52" data-id=5b1ac52 data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><div
class="elementor-element elementor-element-027c49d elementor-widget elementor-widget-image" data-id=027c49d data-element_type=widget data-widget_type=image.default><div
class=elementor-widget-container><div
class=elementor-image>
<img
src=https://gojapan.vn/wp-content/uploads/elementor/thumbs/dspl-osgmpo1h7rizyxnq0perxz0wku0ua2klpqem6dpfk0.png title=dspl alt=dspl></div></div></div><div
class="elementor-element elementor-element-a29b6df elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id=a29b6df data-element_type=widget data-widget_type=image-box.default><div
class=elementor-widget-container><div
class=elementor-image-box-wrapper><figure
class=elementor-image-box-img><a
href=https://www.doisongphapluat.com/xa-hoi/gojapan-tien-phong-nang-buoc-uoc-mo-den-xu-phu-tang-a330256.html target=_blank rel="nofollow noopener"><img
width=600 height=338 src=https://gojapan.vn/wp-content/uploads/2020/07/Gojapan-tien-phong.jpg class="attachment-full size-full" alt="Trang chủ" loading=lazy srcset="https://gojapan.vn/wp-content/uploads/2020/07/Gojapan-tien-phong.jpg 600w, https://gojapan.vn/wp-content/uploads/2020/07/Gojapan-tien-phong-300x169.jpg 300w, https://gojapan.vn/wp-content/uploads/2020/07/Gojapan-tien-phong-150x85.jpg 150w" sizes="(max-width: 600px) 100vw, 600px" title="Trang chủ 51"></a></figure><div
class=elementor-image-box-content><h3 class="elementor-image-box-title"><a
href=https://www.doisongphapluat.com/xa-hoi/gojapan-tien-phong-nang-buoc-uoc-mo-den-xu-phu-tang-a330256.html target=_blank rel="nofollow noopener">Gojapan – Nơi tạo dựng con đường lập nghiệp thanh niên</a></h3></div></div></div></div></div></div></div></div></div></section></div></div></div></div></div></section></div></div></div></div></div></div></div></div></div></div></section></div></div>
</div>

 




</div>