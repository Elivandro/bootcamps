$(document).ready(function() {

    $(".togglePassword").on('click', function(e) {
        e.preventDefault()

        var input_group = $(this).closest('.form-group')
        var input = input_group.find('input.form-control')
        var icon = input_group.find('i')

        input.attr('type', input.attr("type") === "text" ? 'password' : 'text')

        icon.toggleClass('fa-eye-slash fa-eye')
    });

    var closebtns = document.getElementsByClassName("btn-close");
    var i;

    for (i = 0; i < closebtns.length; i++) {
            closebtns[i].addEventListener("click", function() {
            this.parentElement.style.display = 'none';
        });
    }

    $('#zipcode').mask('00000-000');
    $('#cpf').mask('000.000.000-00');
    $('#phone').mask('(00) 0 0000-0000');

    $(".form").submit(function() {
        $("#zipcode").unmask();
        $("#cpf").unmask();
        $("#phone").unmask();
    });

});