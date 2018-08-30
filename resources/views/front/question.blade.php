@extends('home')
        <!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title>Online Test Series</title>
    <meta name="description" content="WiFiStudy offers online test series, daily live classes, exam preparation and job updates for SSC, Banking, IBPS PO, SBI Clerk, RRB, Insurance, Railway and other exams. Take free quizzes, mock tests and get your doubts cleared at the one stop destination.">
    <meta name="keywords" content="Online Test Series , Free Mock Test, Online Quiz, wifistudy">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/gif">
    <link href="{{asset('assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script type="text/javascript" src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/js/bootstrap.js')}}" async></script>
    <script type="text/javascript" src="{{asset('assets/frontend/js/nprogress.js')}}" async></script>
    <link href="{{asset('assets/frontend/css/new_home_style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/css/bxslider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/css/globle.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/css/new_home_style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style media="screen">
        .moc_t_header{background:#1eb0bc;height:50px;left:0;position:fixed;right:0;top:0;z-index:10}#page-content-mock-test{margin:50px 320px 0 0;left:0;bottom:0;right:0;top:0;position:absolute;z-index:8}.mock_text_section_bar{background-color:#effaff;border-bottom:1px solid #ececec;height:43px;left:0;padding:0;right:320px;position:fixed;top:50px;z-index:8}.ques_ans_mock_outer{padding-top:42px;position:relative;z-index:6}.qustion_scroll_bar{height:calc(100vh - 140px);overflow-y:scroll;float:left;position:relative}.width_var{width:90%}.width_var_full{width:100%}.col-sm-6_compression{width:50%;background:#fff;float:left}.col-sm-6_compression .white_box_shadow{border:0;box-shadow:none}.left_diagram{width:50%;float:left;max-height:calc(70vh - 140px);overflow-y:scroll;position:relative;padding:0 10px 0 0}.digram_padding{padding:0 10px}.ans_wrapper_mock ul.left_diagram_ans{margin:20px 0 0}.call_to_action_mock_test{background:#fff;border-top:1px solid #ececec;bottom:0;height:48px;left:0;position:fixed;right:320px}.questions_palette_wrap{background-color:#fff;border-left:1px solid #e1e8ed;bottom:0;position:fixed;right:0%;top:50px;transition:all .5s cubic-bezier(.165,.84,.44,1) 0s;-webkit-transition:all .5s cubic-bezier(.165,.84,.44,1) 0s;width:320px;z-index:50}.list_ques_palette{bottom:102px;left:0;overflow-y:auto;padding:0;position:absolute;right:0;top:0}.bot_right_button{bottom:0;border-top:1px solid #ececec;color:#9b9b9b;height:102px;left:0;position:absolute;right:0;text-align:center}.moc_t_header h1{margin:0;padding:10px 0 0;text-align:right;width:42%;float:left;font-size:22px;color:#fff;font-family:open_sanssemibold}.right_mock_time_count{float:left;padding:7px 10px 7px 30px;color:#fff;font-size:18px}.right_finish{float:right}a.test_finish{display:inline-block;color:#fff;background:#19a5b0;font-size:18px;letter-spacing:1px;padding:12px 21px;cursor:pointer;text-transform:uppercase}a.test_finish:hover{background:#16929c}a.test_finish i{padding-right:6px}.fullscreenmode{color:#555;padding:6px 15px;background:#dbdbdb;font-size:14px;display:inline-block;border-radius:2px;margin-right:10px}.play_pause_test{display:inline}.right_mock_time_count span{padding-right:15px;padding-top:4px;display:inline-block;font-size:18px;color:#fff}.right_mock_time_count span i{padding-right:7px}.play_pause_test img{cursor:pointer}.mock_text_section_bar ul{margin:0;padding:0;display:inline;float:left}.mock_text_section_bar ul li{list-style:none;display:inline-block;padding:0 10px 0 0;position:relative}.mock_text_section_bar ul li a{color:#555;font-size:14px;padding:12px 8px 7px;border-bottom:3px solid #effaff;display:inline-block}.mock_text_section_bar ul li a:hover{margin:0}.mock_text_section_bar ul li.active_sub_mock a,.mock_text_section_bar ul li:hover a{border-bottom:3px solid #1eb0bc;color:#1eb0bc}.section_wise_palette{padding:0 10px}.section_wise_palette>ul{padding:0 10px;display:none}.active_section>ul{display:block}.section_wise_palette{cursor:pointer}.info_mock_test_section{border-bottom:1px solid #d3d3d3;margin-bottom:10px;padding:10px 0}.info_mock_test_section b{color:#555;font-size:14px;font-weight:400}.info_mock_test_section i{color:#d3d3d3;padding-left:5px}.info_mock_test_section span{float:right;color:#555;font-size:14px}.active_section b{color:#1eb0bc}.active_section i{color:#1eb0bc}.active_section .info_mock_test_section{border-bottom:1px solid #1eb0bc}ul.ques_ans_pla{margin:0;padding:0}ul.ques_ans_pla li{display:inline-block;height:35px;margin:0 4px 10px;padding:0;text-align:center;width:35px}ul.ques_ans_pla li a{background:#fff;border:1px solid #aab8c2;border-radius:100px;color:#000;cursor:pointer;display:block;font-size:13px;height:35px;line-height:32px;margin:0;padding:0;text-align:center;vertical-align:middle;width:35px}ul.ques_ans_pla li.has_not_visited a{background:#fff;border:1px solid #ddebed;color:#bfbfbf}ul.ques_ans_pla li.has_answered a{background:#1eb0bc;border:1px solid #1eb0bc;color:#fff}ul.ques_ans_pla li.has_not_answered a{background:#e2e2e2;border:1px solid #e2e2e2;color:#6a6a6a}ul.ques_ans_pla li.has_marked a{background:#875fb7;border:1px solid #875fb7;color:#fff}ul.ques_ans_pla li.give_wrong_answer a{background:#f05050;border:1px solid #f05050;color:#fff}ul.ques_ans_pla li.give_correct_answer a{background:#22a457;border:1px solid #22a457;color:#fff}.legend_mock_test{margin:0;padding:0 8px 8px}.legend_mock_test li{display:inline-block;font-size:14px;color:#888;list-style:outside none none;padding:0;vertical-align:middle;width:44%;text-align:left}.legend_mock_test li span{display:inline-block;height:13px;margin-right:3px;vertical-align:middle;width:13px}ul.legend_mock_test li.legend_answered span{background:#1eb0bc;border:1px solid #1eb0bc}ul.legend_mock_test li.legend_not_answered span{background:#d5d5d5;border:1px solid #d5d5d5}ul.legend_mock_test li.legend_marked span{background:#875fb7;border:1px solid #875fb7}ul.legend_mock_test li.legend_correct_answer span{background:#22a457;border:1px solid #22a457}ul.legend_mock_test li.legend_wrong_answer span{background:#f05050;border:1px solid #f05050}ul.legend_mock_test li.legend_not_visited span{background:#fff;border:1px solid #aab8c2}.btn_bt_right{border-top:1px solid #ececec;padding:9px 0}ul.btn_mock_right{margin:0;padding:0}ul.btn_mock_right li{list-style:none;display:inline-block}ul.btn_mock_right li a{color:#fff;padding:4px 10px;background:#1eb0bc;font-size:14px;display:inline-block;border-radius:3px;margin-left:8px}ul.btn_mock_right li:first-child a{margin-left:0}ul.btn_mock_right ul li a{background:#1b9faa}.call_to_action_mock_test>div{max-width:90%;min-width:90%;float:right;margin:7px 0}.call_to_action_mock_test>div a{color:#fff;padding:6px 15px;background:#1eb0bc;font-size:14px;display:inline-block;border-radius:2px;margin-right:10px}.call_to_action_mock_test>div a.clear_btn{background:#dbdbdb;color:#787878}.btn_mock_test i{padding-left:5px}.lang_mock_test{float:right;margin:9px 20px 0 0}.lang_mock_test span{display:inline;color:#555;font-size:13px}.qus_ans_wrap{float:none;margin:auto}.question_wrapper_mock{padding:10px 15px;border-radius:4px;margin:15px 0}.ques_top_block ul{margin:0;padding:0}.ques_top_block ul li{list-style:none;display:inline-block;color:#999;font-size:14px}.remaning_all_counter{background:#eee;padding:0 10px;border:1px solid #d0d0d0;color:#555;font-size:15px;border-radius:3px}.timer_mock_ques i{color:#aaa;padding-right:2px;font-size:16px}span.positv{background:#a4cc8c;color:#fff;font-size:13px;border-radius:103px;padding:1px 15px}span.negetv{background:#ea8080;color:#fff;font-size:13px;border-radius:103px;padding:1px 10px}.report_mock_ques{cursor:pointer}.has_reported i{color:red}.timer_mock_ques{padding:0 15px}.ques_top_block{padding:0 0 15px}.ques_body_mock_test{color:#555;font-size:14px;line-height:160%}.ques_body_mock_test p{margin-bottom:4px;text-align:justify}.ans_wrapper_mock ul{margin:0;padding:0}.ans_wrapper_mock ul li{padding:7px 8px;border:1px solid #ededed;cursor:pointer;list-style:none;display:block;font-size:14px;color:#555;margin-bottom:10px;background:#fdfdfd;border-radius:4px;font-family:open_sanssemibold}.ans_wrapper_mock ul li:hover{border:1px solid #e5e3e3}.ans_wrapper_mock ul li.is_your_ans{border:1px solid #1eb0bc;background:#fff}.ans_wrapper_mock ul li.is_your_ans .lable_ans{border:1px solid #1eb0bc;background:#1eb0bc;color:#fff}.ans_wrapper_mock ul li.is_wrong_ans{border:1px solid #da315e;background:#fbd0db}.ans_wrapper_mock ul li.is_wrong_ans .lable_ans{border:1px solid #da315e;background:#da315e;color:#fff}.ans_wrapper_mock ul li.is_correct_ans{border:1px solid #22a457;background:#ebfef3}.ans_wrapper_mock ul li.is_correct_ans .lable_ans{border:1px solid #22a457;background:#22a457;color:#fff}.ans_wrapper_mock ul li p{display:inline;margin:0}.lable_ans{background:#fff;border:1px solid #dadada;font-size:15px;height:25px;width:25px;border-radius:100px;color:#343435;display:inline-block;text-align:center;padding:1px;margin-right:10px;text-transform:uppercase}.solution_wrapper_mock{padding:10px 15px;border-radius:4px;margin-bottom:15px;font-size:14px;line-height:160%;color:#555}.solution_wrapper_mock p{margin-bottom:5px;text-align:justify}.solution_ques_no{margin-bottom:7px;text-decoration:underline}.solution_ques_no b{color:#fff;border-radius:65px;background:#22a457;display:inline-block;font-weight:400;padding:0 10px;text-align:center;margin-left:8px}.solution_active a,.current_ques_active a{border-radius:4px!important}.mock_text_section_bar ul li:hover .show_data_subwise{display:block!important;visibility:visible}.show_data_subwise:after,.show_data_subwise:before{bottom:100%;left:50%;border:solid transparent;content:" ";height:0;width:0;position:absolute;pointer-events:none}.show_data_subwise:after{border-color:transparent;border-bottom-color:#fff;border-width:14px;margin-left:-14px}.show_data_subwise:before{border-color:transparent;border-bottom-color:#d9d9d9;border-width:15px;margin-left:-15px}.mock_text_section_bar ul .show_data_subwise{display:none;margin-top:15px;font-size:12px;color:#555;padding:0;left:15px}.mock_text_section_bar ul .show_data_subwise li{padding:12px 9px;border-bottom:1px solid #ececec;list-style:none;display:block}.mock_text_section_bar ul .show_data_subwise li:last-child{border-bottom:0}.mock_text_section_bar ul .show_data_subwise li span{height:13px;width:13px;border-radius:20px;border:1px solid #c8c8c8;background:#fff;vertical-align:sub;margin-right:6px;display:inline-block}.mock_text_section_bar ul .show_data_subwise li span.dt_Answered{border:1px solid #1eb0bc;background:#1eb0bc}.mock_text_section_bar ul .show_data_subwise li span.dt_Marked{border:1px solid #875fb7;background:#875fb7}.mock_text_section_bar ul .show_data_subwise li span.dt_Not_Answered{border:1px solid #cfcfcf;background:#cfcfcf}.questions_palette_nav{right:10px;bottom:55px;position:fixed;z-index:12}.questions_palette_nav span{background:#1eb0bc;border-radius:100px;display:block;height:45px;text-align:center;width:45px;cursor:pointer}.questions_palette_nav span i{color:#fff;font-size:27px;padding:9px 0}.content_model_dark{background-color:rgba(0,0,0,.8);bottom:0;left:100%;opacity:0;position:fixed;right:0;top:50px;transition:all .5s cubic-bezier(.165,.84,.44,1) 0s;z-index:15;-webkit-transition:all .5s cubic-bezier(.165,.84,.44,1) 0s}.active_resize_screen .questions_palette_wrap{right:-355px}.active_resize_screen #page-content-mock-test{margin-right:0}.active_resize_screen .mock_text_section_bar,.active_resize_screen .call_to_action_mock_test{right:0}.active_resize_screen .width_var{width:98%}.active_resize_screen .content_model_dark{}.close_q_palts{border:1px solid #fff;color:#fff;display:none;height:57px;left:-35px;padding:0;position:absolute;text-align:center;top:45%;width:35px;z-index:16;font-size:36px;cursor:pointer}.active_resize_screen .close_q_palts{display:block}.scroll_sub_left{display:none;margin-left:12px}.scroll_sub_right{display:none}.notifi-attem{text-align:center;color:red;font-size:40px;width:100%}.attem-text{font-size:18px;color:red;text-align:center;margin:20px 0 0}.attem-text>span{font-size:14px;color:#5d5d5d}.change-answer{font-size:13px;color:#5d5d5d;text-align:center;margin:20px 0 8px}.rm_time{text-align:left;color:#5d5d5d;font-size:12px;font-family:open_sanssemibold;letter-spacing:.5px}.time_tst_confirm{text-align:left}.time_tst_confirm>span{font-size:20px}.commen-btn{border-radius:3px;color:#fff;font-size:14px;padding:7px 14px;font-family:open_sanssemibold}.commen-btn:hover{#ccc}.popup-res{background:#737a84;margin-right:10px}.popup-sub{background:#4caf79}#finish_test h4.modal-title{text-align:center;color:#1eb0bc;text-transform:uppercase;letter-spacing:1px}.popup-res:hover{color:#fff;background:#626b78}.popup-sub:hover{color:#fff;background:#45a370}.sub_ar_meck{padding:8px 0}.summray_mock_popup_head{background:#4a4a4a;color:#fff}.sum_tst_dv{padding:10px 0;text-align:center;border:0 solid #ccc;background:0 0;overflow:hidden;position:relative;text-overflow:ellipsis;white-space:nowrap;font-size:13px;color:#555}.sum_tst_dv strong{color:#000}.summray_mock_popup_body .sum_tst_dv{border-bottom:1px solid #eee}.summray_mock_popup_body .sum_tst_dv:first-child{border-left:1px solid #eee;padding-left:8px}.summray_mock_popup_body .sum_tst_dv:last-child{border-right:1px solid #eee}.summray_mock_popup_head .sum_tst_dv{color:#fff}.Answered_sumry{color:#1eb0bc}.Not_Answered_sumry{color:#555}.Marked_sumry{color:#875fb7}#finish_test .close{color:#000;font-size:26px;font-weight:700;opacity:.7}.Questionndesiplay{display:none}.Questiondesiplay{display:block}.Showallclass .ans_wrapper_mock ul li.is_your_ans .lable_ans{background:0 0;border:0;color:#343435}.Showallclass .ans_wrapper_mock ul li.is_your_ans{background:transparent none repeat scroll 0 0;border:medium 0}.Showallclass{display:block}#instruction{display:none}.section_wise_palette .ques_ans_pla .displayonlybook{display:inline-block}.notdisplay{display:none!important}#gethtml .moc_t_header{display:none}#gethtml #page-content-mock-test{margin:91px 320px 0 0}#gethtml .ques_ans_mock_outer{padding-top:0}.dropdownofchange{font-size:14px;margin:7px 32px 0 0;text-align:right}#gethtml .bot_right_button{height:auto}#gethtml .qustion_scroll_bar{height:calc(92vh - 140px)}@media(max-width:420px){.questions_palette_wrap{width:260px}.info_mock_test_section b{width:175px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;display:inline-block}.legend_mock_test li{font-size:13px;width:49%}ul.btn_mock_right li a{font-size:13px;margin-left:2px;padding:4px 8%}.active_resize_screen .right_mock_time_count{padding-left:7px!important;padding-right:10px!important}.right_mock_time_count span{padding-right:6px;font-size:15px}.timer_mock_ques{padding:0 6px}.ques_top_block ul li{font-size:13px}span.positv,span.negetv{padding:1px 6px}.question_wrapper_mock{padding:10px}.call_to_action_mock_test>div a{padding:6px 3%;margin-right:5px}}@media(max-width:480px){.active_resize_screen .moc_t_header h1{font-size:16px;text-align:center;padding-top:16px;width:47%}.call_to_action_mock_test>div a{font-size:13px;padding:6px 3%}.info_mock_test_section b{width:155px}.score_tab_menu ul li a{padding:10px 6px;font-size:14px}}@media(max-width:768px){.active_resize_screen .call_to_action_mock_test>div{max-width:98%;min-width:98%}.active_resize_screen .right_mock_time_count{font-size:16px;padding-right:15px}.lang_mock_test span{display:none}.scroll_sub_left,.scroll_sub_right{display:inline;margin-left:12px;color:#1eb0bc;font-size:15px;cursor:pointer}.scroll_sub_right{margin-left:0}.has_no_sub{cursor:not-allowed;color:#ccc}.right_finish span{display:none}a.test_finish i{padding:0}a.test_finish{padding:12px 20px}.footer_finish_test_popup{text-align:center}.rm_time{display:inline}.time_tst_confirm>span{vertical-align:middle}.time_tst_confirm{margin-bottom:15px}.qustion_scroll_bar{float:none;height:calc(100vh - 190px)}.ques_body_mock_test .left_diagram{width:100%;height:auto}.left_diagram{height:auto;float:none;width:100%}.fullscreenmode{display:none}#gethtml .qustion_scroll_bar{height:calc(80vh - 140px)}.solution_wrapper_mock img{height:auto;max-width:100%}.left_diagram.question{background:#efefef}.left_diagram.question *{background:0 0!important}}
    </style>

</head>

<body data-gr-c-s-loaded="true" class="active_resize_screen" cz-shortcut-listen="true">
<div id="MathJax_Message" style="display: none;"></div>
<div class="moc_t_header">
    <div class="right_mock_time_count"><span><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i><span id="getclock">00:59:32</span></span>
    </div>
    <h1>SSC CGL FREE</h1>
    <div class="right_finish">
        <a href="javascript:void(0)" onclick="launchFullscreen(document.documentElement)" class="fullscreenmode"><i style="padding-right:4px;" class="fa fa-arrows-alt" aria-hidden="true"></i> Full Screen</a>
        <a type="button" id="finish" class="test_finish" href="javascript:void(0)"  data-toggle="modal" data-target="#myModal"><i class="fa fa-power-off" aria-hidden="true"></i> <span>Finish</span></a>
    </div>
    <div class="clear"></div>
</div>
<div id="page-content-mock-test" class="">
    <div class="mock_text_section_bar">
        <ul>
            <input type="hidden" id="i" value="0">
            <input type="hidden" id="j" value="1">
            <input type="hidden" id="total" value="4">


        </ul>
        <div id="hiddendiv">
            <input type="hidden" id="resume" value="1">
            <input type="hidden" id="saveandnext" value="1">
            <input type="hidden" id="csn" value="1">
            <input type="hidden" id="csj" value="0">
        </div>
        <div class="lang_mock_test"> <span>View in</span>
            <div class="lang_sty_white">
                <select id="wifi_lang" name="lang">
                    <option value="english" selected="">English</option>

                </select>
            </div>
        </div>
    </div>
    <div class="ques_ans_mock_outer">
        <div class="col-sm-12 qustion_scroll_bar">
            <div class="mock_test_instruction_wrap" id="instruction" style="display: none;">
                <div class="English"></div>
                {{--<div class="Hindi"></div>--}}

            </div>
            <div class="mock_test_question_wrap" id="questions">
                @php
                    $count=1;
                @endphp
                @foreach($questions as $ques)


                    <div class="qus_ans_wrap width_var serials-0 Questiondesiplay" id="Question-01" data-query="5c4a773221951f2f-12608b1038b7f010-94708bfe398c9321-99194c8756e85c9b" data-serial="1">
                        <div class="question_wrapper_mock white_box_shadow">

                            <div class="ques_top_block">
                                <ul>
                                    <li class="mock_head_counter">
                                        <div class="remaning_all_counter">

                                            {{$ques->id}} /{{$countRecord}}

                                        </div>
                                    </li>
                                    <li class="mock_pstv_ngtv"><span class="positv">2</span>  <span class="negetv">-0.5</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="ques_body_mock_test clearfix">

                                <div class="full_diagram English">
                                    <p><span style="font-size:12pt;"><span style="font-family: times new roman,times,serif;">Mark the Correct Option&nbsp;</span></span>
                                    </p>
                                    <p><span style="font-size:12pt;"><span style="font-family: times new roman,times,serif;">{{$ques->question}} ?</span></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="ans_wrapper_mock">

                            <fieldset>

                                <input type="radio" name="action" id="a" value="{{$ques->option1}}" /><label for="">{{$ques->option1}}</label><br />
                                <input type="radio" name="action" id="b" value="{{$ques->option2}}"  /><label for="">{{$ques->option2}}</label><br />
                                <input type="radio" name="action" id="c" value="{{$ques->option3}}" /><label for="">{{$ques->option3}}</label><br />
                                <input type="radio" name="action" id="d" value="{{$ques->option4}}" /><label for="">{{$ques->option4}}</label><br />
                                <input type="hidden" name="result" id="correct_optionn" value="{{$ques->correct_option}}">
                            </fieldset>
                            {{--<ul class="full_diagram English">--}}
                            {{--<li class="English option-0 ">--}}
                            {{--<div class="lable_ans">a</div>--}}
                            {{--<p><span style="font-size:12pt;"><span style="font-family: times new roman,times,serif;">{{$ques->option1}}</span></span>--}}
                            {{--</p>--}}
                            {{--</li>--}}
                            {{--<li class="English option-1 ">--}}
                            {{--<div class="lable_ans">b</div>--}}
                            {{--<p><span style="font-size:12pt;"><span style="font-family: times new roman,times,serif;">{{$ques->option2}}</span></span>--}}
                            {{--</p>--}}
                            {{--</li>--}}
                            {{--<li class="English option-2 ">--}}
                            {{--<div class="lable_ans">c</div>--}}
                            {{--<p><span style="font-size:12pt;"><span style="font-family: times new roman,times,serif;">{{$ques->option3}}</span></span>--}}
                            {{--</p>--}}
                            {{--</li>--}}
                            {{--<li class="English option-3 ">--}}
                            {{--<div class="lable_ans">d</div>--}}
                            {{--<p><span style="font-size:12pt;"><span style="font-family: times new roman,times,serif;">{{$ques->option4}}</span></span>--}}
                            {{--</p>--}}
                            {{--</li>--}}
                            {{--</ul>--}}

                        </div>

                    </div>
                @endforeach

            </div>
            <div class="container" style="margin-left: 920px;margin-top: 50px">
                {{--{{ $questions->links() }}--}}

            </div>

        </div>

    </div>


</div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><i>Test Summary</i></h4>
            </div>
            <div class="row modal-body col-md-12" >


            <div class="col-md-4">
                <h5 style="color: black;text-decoration-style: solid;border: black"><b>Correct Answer</b></h5>

                <p id="correct" name="correct">gd</p>

            </div>
            <div class="col-md-4" style="color: black;text-decoration-style: solid;border: black">
                <h5><b>Not Attempt</b></h5>
                <p id="not_attempt">dfdsf</p>


            </div>
            <div class="col-md-4" style="color: black;text-decoration-style: solid;border: black">
                <h5><b>Total Score</b></h5>
                <p id="total_score">dfdsf</p>

            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>

    </div>
</div>


<script type="text/javascript">

    var score=0;

    $(document).ready(function(){
        $(".test_finish").prop("disabled",true);

        $("input[type='radio']").click(function(){

            var radioValue = $("input[name='action']:checked").val();


            var correct_value=$("input[name='result']").val();

            if(radioValue){


                if(radioValue==correct_value){

                    score= score+1;


                    localStorage.setItem('result',score);


                    $("input[name='action']:checked").attr("disabled",true);
                    $(".test_finish").prop("disabled",false);


                } else{

                    $("input[name='action']:checked").attr("disabled",true);


                }


            }
        });

    });
</script>
<script>
    function showMessage() {
        toastr.success("Your result has been Saved Successfully!");


    }

</script>

<script type="text/javascript">
    $(document).ready(function(){

    });
</script>
<script>
    $(document).ready(function() {
        localStorage.clear();
var totalQuestion,notAttempt,correctAnswer,total_score;
        $('.test_finish').click(function () {

            correctAnswer=localStorage.getItem('result');
            document.getElementById("correct").innerHTML=correctAnswer;
        totalQuestion = "<?= $countRecord ?>";

       notAttempt =totalQuestion-localStorage.getItem('result');
            document.getElementById("not_attempt").innerHTML=notAttempt;


       totalScore =  correctAnswer+'/'+ totalQuestion;
            document.getElementById("total_score").innerHTML=totalScore;

        });
        $('#submit').click(function(e){
            $.ajax({
                url: '/result',
                type: "post",
                data: {'correct':correctAnswer, 'not_attempt':notAttempt, 'total_score':totalScore},

                success: function (data) {
                    console.log(data); // this is good
                }
            });
        });




    })

</script>

<footer>
    <script type="text/javascript">
        var getclock = 'getclock';
        var canExitsad = false;
        var fronturl = 'https://www.wifistudy.com/';
        var q = '94708bfe398c9321-d305eac70c1f6809-ef87054d897e6730-12608b1038b7f010-433e860a640eb18d';
        var userid = ''
        var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9+/=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/rn/g,"n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}
        function unserialize(n){function r(n,e){var t,u,s,c,l,f,h,d,p,w,g,b,k,v,I,y,E,S,j=0,m=function(n){return n};switch(e||(e=0),t=n.slice(e,e+1).toLowerCase(),u=e+2,t){case"i":m=function(n){return parseInt(n,10)},p=o(n,u,";"),j=p[0],d=p[1],u+=j+1;break;case"b":m=function(n){return 0!==parseInt(n,10)},p=o(n,u,";"),j=p[0],d=p[1],u+=j+1;break;case"d":m=function(n){return parseFloat(n)},p=o(n,u,";"),j=p[0],d=p[1],u+=j+1;break;case"n":d=null;break;case"s":w=o(n,u,":"),j=w[0],g=w[1],u+=j+2,p=i(n,u+1,parseInt(g,10)),j=p[0],d=p[1],u+=j+2,j!==parseInt(g,10)&&j!==d.length&&a("SyntaxError","String length mismatch");break;case"a":for(d={},s=o(n,u,":"),j=s[0],c=s[1],u+=j+2,f=parseInt(c,10),l=!0,b=0;f>b;b++)v=r(n,u),I=v[1],k=v[2],u+=I,y=r(n,u),E=y[1],S=y[2],u+=E,k!==b&&(l=!1),d[k]=S;if(l){for(h=new Array(f),b=0;f>b;b++)h[b]=d[b];d=h}u+=1;break;default:a("SyntaxError","Unknown / Unhandled data type(s): "+t)}return[t,u-e,m(d)]}var e="undefined"!=typeof window?window:global,t=function(n){for(var r=n.length,e=n.length-1;e>=0;e--){var t=n.charCodeAt(e);t>127&&2047>=t?r++:t>2047&&65535>=t&&(r+=2),t>=56320&&57343>=t&&e--}return r-1},a=function(n,r,t,a){throw new e[n](r,t,a)},o=function(n,r,e){for(var t=2,o=[],i=n.slice(r,r+1);i!==e;)t+r>n.length&&a("Error","Invalid"),o.push(i),i=n.slice(r+(t-1),r+t),t+=1;return[o.length,o.join("")]},i=function(n,r,e){var a,o,i;for(i=[],a=0;e>a;a++)o=n.slice(r+(a-1),r+a),i.push(o),e-=t(o);return[i.length,i.join("")]};return r(n+"",0)[2]}
    </script>
    <script src="https://www.wifistudy.com/assets/frontend/js/globle_custom.js" async=""></script>
    <script src="https://www.wifistudy.com/assets/frontend/js/mocktest.js" async=""></script>
</footer>

</body>
