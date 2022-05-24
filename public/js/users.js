const TOASTIFY = {
    show: function(message, status = 'success', title = '', display = 'topRight', timeout = 3000) {
        let options  = {
            title: title,
            message: message,
            timeout: timeout,
            position: display,
            progressBarColor: 'rgba(0, 0, 0, 0.3)',
            zindex: 999999,
            transitionIn: "fadeIn",
            transitionOut: "fadeOut",
            ransitionInMobile: 'fadeIn',
            transitionOutMobile: 'fadeOut',
        };

    switch (status) {
        case 'error':
        iziToast.error(options);
        break;
        case 'info':
        iziToast.info(options);
        break;
        case 'warning':
        iziToast.warning(options);
        break;
        default:
        iziToast.success(options);
        break;
    }
    }

};


deleteUser  = (e) => {
    var user_id = e.getAttribute('data-user_id')


    $.ajax({
        url : `/${user_id}`,
        type: "DELETE",
        data: {'_token': token},
        success: function(response, textStatus, jqXHR) {
            if(response.status == 'success'){
                TOASTIFY.show(response.message, 'success')
                dataTable.ajax.reload();

            }
            console.log(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR)
        }
    })

}

getUser = (e) => {
    var user_id = e.getAttribute('data-user_id')
    console.log(user_id)

    $.ajax({
        url : `/users/${user_id}`,
        type: "GET",
        data: {'_token': token},
        success: function(response, textStatus, jqXHR) {
            if(response.status == 'success'){
                data = response.data;
                // Set up form
                var inputFields = ['firstname', 'lastname', 'username', 'email', 'employee_id', 'phone'];
                inputFields.forEach( field => {

                    $(`#addModal input[name="${field}"]`).val(data[field]);
                })
                // set selected role
                role = data.roles[0].name
                // console.log(role);
                $(`#addModal option[value="${role}"]`).prop('selected', true)
                $('#modal-lbl').text('Update User')
                $('#form-submit').text('Update User')
                $(`#addModal input[name="user_id"]`).val(user_id);
                $(`#addModal input[name="type"]`).val('update');

                $('#addModal').modal('show')


            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR)
        }
    })

}

