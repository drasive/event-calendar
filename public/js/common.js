$(function(){
    
    // ========== General ==========    
    // Instantiate jQuery accordion
    $('.accordion').accordion();    
    
    // Instantiate http-parameter modifying controls
    $('.http-parameter').on('click', function () {
        var keys = $(this).data('http-keys');
        var values = $(this).data('http-values');
        
        var httpParameters;
        for (var index = 0; index < keys.length; index++) {
            httpParameters = setHttpParameter(keys[index], values[index], httpParameters);
        }
        
        flushHttpParameters(httpParameters, false);
        location.reload();
    });
    
});


// UI
function focusInput(element) {
    element.focus();
	
	// Puts the cursor at the end of the content
    var content = element.val();
    element.val('');
    element.val(content);
}

// HTTP parameters
function getHttpParameters() {
    var queryString = document.location.search.split('+').join(' ');
    var parameters = {}, tokens, regex = /[?&]?([^=]+)=([^&]*)/g;

    while (tokens = regex.exec(queryString)) {
        parameters[decodeURIComponent(tokens[1])] = decodeURIComponent(tokens[2]);
    }

    return parameters;
}

function setHttpParameter(key, value, parameters) {
    key = encodeURI(key);
    value = encodeURI(value);

    // Get existing parameters
    if (typeof parameters === 'undefined' || parameters === null) {
        if (window.location.search.length > 2) {
            parameters = window.location.search.substr(1).split('&');
        } else {
            parameters = [];
        }
    }

    // Update existing parameter
    var valueUpdated = false;
    for (var index = 0; index < parameters.length; index++) {
        var parameter = parameters[index].split('=');

        if (parameter[0] === key) {
            parameter[1] = value;
            parameters[index] = parameter.join('=');

            valueUpdated = true;
            break;
        }
    }

    // Add new parameter
    if (valueUpdated === false) {
        parameters[parameters.length] = [key, value].join('=');
    }

    return parameters;
}

function flushHttpParameters(parameters, addToHistory) {
    var relativeUrl = document.URL.replace(/^(?:\/\/|[^\/]+)*\//, ''); // Removes the domain name
    if (relativeUrl.indexOf('?') != -1) {
        relativeUrl = relativeUrl.slice(0, relativeUrl.indexOf('?')); // Removes the HTTP parameters
    }

    var url = relativeUrl + '?' + parameters.join('&');
    if (addToHistory) {
        window.history.pushState(null, null, url);
    } else {
        window.history.replaceState(null, null, url);
    }
}
