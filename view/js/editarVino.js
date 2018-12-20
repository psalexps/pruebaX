
$(document).ready(function () {

    let nombreVino = $('#nombreVino');
    let descVino = $('#descVino');
    let annoVino = $('#annoVino');
    let alcoholVino = $('#alcoholVino');
    let tipoVino = $('#tipoVino');
    let updateVino = $('#updateVino');

    function on() {
        $('#editarVino').click(function () {

            if (nombreVino.prop('disabled')) {
                nombreVino.prop("disabled", false);
            }
            else {
                nombreVino.prop("disabled", true);
            }

            if (descVino.prop('disabled')) {
                descVino.prop("disabled", false);
            }
            else {
                descVino.prop("disabled", true);
            }

            if (annoVino.prop('disabled')) {
                annoVino.prop("disabled", false);
            }
            else {
                annoVino.prop("disabled", true);
            }

            if (alcoholVino.prop('disabled')) {
                alcoholVino.prop("disabled", false);
            }
            else {
                alcoholVino.prop("disabled", true);
            }

            if (tipoVino.prop('disabled')) {
                tipoVino.prop("disabled", false);
            }
            else {
                tipoVino.prop("disabled", true);
            }

            if (updateVino.prop('disabled')) {
                updateVino.prop("disabled", false);
            }
            else {
                updateVino.prop("disabled", true);
            }

        });
    }

    on();

    $('#editarVino').off('click');

    on();

});