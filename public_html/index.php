<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <link href="../../favicon.ico" rel="icon"/>
        <meta content="summary_large_image" name="twitter:card"/>
        <meta content="@shiftgig" name="twitter:site"/>
        <meta content="Shiftgig Presents The Moscow Mule Challenge" name="twitter:title"/>
        <meta content="Help write the next chapter for this iconic cocktail and we just might fly you and a friend to Chicago for an awesome celebration starring you and your Moscow Mule creation, plus a cool $1,000 in spending cash! Enter your recipe now." name="twitter:description"/>
        <meta content="http://moscowmule.shiftgig.com/img/social-lockup-red.png" name="twitter:image:src"/>
        <meta content="" name="twitter:domain"/>
        <meta content="index.php" property="og:url"/>
        <meta content="Shiftgig Presents The Moscow Mule Challenge" property="og:title"/>
        <meta content="The Moscow Mule Challenge" property="og:site_name"/>
        <meta content="Help write the next chapter for this iconic cocktail and we just might fly you and a friend to Chicago for an awesome celebration starring you and your Moscow Mule creation, plus a cool $1,000 in spending cash! Enter your recipe now." property="og:description"/>
        <meta content="http://moscowmule.shiftgig.com/img/social-lockup-red.png" property="og:image"/>
        <title>
            Moscow Mule
        </title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="css/moscow-mule_styles.css" rel="stylesheet"/>
        <link href="css/signin.css" rel="stylesheet"/>
        <link href="css/brandon_grotesque.css" rel="stylesheet"/>
        <script src="//use.typekit.net/wtw5xtl.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            try{Typekit.load();}catch(e){}
        </script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js">
        </script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body id="age-gate">
        <div class="outer container">
            <div class="middle row">
                <div class=" inner">
                    <img alt="Shiftgig presents the Moscow Mule Challenge sponsored by Smirnoff" class="img img-responsive " src="img/agegate-revised.png" style="margin:0 auto"/>
                    <form class="form-signin" role="form">
                        <div class="input-field ">
                            <input autofocus="" class="form-control" id="birthMonth" maxlength="2" name=" birthMonth" placeholder="MM" required="" type="text">
                            </input>
                        </div>
                        <div class="input-field ">
                            <input class="form-control" id="birthDay" maxlength="2" name="birthDay" placeholder="DD" required="" type="text">
                            </input>
                        </div>
                        <div class="input-field year ">
                            <input class="form-control" id="birthYear" maxlength="4" name="birthYear" placeholder="YYYY" required="" type="text">
                            </input>
                        </div>
                        <div class="clearfix">
                        </div>
                        <p class="form">
                            You must be over 21 to proceed.
                        </p>
                        <div class="notOldEnough">
                            <p>
                                Sorry, you must be over 21 to enter.
                            </p>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="remember" type="checkbox" value="remember-me">
                                    Remember me
                                </input>
                            </label>
                        </div>
                        <div class="clearfix">
                        </div>
                        <input class="btn btn-submit btn-block submit" disabled="true" id="ageVerify" type="submit" value="Enter"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="eyebrow">
            <img src="img/eyebrow.png">
                <p>
                    The Original Vodka of the Moscow Mule
                </p>
            </img>
        </div>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
        </script>
        <script src="js/jquery.cookie.js">
        </script>
        <script>
            var NS = NS || {};
var NS = {
    ageGate: function () {
        // cache
        var $month = $("input#birthMonth"),
            $day = $("input#birthDay"),
            $year = $("input#birthYear"),
            $DOBinputs = $("input#birthMonth, input#birthDay, input#birthYear"),
            $submit = $("input.submit"),
            getDOB = function () {
                return $month.val() + '/' + $day.val() + '/' + $year.val();
            },
            getAge = function getAge(dateString) {
                var today = new Date(),
                    birthDate = new Date(dateString),
                    age = today.getFullYear() - birthDate.getFullYear(),

                    m = today.getMonth() - birthDate.getMonth();

                // if the birthday hasn't happened yet this year...
                if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                    // then we can't count the current year in the age.
                    age--;
                }
                return age;
            },
            ageGateValidate = function (e) {},
            ageGateSubmit = function (e) {
                e.preventDefault();
                if (getAge(getDOB()) < 21) {
                    $(".notOldEnough").show();
                    var delay = 5000; //5 second delay
                    setTimeout(function(){ window.location = 'http://responsibility.org/'; }, delay);
                } else {
                    $(".notOldEnough").hide();
                    if ($('input.remember').prop('checked')) {
                        $.cookie('is_legal', 'yes', { expires: 30, path: '/' });
                    } else {
                        $.cookie('is_legal', 'yes', { path: '/' });
                    }
                    window.location = 'moscowmulechallenge.php'
                }
            };
        $submit.click(ageGateSubmit);
    }
}

$(document).ready(function () {
    NS.ageGate();
});

function doCheck(){
        var allFilled = true;
        $('#birthMonth').change(function(){
            if($(this).val() < 1) {
                allFilled = false;
                $(this).val("");
            } else if ($(this).val() > 12) {
                allFilled = false;
                $(this).val("");
            }
        });
        $('#birthDay').change(function(){
            if($(this).val() < 1) {
                allFilled = false;
                $(this).val("");
            } else if ($(this).val() > 31) {
                allFilled = false;
                $(this).val("");
            }
        });
        $('#birthYear').change(function(){
            if($(this).val() < 1) {
                allFilled = false;
                $(this).val("");
            } else if ($(this).val() > new Date().getFullYear()) {
                allFilled = false;
                $(this).val("");
            }
        });
        $('input[type=text]').each(function(){
            if($(this).val() == ''){
                allFilled = false;
                return false;
            } else if (!$(this).val().match(/^\d+$/)){
                allFilled = false;
                return false;
            }
        });
        $('input[type=submit]').prop('disabled', !allFilled);
}
$(document).ready(function(){
    $('input[type=text]').keyup(doCheck).focusout(doCheck);
});
        </script>
    </body>
</html>
