jQuery(function() {
    $('#select_type').on('change',function() {
        $('#attributes_type').empty();
        let type = $(this).find(':selected').val();

        switch(type) {
            case 'dvd':
                $('.dvd_attributes_container').prop('hidden', false);
                $('.book_attributes_container').prop('hidden', true);
                $('.furniture_attributes_container').prop('hidden', true);
                $('.dvd_attributes_input').prop('required', true);
                $('.book_attributes_input').prop('required', false);
                $('.furniture_attributes_input').prop('required', false);
                $('.dvd_attributes_input').prop('disabled', false);
                $('.book_attributes_input').prop('disabled', true);
                $('.furniture_attributes_input').prop('disabled', true);
                break;
            case 'book':
                $('.dvd_attributes_container').prop('hidden', true);
                $('.book_attributes_container').prop('hidden', false);
                $('.furniture_attributes_container').prop('hidden', true);
                $('.dvd_attributes_input').prop('required', false);
                $('.book_attributes_input').prop('required', true);
                $('.furniture_attributes_input').prop('required', false);
                $('.dvd_attributes_input').prop('disabled', true);
                $('.book_attributes_input').prop('disabled', false);
                $('.furniture_attributes_input').prop('disabled', true);
                break;
            case 'furniture':
                $('.dvd_attributes_container').prop('hidden', true);
                $('.book_attributes_container').prop('hidden', true);
                $('.furniture_attributes_container').prop('hidden', false);
                $('.dvd_attributes_input').prop('required', false);
                $('.book_attributes_input').prop('required', false);
                $('.furniture_attributes_input').prop('required', true);
                $('.dvd_attributes_input').prop('disabled', true);
                $('.book_attributes_input').prop('disabled', true);
                $('.furniture_attributes_input').prop('disabled', false);
                break;
        }
    });
});