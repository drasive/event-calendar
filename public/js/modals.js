// Focus the marked element
$('.modal').on('shown.bs.modal', function () {
    focusInput($('[autofocus]'));
});

// Make sure the content is loaded from the remote every time
$('.modal-remote').on('hidden.bs.modal', function () {
    $(this).removeData('bs.modal');
});
