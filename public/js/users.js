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
    console.log(user_id)


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

