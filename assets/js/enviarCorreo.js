$(function () {
    $('.submitForm').click(function (e) {
        e.preventDefault()
        $.ajax({
            url: "assets/enviarCorreo.php",
            data: {
                'name': $('#name').val(),
                'cellphone': $('#cellphone').val(),
                'email': $('#email').val(),
                'subject': $('#subject').val(),
                'message': $('#message').val(),
            },
            type: "POST"
        }).done(function(res) {
            const response = JSON.parse(res)
            Swal.fire(
                `¡Gracias por preferirnos ${response.name}!`,
                `Pronto nos comunicaremos contigo al número que nos proporcionaste: ${response.cellphone}`,
                'success'
            )
            $('#name').val() = '';
            $('#cellphone').val() = '';
            $('#email').val() = '';
            $('#subject').val() = '';
            $('#message').val() = '';
        });
    })
})