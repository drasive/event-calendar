// ========== Shows ==========
var addShowButton;
var showTable;

function initializeShowManagement() {
    // Get UI elements
    addShowButton = $('#add-show').first();
    var tableId = addShowButton.data('table');
    showTable = $(tableId).first();
    
    // Event handlers
    addShowButton.on('click', function () {
        addShowRow();
    });
    
    updateShowDeleteHandlers();
}


function addShowRow() {
    showTable.find('tbody:last').append('<tr> \
                                             <td> \
                                                 <input name="show-date[]" type="date" class="form-control" \
                                                   placeholder="The date of the show. E.g.: 15.03.2015" \
                                                   required="required" title="A valid date in the format DD.MM.YYYY"> \
                                             </td> \
                                             <td> \
                                                 <input name="show-time[]" type="time" class="form-control" \
                                                   placeholder="The time the show starts at. E.g.: 21:30" \
                                                   required="required" title="00:00 to 23:59"> \
                                             </td> \
                                             <td> \
                                                 <a class="delete-show" title="Delete this show"> \
                                                     <span class="fa fa-trash fa-fw"></span> \
                                                 </a> \
                                             </td> \
                                         </tr>');
    
    updateShowDeleteHandlers();
}

function deleteShowRow(sender) {
    var row = sender.parents('tr').first();
    row.remove();
    
    updateShowDeleteHandlers();
}


function updateShowDeleteHandlers() {
    $('.delete-show').on('click', function () {
        deleteShowRow($(this));
    });
}

// ========== Links ==========
var addLinkButton;
var linkTable;

function initializeLinkManagement() {
    // Get UI elements
    addLinkButton = $('#add-link').first();
    var tableId = addLinkButton.data('table');
    linkTable = $(tableId).first();
    
    // Event handlers
    addLinkButton.on('click', function () {
        addLinkRow();
    });
    
    updateLinkDeleteHandlers();
}


function addLinkRow() {
    linkTable.find('tbody:last').append('<tr> \
                                            <td width="70%" class="margin-right"> \
                                                <input name="link-url[]" type="url" class="form-control" \
                                                  placeholder="The URL of the link. E.g.: http://www.gibm.ch" \
                                                  required="required" pattern=".{5,255}" title="A valid URL"> \
                                            </td> \
                                            <td width="30%"> \
                                                <input name="link-name[]" type="text" class="form-control" \
                                                  placeholder="The name of the link. E.g.: www.gibm.ch" \
                                                  pattern=".{0,50}" title="Maximum 50 characters"> \
                                            </td> \
                                            <td> \
                                                <a class="delete-link" title="Delete this link"> \
                                                  <span class="fa fa-trash fa-fw"></span> \
                                                </a> \
                                            </td> \
                                         </tr>');
    
    updateLinkDeleteHandlers();
}

function deleteLinkRow(sender) {
    var row = sender.parents('tr').first();
    row.remove();
    
    updateLinkDeleteHandlers();
}


function updateLinkDeleteHandlers() {
    $('.delete-link').on('click', function () {
        deleteLinkRow($(this));
    });
}
