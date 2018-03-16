$(document).ready(function(){

    //populate contacts list
    listContacts();

    //validation fields
    $('.cep').mask('00000-000');
    $('.date').mask('00/00/0000');
    $('.phone').mask('0000-0000');
    $('.phone_with_ddd').mask('(00) 00000-0000');
    $('.cpf').mask('000.000.000-00', {reverse: true});

    //list contact
    function listContacts(){
        //clear div
        $('#contact-body').empty();
        //get all and populate
        $.ajax({
            type: 'GET',
            url: window.location.pathname + 'rest/contact/list',
            success: function (res) {
                $.each(res, function(i, item) {
                    $('#contact-body').append(
                    "<tr>" +
                        "<td>" + item.id + "</td>" +
                        "<td>" + item.name + "</td>" +
                        "<td>" + item.phone_number + "</td>" +
                        "<td>" + item.email + "</td>" +
                        "<td>" +
                            "<a class='edit-contact' data-toggle='modal' data-id='" + item.id + "' data-target='.bs-edit-modal-lg' href='#'>editar</a> | " +
                            "<a class='delete-contact' data-id='" + item.id + "' href='#'>excluir</a>" +
                        "</td>" +
                    "</tr>")
                })
            },
            error: function (res) {
                console.log(res);
            }
        });
    }

    //clear form
    function clearForm($form){
        $form.find(':input').not(':button, :submit, :reset, :hidden, :checkbox, :radio').val('');
        $form.find(':checkbox, :radio').prop('checked', false);
    }

    //populate contact edit form
    $('#contact-body').delegate('.edit-contact','click', function() {

        let id = $(this).data('id');

        //get all and populate
        $.ajax({
            type: 'GET',
            url: window.location.pathname + 'rest/contact/list/' + id,
            success: function (res) {
                $('#edit-modal .modal-body #edit_id').val(id);
                $('#edit-modal .modal-body #edit_name').val(res[0].name);
                $('#edit-modal .modal-body #edit_last_name').val(res[0].last_name);
                $('#edit-modal .modal-body #edit_phone_number').val(res[0].phone_number);
                $('#edit-modal .modal-body #edit_email').val(res[0].email);
                $('#edit-modal .modal-body #edit_cpf').val(res[0].cpf);
                $('#edit-modal .modal-body #edit_birth_date').val(res[0].birth_date);
                $('#edit-modal .modal-body #edit_street').val(res[0].street);
                $('#edit-modal .modal-body #edit_number').val(res[0].number);
                $('#edit-modal .modal-body #edit_neighborhood').val(res[0].neighborhood);
                $('#edit-modal .modal-body #edit_city').val(res[0].city);
                $('#edit-modal .modal-body #edit_state').val(res[0].state);
                $('#edit-modal .modal-body #edit_country').val(res[0].country);
            },
            error: function (res) {
                console.log(res);
            }
        });
    });

    //edit contact
    $('#edit-form').submit(function(e){
        e.preventDefault();

        //validate fields
        if(!($('#edit_name').val().length) || !($('#edit_phone_number').val().length) || !($('#edit_email').val().length)) {
            alert('Preencha todos os campos');
            return;
        }

        //get field
        let id = $('#edit_id').val();
        let name = $('#edit_name').val();
        let last_name = $('#edit_last_name').val();
        let phone_number = $('#edit_phone_number').val();
        let email = $('#edit_email').val();
        let cpf = $('#edit_cpf').val();
        let birth_date = $('#edit_birth_date').val();
        let street = $('#edit_street').val();
        let number = $('#edit_number').val();
        let neighborhood = $('#edit_neighborhood').val();
        let city = $('#edit_city').val();
        let state = $('#edit_state').val();
        let country = $('#edit_country').val();

        //make update
        $.ajax({
            type: 'PUT',
            crossDomain: true,
            url: window.location.pathname + 'rest/contact/update/' + id,
            data: {
                name : name,
                last_name : last_name,
                cpf : cpf,
                email : email,
                phone_number : phone_number,
                birth_date : birth_date,
                street : street,
                number : number,
                neighborhood : neighborhood,
                city : city,
                state : state,
                country : country
            },
            success: function(){
                listContacts();
                alert('Contato atualizado com sucesso!');
                clearForm($('#edit-modal'));
                $('#edit-modal').modal('toggle');
            },
            error: function(res){
                console.log(res);
            }
        });
    });

    //on submit create contact form
    $('#create-form').submit(function(e){
        e.preventDefault();

        //validate fields
        if(!($('#name').val().length) || !($('#last_name').val().length) || !($('#phone_number').val().length) || !($('#email').val().length) || !($('#cpf').val().length) || !($('#birth_date').val().length) || !($('#street').val().length) || !($('#number').val().length) || !($('#neighborhood').val().length) || !($('#city').val().length) || !($('#state').val().length) || !($('#country').val().length)) {
            alert('Preencha todos os campos');
            return;
        }

        //get field
        let name = $('#name').val();
        let last_name = $('#last_name').val();
        let phone_number = $('#phone_number').val();
        let email = $('#email').val();
        let cpf = $('#cpf').val();
        let birth_date = $('#birth_date').val();
        let street = $('#street').val();
        let number = $('#number').val();
        let neighborhood = $('#neighborhood').val();
        let city = $('#city').val();
        let state = $('#state').val();
        let country = $('#country').val();

        //make insert
        $.ajax({
            type: 'POST',
            url: window.location.pathname + 'rest/contact/create',
            data: {
                name : name,
                last_name : last_name,
                cpf : cpf,
                email : email,
                phone_number : phone_number,
                birth_date : birth_date,
                street : street,
                number : number,
                neighborhood : neighborhood,
                city : city,
                state : state,
                country : country
            },
            success: function(){
                listContacts();
                alert('Contato inserido com sucesso!');
                clearForm($('#create-modal'));
                $('#create-modal').modal('toggle');
            },
            error: function(res){
                console.log(res);
            }
        });

    });
});