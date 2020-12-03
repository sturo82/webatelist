
<div id="webate-container-filters" class="et_pb_section et_pb_section_5 et_pb_with_background et_section_regular">
    <div class="webate-filter-container filter-category et_pb_row_12 et_pb_text_align_center">
        <div class="et_pb_text_inner"><h2><strong>Cerca per categoria web-ate</strong></h2></div>
        <?php echo do_shortcode('[mdf_search_form id="48340"]') ?>
        <div class="filter-procedi">Avanti <i class="fas fa-arrow-circle-right"></i></div>
    </div>
    <div class="webate-filter-container filter-type et_pb_row_12 et_pb_text_align_center">
        <div class="et_pb_text_inner"><h2><strong>Filtra per tipologia di contenuto</strong></h2></div>
        <div class="container-input">
            <label class="container-checkbox">Podcast
                <input class="check_filter_type" type="checkbox" data-type="podcast">
                <span class="checkmark"></span>
            </label>
            <label class="container-checkbox">Video
                <input class="check_filter_type" type="checkbox" data-type="video">
                <span class="checkmark"></span>
            </label>
            <label class="container-checkbox">Paper
                <input class="check_filter_type" type="checkbox" data-type="paper">
                <span class="checkmark"></span>
            </label>
            <label class="container-checkbox">Video Focus
                <input class="check_filter_type" type="checkbox" data-type="video_focus">
                <span class="checkmark"></span>
            </label>
            
        </div>
        <div class="filter-indietro"><i class="fas fa-arrow-circle-left"></i> Indietro</div>
    </div>	
</div>
<div id="webate-container" class="et_pb_section et_pb_section_5 et_pb_with_background et_section_regular">
    
    <div class="et_pb_row_12">
        
        <div class="et_pb_row posts-area et_pb_text_align_center"></div>
        <?php echo do_shortcode('[mdf_results_by_ajax shortcode="mdf_custom template=any/webate_hp post_type=webate columns=4 per_page=12 pagination=tb" animate=1 animate_target=.posts-area] ') ?>
	</div> <!-- .et_pb_row -->			
</div>
<style>
     /* Customize the label (the container) */
.container-checkbox {
  display: block;
  position: relative;
  padding-left: 25px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 14px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
    margin-right: 20px;
  display: inline-block;
}

/* Hide the browser's default checkbox */
.container-checkbox input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #fff;
  border: 2.5px solid #CE1C4F;
}

/* On mouse-over, add a grey background color */
.container-checkbox:hover input ~ .checkmark {
  background-color: #CE1C4F;
}

/* When the checkbox is checked, add a blue background */
.container-checkbox input:checked ~ .checkmark {
  background-color: #CE1C4F;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  /*content: "";
  position: absolute;
  display: none;*/
}

/* Show the checkmark when checked */
.container-checkbox input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container-checkbox .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

.container-input{
    margin-top: 50px;
}
.slick-slide{
    display: none !important;
}
.slick-slide.visible{
    display: block !important;
}
</style>
<script>
    
(function($) {
   
  $(document).on('ready', function(){
      console.log('Document ready');
    $('.filter-procedi, .filter-indietro').click(function(){
    var hidden = $('.webate-filter-container.filter-type');
    if (hidden.hasClass('visible')){
        hidden.animate({"left":"100%"}, "slow").removeClass('visible');
    } else {
        hidden.animate({"left":"0"}, "slow").addClass('visible');
    }
    });
  })  
  $(document).on('ajaxComplete',function(){
    console.log('ajaxComplete')
    
    $('.webate-related-carousel-highlights').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '160px',
            
        });

    $('.webate-related-carousel-focus').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '160px',
    });
    $('.video-carousel').parents('.slick-slide').addClass('visible')
    $('.check_filter_type').on('change', function(){

        console.log("checked", $(this).prop('checked'))
        var data = $(this).data('type')
        var $checked = $('input.check_filter_type:checked');
        $('.slick-slide').removeClass('visible')
        console.log("Checked", $checked.length)
        if($checked.length){
            $checked.each(function(){
                console.log("webate highlights container", $('.webate-related-carousel-highlights'))
                console.log("Class to filter", '.type-'+$(this).data('type'))
                
                $('.video-carousel.type-'+$(this).data('type')).parents('.slick-slide').addClass('visible')
                
                //$('.webate-related-carousel-highlights').slick('slickFilter','body .type-'+$(this).data('type'));
                //$('.webate-related-carousel-focus').slick('slickFilter','body .type-'+$(this).data('type'));
            });
        }
        else{
            $('.slick-slide').addClass('visible')
            
        }
    });

        
    
      
 });
}(jQuery));


</script>
<!--
<script>
(function($) {
  $(document).ready(function(){
    $.ajax({
        type: 'POST',
        url: '<?php echo admin_url('admin-ajax.php');?>',
        dataType: "html", // add data type
        data: { action : 'get_ajax_webate' },
        success: function( response ) {
            console.log( response );

            $( '.posts-area' ).html( response ); 
        }
    });
 });
}(jQuery));

</script>-->



