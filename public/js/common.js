// UI
function focusInput(element) {
    element.focus();
	
	// Puts the cursor at the end of the content
    var content = element.val();
    element.val('');
    element.val(content);
}
