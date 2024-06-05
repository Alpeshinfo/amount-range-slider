<?php
function range_slider_plugin_shortcode() {
    $percentage1 = get_option('range_slider_percentage_1', 1);
    $percentage2 = get_option('range_slider_percentage_2', 3);

    ob_start();
    ?>
    <div id="main-widget">
    <div class="flex-container">
        <div class="flex-item text-title" style="text-align:left;font-size: 18px;">HOME PRICE</div>
        <div class="flex-item" style="text-align:right;     font-size: 25px;
    color: #DE5021;" >$<span id="selected-value">13000</span></div>
        
    </div>
     <div class="flex-container" style="padding: 0px 0px 30px 15px;">
        <div class="flex-item home-price"  style="padding: 0px;" id="range-slider-container"><input type="range" id="range-slider" class="slider__input" min="13000" max="2000000" step="100" value="800000"></div>
       
        
    </div>
    
     <div class="flex-container">
        <div class="flex-item"><div class="inner-row">
                    <div class="col text-title">OUR TOTAL <br> COMMISSION</div>
                    <div class="col text-value">$<span id="value-1-percent"></span></div>
                </div></div>
        <div class="flex-item" style="    flex: 0;
    font-size: 10px;
    background: #dd4e29;
    color: #fff;
    border-radius: 50%;
    padding: 6px 6px 3px 6px;">VS</div>
         <div class="flex-item"><div class="inner-row">
                    <div class="col text-title"><?php echo esc_html($percentage2); ?>%  TOTAL <br> COMMISSION</div>
                    <div class="col text-value"> $<span id="value-2-percent"></span></div>
                </div></div>
          <div class="flex-item">
               <div class="inner-row saving-box" >
                    <div class="col">SAVINGS</div>
                    <div class="col savings">$<span id="difference"></span></div>
                </div>
       
         </div>
    </div>
    <style>
}
    </style>

    <script>
        var percentage1 = <?php echo esc_js($percentage1); ?>;
        var percentage2 = <?php echo esc_js($percentage2); ?>;
    </script>
    <?php
    return ob_get_clean();
}

add_shortcode('range_slider', 'range_slider_plugin_shortcode');
