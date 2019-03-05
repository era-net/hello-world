// Javascript-file

$(document).ready(function () {
    
    console.log('Hello World');

    $('#update_button').click(function (e) { 
        e.preventDefault();
        //console.log(e);

        var check = true;

        var brand = $('#brand').val();
        var car_type = $('#car_type').val();
        var body_type = $('#body_type').val();
        var color = $('#color').val();
        var cubic = $('#cubic').val();
        var fuel = $('#fuel').val();
        var hp = $('#hp').val();
        var mileage = $('#mileage').val();
        //console.log('Car: ' + brand + ', ' + car_type + ', ' + body_type + ', ' + color + ', ' + cubic + ', ' + fuel + ', ' + hp + ', ' + mileage); 

        var form_data = $('#car_form').serialize();
        //console.log(form_data);

        var form_data_array = $('#car_form').serializeArray();
        //console.log(form_data_array);

        if(!brand || !car_type || !body_type || !fuel) {
            check = false;
        }

        if(!check) {
            console.error('Validation error!');
        } else {
            updateCar(form_data_array);
        }
    });

});

/**
 * Read all cars from DB 
 */
function readCars() {
    var html = '';
    $.ajax({
        type: "GET", // GET, POST, DELETE, PUT
        url: "ajax.php",
        dataType: "JSON",
        success: function (response) {
            console.log(response);

            $.each(response, function (key, value) { 
                html += '<p>'+value.brand+'</p>';
            });

            $('#car_table').html(html);
        },
        error: function (response) {
            console.error(response);
        },
        complete: function () {
            console.log('Read completed!');
        }
    });
}

/**
 * Insert a car
 * @param {array} data 
 */
function updateCar(data) {
    //console.log(data);
    $.ajax({
        type: "POST", // GET, POST, DELETE, PUT
        url: "ajax.php",
        data: data,
        dataType: "JSON",
        success: function (response) {
            console.log(response);
        },
        error: function (response) {
            console.error(response);
        },
        complete: function () {
            console.log('Request completed!');
            readCars();
        }
    });
}




