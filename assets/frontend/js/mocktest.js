fronturl = '';
q = '';
Base64 = '';


$(function(e) {
    $(window).on('beforeunload', function() {
        saveandsubmit($('#csn').val(), $('#csj').val(), $('#saveandnext').val(), 1)
    });
    var currentactivecls = $('.active_sub_mock').length;
    var ActiveSubject = '';
    if (currentactivecls > 0) {
        ActiveSubject = $('.active_sub_mock > a').attr('data-bind');
    }

    $(document).on('click', '.counterslider,.section_wise_palette', function() {
        changeTab(this, '', 'yes');
    });
    $(document).on('click', '.section_wise_palette li', function() {
        var thisid = this.id;
        ofchangingserials(thisid, 0);
    });
    $(document).on('click', '#saveandnext', function() {
        saveandnext(1, '');
    });
    $(document).on('mouseover', '.counterslider', function() {
        getCUrrentpm(this);
    });
    $(document).on('click', '#finishtest', function() {
        showpopup();
    });
    $(document).on('change', '#wifi_lang', function() {
        var divclEng = $('.Questiondesiplay .ques_body_mock_test .English');
        var divclHind = $('.Questiondesiplay .ques_body_mock_test .Hindi');
        var Hindioption = $('.Questiondesiplay .ans_wrapper_mock .Hindi');
        var Englishoption = $('.Questiondesiplay .ans_wrapper_mock .English');
        langelang($('#wifi_lang').val(), divclEng, divclHind, Englishoption, Hindioption);
        var instruction = $('#instruction').attr('style');
        if (instruction == 'display: block;') {
            showinstruction();
        }
        var question = $('.Showallclass').length;
        if (question > 0) {
            showquestionPaper();
        }
    });
    $(document).on('click', '#questionpaper', function() {
        showquestionPaper();
    });
    $(document).on('click', '#instructions', function() {
        showinstruction();
    });
    $(document).on('click', '#review', function() {
        review();
    });
    $(document).on('click', '.Questiondesiplay li,#clearcl', function() {
        var csn = $('#csn').val();
        var csj = $('#csj').val();
        if ($('#que-' + csj + csn).length > 0) {
            $('#que-' + csj + csn).remove();
        }
        optioncolor(this);
    });
    $(document).on('click', '#finshishtest', function(e) {
        $('.sub_ar_meck').html('Wait...');
        finalsubmit('');
    });
    $("body").on("contextmenu cut copy paste", function(e) {
        return false;
    });
});

function count(id, lasttime, type, nextid, currentid) {
    var startTime = document.getElementById(id).innerHTML;
    var pieces = startTime.split(":");
    if (parseInt(pieces[0]) == 0 && parseInt(pieces[1]) == 0 && parseInt(pieces[2]) == 0) {
        if (type == 'jump' && type != '') {
            jumptoanother(nextid, currentid);
        } else {
            finalsubmit('auto');
            return false;
        }
        return false;
    }
    var time = new Date();
    if (typeof lasttime == 'undefined' || lasttime == '' || lasttime == null) {
        time.setHours(pieces[0]);
        time.setMinutes(pieces[1]);
        time.setSeconds(pieces[2]);
    } else {
        var totallast = lasttime.split(":");
        var totalyog = parseInt(totallast[0]) * 60 * 60 + parseInt(totallast[1]) * 60 + parseInt(totallast[2]);
        var startTimedf = parseInt(pieces[0]) * 60 * 60 + parseInt(pieces[1]) * 60 + parseInt(pieces[2]);
        var xcute = parseInt(startTimedf) + 1;
        if (totalyog == xcute) {
            time.setHours(pieces[0]);
            time.setMinutes(pieces[1]);
            time.setSeconds(pieces[2]);
        } else {
            totalyog = totalyog + 1;
            var hrs = Math.floor(totalyog / (60 * 60));
            var minutes = (Math.floor((totalyog / (60)) % 60));
            var second = Math.floor(totalyog % 60);
            time.setHours(hrs);
            time.setMinutes(minutes);
            time.setSeconds(second);
            var startTime = hrs + ":" + minutes + ":" + second;
        }
    }
    var timedif = new Date(time.valueOf() - 1000);
    var newtime = timedif.toTimeString().split(" ")[0];
    if (id == 'getclock') {
        var fval = (parseInt(pieces[0]) * 60 * 60) + (parseInt(pieces[1]) * 60) + (parseInt(pieces[2]));
        if (fval == 600) {
            alert('Please do fast, only 10 minutes remaining');
        }
        $('.time_tst_confirm>span').html(newtime);
    }
    document.getElementById(id).innerHTML = newtime;
    setTimeout(function() {
        count(id, startTime, type, nextid, currentid);
    }, 1000);
}

function slider(element) {
    var id = $(element).attr('id');
    var countlength = parseInt($('.counterslider').length);
    var i = parseInt($('#i').val());
    var j = parseInt($('#j').val());
    if (id == 'rightslide') {
        if (parseInt(j) >= parseInt(countlength)) {
            ri = i;
            rj = countlength;
            $('#rightslide').attr('style', 'cursor:auto;display:inline');
            $('#leftslide').attr('style', 'cursor:pointer;display:inline');
        } else {
            var rj = j + 1;
            var ri = i + 1;
            $('#rightslide').attr('style', 'cursor:pointer;display:inline');
        }
    } else {
        if (i <= 0) {
            ri = 0;
            rj = j;
            $('#leftslide').attr('style', 'cursor:auto;display:inline');
            $('#rightslide').attr('style', 'cursor:pointer;display:inline');
        } else {
            var rj = j - 1;
            var ri = i - 1;
            $('#leftslide').attr('style', 'cursor:pointer;display:inline');
        }
    }
    $('#i').val(ri);
    $('#j').val(rj);
    $('.counterslider').hide();
    for (var x = ri; x <= rj - 1; x++) {
        $('#clider-' + x).show();
    }
}

