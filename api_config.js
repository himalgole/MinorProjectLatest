$('#province').on('change', function() {
    var province_id = this.value;
    $.ajax({
        url: 'district.php',
        type: "POST",
        data: {
            province_data: province_id
        },
        success: function(result) {
            $('#district').html(result);
            $("#pro-code").val(province_id)
        }
    });
    
});
// state city

   

$('#district').on('change', function() {
    var district_id = this.value;
    // console.log(country_id);
    $.ajax({
        url: 'city.php',
        type: "POST",
        data: {
            district_data: district_id
        },
        success: function(data) {
            $('#city').html(data);
            $("#dis-code").val(district_id);
            // console.log(data);
        }
    })
});
$('#city').on('change',function(){
    var city = this.value;
    $('#lvl-code').val(city);
});
$('document').ready(function(){
    $.ajax({
        url: 'counter_acode.php',
        type: "GET",
        success: function(data)
        {
            $('#acode').val(data);
        }
    });
    
});
