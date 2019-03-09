<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-typeahead/2.10.6/jquery.typeahead.min.css"/>
        <link rel="stylesheet" href="assets/css/main.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
        <script src="assets/js/typeahead.js"></script>
        <style>
         
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
                                            
                                            <div class="content">
                                                Puntuality
            <div class="sub header">Faculty arrives and leaves the class on time.
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td>
                                        <div class="ui massive star rating" id="puntuality"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="ui image header">
                                            
                                            <div class="content">
                                                Knowledgeable
            <div class="sub header">Matery over the subject this faculty teaches.
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td>
                                        <div class="ui massive star rating" id="knowledge"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="ui image header">
                                            
                                            <div class="content">
                                                Textbook Use
            <div class="sub header">Faculty provides study notes and material.
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td>
                                        <div class="ui massive star rating" id="textbook_use"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="ui image header">
                                            
                                            <div class="content">
                                                Teaching Speed
            <div class="sub header">Ability to finish course on time.
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td>
                                        <div class="ui massive star rating" id="teaching_speed"></div>
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
                                            
                                            <div class="content">
                                                Doubt Clearing
            <div class="sub header">Time given for doubt clearing sessions.
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td>
                                        <div class="ui massive star rating" id="doubt_clearing"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="ui image header">
                                            
                                            <div class="content">
                                                Helping In Class
            <div class="sub header">Assisting students when needed
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td>
                                        <div class="ui massive star rating" id="helping"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="ui image header">
                                            
                                            <div class="content">
                                                Proper Clothing
            <div class="sub header">Dresses in an appropriate attire
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td>
                                        <div class="ui massive star rating" id="clothing"></div>
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
                                            
                                            <div class="content">
                                                Describe your Faculty
            <div class="sub header">Select keywords that describe faculty.
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td style="min-width: 300px;">
                                        <div class="ui fluid multiple search normal selection dropdown" id="keywords">
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
                                            
                                            <div class="content">
                                                Personal Comments
            <div class="sub header">What do you feel about this faculty?
          </div>
                                            </div>
                                        </h4>
                                    </td>
                                    <td>
                                        <textarea id="personal_remark"></textarea>
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
        <script src="assets/js/main.js"></script>
    </body>
</html>
