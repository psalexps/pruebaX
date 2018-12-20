
$(document).ready(function () {

    let nombreBodega = $('#nombreBodega');
    let direccionBodega = $('#direccionBodega');
    let emailBodega = $('#emailBodega');
    let telefonoBodega = $('#telefonoBodega');
    let personaContactoBodega = $('#personaContactoBodega');
    let annoFundacionBodega = $('#annoFundacionBodega');
    let disponibleRestauranteBodegaSi = $('#disponibleRestauranteBodegaSi');
    let disponibleRestauranteBodegaNo = $('#disponibleRestauranteBodegaNo');
    let disponibleHotelBodegaSi = $('#disponibleHotelBodegaSi');
    let disponibleHotelBodegaNo = $('#disponibleHotelBodegaNo');
    let updateBodega = $('#updateBodega');

    function on() {
        $('#editarBodega').click(function () {

            if (nombreBodega.prop('disabled')) {
                nombreBodega.prop("disabled", false);
            }
            else {
                nombreBodega.prop("disabled", true);
            }

            if (direccionBodega.prop('disabled')){
                direccionBodega.prop('disabled', false);
            }
            else {
                direccionBodega.prop('disabled', true);
            }

            if (emailBodega.prop('disabled')){
                emailBodega.prop('disabled', false);
            }
            else {
                emailBodega.prop('disabled', true);
            }

            if (telefonoBodega.prop('disabled')){
                telefonoBodega.prop('disabled', false);
            }
            else {
                telefonoBodega.prop('disabled', true);
            }

            if (personaContactoBodega.prop('disabled')){
                personaContactoBodega.prop('disabled', false);
            }
            else {
                personaContactoBodega.prop('disabled', true);
            }

            if (annoFundacionBodega.prop('disabled')){
                annoFundacionBodega.prop('disabled', false);
            }
            else {
                annoFundacionBodega.prop('disabled', true);
            }

            if (disponibleRestauranteBodegaSi.prop('disabled')){
                disponibleRestauranteBodegaSi.prop('disabled', false);
            }
            else {
                disponibleRestauranteBodegaSi.prop('disabled', true);
            }

            if (disponibleRestauranteBodegaNo.prop('disabled')){
                disponibleRestauranteBodegaNo.prop('disabled', false);
            }
            else {
                disponibleRestauranteBodegaNo.prop('disabled', true);
            }

            if (disponibleHotelBodegaSi.prop('disabled')){
                disponibleHotelBodegaSi.prop('disabled', false);
            }
            else {
                disponibleHotelBodegaSi.prop('disabled', true);
            }

            if (disponibleHotelBodegaNo.prop('disabled')){
                disponibleHotelBodegaNo.prop('disabled', false);
            }
            else {
                disponibleHotelBodegaNo.prop('disabled', true);
            }

            if (updateBodega.prop('disabled')){
                updateBodega.prop('disabled', false);
            }
            else {
                updateBodega.prop('disabled', true);
            }

        });
    }

    on();

    $('#editarBodega').off('click');

    on();

});