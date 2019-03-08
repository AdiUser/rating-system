<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-typeahead/2.10.6/jquery.typeahead.min.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
        <script src="assets/js/typeahead.js"></script>
        <style>
            html.ios {
                overflow-x: hidden;
                -webkit-overflow-scrolling: touch;
            }

            html.ios, html.ios body {
                height: initial !important;
            }

            .width-max {
                width: 70%;
            }

            .twitter-typeahead {
                width: 100%;
            }

            .fancy-input {
                position: relative;
                vertical-align: top;
                margin: 0;
                width: 100%;
                max-width: 100%;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 auto;
                flex: 1 0 auto;
                outline: 0;
                -webkit-tap-highlight-color: rgba(255,255,255,0);
                text-align: left;
                line-height: 1.21428571em;
                font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;
                padding: .67857143em 1em;
                background: #fff;
                border: 1px solid rgba(34,36,38,.15);
                color: rgba(0,0,0,.87);
                border-radius: .28571429rem;
                -webkit-transition: border-color .1s ease,-webkit-box-shadow .1s ease;
                transition: border-color .1s ease,-webkit-box-shadow .1s ease;
                transition: box-shadow .1s ease,border-color .1s ease;
                transition: box-shadow .1s ease,border-color .1s ease,-webkit-box-shadow .1s ease;
                -webkit-box-shadow: none;
                box-shadow: none;
                background-color: transparent;
            }

            .tt-query, /* UPDATE: newer versions use tt-input instead of tt-query */
            .tt-hint {
                width: 396px;
                height: 30px;
                padding: 8px 12px;
                font-size: 24px;
                line-height: 30px;
                border: 2px solid #ccc;
                border-radius: 8px;
                outline: none;
            }

            .tt-query {
                /* UPDATE: newer versions use tt-input instead of tt-query */
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            }

            .tt-hint {
                color: #999;
                padding: .67857143em 1em;
                height: 100%;
            }

            .tt-menu {
                /* UPDATE: newer versions use tt-menu instead of tt-dropdown-menu */
                width: 422px;
                margin-top: 12px;
                padding: 8px 0;
                background-color: #fff;
                border: 1px solid #ccc;
                border: 1px solid rgba(0, 0, 0, 0.2);
                border-radius: 8px;
                box-shadow: 0 5px 10px rgba(0,0,0,.2);
            }

            .tt-suggestion {
                padding: 3px 20px;
                font-size: 18px;
                line-height: 24px;
            }

            .tt-suggestion.tt-is-under-cursor {
                /* UPDATE: newer versions use .tt-suggestion.tt-cursor */
                color: #fff;
                background-color: #0097cf;
            }

            .tt-suggestion p {
                margin: 0;
            }

            span.sp {
                font-size: 1.2em;
                color: #484242;
            }

            .header-cstm {
                font-size: 1.3em;
                margin: 0 0 5px 0;
            }

            .centered {
                position: absolute !important;
                top: 50%;
                left: 50%;
                width: 50%;
                transform: translate(-50%, -100%);
            }

            .adjust-top {
                margin-top: 0px !important;
            }

            #change-content {
                margin-top: 40px;
                margin-bottom: 40px;
                text-align: center;
                min-height: 256px;
            }

            .btn {
                text-align: center;
            }

            .table {
                width: fit-content !important;
                margin: auto !important;
            }

            .steps-contain {
                width: fit-content;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <div class="ui left vertical menu sidebar">
            <a class="item">Item 1</a>
            <a class="item">Item 2</a>
            <a class="item">Item 3</a>
        </div>
        <div class="pusher">
            <div class="ui secondary menu grid">
                <a class="item" id="show-menu">
                    <i class="bars icon"></i>
                    Menu


                </a>
                <a class="item">Messages</a>
                <a class="item">Friends</a>
                <div class="right menu">
                    <div class="item">
                        <div class="ui icon input">
                            <input type="text" placeholder="Search...">
                            <i class="search link icon"></i>
                        </div>
                    </div>
                    <a class="ui item active">Logout</a>
                </div>
            </div>
            <!-- MAIN PAGE-->
            <!-- <div class="header-cstm">
                		start <span class="sp">Typing</span> your <span class="sp">Faculty</span> Name


                							</div> -->
            <div class="ui massive icon input width-max centered ">
                <input type="text" class="typeahead fancy-input" placeholder="Search Faculty...">
                <i class="inverted circular search link icon"></i>
            </div>
            <!-- MAIN PAGE END-->
        </div>
        <div class="ui modal rating-modal">
            <i class="close icon"></i>
            <div class="header">Modal Title
  </div>
            <div class="content">
                <div class="steps-contain">
                    <div class="ui ordered steps">
                        <a class="step" id="step-1">
                            <div class="content">
                                <div class="title">The Basics</div>
                                <div class="description">Rate Basic Class Etiquette</div>
                            </div>
                        </a>
                        <a class="step" id="step-2">
                            <div class="content">
                                <div class="title">Nature-Wise</div>
                                <div class="description">Rate a/c to Humanitarian Qualities</div>
                            </div>
                        </a>
                        <a class="step" id="step-3">
                            <div class="content">
                                <div class="title">Final Evaluation</div>
                                <div class="description">Your personal opinion</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="container" id="change-content">
                    <div class="screen-1" style="display: none">
                        <table class="ui very basic collapsing celled table">
                            <thead>
                                <tr>
                                    <th>Qualities</th>
                                    <th>Rating Stars</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h4 class="ui image header">
                                            <img src="/images/avatar2/small/lena.png" class="ui mini rounded image">
                                            <div class="content">
                                                Puntuality
            <div class="sub header">Faculty arrives and leaves the class on time.
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td>
                                        <div class="ui massive star rating"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="ui image header">
                                            <img src="/images/avatar2/small/matthew.png" class="ui mini rounded image">
                                            <div class="content">
                                                Knowledgeable
            <div class="sub header">Matery over the subject this faculty teaches.
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td>
                                        <div class="ui massive star rating"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="ui image header">
                                            <img src="/images/avatar2/small/lindsay.png" class="ui mini rounded image">
                                            <div class="content">
                                                Textbook Use
            <div class="sub header">Faculty provides study notes and material.
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td>
                                        <div class="ui massive star rating"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="ui image header">
                                            <img src="/images/avatar2/small/lindsay.png" class="ui mini rounded image">
                                            <div class="content">
                                                Teaching Speed
            <div class="sub header">Ability to finish course on time.
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td>
                                        <div class="ui massive star rating"></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="screen-2" style="display: none">
                        <table class="ui very basic collapsing celled table">
                            <thead>
                                <tr>
                                    <th>Qualities</th>
                                    <th>Rating Stars</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h4 class="ui image header">
                                            <img src="/images/avatar2/small/lena.png" class="ui mini rounded image">
                                            <div class="content">
                                                Doubt Clearing
            <div class="sub header">Time given for doubt clearing sessions.
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td>
                                        <div class="ui massive star rating"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="ui image header">
                                            <img src="/images/avatar2/small/matthew.png" class="ui mini rounded image">
                                            <div class="content">
                                                Helping In Class
            <div class="sub header">Assisting students when needed
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td>
                                        <div class="ui massive star rating"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="ui image header">
                                            <img src="/images/avatar2/small/lindsay.png" class="ui mini rounded image">
                                            <div class="content">
                                                Proper Clothing
            <div class="sub header">Dresses in an appropriate attire
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td>
                                        <div class="ui massive star rating"></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="screen-3">
                        <table class="ui very basic collapsing celled table">
                            <thead>
                                <tr>
                                    <th>Qualities</th>
                                    <th>Your Answer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h4 class="ui image header">
                                            <img src="/images/avatar2/small/lena.png" class="ui mini rounded image">
                                            <div class="content">
                                                Describe your Faculty
            <div class="sub header">Select keywords that describe faculty.
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td style="min-width: 300px;">
                                        <div class="ui fluid multiple search normal selection dropdown">
                                            <input type="hidden" name="country">
                                            <i class="dropdown icon"></i>
                                            <div class="default text">Select Country</div>
                                            <div class="menu">
                                                <div class="item" data-value="af">
                                                    <i class="af flag"></i>
                                                    Afghanistan
                                                </div>
                                                <div class="item" data-value="az">
                                                    <i class="az flag"></i>
                                                    Azerbaijan
                                                </div>
                                                <div class="item" data-value="bs">
                                                    <i class="bs flag"></i>
                                                    Bahamas
                                                </div>
                                                <div class="item" data-value="bh">
                                                    <i class="bh flag"></i>
                                                    Bahrain
                                                </div>
                                                <div class="item" data-value="bd">
                                                    <i class="bd flag"></i>
                                                    Bangladesh
                                                </div>
                                                <div class="item" data-value="dk">
                                                    <i class="dk flag"></i>
                                                    Denmark
                                                </div>
                                                <div class="item" data-value="dj">
                                                    <i class="dj flag"></i>
                                                    Djibouti
                                                </div>
                                                <div class="item" data-value="dm">
                                                    <i class="dm flag"></i>
                                                    Dominica
                                                </div>
                                                <div class="item" data-value="do">
                                                    <i class="do flag"></i>
                                                    Dominican Republic
                                                </div>
                                                <div class="item" data-value="pa">
                                                    <i class="pa flag"></i>
                                                    Panama
                                                </div>
                                                <div class="item" data-value="py">
                                                    <i class="py flag"></i>
                                                    Paraguay
                                                </div>
                                                <div class="item" data-value="pe">
                                                    <i class="pe flag"></i>
                                                    Peru
                                                </div>
                                                <div class="item" data-value="ph">
                                                    <i class="ph flag"></i>
                                                    Philippines
                                                </div>
                                                <div class="item" data-value="pn">
                                                    <i class="pn flag"></i>
                                                    Pitcairn Islands
                                                </div>
                                                <div class="item" data-value="pl">
                                                    <i class="pl flag"></i>
                                                    Poland
                                                </div>
                                                <div class="item" data-value="pt">
                                                    <i class="pt flag"></i>
                                                    Portugal
                                                </div>
                                                <div class="item" data-value="pr">
                                                    <i class="pr flag"></i>
                                                    Puerto Rico
                                                </div>
                                                <div class="item" data-value="ye">
                                                    <i class="ye flag"></i>
                                                    Yemen
                                                </div>
                                                <div class="item" data-value="zm">
                                                    <i class="zm flag"></i>
                                                    Zambia
                                                </div>
                                                <div class="item" data-value="zw">
                                                    <i class="zw flag"></i>
                                                    Zimbabwe
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="ui image header">
                                            <img src="/images/avatar2/small/matthew.png" class="ui mini rounded image">
                                            <div class="content">
                                                Personal Comments
            <div class="sub header">What do you feel about this faculty?
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td>
                                        <textarea></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="btn">
                    <button class="ui brown left labeled icon button" id="screen-btn-back">
                        <i class="left arrow icon"></i>
                        Back

                    </button>
                    <button class="ui violet right labeled icon button" id="screen-btn">
                        <i class="right arrow icon"></i>
                        Next

                    </button>
                    <button class="ui green right labeled icon button" id="screen-btn-submit">
                        <i class="right arrow icon"></i>
                        Submit

                    </button>
                </div>
            </div>
            <div class="actions">
                <div class="ui button">Cancel</div>
                <div class="ui button">OK</div>
            </div>
        </div>
        <?php echo "<pre>" . print_r($faculty, true) ?>
        <script>
            $('.ui.rating').rating({
                initialRating: 3,
                maxRating: 5
            });
            $('.sidebar').sidebar({
                dimPage: false,
                transition: 'push',
                exclusive: false,
                closable: true
            });

            $('#show-menu').on('click', function() {

                $('.sidebar').sidebar('toggle');
            })

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
                	console.log(data)
                    return Bloodhound.tokenizers.whitespace(data.name)
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                // `states` is an array of state names defined in "The Basics"
                local: state
                /*remote: {
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
                console.log(suggestion);
                $('.rating-modal').modal('show')
                // open modal and set facultly rating object.
            });

            $('.rating-modal').modal({
                onHidden: function() {
                    curScreen = 1;
                    $('#screen-btn').show();
                    $('#screen-btn-submit').hide()
                    for (let x = 1; x <= 3; x++) {
                        $('#step-' + x).removeClass('completed');
                        $('#step-' + x).removeClass('active');

                        if (x == curScreen)
                            $('.screen-' + x).show();
                        else
                            $('.screen-' + x).hide();
                    }

                }
            })
            $('.ui.normal.dropdown').dropdown({
                maxSelections: 7
            });

            $('.screen-1').hide();
            $('.screen-2').hide();
            $('.screen-3').hide();
            function showScreen(screen) {
                console.log(screen)
                if (screen == 3) {
                    $('#screen-btn').hide()
                    $('#screen-btn-submit').show()

                } else {
                    $('#screen-btn').show()
                    $('#screen-btn-submit').hide()

                }
                if (screen > 3)
                    return false;
                for (let x = 1; x <= 3; x++) {
                    if (x == screen) {
                        $('.screen-' + x).show();
                        $('#step-' + x).addClass('active')
                    } else {
                        $('.screen-' + x).hide();
                        $('#step-' + x).removeClass('active')
                    }
                }
            }

            showScreen(curScreen);
            $('#screen-btn-submit').hide()
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
                        showScreen(--curScreen)
                }
                return false;
            })
        </script>
    </body>
</html>