function GetNumbers(ActiveSubject, q) {
    $.ajax({
        url: fronturl + 'test/serials',
        type: 'POST',
        data: {
            's': ActiveSubject,
        },
        beforeSend: function() {
            NProgress.start();
        },
        success: function(data) {
            NProgress.done();
            var JsonObject = JSON.parse(data);
            if (JsonObject.err == 1) {
                if (JsonObject.url != '') {
                    window.location.href = JsonObject.url;
                }
            } else {
                if (JsonObject.fetch != '') {
                    count(getclock, '', '', '', '');
                    $('#hiddendiv').append('<input type="hidden" id="resume" value="' + JsonObject.testresume + '"><input type="hidden" id="saveandnext" value="' + JsonObject.saveandnext + '">');
                    var closediv = '</div>';
                    var qul = '<ul class="ques_ans_pla"> ';
                    var clocse = '</ul>';
                    var instruction = unserialize(Base64.decode(JsonObject.instruction));
                    $('#instruction').html('<div class="English">' + instruction.English + '</div><div class="Hindi">' + instruction.Hindi + '</div>');
                    for (var i = 0; i < parseInt(JsonObject.fetch.length); i++) {
                        var duration = '';
                        if (JsonObject.fetch[i].Active == 'Yes') {
                            var subactiveclass = 'active_section';
                            var togleleft = 'fa-caret-down';
                        } else {
                            var subactiveclass = '';
                            var togleleft = 'fa-caret-left';
                        }
                        var newclass = "NotimerClass";
                        var Actualtimedata = '';
                        if ((JsonObject.fetch[i].duration !== null && JsonObject.fetch[i].duration !== '') || JsonObject.fetch[i].duration >= 0) {
                            if ((JsonObject.fetch[i].duration) >= '0') {
                                newclass = "timerClass";
                                var secondconverted = ((JsonObject.fetch[i].duration) * 60);
                                var hrs = Math.floor(secondconverted / (60 * 60));
                                var minutes = (Math.floor((secondconverted / (60)) % 60));
                                var second = Math.floor(secondconverted % 60);
                                duration = '<span id="Subjectcock-' + JsonObject.fetch[i].subjectSerial + '">' + formatnumber(hrs) + ":" + formatnumber(minutes) + ":" + formatnumber(second) + '</span>';
                                Actualtimedata = secondconverted;
                            }
                        }
                        var wasted = '<div class="section_wise_palette ' + newclass + ' ' + subactiveclass + '" data-external="' + Actualtimedata + '" id="subject-' + JsonObject.fetch[i].subjectSerial + '" data-bind="' + JsonObject.fetch[i].sd + '">\n\
                                      <div class="info_mock_test_section"><b>' + JsonObject.fetch[i].name + '</b> <i class="fa ' + togleleft + '" aria-hidden="true" ></i> ';
                        var liserials = '';
                        if (parseInt(JsonObject.fetch[i].SubjectQuestionCount) > 0) {
                            for (var j = 0; j < JsonObject.fetch[i].SubjectQuestionCount; j++) {
                                liserials += '<li class="' + JsonObject.fetch[i].serials[j].GetClass + ' serials-' + JsonObject.fetch[i].subjectSerial + '" id="serial-' + JsonObject.fetch[i].subjectSerial + JsonObject.fetch[i].serials[j].s + '" data-serial="' + JsonObject.fetch[i].serials[j].s + '"><a onclick="javascript:void(0)">' + JsonObject.fetch[i].serials[j].s + '</a></li>';
                                if (JsonObject.fetch[i].serials[j].awnsered != '') {
                                    $('#hiddendiv').append('<input type="hidden" id="que-' + JsonObject.fetch[i].subjectSerial + JsonObject.fetch[i].serials[j].s + '" value="' + JsonObject.fetch[i].serials[j].awnsered + '">');
                                }
                                Getquestionshytml(JsonObject, j, i);
                            }
                        }
                        if (subactiveclass == 'active_section') {
                            var htmlofhidden = '<input type="hidden" id="csn" value="' + JsonObject.fetch[i].LastActiveQuestion + '"><input type="hidden" id="csj" value="' + JsonObject.fetch[i].subjectSerial + '">';
                            $('#hiddendiv').append(htmlofhidden);
                        }
                        $('#getserialsall').append(wasted + duration + closediv + qul + liserials + clocse + closediv);
                        if ((JsonObject.fetch[i].duration != 0 && JsonObject.fetch[i].duration != null)) {
                            if (subactiveclass == 'active_section') {
                                if (typeof JsonObject.fetch[i + 1] != 'undefined') {
                                    var nextid = 'subject-' + JsonObject.fetch[i + 1].subjectSerial;
                                } else {
                                    var nextid = '';
                                }
                                count('Subjectcock-' + JsonObject.fetch[i].subjectSerial, '', 'jump', nextid, '#subject-' + JsonObject.fetch[i].subjectSerial);
                            }
                        }
                        if (JsonObject.fetch[i].Active == 'Yes') {
                            if (JsonObject.fetch[i].LastActiveQuestion > 0) {
                                saveandsubmit(JsonObject.fetch[i].LastActiveQuestion, JsonObject.fetch[i].subjectSerial, JsonObject.saveandnext, 1);
                            }
                        }
                    }
                }
            }
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML";
            document.getElementsByTagName("head")[0].appendChild(script);
        }
    });
}

