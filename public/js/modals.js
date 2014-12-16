// Focus the marked element
$('.modal').on('shown.bs.modal', function () {
    focusInput($('[autofocus]'));
});

// Make sure the content is loaded from the remote every time
$('.modal-remote').on('hidden.bs.modal', function () {
    $(this).removeData('bs.modal');
});

// Set max-height manually for wide modals 
$('.modal-wide').on('show.bs.modal', function() {
  var height = $(window).height() - 200; // 200px is approximately the height of the modal padding, title and button bar combined
  $(this).find('.modal-body').css('max-height', height);
});
