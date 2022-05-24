




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



$('#user-form').submit((event) => {
    event.preventDefault();
    let form = $('#user-form');
    formData = form.serialize();
    type  = $(`#addModal input[name="type"]`).val();
    console.log(type)

    $.ajax({
        url : `/${type}`,
        type: "POST",
        data : formData,
        success: function(response, textStatus, jqXHR) {
            if(response.status == 'success'){
                TOASTIFY.show(response.message, 'success')
                form[0].reset()
                $('#addModal').modal('hide')
                dataTable.ajax.reload();

            }
            console.log(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            errors = jqXHR.responseJSON.errors;

            for (const [key, value] of Object.entries(errors)) {
                TOASTIFY.show(value, 'error')
            }


        }
    })

    } )


tableHeader = $('#table-name').text()


$(document).ready( () => {
    dataTable = $('#data-table').DataTable({
        "paging":   false,
        "ordering": false,
        "info":     false,
        scrollY: 380,

        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search..."
            },
        "ajax": {
            url : "/users",
            type : 'GET'
        },
        });

        $("#data-table_filter label").append('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search" style="position: relative;right: 58px;width: 18px;"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>');
        $("#data-table_filter").prepend(`<h6 class="float-left ml-2 mt-4">${tableHeader}</h6>`);



} );
