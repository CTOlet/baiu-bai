(function () {
    $('#order-form').on('submit', function (event) {
        $form = $(event.target);
        $.ajax({
            'url': $form.attr('action'),
            'method': 'POST',
            'data': $form.serialize(),
            'dataType': 'json',
            'success': function () {
                $form[0].reset();
                alert('Спасибо, Ваш заказ принят в обработку');
            },
            'error': function () {
                alert('Ошибка создания заказа; пожалуйста, попробуйте еще раз или свяжитесь с нами по телефону');
            }
        });

        event.preventDefault();
    });

    $('input[name="phone"]').inputmask('+7(799)999-99-99');
})();