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
