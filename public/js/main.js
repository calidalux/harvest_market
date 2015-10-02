jQuery(document).ready(function($) {

    $('#MAIN_BUTTON').magnificPopup({
        type:'inline',
        midClick: true 
    });

    $("#CALL_FORM").submit(function() {
        $.ajax({
            type: "POST",
            url: "http://harvestltd.ru/mail",
            data: $(this).serialize()
        }).done(function() {
            location.href = '/done';
            setTimeout(function() {
                
                $("#CALL_FORM").trigger("reset");
            }, 1000);
        });
        return false;
    });

    var engine = new Bloodhound({
        remote: 
        { 
            url :'/query?filterTire=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('size'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    engine.initialize();

    $("#filterTire").typeahead({
        hint: true,
        highlight: true,
        minLength: 2
    }, {
        source: engine.ttAdapter(),
        // This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
        name: 'Tires_menu',
        // the key from the array we want to display (name,id,email,etc...)
        displayKey: 'size',
        templates: {
            empty: [
            '<div class="empty-message">Ничего нет</div>'
            ]
        }
    });
});