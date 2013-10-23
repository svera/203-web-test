$(function() {
    remoteQuery();
})

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
                }
            }
        );
    })
}

function renderData(data)
{
    var html = '<table class="table"><tbody>';
    for (index in data) {
        html += '<tr><td>' + data[index].name + '</td></tr>';
    }
    html += "</tbody></table>";
    return html;    
}