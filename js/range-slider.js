jQuery(document).ready(function ($) {
  var $rangeSlider = $('#range-slider');
  var $selectedValue = $('#selected-value');
  var $value1Percent = $('#value-1-percent');
  var $value2Percent = $('#value-2-percent');
  var $difference = $('#difference');

  function updateValues() {
    var value = $rangeSlider.val();
    
    $selectedValue.text(format_my_number(value));

    var value1 = value * (percentage1 / 100);
    var value2 = value * (percentage2 / 100);
    
    

    $value1Percent.text(format_my_number(value1));
    $value2Percent.text(format_my_number(value2));
    $difference.text(format_my_number(value2 - value1));
  }
  
  function format_my_number(value)
  {
      const formatter = new Intl.NumberFormat('en-US');
    const formattedNumber = formatter.format(value); // Formats as USD currency: "$4,999.99"
    return formattedNumber
  }

  $rangeSlider.on('input', updateValues);
  updateValues();
});
