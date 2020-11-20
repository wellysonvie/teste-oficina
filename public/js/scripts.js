
$('#price').mask('#.##0,00', {reverse: true});

$('#btn-search-date').on('click', function () {

    let url = window.location.href.split('?')[0]

    const params = new URLSearchParams({
        name: $('#input-search-name').val(),
        initial_date: $('#input-initial-date').val(),
        final_date: $('#input-final-date').val()
    })

    window.location.href = url + '?' + params.toString()
})

$('#btn-clear-filters').on('click', function () {
    window.location.href = window.location.href.split('?')[0]
})