function Getquestionshytml(JsonObject, j, i) {
    var finalengoptions = '';
    var finalhindoptions = '';
    var Englishoption = '';
    var Hindioption = '';
    var questions = '';
    var questions1 = '';
    var chr = '';
    var cond = 'Single';
    var str = Base64.decode("'" + JsonObject.fetch[i].questions[j].dlb_q_direction + "'");
    var direction_Hindi = unserialize(str).Hindi;
    var direction_English = unserialize(str).English;
    var dlb_m_questions = Base64.decode("'" + JsonObject.fetch[i].questions[j].dlb_m_questions + "'");
    var question_Hindi = unserialize(dlb_m_questions).Hindi;
    var question_English = unserialize(dlb_m_questions).English;
    var dlb_q_options = Base64.decode("'" + JsonObject.fetch[i].questions[j].dlb_q_options + "'");
    var option_Hindi = unserialize(dlb_q_options).Hindi;
    var option_English = unserialize(dlb_q_options).English;
    var lang = $('#wifi_lang').val();
    var Getawnser = '';
    if (parseInt($('#que-' + JsonObject.fetch[i].subjectSerial + JsonObject.fetch[i].serials[j].s).length) > 0) {
        Getawnser = $('#que-' + JsonObject.fetch[i].subjectSerial + JsonObject.fetch[i].serials[j].s).val();
    }
    if (JsonObject.fetch[i].Active == 'Yes') {
        if (JsonObject.fetch[i].LastActiveQuestion == JsonObject.fetch[i].serials[j].s) {
            var subactiveclass = 'Questiondesiplay';
            var gvcl = JsonObject.fetch[i].serials[j].GetClass;
            gvcl = gvcl.split(' ');
            changecolorclass(JsonObject.fetch[i].serials[j].s, gvcl);
        } else {
            var subactiveclass = 'Questionndesiplay';
        }
    } else {
        var subactiveclass = 'Questionndesiplay';
    }
    var divopen = '<div class="qus_ans_wrap width_var serials-' + JsonObject.fetch[i].subjectSerial + ' ' + subactiveclass + '" id="Question-' + JsonObject.fetch[i].subjectSerial + JsonObject.fetch[i].serials[j].s + '" data-query="' + JsonObject.fetch[i].questions[j].default+'" data-serial="' + JsonObject.fetch[i].serials[j].s + '"> <div class="question_wrapper_mock white_box_shadow">\n\
                   <div class="ques_top_block"> <ul><li class="mock_head_counter"><div class="remaning_all_counter">' + JsonObject.fetch[i].serials[j].s + ' / ' + JsonObject.fetch[i].SubjectQuestionCount + '</div></li>\n\
                   <li class="mock_pstv_ngtv"><span class="positv">' + JsonObject.fetch[i].questions[j].dlb_q_positive_mark + '</span> <span class="negetv">' + JsonObject.fetch[i].questions[j].dlb_q_negative_marks + '</span></li> </ul></div>';
    var anscl = '';
    if (direction_English != '' && question_English != '') {
        var divclEng = '<div class="left_diagram direction English">' + direction_English + '</div><div class="left_diagram question English digram_padding">' + question_English + '</div>';
        var classforENglish = 'left_diagram';
        anscl = '_ans';
    } else if (direction_English == '' && question_English != '') {
        var divclEng = '<div class="full_diagram English">' + question_English + '</div>';
        var classforENglish = 'full_diagram';
    } else if (direction_English != '' && question_English == '') {
        var divclEng = '<div class="full_diagram English">' + direction_English + '</div>';
        var classforENglish = 'full_diagram';
    } else if (direction_English == '' && question_English == '') {
        var divclEng = '';
        var classforENglish = '';
    }
    var ansclhi = '';
    if (direction_Hindi != '' && question_Hindi != '') {
        var divclHind = '<div class="left_diagram direction Hindi">' + direction_Hindi + '</div><div class="left_diagram question Hindi digram_padding">' + question_Hindi + '</div>';
        var classforHindi = 'left_diagram';
        ansclhi = '_ans';
    } else if (direction_Hindi == '' && question_Hindi != '') {
        var divclHind = '<div class="full_diagram Hindi">' + question_Hindi + '</div>';
        var classforHindi = 'full_diagram';
    } else if (direction_Hindi != '' && question_Hindi == '') {
        var divclHind = '<div class="full_diagram Hindi">' + direction_Hindi + '</div>';
        var classforHindi = 'full_diagram';
    } else if (direction_Hindi == '' && question_Hindi == '') {
        var divclHind = '';
        var classforHindi = '';
    }
    if (option_English != '') {
        for (i = 0; i < option_English.length; i++) {
            chr = String.fromCharCode(97 + i);
            if (typeof option_English[i] !== undefined && option_English[i] !== '') {
                var cl = '';
                if (Getawnser != '' && Getawnser == i) {
                    cl = 'is_your_ans';
                }
                Englishoption += '<li class="English option-' + i + ' ' + cl + '"><div class="lable_ans">' + chr + '</div>' + option_English[i] + '</li>';
            }
        }
        var finalengoptions = '<ul class="' + classforENglish + anscl + ' English">' + Englishoption + '</ul>';
    }
    if (option_Hindi != '') {
        for (j = 0; j < option_Hindi.length; j++) {
            chr = String.fromCharCode(97 + j);
            if (typeof option_Hindi[j] !== undefined && option_Hindi[j] !== '') {
                var cl = '';
                if (Getawnser != '' && Getawnser == j) {
                    cl = 'is_your_ans';
                }
                Hindioption += '<li class="Hindi option-' + j + ' ' + cl + '"><div class="lable_ans">' + chr + '</div>' + option_Hindi[j] + '</li>';
            }
        }
        var finalhindoptions = '<ul class="' + classforHindi + ansclhi + ' Hindi">' + Hindioption + '</ul>';
    }
    if (classforENglish = 'left_diagram' || classforHindi == 'left_diagram') {
        var questionsanddirection = '<div class="ques_body_mock_test clearfix">\n\
                                 \n\  ' + divclEng + divclHind + ' </div> </div>';
        var option = '<div class="ans_wrapper_mock">' + finalengoptions + finalhindoptions + ' </div></div>';
    } else {
        var questionsanddirection = '<div class="ques_body_mock_test clearfix">\n\
                                 \n\  ' + divclEng + divclHind + ' </div> </div>';
        var option = '<div class="ans_wrapper_mock">' + finalengoptions + finalhindoptions + ' </div></div>';
    }
    $('#questions').append(divopen + questionsanddirection + option);
    var divclEng = $('.Questiondesiplay .ques_body_mock_test .English');
    var divclHind = $('.Questiondesiplay .ques_body_mock_test .Hindi');
    var Hindioption = $('.Questiondesiplay .ans_wrapper_mock .Hindi');
    var Englishoption = $('.Questiondesiplay .ans_wrapper_mock .English');
    langelang(lang, divclEng, divclHind, Englishoption, Hindioption);
}

