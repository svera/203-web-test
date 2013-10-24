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
        );
    })
}

/**
 * Renders a table with the passed data 
 */
function renderData(data)
{
    var html = '<table class="table"><tbody>';
    for (index in data) {
        html += '<tr><td>' + data[index].name + '</td></tr>';
    }
    html += "</tbody></table>";
    return html;    
}