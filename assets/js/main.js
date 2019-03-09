$(document).ready(function() {
    var ratings = {};
    $('.ui.rating').rating('setting', 'onRate', function(value) {
        var  ratedAttr = $(this)[0];
        ratings[ratedAttr.id] = value;
    });

     $('.ui.normal.dropdown').dropdown('setting', 'onChange', function(vale) {
        var dropdown = $(this)[0];
        ratings[dropdown.id] = $(this).dropdown('get value');
     });

     $('#personal_remark').on('change', function() {
         var textarea = $(this)[0];
        ratings[textarea.id] = textarea.value;
     });

     $('#screen-btn-submit').on('click', function() {
        console.log(ratings);
     });

    $('.sidebar').sidebar({
        dimPage: false,
        transition: 'push',
        exclusive: false,
        closable: true
    });

    $('#show-menu').on('click', function() {
        $('.sidebar').sidebar('toggle');
    });

    var state = [{
        "name": "John Snow",
        "id": 1
    }, {
        "name": "Joe Biden",
        "id": 2
    }, {
        "name": "Bob Marley",
        "id": 3
    }, {
        "name": "Anne Hathaway",
        "id": 4
    }, {
        "name": "Jacob deGrom",
        "id": 5
    }];
    var states = new Bloodhound({
        datumTokenizer: function(data) {
            return Bloodhound.tokenizers.whitespace(data.name);
        },
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        // `states` is an array of state names defined in "The Basics"
        local: state /*remote: {
                    url: 'http://localhost/rating-system/user/get_faculty_data',
                    transform: function(data) {

                        return data;
                    }
                  }*/

    });
    ///states.initialize();

    var curScreen = 1;
    $('.typeahead').typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        name: 'states',
        display: 'name',
        source: states.ttAdapter()
    });
    $('.typeahead').bind('typeahead:select', function(ev, suggestion) {
        $('.rating-modal').modal('show');
        // open modal and set facultly rating object.
    });

    $('.rating-modal').modal({
        onHidden: function() {
            curScreen = 1;

            $('#screen-btn').show();
            $('#screen-btn-submit').hide();

            $('.ui.rating').rating('set rating', function(rating) {
                return 0;
            });
            ratings = {};
            for (var x = 1; x <= 3; x++) {
                $('#step-' + x).removeClass('completed');
                $('#step-' + x).removeClass('active');

                if (x == curScreen)
                    $('.screen-' + x).show();
                else
                    $('.screen-' + x).hide();
            }

        }
    });
   

   // $('.screen-1, .screen-2, .screen-3').hide();
    function showScreen(screen) {
       // console.log(screen)
        if (screen == 3) {
            $('#screen-btn').hide();
            $('#screen-btn-submit').show();
        } else {
            $('#screen-btn').show();
            $('#screen-btn-submit').hide();

        }
        if (screen > 3)
            return false;
        for (var x = 1; x <= 3; x++) {
            if (x == screen) {
                $('.screen-' + x).show();
                $('#step-' + x).addClass('active');
            } else {
                $('.screen-' + x).hide();
                $('#step-' + x).removeClass('active');
            }
        }
    }

    showScreen(curScreen);
    $('#screen-btn-submit').hide();
    $('#screen-btn').on('click', function() {
        if (curScreen <= 4) {
            showScreen(++curScreen);
            $('#step-' + (curScreen - 1)).addClass('completed');

        }

    });
    $('#screen-btn-back').on('click', function() {
        //console.log(curScreen)
        if (curScreen - 1 > 0) {
            if (curScreen == 4) {
                showScreen(curScreen - 2);
                curScreen = curScreen - 2;
            } else
                showScreen(--curScreen);
        }
        return false;
    });
});