function changeTab(element, gettype, tbclick) {
    if (gettype == 'yes') {
        var id = '#' + element;
    } else {
        var id = $(element).attr('id');
    }
    id = id.split('-');
    var finalserialis = id[1];
    var currenttimer = $('#subject-' + finalserialis).attr('data-external');
    var databind = $('#subject-' + finalserialis).attr('data-bind');
    var classes = $('#subject-' + finalserialis).attr('class');
    var Getlastid = $('.active_section').attr('id');
    Getlastid = Getlastid.split('-');
    var finallast = Getlastid[1];
    var Getlastimer = $('.active_section').attr('data-external');
    var Getlastbind = $('.active_section').attr('data-bind');
    var Getlastid = $('.active_section').attr('class');
    if (databind != Getlastbind) {
        if ((Getlastimer == '' || Getlastimer == null) || gettype == 'yes') {
            if (currenttimer == 0 && currenttimer !== '' && currenttimer != null) {
                return false;
            }
            changetabanother('#subject-' + finallast, '#subject-' + finalserialis, tbclick);
            if (currenttimer != '') {
                var time = Base64.decode("'" + currenttimer + "'");
                var replacedtime = time.replace(/["']/g, "");
                var totime = replacedtime;
                var hrs = Math.floor(parseInt(totime) / (60 * 60));
                var minutes = (Math.floor((parseInt(totime) / (60)) % 60));
                var second = Math.floor(parseInt(totime) % 60);
                $('#Subjectcock-' + finalserialis).html(formatnumber(hrs) + ":" + formatnumber(minutes) + ":" + formatnumber(second));
                var nextid = $('#subject-' + finalserialis).next().attr('id');
                var clockcount = count('Subjectcock-' + finalserialis, '', 'jump', nextid, '#subject-' + finalserialis);
            }
        }
    }
}

function changetabanother(finallast, finalserialis, tbclick) {
    $(finallast).removeClass('active_section');
    $(finallast + ' i').removeClass('fa-caret-down');
    $(finallast + ' i').addClass('fa-caret-left');
    $(finalserialis).addClass('active_section');
    $(finalserialis + ' i').removeClass('fa-caret-left');
    $(finalserialis + ' i').addClass('fa-caret-down');
    finallast = finallast.split('-');
    var removeid = finallast[1];
    finalserialis = finalserialis.split('-');
    var addid = finalserialis[1];

    $('#clider-' + removeid).removeClass('active_sub_mock');
    $('#clider-' + removeid).css('display', 'none');
    $('#clider-' + addid).addClass('active_sub_mock');
    $('#clider-' + addid).css('display', 'inline');
    saveandnext(2, addid);
}

function jumptoanother(a, b) {
    if (a == '' || a == null || a == b) {
        var csn = $('#csn').val();
        var csj = $('#csj').val();
        var Getcurrentsaveandnext = $('#saveandnext').val();
        finalsubmit('');
    } else {
        var valof = 0;
        $(b).attr('data-external',valof);
        changeTab(a, 'yes', 'no');
    }
}

function formatnumber(vari) {
    if (vari < 9) {
        return '0' + vari;
    } else {
        return vari;
    }
}

function ofchangingserials(element, type) {

    var csn = $('#' + element).attr('data-serial');
    var subjectmaindiv = $('#' + element).closest('div').attr('id');
    if (typeof subjectmaindiv == 'undefined') {
        var csjsd = $('#csj').val();
        var csnsd = $('#csn').val();
        var extr = $('#subject-' + csjsd).attr('data-external');
        if ((extr) == '' || extr == null) {
            var nextsub = $('#subject-' + csjsd).next().attr('id');
            if ($('#' + nextsub).length > 0) {
                changeTab(nextsub, 'yes', 'no');
            } else {
                if ($('#Question-' + csjsd + csnsd + ' .ans_wrapper_mock li.is_your_ans').length > 0) {
                    $('#serial-' + csjsd + csnsd).attr('class', 'has_answered solution_active serials-' + csjsd);
                }
                saveandsubmit(csnsd, csjsd, $('#saveandnext').val(), 1);
                showpopup();
            }
        } else {
            var nextsub = $('#subject-' + csjsd).next().attr('id');
            if ($('#' + nextsub).length > 0) {
                saveandsubmit(csnsd, csjsd, $('#saveandnext').val(), 1);
                alert('Time is not over yet for current subject!');
            } else {
                if ($('#Question-' + csjsd + csnsd + ' .ans_wrapper_mock li.is_your_ans').length > 0) {
                    $('#serial-' + csjsd + csnsd).attr('class', 'has_answered solution_active serials-' + csjsd);
                }
                saveandsubmit(csnsd, csjsd, $('#saveandnext').val(), 1);
                showpopup();
            }
        }
        return false;
    }
    subjectmaindiv = subjectmaindiv.split('-');
    var csj = subjectmaindiv[1];
    var Getcurrentcsn = $('#csn').val();
    var Getcurrentcsj = $('#csj').val();
    $('.serials-' + Getcurrentcsj).removeClass('Showallclass');
    $('.serials-' + Getcurrentcsj + ' .ans_wrapper_mock').removeClass('disabledvariable');
    $('#instruction').hide();
    $('#questions').show();
    var Getcurrentqueans = $('#que-' + Getcurrentcsj + Getcurrentcsn).length;
    var questionans = '';
    if (Getcurrentqueans > 0) {
        questionans = $('#que-' + Getcurrentcsj + Getcurrentcsn).val();
    }
    var Getcurrentresume = $('#resume').val();
    var Getcurrentsaveandnext = $('#saveandnext').val();
    if (type == 0) {
        if (Getcurrentsaveandnext == 0) {
            saveandsubmit(Getcurrentcsn, Getcurrentcsj, Getcurrentsaveandnext, type);
        } else {
            if ($('#Question-' + Getcurrentcsj + Getcurrentcsn + ' li.is_your_ans').length > 0) {
                if ($('#que-' + Getcurrentcsj + Getcurrentcsn).length <= 0 || $('#que-' + Getcurrentcsj + Getcurrentcsn).val() == '') {
                    optioncolor('#Question-' + Getcurrentcsj + Getcurrentcsn + ' li.is_your_ans');
                    saveandsubmit(Getcurrentcsn, Getcurrentcsj, Getcurrentsaveandnext, type);

                }
            }
        }
    } else {
        saveandsubmit(Getcurrentcsn, Getcurrentcsj, Getcurrentsaveandnext, type);
    }
    var lastactive = $('#serial-' + Getcurrentcsj + Getcurrentcsn).attr('class');
    lastactive = lastactive.split(' ');
    if (lastactive.length == 3) {
        var lastACT = changecolorclass(questionans, lastactive);
        $('#serial-' + Getcurrentcsj + Getcurrentcsn).attr('class', lastACT + ' ' + lastactive[2]);
    }
    var currentActive = $('#serial-' + csj + csn).attr('class');
    var currentActive = currentActive.split(' ');
    if (currentActive.length == 2) {
        var questionanscurrent = $('#que-' + csj + csn).val();
        var CurrentACT = changecolorclass(questionanscurrent, currentActive);
        $('#serial-' + csj + csn).attr('class', CurrentACT + ' solution_active ' + currentActive[1]);
    }
    $('#csn').val(csn);
    $('#csj').val(csj);
    $('#Question-' + Getcurrentcsj + Getcurrentcsn).removeClass('Questiondesiplay');
    $('#Question-' + Getcurrentcsj + Getcurrentcsn).addClass('Questionndesiplay');
    $('#Question-' + csj + csn).removeClass('Questionndesiplay');
    $('#Question-' + csj + csn).addClass('Questiondesiplay');
    var divclEng = $('.Questiondesiplay .ques_body_mock_test .English');
    var divclHind = $('.Questiondesiplay .ques_body_mock_test .Hindi');
    var Hindioption = $('.Questiondesiplay .ans_wrapper_mock .Hindi');
    var Englishoption = $('.Questiondesiplay .ans_wrapper_mock .English');
    langelang($('#wifi_lang').val(), divclEng, divclHind, Englishoption, Hindioption);
    if (type == 2) {
        saveandsubmit(csn, csj, Getcurrentsaveandnext, 2);
    }
    questioncount = localStorage.getItem('Imp');
	//alert(questioncount);
    $("#"+questioncount).addClass("has_answered");
 	$("#"+questioncount).removeClass("has_not_answered");
 	$("#"+questioncount).removeClass("has_not_visited");
}

function saveandnext(type, scj) {


    if (type == 1) {
        var csn = $('#csn').val();
        var csj = $('#csj').val();
        var sn = parseInt(csn) + 1;
    } else {
        var csn = 1;
        var csj = scj;
        var sn = csn;
    }

    ofchangingserials('serial-' + csj + sn, type);
}

function saveandsubmit(csn, csj, Getcurrentsaveandnext, type) {

    $('que-' + csn + csj).remove();
    var awnser = '';
    var lengthofawnser = $('#Question-' + csj + csn + ' .ans_wrapper_mock ul .is_your_ans').length;
    var question = $('#Question-' + csj + csn).attr('data-query');
    var time = $('#getclock').html();
    time = time.split(':');
    time = (parseInt(time[0]) * 60 * 60) + (parseInt(time[1]) * 60) + (parseInt(time[2]));
    if (Getcurrentsaveandnext == 0 || type > 0) {
        if (lengthofawnser > 0) {
            var valueofawnser = $('#Question-' + csj + csn + ' .ans_wrapper_mock ul .is_your_ans').attr('class');
            valueofawnser = valueofawnser.split(' ');
            //alert(valueofawnser);
            awnser = valueofawnser[1];
            awnser = awnser.split('-');
            awnser = awnser[1];
            myanswer = document.getElementById('My-'+csj+csn).value;
            $('#hiddendiv').append('<input name = "answers[]" id="que-' + csj + csn + '" value="que-' + myanswer + '-' + awnser + '" type="hidden">');

        }
    } else {
        awnser = '';
    }
    var lang = 'english';
    lang = $('#wifi_lang').val();
            var currentActive = $('#serial-' + csj + csn).attr('class');
            var currentActive = currentActive.split(' ');
            var questionanscurrent = $('#que-' + csj + csn).val();
            var CurrentACT = changecolorclassnew(questionanscurrent, currentActive);
            if (typeof currentActive[2] != 'undefined') {
                var two = currentActive[2];
            } else {
                var two = '';
            }
            
            $('#serial-' + csj + csn).attr('class', CurrentACT + ' ' + currentActive[1] + ' ' + two);
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML";
            document.getElementsByTagName("head")[0].appendChild(script);
            changecolorclassnew(questionanscurrent, currentActive);
            
        
}

function changecolorclass(questionans, lastactive) {
    if (questionans != '' && typeof questionans != 'undefined') {
        if (lastactive[0] == 'has_marked') {
            lastactive[0] = 'has_marked';
            $('#review').html('Mark for Unreview');
        } else {
            lastactive[0] = 'has_answered';
            $('#review').html('Mark for Review');
        }
    } else {
        if (lastactive[0] == 'has_marked') {
            lastactive[0] = 'has_marked';
            $('#review').html('Mark for Unreview');
        } else {
            lastactive[0] = 'has_not_answered';
            $('#review').html('Mark for Review');
        }
    }
    return lastactive[0];
}

function changecolorclassnew(questionans, lastactive) {
	//alert(lastactive);
    if (questionans != '' && typeof questionans != 'undefined') {
        if (lastactive[0] == 'has_marked') {
            lastactive[0] = 'has_marked';
        } else {
            lastactive[0] = 'has_answered';
        }
    } else {
        if (lastactive[0] == 'has_marked') {
            lastactive[0] = 'has_marked';
        } else {
            lastactive[0] = 'has_not_answered';
        }
    }
    return lastactive[0];
}

function showinstruction() {
    var lang = $('#wifi_lang').val();
    if (lang == 'hindi') {
        var htmls = $('#instruction .Hindi').html();
        if (htmls == '' || htmls == null) {
            $('#instruction .English').show();
            $('#instruction .Hindi').hide();
        } else {
            $('#instruction .English').hide();
            $('#instruction .Hindi').show();
        }
    } else {
        var htmls = $('#instruction .English').html();
        if (htmls == '' || htmls == null) {
            $('#instruction .English').hide();
            $('#instruction .Hindi').show();
        } else {
            $('#instruction .English').show();
            $('#instruction .Hindi').hide();
        }
    }
    $('#instruction').show();
    $('#questions').hide();
    var currentActivesubject = $('#csj').val();
    $('.serials-' + currentActivesubject).removeClass('Showallclass');
}

function showquestionPaper() {
    $('#instruction').hide();
    $('#questions').show();
    var currentActivesubject = $('#csj').val();
    var totallength = $('.serials-' + currentActivesubject).length;
    var fulllentgh = parseInt(totallength) / 2;
    for (var i = 0; i < fulllentgh; i++) {
        var divclEng = $('#Question-' + currentActivesubject + (i + 1) + ' .ques_body_mock_test .English');
        var divclHind = $('#Question-' + currentActivesubject + (i + 1) + ' .ques_body_mock_test .Hindi');
        var Hindioption = $('#Question-' + currentActivesubject + (i + 1) + ' .ans_wrapper_mock .Hindi');
        var Englishoption = $('#Question-' + currentActivesubject + (i + 1) + ' .ans_wrapper_mock .English');
        langelang($('#wifi_lang').val(), divclEng, divclHind, Englishoption, Hindioption);
    }
    $('.serials-' + currentActivesubject).addClass('Showallclass');
    $('.serials-' + currentActivesubject + ' .ans_wrapper_mock').addClass('disabledvariable');
}

function langelang(lang, divclEng, divclHind, Englishoption, Hindioption) {
    if (lang == 'english') {
        if (divclEng.html() == '' || typeof divclEng == 'undefined') {
            divclEng.hide();
            if (divclHind.html() != '' && typeof divclHind != 'undefined') {
                divclHind.show();
            }
        } else {
            divclEng.show();
            divclHind.hide();
        }
        if (Englishoption.html() == '' || typeof Englishoption.html() == 'undefined') {
            Englishoption.hide();
            if (Hindioption.html() != '' && typeof Hindioption.html() != 'undefined') {
                Hindioption.show();
            }
        } else {
            Englishoption.show();
            Hindioption.hide();
        }
        var isawnser = $('.Questiondesiplay .ans_wrapper_mock .Hindi .is_your_ans').length;
        if (isawnser > 0) {
            var jyada = $('.Questiondesiplay .ans_wrapper_mock .Hindi .is_your_ans').attr('class');
            jyada = jyada.split(' ');
            var currentoption = jyada[1];
            if (typeof Englishoption.html() != 'undefined' && Englishoption.html() != '') {
                $('.Questiondesiplay .ans_wrapper_mock .Hindi .' + currentoption).removeClass('is_your_ans');
                $('.Questiondesiplay .ans_wrapper_mock .English .' + currentoption).addClass('is_your_ans');
            }
        }
    } else if (lang == 'hindi') {
        if (divclHind.html() == '' || typeof divclHind.html() == 'undefined') {
            divclHind.hide();
            if (divclEng != '' && typeof divclEng != 'undefined') {
                divclEng.show();
            }
        } else {
            divclHind.show();
            divclEng.hide();
        }
        if (Hindioption.html() == '' || typeof Hindioption.html() == 'undefined') {
            Hindioption.hide();
            if (Englishoption.html() != '' && typeof Englishoption.html() != 'undefined') {
                Englishoption.show();
            }
        } else {
            Hindioption.show();
            Englishoption.hide();
        }
        var isawnser = $('.Questiondesiplay .ans_wrapper_mock .English .is_your_ans').length;
        if (isawnser > 0) {
            var jyada = $('.Questiondesiplay .ans_wrapper_mock .English .is_your_ans').attr('class');
            jyada = jyada.split(' ');
            var currentoption = jyada[1];
            if (typeof Hindioption.html() != 'undefined' && Hindioption.html() != '') {
                $('.Questiondesiplay .ans_wrapper_mock .Hindi .' + currentoption).addClass('is_your_ans');
                $('.Questiondesiplay .ans_wrapper_mock .English .' + currentoption).removeClass('is_your_ans');
            }
        }
    } else {
        $('.English').show();
        $('.Hindi').hide();
    }
}

function review() {
    var csn = $('#csn').val();
    var csj = $('#csj').val();
    var review = $('#review').html();
    var Question = $('#Question-' + csj + csn).attr('data-query');
    var lang = $('#wifi_lang').val();
    $.ajax({
        url: fronturl + 'test/mark-for-review',
        'type': 'POST',
        'data': {
            'q': q,
            'sq': Question,
            'r': review,
            's': csn,
            'csj': csj,
            'lang': lang
        },
        success: function(data) {
            if (data != '') {
                var jsonstroinbg = JSON.parse(data);
                if (jsonstroinbg == '') {} else {
                    if (jsonstroinbg.err == '1') {
                        if (jsonstroinbg.msg != '') {
                            alert(jsonstroinbg.msg);
                        }
                        if (jsonstroinbg.url != '') {}
                    } else {
                        if (jsonstroinbg.err = '0') {
                            if (jsonstroinbg.type == '1') {
                                $('#review').html('Mark for Unreview');
                                var CClass = $('#serial-' + csj + csn).attr('class');
                                CClass = CClass.split(' ');
                                if (CClass.length == '3') {
                                    $('#serial-' + csj + csn).attr('class', 'has_marked ' + CClass[1] + ' ' + CClass[2]);
                                } else {
                                    $('#serial-' + csj + csn).attr('class', 'has_marked ' + CClass[1]);
                                }
                            } else {
                                $('#review').html('Mark for Review');
                                var CClass = $('#serial-' + csj + csn).attr('class');
                                CClass = CClass.split(' ');
                                if (CClass.length == '3') {
                                    $('#serial-' + csj + csn).attr('class', 'has_not_answered ' + CClass[1] + ' ' + CClass[2]);
                                } else {
                                    $('#serial-' + csj + csn).attr('class', 'has_not_answered ' + CClass[1]);
                                }
                            }
                        }
                    }
                }
            }
        }
    });
}

function optioncolor(element) {
    if ($('.Showallclass').length > 0) {
        return false;
    }
    var cslass = '';
    var Gtecl = $(element).attr('class');
    Gtecl = Gtecl.split(' ');
    if (Gtecl.length == 3) {
        cslass = Gtecl[0] + ' ' + Gtecl[1];
        $('.Questiondesiplay li').removeClass('is_your_ans');
        if (Gtecl[2] == 'is_your_ans') {
            cslass = Gtecl[0] + ' ' + Gtecl[1];
        } else {
            cslass = Gtecl[0] + ' ' + Gtecl[1] + ' is_your_ans';
        }
    } else {
        $('.Questiondesiplay li').removeClass('is_your_ans');
        cslass = Gtecl[0] + ' ' + Gtecl[1] + ' is_your_ans';
    }
    $(element).attr('class', cslass);
}

function showpopup() {
    var subjects = $('.counterslider').length;
    $('#popupfortestsubmission').html('');
    if (subjects > 0) {
        for (var i = 0; i < subjects; i++) {
        	//alert(i);
            var SUbjectname = $('#clider-'+i).html();
            //console.log(SUbjectname);
            var notawnsered = $('#subject-' + i + ' .ques_ans_pla .has_not_answered').length;
            var awnsered = $('#subject-' + i + ' .ques_ans_pla .has_answered').length;
            if (awnsered <= 0) {
                awnsered = $('.serials-' + i + ' .ans_wrapper_mock ul .is_your_ans').length;
                var question = ($('.serials-' + i).length / 2);
                if (awnsered > question) {
                    awnsered = question;
                }
            }
            var marked = $('#subject-' + i + ' .ques_ans_pla .has_marked').length;
            var notvisited = $('#subject-' + i + ' .ques_ans_pla .has_not_visited').length;
            var total = $('#subject-' + i + ' .ques_ans_pla li.serials-' + i).length;
            var htmlofpoup = '<div class="col-xs-2 sum_tst_dv"> ' + SUbjectname + '</div>\n\
                             <div class="col-xs-2 sum_tst_dv Answered_sumry">' + awnsered + '</div>\n\
                             <div class="col-xs-2 sum_tst_dv Not_Answered_sumry">' + notawnsered + '</div>\n\
                             <div class="col-xs-2 sum_tst_dv Marked_sumry">' + marked + '</div>\n\
                             <div class="col-xs-2 sum_tst_dv Not_Visited_sumry">' + notvisited + '</div>\n\
                             <div class="col-xs-2 sum_tst_dv">' + total + '</div><div class="col-sm-12">  \n\
                            ';
            $('#popupfortestsubmission').append(htmlofpoup);
        }
        $('#popupfortestsubmission').append('<div class="col-sm-12"> <p class="change-answer">Once you click submit, you will not be able to change your answers</p> </div>')
    }
    $('#finish_test').modal('show');
}

function getCUrrentpm(element) {
    var id = $(element).attr('id');
    id = id.split('-');
    id = id[1];
    var notawnsered = $('#subject-' + id + ' .ques_ans_pla .has_not_answered').length;
    var awnsered = $('#subject-' + id + ' .ques_ans_pla .has_answered').length;
    var marked = $('#subject-' + id + ' .ques_ans_pla .has_marked').length;
    var notvisited = $('#subject-' + id + ' .ques_ans_pla .has_not_visited').length;
    var total = $('#subject-' + id + ' .ques_ans_pla li.serials-' + id).length;
    var al = '<li><span class="dt_Answered"></span> Answered (' + awnsered + ')</li>\n\
              <li><span class="dt_Not_Answered"></span> Not Answered (' + notawnsered + ')</li>\n\
              <li><span class="dt_Not_Visited"></span> Not Visited (' + notvisited + ')</li>\n\
              <li><span class="dt_Marked"></span> Marked (' + marked + ')</li>';
    $('#subjectslider-' + id).html(al);
}

function finalsubmit(vaf) {
    var csn = $('#csn').val();
    var csj = $('#csj').val();
    var Getcurrentsaveandnext = $('#saveandnext').val();
    saveandsubmit(csn, csj, Getcurrentsaveandnext, 1);
    document.getElementById("myForm").submit();
}

function ladhideslider() {
    var classlen = $('.counterslider').length
    if (classlen > 2) {
        $('.counterslider').hide();
        var getclassid = $('.active_sub_mock').attr('id');
        $('#' + getclassid).show();
        var total = $('#total').val();
        total = parseInt(total) - 1;
        getclassid = getclassid.split('-');
        var currentactive = parseInt(getclassid[1]);
        if (currentactive >= 0 && currentactive < total) {
            $('#i').val(currentactive);
            $('#j').val(currentactive + 1);
        }
    }
}

function launchFullscreen(element) {
    if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) {
        if (document.documentElement.requestFullscreen) {
            document.documentElement.requestFullscreen();
        } else if (document.documentElement.msRequestFullscreen) {
            document.documentElement.msRequestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) {
            document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) {
            document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }
        $('.fullscreenmode').html('<i style="padding-right:4px;" class="fa fa-arrows-alt" aria-hidden="true"></i> Exit  Full Screen');
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        }
        $('.fullscreenmode').html('<i style="padding-right:4px;" class="fa fa-arrows-alt" aria-hidden="true"></i>  Full Screen')
    }
}
$(document).ready(function() {
    var $window = $(window);

    function checkWidth() {
        if ($window.width() < 990 && $window.width() > 320) {
            ladhideslider();
        }
        if ($window.width() < 1070) {
            $('body').removeClass('active_default_screen').addClass('active_resize_screen');
        };
        if ($window.width() >= 1070) {
            $('body').removeClass('active_resize_screen').addClass('active_default_screen');
        }
    }
    checkWidth();
    $(window).resize(checkWidth);
    $(".questions_palette_nav span").click(function() {
        $(".questions_palette_wrap").css({
            "right": "0"
        });
        $(".content_model_dark").css({
            "opacity": "1",
            "left": "0"
        });
    });
    $(".content_model_dark, .close_q_palts").click(function() {
        $(".questions_palette_wrap").css({
            "right": "-355px"
        });
        $(".content_model_dark").css({
            "opacity": "0",
            "left": "100%"
        });
    });
});

