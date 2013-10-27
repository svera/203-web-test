$(function() {
    remoteQuery();
})

/**
 * Makes a remote call to the search action
 */
function remoteQuery()
{
    $('#search-form').submit(function(e) {
        e.preventDefault();
        if ($.trim($(this).find('input[type=text]').first().val()) != '') {
            $(this).find('input[type=submit]').first().attr('disabled', 'disabled');
            $('#wrapper').html('<p>Searching...</p>');
            $.get(
                $(this).attr('action'),
                $(this).find('input[type=text]').first(),
                function(data) {
                    if (data.length > 0) {
                        $('#wrapper').html(renderData(data));
                    } else {
                        $('#wrapper').html('<p>No results found.</p>');
                    }
                }
            )
            .fail(function() {
                $('#wrapper').html('<p>Internal server error</p>');
            })
            .always(function() {
                $('#search-form').find('input[type=submit]').first().removeAttr('disabled');
            });            
        }
    })
}

/**
 * Renders a table with the passed data 
 * @todo Keep HTML hardcoded into JS is not a good idea
 */
function renderData(data)
{
    var html = '<table class="table table-striped"><thead><tr><th>Name</th></tr></thead><tbody>';
    for (index in data) {
        html += '<tr><td>' + data[index].name + '</td></tr>';
    }
    html += "</tbody></table>";
    return html;    
}