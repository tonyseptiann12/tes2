$.ajax({
    url: 'https://api.covid19api.com',
    type: 'get',
    dataType: 'json',
    success: function (result) {
    // $.getJSON('https://api.covid19api.com/', function (data) {
        let countriesRoute = result.countryDayOneRoute
        $.each(countriesRoute, function (i, data) {
                $('#data-list').append(`
                <ul class="list-group">
                <li class="list-group-item">` + data.Name + `</li>
                <li class="list-group-item">` + data.Description + `</li>
                <li class="list-group-item">` + data.Path + `</li>
                </ul>
            `)
            })
    }
})