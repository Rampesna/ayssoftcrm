
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta name="description" content="NetSantral Yönetim Arayüzü">
    <meta name="author" content="NetGSM">
    <title>Netgsm</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">

    <link href="/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="/css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
    <link href="/css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
    <link href="/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <style>
        img.map, map area{
            outline: none;
        }
    </style>
    <link rel="stylesheet" href="/css/bootstrap-multiselect.css" type="text/css"/>
    <link href="/css/plugins/player/plyr.css" rel="stylesheet">
    <style>



        /* Misc.
        ================================================== */

        .left { float:left; }
        .right { float:right; }
        .center { text-align:center; }
        .hidden { display:none; }

        .no-support {
            margin:2rem auto;
            text-align:center;
            width:90%;
        }


        /* Audio Player Styles
        ================================================== */

        audio {
            display:none;
        }

        #audiowrap,
        #plwrap {
            margin:0 auto;
        }

        #tracks {
            font-size:0;
            position:relative;
            text-align:center;
        }

        #nowPlay {
            display:block;
            font-size:0;
        }

        #nowPlay span {
            display:inline-block;
            font-size:1.05rem;
            vertical-align:top;
        }

        #nowPlay span#npAction {
            padding:21px;
            width:30%;
        }

        #nowPlay span#npTitle {
            padding:21px;
            text-align:right;
            width:70%;
        }

        #plList li {
            cursor:pointer;
            display:block;
            margin:0;
            padding:21px 0;
        }

        #plList li:hover {
            background-color:rgba(0,0,0,.1);
        }

        #tracks a {
            border-radius:3px;
            color: #ff0011;
            cursor:pointer;
            display:inline-block;
            font-size:2rem;
            height:35px;
            line-height:.175;
            margin:0 5px 30px;
            padding:10px;
            text-decoration:none;
            transition:background .3s ease;
        }

        #tracks a:last-child {
            margin-left:0;
        }

        #tracks a:hover,
        #tracks a:active {
            background-color:rgba(0,0,0,.1);
            color: #ff0039;
        }

        #tracks a::-moz-focus-inner {
            border:0;
            padding:0;
        }


        /* Plyr Overrides
        ================================================== */

        .plyr--audio .plyr__controls {
            background-color:rgba(47, 64, 80, 0.9);
            border:none;
            color: #ffffff;
            /*padding:20px 20px 20px 13px;*/
            width:100%;
        }

        .plyr--audio .plyr__controls button.tab-focus:focus,
        .plyr--audio .plyr__controls button:hover,
        .plyr__play-large {
            background:rgba(0,0,0,.1);
        }

        .plyr__progress--played,
        .plyr__volume--display {
            color:rgba(0,0,0,.1);
        }

        .plyr--audio .plyr__progress--buffer,
        .plyr--audio .plyr__volume--display {
            background:rgba(0,0,0,.1);
        }

        .plyr--audio .plyr__progress--buffer {
            color:rgba(0,0,0,.1);
        }

        .plyr__tooltip{
            float: bottom;
        }

        .plyr{
            border-radius:5px;
        }
        .plyr-div{
            padding-top: 8px;
            padding-bottom: 8px;
        }


        /* Media Queries
        ================================================== */

        @media only screen and (max-width:600px) {
            #nowPlay span#npAction { display:none; }
            #nowPlay span#npTitle { display:block; text-align:center; width:100%; }
        }

        @media (min-width: 768px){
            .plyr__volume {
                max-width: 30px;
            }

        }
        @media (min-width: 576px) {

            #audio0 {
                margin-top: -18px;
            }
        }


    </style>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- İç sayfada kullanılan scriptler -->
    <script src="/js/plugins/dataTables/datatables.min.js"></script> 				<!-- Data tablo -->
    <script src="/js/plugins/chosen/chosen.jquery.js"></script> 						<!-- Selectbox arama -->
    <script src="/js/inspinia.js"></script> 											<!-- Genel -->
    <script src="/js/plugins/iCheck/icheck.min.js"></script>							<!-- Checkbox -->
    <script src="/js/plugins/typehead/bootstrap3-typeahead.min.js"></script>			<!-- Arama tamamlama -->
    <script src="/js/plugins/datapicker/bootstrap-datepicker.js"></script>			<!-- Takvim -->
    <script src="/js/plugins/clockpicker/clockpicker.js"></script>					<!-- Saat -->
    <script src="/js/plugins/daterangepicker/daterangepicker.js"></script>			<!-- Takvim - iki tarih arası -->
    <script src="/js/plugins/switchery/switchery.js"></script>						<!-- Switch buton -->
    <script src="/js/plugins/validate/jquery.validate.min.js"></script>				<!-- Validate -->
    <script src="/js/plugins/validate/messages_tr.js"></script>				<!-- Validate -->
    <script src="/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js"></script>	<!-- Listbox arama, birden çok seçim -->
    <script src="/js/plugins/sweetalert/sweetalert.min.js"></script>					<!-- Sweet alert -->
    <script src="/js/plugins/toastr/toastr.min.js"></script>					        <!-- toastr alert -->
    <script src="/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>	<!-- Sayaç - 0 + -->
    <script type="text/javascript">
        $(document).ready(function(){

            $('.i-checks').iCheck({ checkboxClass: 'icheckbox_square-green', radioClass: 'iradio_square-green' });
            $('.clockpicker').clockpicker();

            $('.input-group.date').datepicker({todayBtn: "linked",keyboardNavigation: false,forceParse: false,calendarWeeks: true,autoclose: true});
            $('.input-daterange').datepicker({keyboardNavigation: false,forceParse: true,autoclose: true});
            $('.dual_select').bootstrapDualListbox({selectorMinimalHeight: 160});

            tabble = $('.datatable').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'Tablo1'},
                    {extend: 'pdf', title: 'Tablo1'},
                    {extend: 'print',
                        customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ],
                "language": {
                    "sDecimal":        ",",
                    "sEmptyTable":     "Tabloda herhangi bir veri mevcut değil",
                    "sInfo":           "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
                    "sInfoEmpty":      "Kayıt yok",
                    "sInfoFiltered":   "(_MAX_ kayıt içerisinden bulunan)",
                    "sInfoPostFix":    "",
                    "sInfoThousands":  ".",
                    "sLengthMenu":     "Sayfada _MENU_ kayıt göster",
                    "sLoadingRecords": "Yükleniyor...",
                    "sProcessing":     "İşleniyor...",
                    "sSearch":         "Ara:",
                    "sZeroRecords":    "Eşleşen kayıt bulunamadı",
                    "oPaginate": {
                        "sFirst":    "İlk",
                        "sLast":     "Son",
                        "sNext":     "Sonraki",
                        "sPrevious": "Önceki"
                    },
                    "oAria": {
                        "sSortAscending":  ": artan sütun sıralamasını aktifleştir",
                        "sSortDescending": ": azalan sütun sıralamasını aktifleştir"
                    }
                }
            });



            toastr.options = {
                closeButton: true,
                progressBar: true,
                timeOut:3000,
                positionClass: "toast-top-right"

            };

            $(function () {
                $('[data-toggle="tooltip"]').tooltip({container: "body"});
            });

            <!-- Selectbox Arama -->
            $('.chosen-select').chosen({width: "100%"});

            $("form.formvalidate").validate();
        });



        function sadecesayi(myfield, e, dec){

            var key;
            var keychar;

            //myfield.value = $.trim(myfield.value);
            myfield.value = replaceAll(' ','',myfield.value);

            if (window.event)
                key = window.event.keyCode;
            else if (e)
                key = e.which;
            else
                return true;
            keychar = String.fromCharCode(key);

            // control keys
            if ((key == null) || (key == 0) || (key == 8) ||
                (key == 9) || (key == 13) || (key == 27))
                return true;

            // numbers
            else if ((("0123456789").indexOf(keychar) > -1))
                return true;

            // decimal point jump
            else if (dec && (keychar == ".")) {
                myfield.form.elements[dec].focus();
                return false;
            }
            else
                return false;
        }

        function trKarakterTemizle(element) {
            var newValue = '';
            newValue = replaceAll('ç','c',element.value);
            newValue = replaceAll('Ç','C',newValue);
            newValue = replaceAll('ğ','g',newValue);
            newValue = replaceAll('Ğ','G',newValue);
            newValue = replaceAll('ı','i',newValue);
            newValue = replaceAll('İ','I',newValue);
            newValue = replaceAll('ü','u',newValue);
            newValue = replaceAll('Ü','U',newValue);
            newValue = replaceAll('ö','o',newValue);
            newValue = replaceAll('Ö','O',newValue);
            newValue = replaceAll('ş','s',newValue);
            newValue = replaceAll('Ş','S',newValue);
            $(element).val(newValue);
        }

        function trKarakterTemizle2(element) {
            var newValue = '';
            newValue = replaceAll('ç','c',element.value);
            newValue = replaceAll('Ç','C',newValue);
            newValue = replaceAll('ğ','g',newValue);
            newValue = replaceAll('Ğ','G',newValue);
            newValue = replaceAll('ı','i',newValue);
            newValue = replaceAll('İ','I',newValue);
            newValue = replaceAll('ü','u',newValue);
            newValue = replaceAll('Ü','U',newValue);
            newValue = replaceAll('ö','o',newValue);
            newValue = replaceAll('Ö','O',newValue);
            newValue = replaceAll('ş','s',newValue);
            newValue = replaceAll('Ş','S',newValue);
            //newValue = replaceAll(' ','',newValue);
            $(element).val(newValue);
        }

        function replaceAll(search, replacement,target) {
            return target.replace(new RegExp(search, 'g'), replacement);
        }


    </script>

    <script src="/js/chartJs/Chart.bundle.js"></script>
    <script src="/js/chartJs/Chart.HeatMap.S.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-multiselect.js"></script>
    <link rel="icon" type="image/x-icon" href="/netgsm.ico" />
</head>
<body>
<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <div class="nav-header">
                <div class="dropdown profile-element">
						<span>
							<img alt="image" class="img" src="/images/netsantral_logo.png" style="width:160px;"/>
                            						</span>

                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<span class="clear">
								<span class="block m-t-xs">
                                    <strong class="font-bold">
                                                                                    UYUMSOFT
                                                                            </strong>
                                </span>
							</span>
                    </a>



                    <span style="cursor: pointer;" onclick="santralStatus();" id="statusSantral" data-toggle="tooltip" data-placement="right" data-container="body" class="badge badge-xs badge-success2"  title2="Hizmete Açık Santral">Aktif Santral</span>
                    <script>
                        function santralStatus() {
                            swal(
                                'Bilgi',
                                'Aktif Santral'
                            )
                        }
                    </script>

                </div>
                <div class="logo-element">
                    <img src="/images/netsantral_logo-icon.png" style="height: 35px"/>
                </div>
            </div>




            <ul class="nav mb70" id="side-menu">




                <li >

                    <a href="#"><i class="fa fa-line-chart"></i> <span class="nav-label">Dashboard</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li  class="active" >

                        <li >
                            <a href="/home/home"><i class="fa fa-home"></i> <span class="nav-label">Santral İzleme</span></a>
                        </li>

                        <li >
                            <a href="/home/dashboard"><i class="fa fa-home"></i> <span class="nav-label">Santral Dashboard TV</span></a>
                        </li>


                        </li>


                    </ul>
                </li>







                <li >

                    <a href="/agentekran/home_agent_ekran"><i class="fa fa-home"></i> <span class="nav-label">Agent Ekranı</span></a>
                </li>



                <li >
                    <a href="/cdr/gorusme_detayi"><i class="fa fa-list"></i> <span class="nav-label">Görüşme Detayları</span></a>
                </li>


                <li >
                    <a href="/istatistik/gun"><i class="fa fa-bar-chart"></i> <span class="nav-label">İstatistik (Gelen Çağrı)</span></a>

                </li>




                <li class="active">
                    <a href="#"><i class="fa fa-line-chart"></i> <span class="nav-label">Gelen Çağrı Analizi</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">

                        <li >
                            <a href="#"><i class="fa fa-calendar"></i>Tarih Bazlı<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level collapse">
                                <li >
                                    <a href="/istatistik/tarihbazli/adet"><i class="fa fa-delicious"></i> Adet Bazlı</a>
                                </li>
                                <li >
                                    <a href="/istatistik/tarihbazli/sure"><i class="fa fa-clock-o"></i> Süre Bazlı</a>
                                </li>
                            </ul>
                        </li>

                        <li >
                            <a href="#"><i class="fa fa-sitemap"></i>Departman Bazlı<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level collapse" >
                                <li >
                                    <a href="/istatistik/departmanbazli/adet"><i class="fa fa-delicious"></i> Adet Bazlı</a>
                                </li>
                                <li >
                                    <a href="/istatistik/departmanbazli/sure"><i class="fa fa-clock-o"></i> Süre Bazlı</a>
                                </li>
                            </ul>
                        </li>




                        <li >
                            <a href="/istatistik/dahilibazli/adet"><i class="fa fa-user"></i> Dahili Bazlı</a>
                        </li>

                        <li class="active">
                            <a href="/istatistik/dahilibazli/adetpro"><i class="fa fa-user"></i> Dahili Bazlı Detaylı Ist.</a>
                        </li>




                    </ul>
                </li>



                <li >

                    <a href="#"><i class="fa fa-line-chart"></i> <span class="nav-label">Mola Raporları</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li  class="active" >
                            <a href="#"><i class="fa fa-calendar"></i>Tarih Bazlı<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level collapse">
                                <li >
                                    <a href="/istatistik/mola"><i class="fa fa-delicious"></i> Dahili Bazlı Mola Raporu</a>
                                </li>

                            </ul>
                        </li>




                    </ul>
                </li>






















                <li >
                    <a href="/uygulamalar/"><i class="fa fa-cubes"></i> <span class="nav-label">Uygulamalar</span></a>
                </li>







            </ul>




            <div style="position: fixed;bottom: 0;padding-bottom:10px;background-color:#2F4050;text-align: center">
                <div class="profile-element" style="width: 220px;">
                    <img src="/images/netgsm_logo.png" alt="Netgsm" style="height: 50px;">
                </div>
                <div class="logo-element" style="width: 70px">
                    <img src="/images/netgsm_icon.png" alt="Netgsm" height="35">
                </div>
            </div>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">

        <!-- Bildirim - Mesajlar-->
        <div class="row">
            <nav class="navbar navbar-static-top white-bg" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>

                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="https://www.netgsm.com.tr/">
                            <i class="fa fa-credit-card"></i> Finansal İşlemler
                        </a>
                    </li>
                    <li>
                        <a href="https://www.netgsm.com.tr/">
                            <i class="fa fa-mail-reply"></i> Webportal
                        </a>
                    </li>
                    <li>
                        <a onclick="window.location='/';">
                            <i class="fa fa-sign-out"></i> Çıkış
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div id="loadingmessage" style="display:none;margin: 0px; padding: 0px; position: fixed; right: 0px; top: 0px; width: 100%; height: 100%; background-color: rgb(102, 102, 102); z-index: 999999; opacity: 0.8;">
            <div  style="color: white; position: absolute; top: 50%; left: 50%;transform: translate(-50%, -50%); display: inline-block;">
                <div class="sk-spinner sk-spinner-double-bounce">
                    <div class="sk-double-bounce1" style="background-color: white;"></div>
                    <div class="sk-double-bounce2" style="background-color: white;"></div>
                </div>
                <br>
                <span style="color: white;" id="loadMessage">İşleminiz gerçekleştiriliyor...</span>
            </div>
        </div>
        <script>
            function loadingMessage(message) {
                $('#loadMessage').html(message);
                $('#loadingmessage').show();
            }
            function closingLoadingMessage() {
                $('#loadingmessage').hide();
            }
            $(document).keyup(function(e) {
                if (e.keyCode == 27) {
                    $('#loadingmessage').hide();
                }
            });
        </script>



        <script>

            var countDatas = [68,19483,4476,680,19483,4476,100 ];    //widgetlarda görünecek datalar
            var percentDatas= [100,100,100,100, /*100,*/100,100,100];      //progressbarda görünecek Yüzdeler

            function getHeight(count) {
                var height=300;
                if (count>0 && count<15){
                    height = 300;
                }
                else if (count >=15 && count<20){
                    height = 350;
                } else if(count >=20 && count<25) {
                    height = 400;
                } else if(count >=25 && count<30) {
                    height = 450;
                } else if(count >=25) {
                    height = ((count/10)*20)+400;

                }
                return height;
            }
            function getWidth(count) {
                var width=1200;
                if (count>0 && count<15){
                    width = 1000;
                }
                else if (count >=15 && count<20){
                    width = 1050;
                } else if(count >=20 && count<25) {
                    width = 1100;
                } else if(count >=25 && count<30) {
                    width = 1150;
                } else if(count >=25) {
                    width = 1200;
                }
                return width;
            }

            /*
             * reverse 0 gelirse tümü, 1 gelirse küçükten büyüğe , 2 gelirse büyükten küçüğe
             */
            function arraySort(datas, reverse) {
                var result = [];
                for (var data in datas) {
                    result.push([data, datas[data]]);
                }

                result.sort(function(a, b) {
                    if (reverse==1) {
                        return a[1] - b[1];
                    } else {
                        return b[1] - a[1];
                    }
                });
                return result;
            }

            function minMaxFilter(chart, data) {
                var say = 0;
                for (var sort in data) {
                    var val = data[sort];
                    if (say>4){
                        chart.getDatasetMeta(val[0]).hidden=true;
                    }
                    if ( val[1] != 0){
                        say++;
                    }
                }
                return chart.update();
            }

            function getSum(total, num) {
                return total + num;
            }

        </script>

        <div id="loadingmessage" style="display:none;margin: 0px; padding: 0px; position: fixed; right: 0px; top: 0px; width: 100%; height: 100%; background-color: rgb(102, 102, 102); z-index: 30001; opacity: 0.8;">
            <div  style="color: white; position: absolute; top: 45%; left: 44%;">
                <div class="sk-spinner sk-spinner-double-bounce">
                    <div class="sk-double-bounce1" style="background-color: white;"></div>
                    <div class="sk-double-bounce2" style="background-color: white;"></div>
                </div>
                <br>
                <span style="color: white;">İşleminiz gerçekleştiriliyor...</span>
            </div>
        </div>
        <div class="container-fluid" style="background-color: white;">
        </div>
        <div class="container loadBarSearch" id="loadBarforSearch" style="display:none;"></div>
        <div class="row" style="z-index: 344; position: relative">
            <form action="/istatistik/dahilibazli/adetpro" method="post" class="form-inline" id="search">
                <div class="col-md-12">
                    <div class="ibox" style="margin-bottom: 5px">
                        <div class="ibox-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3" style="margin-top: 10px;">
                                        <small>Dahiliye göre <span class="badge badge-info">4</span> günlük <span class="badge badge-info">Günlük</span> istatistiği inceleniyor.
                                        </small>
                                        <input type="hidden" name="staticticsType" id="staticticsType" value="monthly">
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 text-left" >
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 text-right">
                                                <div class="input-group" style="padding-left: 24px">
                                                    <input type="hidden" name="totalQueue" id="totalQueue" value="253" >
                                                    <span class="input-group-addon" style="background-color: #EEEEEE; padding: 4px 5px;"><i class="fa fa-cubes"></i></span>
                                                    <select style="width: 100%" id="extensionMultiple" data-placeholder="Dahili seçiniz" class="form-control" multiple="multiple"  name="extensionName[]">
                                                        <option value="3000"  >3000-Zeliha Murat </option>
                                                        <option value="3001"  >3001-Arzu Akbas </option>
                                                        <option value="3002"  >3002-Ceren Kasimoglu   </option>
                                                        <option value="3004"  >3004-Hayriye Coban </option>
                                                        <option value="3005"  >3005-Irem Ogredici </option>
                                                        <option value="3006"  >3006-Ozge Kasar </option>
                                                        <option value="3007"  >3007-Sena Hosken </option>
                                                        <option value="3008"  >3008-Merve Ozer </option>
                                                        <option value="3009"  >3009-Nuri Yilmaz </option>
                                                        <option value="3010"  >3010-Nurcan Korkilinc </option>
                                                        <option value="3011"  >3011-Melike Melek </option>
                                                        <option value="3012"  >3012-Melike Durmaz </option>
                                                        <option value="3013"  >3013-Merve Sagman </option>
                                                        <option value="3014"  >3014-Cavidan Oz </option>
                                                        <option value="3015"  >3015-Esra Kaya </option>
                                                        <option value="3016"  >3016-Zeynepnur Oz </option>
                                                        <option value="3017"  >3017-Kubra Batur </option>
                                                        <option value="3018"  >3018-Seda Sahin </option>
                                                        <option value="3019"  >3019-Ebru Hatipoglu </option>
                                                        <option value="3020"  >3020-Imran Isen </option>
                                                        <option value="3021"  >3021-Faruk Ozerzurumlu </option>
                                                        <option value="3022"  >3022-Hande Saracoglu </option>
                                                        <option value="3023"  >3023-Ozlem Cakir  </option>
                                                        <option value="3024"  >3024-Kubra Genc </option>
                                                        <option value="3025"  >3025-Esra Yildiz </option>
                                                        <option value="3026"  >3026-Erdem Karatepe </option>
                                                        <option value="3027"  >3027-Omer Bayram         </option>
                                                        <option value="3028"  >3028-Elif Tugce Sengonul </option>
                                                        <option value="3029"  >3029-Havvanur Bilmez </option>
                                                        <option value="3030"  >3030-Ahmet Ozkiraz </option>
                                                        <option value="3031"  >3031-Betul Onari </option>
                                                        <option value="3032"  >3032-Merve Onder </option>
                                                        <option value="3033"  >3033-Gulden Durgun </option>
                                                        <option value="3034"  >3034-Funda Asantugrul </option>
                                                        <option value="3035"  >3035-Elif Reyhan Percin </option>
                                                        <option value="3036"  >3036-Ebru Agac </option>
                                                        <option value="3037"  >3037-Salih Isler </option>
                                                        <option value="3038"  >3038-Tarik Dag </option>
                                                        <option value="3040"  >3040-Aslihan Yilmaz </option>
                                                        <option value="3041"  >3041-Muhammet Dogan </option>
                                                        <option value="3042"  >3042-Enes Karakus </option>
                                                        <option value="3043"  >3043-Samil Gokce </option>
                                                        <option value="3044"  >3044-Seda Dizman       </option>
                                                        <option value="3045"  >3045-Sibel Mavzer </option>
                                                        <option value="3046"  >3046-Cemal Erdem </option>
                                                        <option value="3048"  >3048-Ali Murat Candar </option>
                                                        <option value="3049"  >3049-Sukran Demir </option>
                                                        <option value="3050"  >3050-Ayse Kaya </option>
                                                        <option value="3051"  >3051-Elem Yilmaz </option>
                                                        <option value="3052"  >3052-Sefa Guven </option>
                                                        <option value="3053"  >3053-Berat Karakaplan </option>
                                                        <option value="3054"  >3054-Mehmet Cicek </option>
                                                        <option value="3055"  >3055-Hatice Tor </option>
                                                        <option value="3056"  >3056-Sila Pelit </option>
                                                        <option value="3057"  >3057-Gulcin Barbak </option>
                                                        <option value="3058"  >3058-Huseyin Bayram </option>
                                                        <option value="3059"  >3059-Musa Gunay </option>
                                                        <option value="3060"  >3060-Hacer Varazli </option>
                                                        <option value="3061"  >3061-Basak Unlu </option>
                                                        <option value="3062"  >3062-Busra Demirtas </option>
                                                        <option value="3063"  >3063-Koray Inan </option>
                                                        <option value="3065"  >3065-Mert Alparslan </option>
                                                        <option value="3066"  >3066-Cigdem Urgen </option>
                                                        <option value="3067"  >3067-Yunus Simsek </option>
                                                        <option value="3068"  >3068-Eren Karatas </option>
                                                        <option value="3069"  >3069-Seda Dalkiran </option>
                                                        <option value="3070"  >3070-Cansu Yildiz </option>
                                                        <option value="3071"  >3071-Kubranur Peksen </option>
                                                        <option value="3072"  >3072-Mahmut Yakan </option>
                                                        <option value="3074"  >3074-Beyza Islekli </option>
                                                        <option value="3075"  >3075-Esma Pinar Cevirgen </option>
                                                        <option value="3076"  >3076-Resit Colkesen </option>
                                                        <option value="3077"  >3077-Sumeyye Sarihan </option>
                                                        <option value="3078"  >3078-Aysenur Zeren </option>
                                                        <option value="3079"  selected>3079-Hikmet Sahin </option>
                                                        <option value="3080"  >3080-Esra Sanli </option>
                                                        <option value="3081"  >3081-Seher Akin </option>
                                                        <option value="3082"  >3082-Mina Percin </option>
                                                        <option value="3083"  >3083-Bilge Koc </option>
                                                        <option value="3084"  >3084-Turgay Karakoc </option>
                                                        <option value="3085"  >3085-Derya Dogan </option>
                                                        <option value="3086"  >3086-Ugur Gok </option>
                                                        <option value="3087"  >3087-Fatma Deligonul </option>
                                                        <option value="3090"  >3090-Meral Uresin </option>
                                                        <option value="3093"  >3093-Songul Kas </option>
                                                        <option value="3094"  >3094-Sumeyye Saglam </option>
                                                        <option value="3099"  >3099-Merve Colak          </option>
                                                        <option value="3100"  >3100-Irem Cerioglu </option>
                                                        <option value="3102"  >3102-Mehet Ali Tutuncu </option>
                                                        <option value="3103"  >3103-Aleyna Gurbuz </option>
                                                        <option value="3104"  >3104-Muhammed Rasit Batur </option>
                                                        <option value="3105"  >3105-Caner Ocak </option>
                                                        <option value="3106"  >3106-Taha Furkan Zeren </option>
                                                        <option value="3109"  >3109-Merve Yenal </option>
                                                        <option value="3110"  >3110-Mucahit Boztepe </option>
                                                        <option value="3113"  >3113-Merve Akyel </option>
                                                        <option value="3114"  >3114-Sulbiye Yaman </option>
                                                        <option value="3115"  >3115-Furkan Haskologlu </option>
                                                        <option value="3116"  >3116-Rabia Karatas </option>
                                                        <option value="3117"  >3117-Ahmet Albayrak </option>
                                                        <option value="3118"  >3118-Aylin Acim </option>
                                                        <option value="3119"  >3119-Filiz Tadik </option>
                                                        <option value="3120"  >3120-Alperen Yildiz </option>
                                                        <option value="3122"  >3122-Bahadir Hatipoglu </option>
                                                        <option value="3124"  >3124-Ebru Yurtbay </option>
                                                        <option value="3125"  >3125-Ejder Celbis </option>
                                                        <option value="3127"  >3127-Nagihan Acikgoz </option>
                                                        <option value="3128"  >3128-Isil Haskollar </option>
                                                        <option value="3129"  >3129-Cansu Keles </option>
                                                        <option value="3130"  >3130-Selin Yavuz </option>
                                                        <option value="3131"  >3131-Belma Baser </option>
                                                        <option value="3132"  >3132-Elif Uzamis </option>
                                                        <option value="3133"  >3133-Esra Ozgen </option>
                                                        <option value="3134"  >3134-Metin Onder </option>
                                                        <option value="3135"  >3135-Muzaffer Kaan Yuce </option>
                                                        <option value="3137"  >3137-Ozan Erdem </option>
                                                        <option value="3138"  >3138-Nafiye Aksoz </option>
                                                        <option value="3139"  >3139-Ayse Sezgin </option>
                                                        <option value="3140"  >3140-Merve Meryem Tasci </option>
                                                        <option value="3141"  >3141-Burcu Serin </option>
                                                        <option value="3142"  >3142-Asude Ay </option>
                                                        <option value="3143"  >3143-Burcu Yilmaz </option>
                                                        <option value="3144"  >3144-Esra Altun </option>
                                                        <option value="3149"  >3149-Ecem Yildiz </option>
                                                        <option value="3150"  >3150-Ayse Polat </option>
                                                        <option value="3151"  >3151-Caner Durmaz </option>
                                                        <option value="3152"  >3152-Elif Ozsayin </option>
                                                        <option value="3155"  >3155-Hamide Has </option>
                                                        <option value="3158"  >3158-Onur Yurekli </option>
                                                        <option value="3159"  >3159-Seda Altun </option>
                                                        <option value="3170"  >3170-Nurullah Alisik </option>
                                                        <option value="3171"  >3171-Selva Orhanoglu </option>
                                                        <option value="3175"  >3175-Ozge Guler </option>
                                                        <option value="3181"  >3181-Nurettin Ezer </option>
                                                        <option value="3216"  >3216-Ali Artuvan </option>
                                                        <option value="3217"  >3217-Pelin Celik </option>
                                                        <option value="3218"  >3218-Yusuf Talha Onder </option>
                                                        <option value="3219"  >3219-Mukaddes Konak </option>
                                                        <option value="3220"  >3220-Ozlem Ikiz </option>
                                                        <option value="3221"  >3221-Ayse Ozavci </option>
                                                        <option value="3222"  >3222-Aysegul Karahan </option>
                                                        <option value="3223"  >3223-Damla Cetinkaya </option>
                                                        <option value="3224"  >3224-Ebubekir Varlioglu </option>
                                                        <option value="3225"  >3225-Ertugrul Firat </option>
                                                        <option value="3226"  >3226-Esra Rukiye Bilici </option>
                                                        <option value="3227"  >3227-Gurkan Gultekin </option>
                                                        <option value="3228"  >3228-Ibrahim Sari </option>
                                                        <option value="3229"  >3229-Maide Timur </option>
                                                        <option value="3230"  >3230-Onur Sahin </option>
                                                        <option value="3231"  >3231-Rabia Kilic </option>
                                                        <option value="3232"  >3232-Fazli Akca </option>
                                                        <option value="3233"  >3233-Rabia Koc </option>
                                                        <option value="3234"  >3234-Serkan Ozturkmen </option>
                                                        <option value="3235"  >3235-Talha Can </option>
                                                        <option value="3236"  >3236-Tugce Kirteke </option>
                                                        <option value="3237"  >3237-Efdal Kisa </option>
                                                        <option value="3238"  >3238-Yaren Akpinar </option>
                                                        <option value="3239"  >3239-Tarik Dag </option>
                                                        <option value="3240"  >3240-Ali Seydi Aydin </option>
                                                        <option value="3241"  >3241-Mirac Uymaz </option>
                                                        <option value="3242"  >3242-Nevzat Kaya </option>
                                                        <option value="3243"  >3243-Murat Inanc </option>
                                                        <option value="3244"  >3244-Omer Ergul </option>
                                                        <option value="3245"  >3245-Songul Keles </option>
                                                        <option value="3246"  >3246-Merve Basar </option>
                                                        <option value="3247"  >3247-Gulay Otman </option>
                                                        <option value="3248"  >3248-Melih Akdemir </option>
                                                        <option value="3249"  >3249-Ayberk Soybar </option>
                                                        <option value="3250"  >3250-Burak Barlik </option>
                                                        <option value="3251"  >3251-Fatma Celik </option>
                                                        <option value="3252"  >3252-Tugce Ozer </option>
                                                        <option value="3255"  >3255-Ramazan Oztemur </option>
                                                        <option value="3256"  >3256-Sadik Kahyaoglu </option>
                                                        <option value="3257"  >3257-Berivan Kizilcan </option>
                                                        <option value="3258"  >3258-Mine Onder </option>
                                                        <option value="3259"  >3259-Mustafa Alipasaoglu </option>
                                                        <option value="3260"  >3260-Mehmet Onder </option>
                                                        <option value="3261"  >3261-Esra Sallabas </option>
                                                        <option value="3262"  >3262-Merve Uz </option>
                                                        <option value="3263"  >3263-Volkan Cavusoglu </option>
                                                        <option value="3264"  >3264-Mesut Numanoglu </option>
                                                        <option value="3265"  >3265-Ilker Poyraz </option>
                                                        <option value="3266"  >3266-Yesim Cicek </option>
                                                        <option value="3267"  >3267-Ozan Erdem </option>
                                                        <option value="3268"  >3268-Serhad Erdem </option>
                                                        <option value="3269"  >3269-Tarik Dag </option>
                                                        <option value="3270"  >3270-Ozkan Metin </option>
                                                        <option value="3271"  >3271-Zeliha Murat </option>
                                                        <option value="3272"  >3272-Fatma Polat </option>
                                                        <option value="3273"  >3273-Bulent Sari </option>
                                                        <option value="3274"  >3274-Mehmet Gedik </option>
                                                        <option value="3275"  >3275-Ahmet Yildirim </option>
                                                        <option value="3276"  >3276-Andac Aytac </option>
                                                        <option value="3277"  >3277-Yigitcan Akpinar </option>
                                                        <option value="3278"  >3278-Oznur Demircioglu </option>
                                                        <option value="3279"  >3279-Sinan Demir </option>
                                                        <option value="3280"  >3280-Ferhat Zengin </option>
                                                        <option value="3281"  >3281-Sevtap Turanci </option>
                                                        <option value="3282"  >3282-Hale Urun </option>
                                                        <option value="3283"  >3283-Salim Demiray </option>
                                                        <option value="3284"  >3284-Merve Tasci </option>
                                                        <option value="3285"  >3285-Ayse Sezgin </option>
                                                        <option value="3286"  >3286-Emrah Demirbas </option>
                                                        <option value="3287"  >3287-Barbaros Sezgun </option>
                                                        <option value="3288"  >3288-Nevzat Bakirci </option>
                                                        <option value="3289"  >3289-Erhun Ocal </option>
                                                        <option value="3290"  >3290-Ercan Oztemel </option>
                                                        <option value="3291"  >3291-Anil Sevener </option>
                                                        <option value="3292"  >3292-Ersin Cebeci </option>
                                                        <option value="3293"  >3293-Ceyda Uslu </option>
                                                        <option value="3294"  >3294-Arzu Buse Celen </option>
                                                        <option value="3295"  >3295-Firdevs Sumeyye Yeke </option>
                                                        <option value="3296"  >3296-Ruveyda Aleyna Deger </option>
                                                        <option value="3297"  >3297-Sefa Merve Alkurt </option>
                                                        <option value="3298"  >3298-Isilay Bakdur </option>
                                                        <option value="3299"  >3299-testnetg  </option>
                                                        <option value="3300"  >3300-Emine Donmez   </option>
                                                        <option value="3301"  >3301-Mehmet Hikmet Demirc </option>
                                                        <option value="3302"  >3302-Erkan Gul </option>
                                                        <option value="3303"  >3303-Nida Akinci </option>
                                                        <option value="3304"  >3304-Sefa Canpolat </option>
                                                        <option value="3305"  >3305-Sezer Guler </option>
                                                        <option value="3306"  >3306-Fatime Yukkaldiran </option>
                                                        <option value="3307"  >3307-Cagla Danaci </option>
                                                        <option value="3308"  >3308-ozal uzun </option>
                                                        <option value="3309"  >3309-Enes Akkaya </option>
                                                        <option value="3310"  >3310-Muhammet Demirtas </option>
                                                        <option value="3311"  >3311-Mehmet Canbay </option>
                                                        <option value="3312"  >3312-Ali Colak </option>
                                                        <option value="3360"  >3360-Faruk Ozer </option>
                                                        <option value="3361"  >3361-Kubra Peksen </option>
                                                        <option value="3362"  >3362-Merve Beyhan </option>
                                                        <option value="3363"  >3363-Gulce Karabacak </option>
                                                        <option value="3364"  >3364-Kubra Sevinc </option>
                                                        <option value="3365"  >3365-Elif Ozcan </option>
                                                        <option value="3366"  >3366-Timur Kadakal </option>
                                                        <option value="3367"  >3367-Ozge Nur Kayhan </option>
                                                        <option value="3368"  >3368-Husna Karaduman </option>
                                                        <option value="3369"  >3369-Ayse Orhaner </option>
                                                        <option value="3370"  >3370-Cuneyt Yuceer </option>
                                                        <option value="3371"  >3371-Cansu Lale </option>
                                                        <option value="3372"  >3372-Ismail Polat </option>
                                                        <option value="3373"  >3373-Leyla Ercan </option>
                                                        <option value="3374"  >3374-Yasemin Ayhan </option>
                                                        <option value="3375"  >3375-Melisa Cakmak </option>
                                                        <option value="3376"  >3376-Seda Yildiz </option>
                                                        <option value="3377"  >3377-Berat Ozcan </option>
                                                        <option value="3378"  >3378-Sena Turgut </option>
                                                        <option value="3379"  >3379-Damla Gurcu </option>
                                                        <option value="3380"  >3380-Irem Soygan </option>
                                                        <option value="9368"  >9368-test88 </option>
                                                        <option value="9966"  >9966-testnetgsm2 </option>
                                                        <option value="9999"  >9999-NetgsmTestDahili </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 text-left">
                                                <div class="input-group" style="padding-left: 13px">
                                                    <span class="input-group-addon" style="background-color: #EEEEEE; padding: 4px 5px;"><i class="fa fa-calendar-plus-o"></i></span>
                                                    <select name="timeName" id="timeName" class="chosen-select form-control" style="width: 100%">
                                                        <optgroup>
                                                            <option value="today" >Bugün</option>
                                                            <option value="lastday" >Dün</option>
                                                            <option value="last7days" >Son 7 Gün</option>
                                                            <option value="last30days" >Son 30 Gün</option>
                                                            <option value="thisweek" >Bu Hafta</option>
                                                            <option value="lastweek" >Geçen Hafta</option>
                                                            <option value="lastmonth" >Geçen Ay</option>
                                                            <option value="thismonth" >Bu ay</option>
                                                            <option value="custom" selected>Özel Tarih</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-right" id="dateDiv" data-toggle="tooltip" data-placement="bottom" title="Değiştirmek için Özel Aralık seçin.">
                                                <div class="input-daterange input-group" id="datepicker">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" class="input-md form-control" name="startDate" id="startDate" value="24/11/2020" placeholder="00/00/0000"/>
                                                    <span class="input-group-addon">-</span>
                                                    <input type="text" class="input-md form-control" name="endDate" id="endDate" value="27/11/2020" placeholder="00/00/0000"/>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                                <input class="btn btn-success" type="submit" id="getStaticticsBtn"  style="width: 100%;" value="Sorgula">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><i class="fa fa-volume-control-phone" style="color: #2ECC71;"></i> Cevaplanan Arama</h5>
                    </div>
                    <div class="ibox-content" >
                        <div class="row">
                            <div class="col-xs-7">
                                <h2 class="no-margins widget0">0</h2>
                            </div>
                            <div class="col-xs-5 text-right">
                                <h4 data-toggle="tooltip" data-placement="bottom" data-html="true" title="Değişim : 38.78% <br> Önceki zamana (20.11.2020-23.11.2020) göre 38.78% oranında değişim göstermiş.<br> Önceden: 49" class="text-navy stat-percent text-increase">38.78% <i class="fa fa-level-up"></i></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <small data-toggle="tooltip" data-placement="bottom" title="Günlük ortamalama 17 gelen arama.">17 adet/gün &nbsp;</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><i class="fa fa-external-link-square fa-rotate-180" style="color: #24C6C8;"></i> Toplam Konuşma</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-7">
                                <h2 class="no-margins widget1">0</h2>
                            </div>
                            <div class="col-xs-5 text-right">

                                <h4 data-toggle="tooltip" data-placement="bottom" data-html="true" title="Değişim: 77.52% <br>Önceki zamana (20.11.2020-23.11.2020) göre 77.52% oranında değişim göstermiş.<br> Önceden: 03:02:55" class="text-navy stat-percent text-increase">77.52% <i class="fa fa-level-up"></i></h4>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <small class="ortKonusma" data-toggle="tooltip" data-placement="right" title="Günlük ortamalama 01:21:10">Günlük ort.: 01:21:10&nbsp;</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><i class="fa fa-external-link" style="color: #F39C12;"></i> Toplam Bekleme</h5>
                    </div>
                    <div class="ibox-content" >
                        <div class="row">
                            <div class="col-xs-6">
                                <h2 class="no-margins widget2">0</h2>
                            </div>
                            <div class="col-xs-6 text-right">

                                <h4 data-toggle="tooltip" data-placement="bottom"  data-html="true" title="Değişim: 32.5% <br>Önceki zamana (20.11.2020-23.11.2020) göre 32.5% oranında değişim göstermiş.<br> Önceden: 00:56:18" class="text-navy stat-percent text-increase">32.5% <i class="fa fa-level-up"></i></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <small data-toggle="tooltip" data-placement="bottom" title="Günlük ortamalama 1119 gelen arama.">Günlük ort.: 00:18:39&nbsp;</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><i class="fa fa-ban" style="color: #E74C3C;"></i> Max. Bekleme</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-7">
                                <h2 class="no-margins widget3">0</h2>
                            </div>
                            <div class="col-xs-5 text-right">

                                <h4 data-toggle="tooltip" data-placement="bottom"  data-html="true" title="Değişim: 17.65% <br>Önceki zamana (20.11.2020-23.11.2020) göre 17.65% oranında değişim göstermiş.<br> Önceden: 00:09:38" class="text-navy stat-percent text-increase">17.65% <i class="fa fa-level-up"></i></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <small style="cursor: pointer;" data-toggle="tooltip" data-placement="left" title="Görüşme kaydını getir."  onclick="modalAc_Gun('answered','','','',['24.11.2020', '27.11.2020'], '', 680  )" ><i class="fa fa-th-list"></i> Getir&nbsp;</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" id="tabName" value="#tab-1" >
        <input type="hidden" id="filterName" value="max" >
        <div class="row" style="margin-top: -18px">
            <div class="col-lg-12">
                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1"> <i class="fa fa-volume-control-phone fa-rotate--45" style="color: #24C6C8"></i> Cevaplanan</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-2"><i class="fa fa-volume-control-phone fa-rotate--45" style="color: #2ECC71"></i> Toplam Konuşma</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-3"><i class="fa fa-volume-control-phone fa-rotate--45" style="color: #2ECC71;"></i> Ortalama Konuşma</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-4"><i class="fa fa-clock-o" style="color: #F39C12;"></i> Toplam Bekleme</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-5"><i class="fa fa-clock-o" style="color: #F39C12;"></i> Ortalama Bekleme</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-6"><i class="fa fa-ban" style="color: #E74C3C;"></i> Max Bekleme</a></li>
                        <li class="hidden"><a data-toggle="tab" href="#tab-null"><i class="fa fa-list-ol" style="color: #2C3E50;"></i> nullTab</a></li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <div class="pull-left" style="padding-top: 10px;">
                                            <div class="pull-left" style="margin-top: -20px; margin-bottom: 5px">
                                                <div class="btn-group datasetFilterDiv">
                                                    <button type="button" data="max" class="btn btn-xs btn-primary active" id="filter_max_tab-1">En Fazla</button>
                                                    <button type="button" data="min" class="btn btn-xs btn-white" id="filter_min_tab-1">En Az</button>
                                                    <button type="button" data="all" class="btn btn-xs btn-white" id="filter_all_tab-1">Tümü</button>
                                                    <span type="button" class="btn btn-xs btn-info disabled" style="cursor: context-menu"  data-toggle="tooltip" data-placement="right" data-html="true" title="Toplam değeri en fazla ve en az 5 dahiliyi filtreleyin."><i class="fa fa-info-circle"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right" style="padding-top: 10px;">
                                            <div class="pull-right" style="margin-top: -20px; margin-bottom: 5px">
                                                <div class="btn-group staticticsTypeButtonsDiv" >
                                                    <button type="button" data="hourly" class="btn btn-xs btn-white">Saatlik</button>
                                                    <button type="button" data="dayly" class="btn btn-xs btn-success active">Günlük</button>
                                                    <button type="button" data="weekly" class="btn btn-xs btn-white">Haftalık</button>
                                                    <button type="button" data="monthly" class="btn btn-xs btn-white">Aylık</button>
                                                    <button type="button" data="weekdays" class="btn btn-xs btn-white">Haftanın Günleri</button>
                                                    <button type="button" data="density" class="btn btn-xs btn-white">Hafta Bazlı Yoğunluk</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12" id="staticticsGraphDiv_chart1">
                                            <canvas id="chart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane ">
                                    <div class="panel-body">
                                        <div class="pull-left" style="padding-top: 10px;">
                                            <div class="pull-left" style="margin-top: -20px; margin-bottom: 5px">
                                                <div class="btn-group datasetFilterDiv">
                                                    <button type="button" data="max" class="btn btn-xs btn-primary active" id="filter_max_tab-2">En Fazla</button>
                                                    <button type="button" data="min" class="btn btn-xs btn-white" id="filter_min_tab-2">En Az</button>
                                                    <button type="button" data="all" class="btn btn-xs btn-white" id="filter_all_tab-2">Tümü</button>
                                                    <span type="button" class="btn btn-xs btn-info disabled" style="cursor: context-menu"  data-toggle="tooltip" data-placement="right" data-html="true" title="Toplam değeri en fazla ve en az 5 dahiliyi filtreleyin."><i class="fa fa-info-circle"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right" style="padding-top: 10px;">
                                            <div class="pull-right" style="margin-top: -20px; margin-bottom: 5px">
                                                <div class="btn-group staticticsTypeButtonsDiv" >
                                                    <button type="button" data="hourly" class="btn btn-xs btn-white">Saatlik</button>
                                                    <button type="button" data="dayly" class="btn btn-xs btn-success active">Günlük</button>
                                                    <button type="button" data="weekly" class="btn btn-xs btn-white">Haftalık</button>
                                                    <button type="button" data="monthly" class="btn btn-xs btn-white">Aylık</button>
                                                    <button type="button" data="weekdays" class="btn btn-xs btn-white">Haftanın Günleri</button>
                                                    <button type="button" data="density" class="btn btn-xs btn-white">Hafta Bazlı Yoğunluk</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12" id="staticticsGraphDiv_chart2">
                                            <canvas id="chart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane ">
                                    <div class="panel-body">
                                        <div class="pull-left" style="padding-top: 10px;">
                                            <div class="pull-left" style="margin-top: -20px; margin-bottom: 5px">
                                                <div class="btn-group datasetFilterDiv">
                                                    <button type="button" data="max" class="btn btn-xs btn-primary active" id="filter_max_tab-3">En Fazla</button>
                                                    <button type="button" data="min" class="btn btn-xs btn-white" id="filter_min_tab-3">En Az</button>
                                                    <button type="button" data="all" class="btn btn-xs btn-white" id="filter_all_tab-3">Tümü</button>
                                                    <span type="button" class="btn btn-xs btn-info disabled" style="cursor: context-menu"  data-toggle="tooltip" data-placement="right" data-html="true" title="Toplam değeri en fazla ve en az 5 dahiliyi filtreleyin."><i class="fa fa-info-circle"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right" style="padding-top: 10px;">
                                            <div class="pull-right" style="margin-top: -20px; margin-bottom: 5px">
                                                <div class="btn-group staticticsTypeButtonsDiv" >
                                                    <button type="button" data="hourly" class="btn btn-xs btn-white">Saatlik</button>
                                                    <button type="button" data="dayly" class="btn btn-xs btn-success active">Günlük</button>
                                                    <button type="button" data="weekly" class="btn btn-xs btn-white">Haftalık</button>
                                                    <button type="button" data="monthly" class="btn btn-xs btn-white">Aylık</button>
                                                    <button type="button" data="weekdays" class="btn btn-xs btn-white">Haftanın Günleri</button>
                                                    <button type="button" data="density" class="btn btn-xs btn-white">Hafta Bazlı Yoğunluk</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12" id="staticticsGraphDiv_chart3">
                                            <canvas id="chart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-4" class="tab-pane ">
                                    <div class="panel-body">
                                        <div class="pull-left" style="padding-top: 10px;">
                                            <div class="pull-left" style="margin-top: -20px; margin-bottom: 5px">
                                                <div class="btn-group datasetFilterDiv">
                                                    <button type="button" data="max" class="btn btn-xs btn-primary active" id="filter_max_tab-4">En Fazla</button>
                                                    <button type="button" data="min" class="btn btn-xs btn-white" id="filter_min_tab-4">En Az</button>
                                                    <button type="button" data="all" class="btn btn-xs btn-white" id="filter_all_tab-4">Tümü</button>
                                                    <span type="button" class="btn btn-xs btn-info disabled" style="cursor: context-menu"  data-toggle="tooltip" data-placement="right" data-html="true" title="Toplam değeri en fazla ve en az 5 dahiliyi filtreleyin."><i class="fa fa-info-circle"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right" style="padding-top: 10px;">
                                            <div class="pull-right" style="margin-top: -20px; margin-bottom: 5px">
                                                <div class="btn-group staticticsTypeButtonsDiv" >
                                                    <button type="button" data="hourly" class="btn btn-xs btn-white">Saatlik</button>
                                                    <button type="button" data="dayly" class="btn btn-xs btn-success active">Günlük</button>
                                                    <button type="button" data="weekly" class="btn btn-xs btn-white">Haftalık</button>
                                                    <button type="button" data="monthly" class="btn btn-xs btn-white">Aylık</button>
                                                    <button type="button" data="weekdays" class="btn btn-xs btn-white">Haftanın Günleri</button>
                                                    <button type="button" data="density" class="btn btn-xs btn-white">Hafta Bazlı Yoğunluk</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12" id="staticticsGraphDiv_chart4">
                                            <canvas id="chart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-5" class="tab-pane ">
                                    <div class="panel-body">
                                        <div class="pull-left" style="padding-top: 10px;">
                                            <div class="pull-left" style="margin-top: -20px; margin-bottom: 5px">
                                                <div class="btn-group datasetFilterDiv">
                                                    <button type="button" data="max" class="btn btn-xs btn-primary active" id="filter_max_tab-5">En Fazla</button>
                                                    <button type="button" data="min" class="btn btn-xs btn-white" id="filter_min_tab-5">En Az</button>
                                                    <button type="button" data="all" class="btn btn-xs btn-white" id="filter_all_tab-5">Tümü</button>
                                                    <span type="button" class="btn btn-xs btn-info disabled" style="cursor: context-menu"  data-toggle="tooltip" data-placement="right" data-html="true" title="Toplam değeri en fazla ve en az 5 dahiliyi filtreleyin."><i class="fa fa-info-circle"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right" style="padding-top: 10px;">
                                            <div class="pull-right" style="margin-top: -20px; margin-bottom: 5px">
                                                <div class="btn-group staticticsTypeButtonsDiv" >
                                                    <button type="button" data="hourly" class="btn btn-xs btn-white">Saatlik</button>
                                                    <button type="button" data="dayly" class="btn btn-xs btn-success active">Günlük</button>
                                                    <button type="button" data="weekly" class="btn btn-xs btn-white">Haftalık</button>
                                                    <button type="button" data="monthly" class="btn btn-xs btn-white">Aylık</button>
                                                    <button type="button" data="weekdays" class="btn btn-xs btn-white">Haftanın Günleri</button>
                                                    <button type="button" data="density" class="btn btn-xs btn-white">Hafta Bazlı Yoğunluk</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12" id="staticticsGraphDiv_chart5">
                                            <canvas id="chart5"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-6" class="tab-pane ">
                                    <div class="panel-body">
                                        <div class="pull-left" style="padding-top: 10px;">
                                            <div class="pull-left" style="margin-top: -20px; margin-bottom: 5px">
                                                <div class="btn-group datasetFilterDiv">
                                                    <button type="button" data="max" class="btn btn-xs btn-primary active" id="filter_max_tab-6">En Fazla</button>
                                                    <button type="button" data="min" class="btn btn-xs btn-white" id="filter_min_tab-6">En Az</button>
                                                    <button type="button" data="all" class="btn btn-xs btn-white" id="filter_all_tab-6">Tümü</button>
                                                    <span type="button" class="btn btn-xs btn-info disabled" style="cursor: context-menu"  data-toggle="tooltip" data-placement="right" data-html="true" title="Toplam değeri en fazla ve en az 5 dahiliyi filtreleyin."><i class="fa fa-info-circle"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right" style="padding-top: 10px;">
                                            <div class="pull-right" style="margin-top: -20px; margin-bottom: 5px">
                                                <div class="btn-group staticticsTypeButtonsDiv" >
                                                    <button type="button" data="hourly" class="btn btn-xs btn-white">Saatlik</button>
                                                    <button type="button" data="dayly" class="btn btn-xs btn-success active">Günlük</button>
                                                    <button type="button" data="weekly" class="btn btn-xs btn-white">Haftalık</button>
                                                    <button type="button" data="monthly" class="btn btn-xs btn-white">Aylık</button>
                                                    <button type="button" data="weekdays" class="btn btn-xs btn-white">Haftanın Günleri</button>
                                                    <button type="button" data="density" class="btn btn-xs btn-white">Hafta Bazlı Yoğunluk</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12" id="staticticsGraphDiv_chart6">
                                            <canvas id="chart6"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12" style="padding-top: 15px;">
                <div class="ibox float-e-margins" >
                    <div class="ibox-title" id="down">
                        <div class="row">
                            <div class="col-xs-9">
                                <h5><i class="fa fa-sitemap"></i> Günlük istatistik (<span class="tableSelectDate" defaultDate="24/11/2020 - 27/11/2020">24/11/2020 - 27/11/2020</span>)
                                </h5>
                            </div>
                            <div class="col-xs-3 pull-right text-right">
                                <span style="float: right;cursor: pointer; display: none;" onclick="allDataTable();" id="allDataTable" class="badge badge-xs badge-info" ><i class="fa fa-reply"></i> Tümünü Göster</span>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content table-responsive">

                        <table class="table table-striped table-bordered datatable" id="datatable">
                            <thead>
                            <tr>
                                <th>Tarih</th>
                                <th>Dahili</th>
                                <th>Toplam Gelen Giden Çağrı Adedi</th>

                                <th>Gelen Cevaplanan Çağrı Adedi</th>
                                <th>Giden Cevaplanan Çağrı Adedi</th>

                                <th>Giriş Zamanı</th>
                                <th>Çıkış Zamanı</th>
                                <th>Toplam Login Süresi</th>
                                <th>Müsait Zaman</th>



                                <th>Toplam Giden Çağrı Süresi</th>

                                <th>Toplam Gelen Çağrı Süresi</th>


                                <th>Toplam Çalma Süresi</th>
                                <th>Toplam Bekletme Süresi</th>
                                <th>Mesai Süresi</th>

                                <th>Dahili Toplam Çalışma Süresi</th>


                                <th>Net Çalışma Süresi</th>
                                <th>Toplam Konuşma Süresi</th>

                                <th>Toplam Mola Süresi</th>

                                <th>ihtiyac Molası</th>
                                <th>toplanti Molası</th>
                                <th>yemek Molası</th>
                                <th>outbound Molası</th>
                                <th>islem Molası</th>


                                <th>Toplam Çalışma Süresi</th>
                                <th>Net Konuşma Oranı</th>
                                <th>Toplam Çalışma Oranı</th>

                                <th>Operasyonel Verimlilik</th>
                                <th>Finansal Verimlilik</th>








                                <th>Average Talk Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-order="2020-11-24" style=" border-top:0px;vertical-align : middle;text-align:center;" align="center" >2020-11-24
                                </td>


                                <td align="center">
                                    <span class="badge badge-primary" data-toggle="tooltip" data-placement="right" data-html="true" title="Hikmet Sahin ">     3079 - Hikmet Sahin                   </span>
                                </td>

                                <td align="center">
                                    30
                                </td>

                                <td align="center">
                                    <button type="button" class=" btn btn-success btn-xs" style="min-width: 30px" onclick="modalAc_Dahili('3079', ['24.11.2020','24.11.2020'] ,'','','','{&quot;1&quot;:{&quot;id&quot;:&quot;1&quot;,&quot;baslik&quot;:&quot;Acilis Konusmasi&quot;,&quot;soru&quot;:&quot;Merhaba Ahmet ben size nasil yardimci olabilirim Seklinde acilis ifadesinin kullanilmasi&quot;,&quot;max_puan&quot;:&quot;4&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;2&quot;:{&quot;id&quot;:&quot;2&quot;,&quot;baslik&quot;:&quot;Isimle Hitap&quot;,&quot;soru&quot;:&quot;Gorusme icinde en az 2 kez hitap edilmesi (Ozellikle ugurlama asamasindaki etkisi acisindan isimle hitaplardan birinin ugurlama asamasinda yapilmasi onerilmektedir&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;3&quot;:{&quot;id&quot;:&quot;3&quot;,&quot;baslik&quot;:&quot;Ses Tonu&quot;,&quot;soru&quot;:&quot;Ses tonunun canli enerjik ve musteriye olan ilgisini yansitir sekilde kendinden emin olmasi&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;4&quot;:{&quot;id&quot;:&quot;4&quot;,&quot;baslik&quot;:&quot;Uygun Ifade Kullanimi&quot;,&quot;soru&quot;:&quot;Gorusme icindeki tum kelimelerin pozitif olmasi Ne yapilamayacaginin degil ne yapilabileceginin soylenmesi musterinin kendisini iyi hissetmesini saglayacak pozitif kelimeler kullanilmasi Sive gunluk dil dolgu ifadelerinin (eeiiiii) kullanilmamasi&quot;,&quot;max_puan&quot;:&quot;11&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;5&quot;:{&quot;id&quot;:&quot;5&quot;,&quot;baslik&quot;:&quot;Etkin Dinleme&quot;,&quot;soru&quot;:&quot;Musterinin sozunu kesmeden soylediklerini tekrarlatmadan ve cumlesini tamamlamadan etkin bir dinleme yapilmasi&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;6&quot;:{&quot;id&quot;:&quot;6&quot;,&quot;baslik&quot;:&quot;Proaktif Sorularla Icerik Ogrenmeye Calisma &quot;,&quot;soru&quot;:&quot;Musterinin talebini daha net anlamaya yonelik soylediklerini tekrar ettirmeyecek ve cozume daha kolay ulasmasini saglayacak dogru sorular sorulmasi&quot;,&quot;max_puan&quot;:&quot;7&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;7&quot;:{&quot;id&quot;:&quot;7&quot;,&quot;baslik&quot;:&quot;Mesaj Tekrari Yapilmasi&quot;,&quot;soru&quot;:&quot;Musterinin guvenlik acisindan gerekli bilgilerinin hata payini azaltmak adina tekrar edilmesi&quot;,&quot;max_puan&quot;:&quot;6&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;8&quot;:{&quot;id&quot;:&quot;8&quot;,&quot;baslik&quot;:&quot;Kisa Net Anlasilir Aciklama Yapilmasi&quot;,&quot;soru&quot;:&quot;Musteriye verilen mesajin kisa net anlasilir olmasi Uzun cumleler kullanilmamasimusterinin anlayamacagi jargonlara yer verilmemesi musteriye konunun sade bir sekilde aktarilmasi Isteklerin anlasilmasi ve analiz edilmesi&quot;,&quot;max_puan&quot;:&quot;7&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;9&quot;:{&quot;id&quot;:&quot;9&quot;,&quot;baslik&quot;:&quot;Empati Kurma&quot;,&quot;soru&quot;:&quot;Cozum Odakli musterinin yaninda olundugunun hissettirildigi musterinin empatik ipuclarina karsilik verilen musterinin duygusu ile eslesilen ve musteriye ilgili davranilan empatik bir gorusme yapilmasi&quot;,&quot;max_puan&quot;:&quot;7&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;10&quot;:{&quot;id&quot;:&quot;10&quot;,&quot;baslik&quot;:&quot;Bekletme Kriterlerine Uygun Davranildi mi&quot;,&quot;soru&quot;:&quot;Bekletme oncesi izin alma bekletme sirasinda -gerekiyorsa- ara bilgilendirme yapma ve bekletme sonrasi tesekkur etme kriterlerinin uygulanmasi&quot;,&quot;max_puan&quot;:&quot;7&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;11&quot;:{&quot;id&quot;:&quot;11&quot;,&quot;baslik&quot;:&quot;Dogru Bilgilendirme&quot;,&quot;soru&quot;:&quot;Musterinin yeniden aramasina gerek olmayacak sekilde eksIksiz dogru bilgilendirme yapilmasi&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;12&quot;:{&quot;id&quot;:&quot;12&quot;,&quot;baslik&quot;:&quot;Cagri Kaydi&quot;,&quot;soru&quot;:&quot;Cagri kaydi alaninda dogru ve gorusme konusunu aciklar netlikte kayit girildi mi&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;13&quot;:{&quot;id&quot;:&quot;13&quot;,&quot;baslik&quot;:&quot;Sistemin Dogru Kullanilmasi&quot;,&quot;soru&quot;:&quot;Kendi portal ekranlarini kullandi musteriden gereksiz baglanti almadi baglanti aldi ve islem yapti&quot;,&quot;max_puan&quot;:&quot;6&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;14&quot;:{&quot;id&quot;:&quot;14&quot;,&quot;baslik&quot;:&quot;Bilgi Guvenligi&quot;,&quot;soru&quot;:&quot;Musteriye guvenilir kaynaklardan bilgi verildi (mevzuat teblig) ornek vermek amaciyla da olsa baska bir musterinin bilgisi paylasilmadi calisan kendi bilgilerinden bahsetmedi ve musteriyi kendi bilgisayarina baglamadi&quot;,&quot;max_puan&quot;:&quot;6&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;15&quot;:{&quot;id&quot;:&quot;15&quot;,&quot;baslik&quot;:&quot;Musterinin Gorusmeden Net Ayrilmasi&quot;,&quot;soru&quot;:&quot;Musteriye soru sorarak ya da musterinin olasi tereddut ifadelerini etkin dinleyerek herhangi bir sorususorunu kalmadigindan emin olunmasi&quot;,&quot;max_puan&quot;:&quot;6&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;16&quot;:{&quot;id&quot;:&quot;16&quot;,&quot;baslik&quot;:&quot;Kapanis Anonsunun Yapilmasi&quot;,&quot;soru&quot;:&quot;Sizlere yardimci olabilecegim baska bir konu var mi seklinde kapanis anonsunun yapilmasi&quot;,&quot;max_puan&quot;:&quot;4&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;17&quot;:{&quot;id&quot;:&quot;17&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Hatali bilgi vererek musterinin magdur olmasina neden olmak&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;},&quot;18&quot;:{&quot;id&quot;:&quot;18&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Musteri ile tartisma ve polemige girmek hakaret veya kufur etmek&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;},&quot;19&quot;:{&quot;id&quot;:&quot;19&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Cagri esnasinda etrafi ile konusmak gulmek  bir seyler yemek icmek&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;},&quot;20&quot;:{&quot;id&quot;:&quot;20&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Cagriyi sonlandirarak hizmet vermemek&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;},&quot;21&quot;:{&quot;id&quot;:&quot;21&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Gorevi dahilinde hizmet vermemek ( sistem calistigi halde calismadigi bilgisini vermek kendisine gelen cagriyibilerek cevaplamamak  sessiz kalmak )&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;}}' )">16</button>
                                </td>

                                <td align="center">
                                    14
                                </td>


                                <td align="center">

                                </td>
                                <td align="center">

                                </td>

                                <td align="center">
                                    00:00:00

                                </td>
                                <td align="center">
                                    00:00:00

                                </td>





                                <td align="center">

                                    00:20:39

                                </td>


                                <td align="center">
                                    01:17:06
                                </td>

                                <td align="center">
                                    00:00:26
                                </td>

                                <td align="center">
                                    00:00:00
                                </td>

                                <td align="center">
                                    10:00:00
                                </td>


                                <td align="center">
                                    00:00:00

                                </td>


                                <td align="center">


                                    00:00:00


                                </td>

                                <td align="center">




                                    01:37:19

                                </td>

                                <td align="center">

                                    04:40:06

                                </td>




                                <td align="center">
                                    00:00:00
                                </td>



                                <td align="center">
                                    00:00:00
                                </td>



                                <td align="center">
                                    00:00:00
                                </td>



                                <td align="center">
                                    04:40:06
                                </td>



                                <td align="center">
                                    00:00:00
                                </td>





                                <td align="center">







                                    01:37:19

                                </td>





                                <td align="center">


                                    100 %


                                </td>

                                <td align="center">

                                    100 %
                                </td>

                                <td align="center">
                                    100 %


                                </td>


                                <td align="center">
                                    16 %
                                </td>










                                <td align="center">
                                    00:04:49                                </td>


                            </tr>
                            <tr>
                                <td data-order="2020-11-25" style=" border-top:0px;vertical-align : middle;text-align:center;" align="center" >2020-11-25
                                </td>


                                <td align="center">
                                    <span class="badge badge-primary" data-toggle="tooltip" data-placement="right" data-html="true" title="Hikmet Sahin ">     3079 - Hikmet Sahin                   </span>
                                </td>

                                <td align="center">
                                    29
                                </td>

                                <td align="center">
                                    <button type="button" class=" btn btn-success btn-xs" style="min-width: 30px" onclick="modalAc_Dahili('3079', ['25.11.2020','25.11.2020'] ,'','','','{&quot;1&quot;:{&quot;id&quot;:&quot;1&quot;,&quot;baslik&quot;:&quot;Acilis Konusmasi&quot;,&quot;soru&quot;:&quot;Merhaba Ahmet ben size nasil yardimci olabilirim Seklinde acilis ifadesinin kullanilmasi&quot;,&quot;max_puan&quot;:&quot;4&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;2&quot;:{&quot;id&quot;:&quot;2&quot;,&quot;baslik&quot;:&quot;Isimle Hitap&quot;,&quot;soru&quot;:&quot;Gorusme icinde en az 2 kez hitap edilmesi (Ozellikle ugurlama asamasindaki etkisi acisindan isimle hitaplardan birinin ugurlama asamasinda yapilmasi onerilmektedir&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;3&quot;:{&quot;id&quot;:&quot;3&quot;,&quot;baslik&quot;:&quot;Ses Tonu&quot;,&quot;soru&quot;:&quot;Ses tonunun canli enerjik ve musteriye olan ilgisini yansitir sekilde kendinden emin olmasi&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;4&quot;:{&quot;id&quot;:&quot;4&quot;,&quot;baslik&quot;:&quot;Uygun Ifade Kullanimi&quot;,&quot;soru&quot;:&quot;Gorusme icindeki tum kelimelerin pozitif olmasi Ne yapilamayacaginin degil ne yapilabileceginin soylenmesi musterinin kendisini iyi hissetmesini saglayacak pozitif kelimeler kullanilmasi Sive gunluk dil dolgu ifadelerinin (eeiiiii) kullanilmamasi&quot;,&quot;max_puan&quot;:&quot;11&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;5&quot;:{&quot;id&quot;:&quot;5&quot;,&quot;baslik&quot;:&quot;Etkin Dinleme&quot;,&quot;soru&quot;:&quot;Musterinin sozunu kesmeden soylediklerini tekrarlatmadan ve cumlesini tamamlamadan etkin bir dinleme yapilmasi&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;6&quot;:{&quot;id&quot;:&quot;6&quot;,&quot;baslik&quot;:&quot;Proaktif Sorularla Icerik Ogrenmeye Calisma &quot;,&quot;soru&quot;:&quot;Musterinin talebini daha net anlamaya yonelik soylediklerini tekrar ettirmeyecek ve cozume daha kolay ulasmasini saglayacak dogru sorular sorulmasi&quot;,&quot;max_puan&quot;:&quot;7&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;7&quot;:{&quot;id&quot;:&quot;7&quot;,&quot;baslik&quot;:&quot;Mesaj Tekrari Yapilmasi&quot;,&quot;soru&quot;:&quot;Musterinin guvenlik acisindan gerekli bilgilerinin hata payini azaltmak adina tekrar edilmesi&quot;,&quot;max_puan&quot;:&quot;6&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;8&quot;:{&quot;id&quot;:&quot;8&quot;,&quot;baslik&quot;:&quot;Kisa Net Anlasilir Aciklama Yapilmasi&quot;,&quot;soru&quot;:&quot;Musteriye verilen mesajin kisa net anlasilir olmasi Uzun cumleler kullanilmamasimusterinin anlayamacagi jargonlara yer verilmemesi musteriye konunun sade bir sekilde aktarilmasi Isteklerin anlasilmasi ve analiz edilmesi&quot;,&quot;max_puan&quot;:&quot;7&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;9&quot;:{&quot;id&quot;:&quot;9&quot;,&quot;baslik&quot;:&quot;Empati Kurma&quot;,&quot;soru&quot;:&quot;Cozum Odakli musterinin yaninda olundugunun hissettirildigi musterinin empatik ipuclarina karsilik verilen musterinin duygusu ile eslesilen ve musteriye ilgili davranilan empatik bir gorusme yapilmasi&quot;,&quot;max_puan&quot;:&quot;7&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;10&quot;:{&quot;id&quot;:&quot;10&quot;,&quot;baslik&quot;:&quot;Bekletme Kriterlerine Uygun Davranildi mi&quot;,&quot;soru&quot;:&quot;Bekletme oncesi izin alma bekletme sirasinda -gerekiyorsa- ara bilgilendirme yapma ve bekletme sonrasi tesekkur etme kriterlerinin uygulanmasi&quot;,&quot;max_puan&quot;:&quot;7&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;11&quot;:{&quot;id&quot;:&quot;11&quot;,&quot;baslik&quot;:&quot;Dogru Bilgilendirme&quot;,&quot;soru&quot;:&quot;Musterinin yeniden aramasina gerek olmayacak sekilde eksIksiz dogru bilgilendirme yapilmasi&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;12&quot;:{&quot;id&quot;:&quot;12&quot;,&quot;baslik&quot;:&quot;Cagri Kaydi&quot;,&quot;soru&quot;:&quot;Cagri kaydi alaninda dogru ve gorusme konusunu aciklar netlikte kayit girildi mi&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;13&quot;:{&quot;id&quot;:&quot;13&quot;,&quot;baslik&quot;:&quot;Sistemin Dogru Kullanilmasi&quot;,&quot;soru&quot;:&quot;Kendi portal ekranlarini kullandi musteriden gereksiz baglanti almadi baglanti aldi ve islem yapti&quot;,&quot;max_puan&quot;:&quot;6&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;14&quot;:{&quot;id&quot;:&quot;14&quot;,&quot;baslik&quot;:&quot;Bilgi Guvenligi&quot;,&quot;soru&quot;:&quot;Musteriye guvenilir kaynaklardan bilgi verildi (mevzuat teblig) ornek vermek amaciyla da olsa baska bir musterinin bilgisi paylasilmadi calisan kendi bilgilerinden bahsetmedi ve musteriyi kendi bilgisayarina baglamadi&quot;,&quot;max_puan&quot;:&quot;6&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;15&quot;:{&quot;id&quot;:&quot;15&quot;,&quot;baslik&quot;:&quot;Musterinin Gorusmeden Net Ayrilmasi&quot;,&quot;soru&quot;:&quot;Musteriye soru sorarak ya da musterinin olasi tereddut ifadelerini etkin dinleyerek herhangi bir sorususorunu kalmadigindan emin olunmasi&quot;,&quot;max_puan&quot;:&quot;6&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;16&quot;:{&quot;id&quot;:&quot;16&quot;,&quot;baslik&quot;:&quot;Kapanis Anonsunun Yapilmasi&quot;,&quot;soru&quot;:&quot;Sizlere yardimci olabilecegim baska bir konu var mi seklinde kapanis anonsunun yapilmasi&quot;,&quot;max_puan&quot;:&quot;4&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;17&quot;:{&quot;id&quot;:&quot;17&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Hatali bilgi vererek musterinin magdur olmasina neden olmak&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;},&quot;18&quot;:{&quot;id&quot;:&quot;18&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Musteri ile tartisma ve polemige girmek hakaret veya kufur etmek&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;},&quot;19&quot;:{&quot;id&quot;:&quot;19&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Cagri esnasinda etrafi ile konusmak gulmek  bir seyler yemek icmek&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;},&quot;20&quot;:{&quot;id&quot;:&quot;20&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Cagriyi sonlandirarak hizmet vermemek&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;},&quot;21&quot;:{&quot;id&quot;:&quot;21&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Gorevi dahilinde hizmet vermemek ( sistem calistigi halde calismadigi bilgisini vermek kendisine gelen cagriyibilerek cevaplamamak  sessiz kalmak )&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;}}' )">22</button>
                                </td>

                                <td align="center">
                                    7
                                </td>


                                <td align="center">

                                </td>
                                <td align="center">

                                </td>

                                <td align="center">
                                    00:00:00

                                </td>
                                <td align="center">
                                    00:00:00

                                </td>





                                <td align="center">

                                    00:24:03

                                </td>


                                <td align="center">
                                    02:11:16
                                </td>

                                <td align="center">
                                    00:02:36
                                </td>

                                <td align="center">
                                    00:00:00
                                </td>

                                <td align="center">
                                    10:00:00
                                </td>


                                <td align="center">
                                    00:00:00

                                </td>


                                <td align="center">


                                    00:00:00


                                </td>

                                <td align="center">




                                    02:32:43

                                </td>

                                <td align="center">

                                    03:47:10

                                </td>




                                <td align="center">
                                    00:00:00
                                </td>



                                <td align="center">
                                    00:00:00
                                </td>



                                <td align="center">
                                    00:00:00
                                </td>



                                <td align="center">
                                    03:47:10
                                </td>



                                <td align="center">
                                    00:00:00
                                </td>





                                <td align="center">







                                    02:32:43

                                </td>





                                <td align="center">


                                    100 %


                                </td>

                                <td align="center">

                                    100 %
                                </td>

                                <td align="center">
                                    100 %


                                </td>


                                <td align="center">
                                    25 %
                                </td>










                                <td align="center">
                                    00:05:58                                </td>


                            </tr>
                            <tr>
                                <td data-order="2020-11-26" style=" border-top:0px;vertical-align : middle;text-align:center;" align="center" >2020-11-26
                                </td>


                                <td align="center">
                                    <span class="badge badge-primary" data-toggle="tooltip" data-placement="right" data-html="true" title="Hikmet Sahin ">     3079 - Hikmet Sahin                   </span>
                                </td>

                                <td align="center">
                                    24
                                </td>

                                <td align="center">
                                    <button type="button" class=" btn btn-success btn-xs" style="min-width: 30px" onclick="modalAc_Dahili('3079', ['26.11.2020','26.11.2020'] ,'','','','{&quot;1&quot;:{&quot;id&quot;:&quot;1&quot;,&quot;baslik&quot;:&quot;Acilis Konusmasi&quot;,&quot;soru&quot;:&quot;Merhaba Ahmet ben size nasil yardimci olabilirim Seklinde acilis ifadesinin kullanilmasi&quot;,&quot;max_puan&quot;:&quot;4&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;2&quot;:{&quot;id&quot;:&quot;2&quot;,&quot;baslik&quot;:&quot;Isimle Hitap&quot;,&quot;soru&quot;:&quot;Gorusme icinde en az 2 kez hitap edilmesi (Ozellikle ugurlama asamasindaki etkisi acisindan isimle hitaplardan birinin ugurlama asamasinda yapilmasi onerilmektedir&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;3&quot;:{&quot;id&quot;:&quot;3&quot;,&quot;baslik&quot;:&quot;Ses Tonu&quot;,&quot;soru&quot;:&quot;Ses tonunun canli enerjik ve musteriye olan ilgisini yansitir sekilde kendinden emin olmasi&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;4&quot;:{&quot;id&quot;:&quot;4&quot;,&quot;baslik&quot;:&quot;Uygun Ifade Kullanimi&quot;,&quot;soru&quot;:&quot;Gorusme icindeki tum kelimelerin pozitif olmasi Ne yapilamayacaginin degil ne yapilabileceginin soylenmesi musterinin kendisini iyi hissetmesini saglayacak pozitif kelimeler kullanilmasi Sive gunluk dil dolgu ifadelerinin (eeiiiii) kullanilmamasi&quot;,&quot;max_puan&quot;:&quot;11&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;5&quot;:{&quot;id&quot;:&quot;5&quot;,&quot;baslik&quot;:&quot;Etkin Dinleme&quot;,&quot;soru&quot;:&quot;Musterinin sozunu kesmeden soylediklerini tekrarlatmadan ve cumlesini tamamlamadan etkin bir dinleme yapilmasi&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;6&quot;:{&quot;id&quot;:&quot;6&quot;,&quot;baslik&quot;:&quot;Proaktif Sorularla Icerik Ogrenmeye Calisma &quot;,&quot;soru&quot;:&quot;Musterinin talebini daha net anlamaya yonelik soylediklerini tekrar ettirmeyecek ve cozume daha kolay ulasmasini saglayacak dogru sorular sorulmasi&quot;,&quot;max_puan&quot;:&quot;7&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;7&quot;:{&quot;id&quot;:&quot;7&quot;,&quot;baslik&quot;:&quot;Mesaj Tekrari Yapilmasi&quot;,&quot;soru&quot;:&quot;Musterinin guvenlik acisindan gerekli bilgilerinin hata payini azaltmak adina tekrar edilmesi&quot;,&quot;max_puan&quot;:&quot;6&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;8&quot;:{&quot;id&quot;:&quot;8&quot;,&quot;baslik&quot;:&quot;Kisa Net Anlasilir Aciklama Yapilmasi&quot;,&quot;soru&quot;:&quot;Musteriye verilen mesajin kisa net anlasilir olmasi Uzun cumleler kullanilmamasimusterinin anlayamacagi jargonlara yer verilmemesi musteriye konunun sade bir sekilde aktarilmasi Isteklerin anlasilmasi ve analiz edilmesi&quot;,&quot;max_puan&quot;:&quot;7&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;9&quot;:{&quot;id&quot;:&quot;9&quot;,&quot;baslik&quot;:&quot;Empati Kurma&quot;,&quot;soru&quot;:&quot;Cozum Odakli musterinin yaninda olundugunun hissettirildigi musterinin empatik ipuclarina karsilik verilen musterinin duygusu ile eslesilen ve musteriye ilgili davranilan empatik bir gorusme yapilmasi&quot;,&quot;max_puan&quot;:&quot;7&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;10&quot;:{&quot;id&quot;:&quot;10&quot;,&quot;baslik&quot;:&quot;Bekletme Kriterlerine Uygun Davranildi mi&quot;,&quot;soru&quot;:&quot;Bekletme oncesi izin alma bekletme sirasinda -gerekiyorsa- ara bilgilendirme yapma ve bekletme sonrasi tesekkur etme kriterlerinin uygulanmasi&quot;,&quot;max_puan&quot;:&quot;7&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;11&quot;:{&quot;id&quot;:&quot;11&quot;,&quot;baslik&quot;:&quot;Dogru Bilgilendirme&quot;,&quot;soru&quot;:&quot;Musterinin yeniden aramasina gerek olmayacak sekilde eksIksiz dogru bilgilendirme yapilmasi&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;12&quot;:{&quot;id&quot;:&quot;12&quot;,&quot;baslik&quot;:&quot;Cagri Kaydi&quot;,&quot;soru&quot;:&quot;Cagri kaydi alaninda dogru ve gorusme konusunu aciklar netlikte kayit girildi mi&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;13&quot;:{&quot;id&quot;:&quot;13&quot;,&quot;baslik&quot;:&quot;Sistemin Dogru Kullanilmasi&quot;,&quot;soru&quot;:&quot;Kendi portal ekranlarini kullandi musteriden gereksiz baglanti almadi baglanti aldi ve islem yapti&quot;,&quot;max_puan&quot;:&quot;6&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;14&quot;:{&quot;id&quot;:&quot;14&quot;,&quot;baslik&quot;:&quot;Bilgi Guvenligi&quot;,&quot;soru&quot;:&quot;Musteriye guvenilir kaynaklardan bilgi verildi (mevzuat teblig) ornek vermek amaciyla da olsa baska bir musterinin bilgisi paylasilmadi calisan kendi bilgilerinden bahsetmedi ve musteriyi kendi bilgisayarina baglamadi&quot;,&quot;max_puan&quot;:&quot;6&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;15&quot;:{&quot;id&quot;:&quot;15&quot;,&quot;baslik&quot;:&quot;Musterinin Gorusmeden Net Ayrilmasi&quot;,&quot;soru&quot;:&quot;Musteriye soru sorarak ya da musterinin olasi tereddut ifadelerini etkin dinleyerek herhangi bir sorususorunu kalmadigindan emin olunmasi&quot;,&quot;max_puan&quot;:&quot;6&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;16&quot;:{&quot;id&quot;:&quot;16&quot;,&quot;baslik&quot;:&quot;Kapanis Anonsunun Yapilmasi&quot;,&quot;soru&quot;:&quot;Sizlere yardimci olabilecegim baska bir konu var mi seklinde kapanis anonsunun yapilmasi&quot;,&quot;max_puan&quot;:&quot;4&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;17&quot;:{&quot;id&quot;:&quot;17&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Hatali bilgi vererek musterinin magdur olmasina neden olmak&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;},&quot;18&quot;:{&quot;id&quot;:&quot;18&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Musteri ile tartisma ve polemige girmek hakaret veya kufur etmek&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;},&quot;19&quot;:{&quot;id&quot;:&quot;19&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Cagri esnasinda etrafi ile konusmak gulmek  bir seyler yemek icmek&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;},&quot;20&quot;:{&quot;id&quot;:&quot;20&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Cagriyi sonlandirarak hizmet vermemek&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;},&quot;21&quot;:{&quot;id&quot;:&quot;21&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Gorevi dahilinde hizmet vermemek ( sistem calistigi halde calismadigi bilgisini vermek kendisine gelen cagriyibilerek cevaplamamak  sessiz kalmak )&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;}}' )">20</button>
                                </td>

                                <td align="center">
                                    4
                                </td>


                                <td align="center">

                                </td>
                                <td align="center">

                                </td>

                                <td align="center">
                                    00:00:00

                                </td>
                                <td align="center">
                                    00:00:00

                                </td>





                                <td align="center">

                                    00:47:18

                                </td>


                                <td align="center">
                                    01:29:22
                                </td>

                                <td align="center">
                                    00:00:03
                                </td>

                                <td align="center">
                                    00:00:00
                                </td>

                                <td align="center">
                                    10:00:00
                                </td>


                                <td align="center">
                                    00:00:00

                                </td>


                                <td align="center">


                                    00:00:00


                                </td>

                                <td align="center">




                                    02:16:37

                                </td>

                                <td align="center">

                                    19:11:32

                                </td>




                                <td align="center">
                                    00:00:00
                                </td>



                                <td align="center">
                                    00:00:00
                                </td>



                                <td align="center">
                                    00:00:00
                                </td>



                                <td align="center">
                                    19:11:32
                                </td>



                                <td align="center">
                                    00:00:00
                                </td>





                                <td align="center">







                                    02:16:37

                                </td>





                                <td align="center">


                                    100 %


                                </td>

                                <td align="center">

                                    100 %
                                </td>

                                <td align="center">
                                    100 %


                                </td>


                                <td align="center">
                                    23 %
                                </td>










                                <td align="center">
                                    00:04:28                                </td>


                            </tr>
                            <tr>
                                <td data-order="2020-11-27" style=" border-top:0px;vertical-align : middle;text-align:center;" align="center" >2020-11-27
                                </td>


                                <td align="center">
                                    <span class="badge badge-primary" data-toggle="tooltip" data-placement="right" data-html="true" title="Hikmet Sahin ">     3079 - Hikmet Sahin                   </span>
                                </td>

                                <td align="center">
                                    15
                                </td>

                                <td align="center">
                                    <button type="button" class=" btn btn-success btn-xs" style="min-width: 30px" onclick="modalAc_Dahili('3079', ['27.11.2020','27.11.2020'] ,'','','','{&quot;1&quot;:{&quot;id&quot;:&quot;1&quot;,&quot;baslik&quot;:&quot;Acilis Konusmasi&quot;,&quot;soru&quot;:&quot;Merhaba Ahmet ben size nasil yardimci olabilirim Seklinde acilis ifadesinin kullanilmasi&quot;,&quot;max_puan&quot;:&quot;4&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;2&quot;:{&quot;id&quot;:&quot;2&quot;,&quot;baslik&quot;:&quot;Isimle Hitap&quot;,&quot;soru&quot;:&quot;Gorusme icinde en az 2 kez hitap edilmesi (Ozellikle ugurlama asamasindaki etkisi acisindan isimle hitaplardan birinin ugurlama asamasinda yapilmasi onerilmektedir&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;3&quot;:{&quot;id&quot;:&quot;3&quot;,&quot;baslik&quot;:&quot;Ses Tonu&quot;,&quot;soru&quot;:&quot;Ses tonunun canli enerjik ve musteriye olan ilgisini yansitir sekilde kendinden emin olmasi&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;4&quot;:{&quot;id&quot;:&quot;4&quot;,&quot;baslik&quot;:&quot;Uygun Ifade Kullanimi&quot;,&quot;soru&quot;:&quot;Gorusme icindeki tum kelimelerin pozitif olmasi Ne yapilamayacaginin degil ne yapilabileceginin soylenmesi musterinin kendisini iyi hissetmesini saglayacak pozitif kelimeler kullanilmasi Sive gunluk dil dolgu ifadelerinin (eeiiiii) kullanilmamasi&quot;,&quot;max_puan&quot;:&quot;11&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;5&quot;:{&quot;id&quot;:&quot;5&quot;,&quot;baslik&quot;:&quot;Etkin Dinleme&quot;,&quot;soru&quot;:&quot;Musterinin sozunu kesmeden soylediklerini tekrarlatmadan ve cumlesini tamamlamadan etkin bir dinleme yapilmasi&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;6&quot;:{&quot;id&quot;:&quot;6&quot;,&quot;baslik&quot;:&quot;Proaktif Sorularla Icerik Ogrenmeye Calisma &quot;,&quot;soru&quot;:&quot;Musterinin talebini daha net anlamaya yonelik soylediklerini tekrar ettirmeyecek ve cozume daha kolay ulasmasini saglayacak dogru sorular sorulmasi&quot;,&quot;max_puan&quot;:&quot;7&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;7&quot;:{&quot;id&quot;:&quot;7&quot;,&quot;baslik&quot;:&quot;Mesaj Tekrari Yapilmasi&quot;,&quot;soru&quot;:&quot;Musterinin guvenlik acisindan gerekli bilgilerinin hata payini azaltmak adina tekrar edilmesi&quot;,&quot;max_puan&quot;:&quot;6&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;8&quot;:{&quot;id&quot;:&quot;8&quot;,&quot;baslik&quot;:&quot;Kisa Net Anlasilir Aciklama Yapilmasi&quot;,&quot;soru&quot;:&quot;Musteriye verilen mesajin kisa net anlasilir olmasi Uzun cumleler kullanilmamasimusterinin anlayamacagi jargonlara yer verilmemesi musteriye konunun sade bir sekilde aktarilmasi Isteklerin anlasilmasi ve analiz edilmesi&quot;,&quot;max_puan&quot;:&quot;7&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;9&quot;:{&quot;id&quot;:&quot;9&quot;,&quot;baslik&quot;:&quot;Empati Kurma&quot;,&quot;soru&quot;:&quot;Cozum Odakli musterinin yaninda olundugunun hissettirildigi musterinin empatik ipuclarina karsilik verilen musterinin duygusu ile eslesilen ve musteriye ilgili davranilan empatik bir gorusme yapilmasi&quot;,&quot;max_puan&quot;:&quot;7&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;10&quot;:{&quot;id&quot;:&quot;10&quot;,&quot;baslik&quot;:&quot;Bekletme Kriterlerine Uygun Davranildi mi&quot;,&quot;soru&quot;:&quot;Bekletme oncesi izin alma bekletme sirasinda -gerekiyorsa- ara bilgilendirme yapma ve bekletme sonrasi tesekkur etme kriterlerinin uygulanmasi&quot;,&quot;max_puan&quot;:&quot;7&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;11&quot;:{&quot;id&quot;:&quot;11&quot;,&quot;baslik&quot;:&quot;Dogru Bilgilendirme&quot;,&quot;soru&quot;:&quot;Musterinin yeniden aramasina gerek olmayacak sekilde eksIksiz dogru bilgilendirme yapilmasi&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;12&quot;:{&quot;id&quot;:&quot;12&quot;,&quot;baslik&quot;:&quot;Cagri Kaydi&quot;,&quot;soru&quot;:&quot;Cagri kaydi alaninda dogru ve gorusme konusunu aciklar netlikte kayit girildi mi&quot;,&quot;max_puan&quot;:&quot;9&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;13&quot;:{&quot;id&quot;:&quot;13&quot;,&quot;baslik&quot;:&quot;Sistemin Dogru Kullanilmasi&quot;,&quot;soru&quot;:&quot;Kendi portal ekranlarini kullandi musteriden gereksiz baglanti almadi baglanti aldi ve islem yapti&quot;,&quot;max_puan&quot;:&quot;6&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;14&quot;:{&quot;id&quot;:&quot;14&quot;,&quot;baslik&quot;:&quot;Bilgi Guvenligi&quot;,&quot;soru&quot;:&quot;Musteriye guvenilir kaynaklardan bilgi verildi (mevzuat teblig) ornek vermek amaciyla da olsa baska bir musterinin bilgisi paylasilmadi calisan kendi bilgilerinden bahsetmedi ve musteriyi kendi bilgisayarina baglamadi&quot;,&quot;max_puan&quot;:&quot;6&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;15&quot;:{&quot;id&quot;:&quot;15&quot;,&quot;baslik&quot;:&quot;Musterinin Gorusmeden Net Ayrilmasi&quot;,&quot;soru&quot;:&quot;Musteriye soru sorarak ya da musterinin olasi tereddut ifadelerini etkin dinleyerek herhangi bir sorususorunu kalmadigindan emin olunmasi&quot;,&quot;max_puan&quot;:&quot;6&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;16&quot;:{&quot;id&quot;:&quot;16&quot;,&quot;baslik&quot;:&quot;Kapanis Anonsunun Yapilmasi&quot;,&quot;soru&quot;:&quot;Sizlere yardimci olabilecegim baska bir konu var mi seklinde kapanis anonsunun yapilmasi&quot;,&quot;max_puan&quot;:&quot;4&quot;,&quot;sifirla&quot;:&quot;0&quot;},&quot;17&quot;:{&quot;id&quot;:&quot;17&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Hatali bilgi vererek musterinin magdur olmasina neden olmak&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;},&quot;18&quot;:{&quot;id&quot;:&quot;18&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Musteri ile tartisma ve polemige girmek hakaret veya kufur etmek&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;},&quot;19&quot;:{&quot;id&quot;:&quot;19&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Cagri esnasinda etrafi ile konusmak gulmek  bir seyler yemek icmek&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;},&quot;20&quot;:{&quot;id&quot;:&quot;20&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Cagriyi sonlandirarak hizmet vermemek&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;},&quot;21&quot;:{&quot;id&quot;:&quot;21&quot;,&quot;baslik&quot;:&quot;Cagri Puanini sifirlayan durumlar&quot;,&quot;soru&quot;:&quot;Gorevi dahilinde hizmet vermemek ( sistem calistigi halde calismadigi bilgisini vermek kendisine gelen cagriyibilerek cevaplamamak  sessiz kalmak )&quot;,&quot;max_puan&quot;:&quot;2&quot;,&quot;sifirla&quot;:&quot;1&quot;}}' )">10</button>
                                </td>

                                <td align="center">
                                    5
                                </td>


                                <td align="center">

                                </td>
                                <td align="center">

                                </td>

                                <td align="center">
                                    00:00:00

                                </td>
                                <td align="center">
                                    00:00:00

                                </td>





                                <td align="center">

                                    00:03:53

                                </td>


                                <td align="center">
                                    00:26:59
                                </td>

                                <td align="center">
                                    00:00:02
                                </td>

                                <td align="center">
                                    00:00:00
                                </td>

                                <td align="center">
                                    10:00:00
                                </td>


                                <td align="center">
                                    00:00:00

                                </td>


                                <td align="center">


                                    00:00:00


                                </td>

                                <td align="center">




                                    00:30:50

                                </td>

                                <td align="center">

                                    03:05:47

                                </td>




                                <td align="center">
                                    00:00:00
                                </td>



                                <td align="center">
                                    00:00:00
                                </td>



                                <td align="center">
                                    00:00:00
                                </td>



                                <td align="center">
                                    03:05:47
                                </td>



                                <td align="center">
                                    00:00:00
                                </td>





                                <td align="center">







                                    00:30:50

                                </td>





                                <td align="center">


                                    57 %


                                </td>

                                <td align="center">

                                    100 %
                                </td>

                                <td align="center">
                                    100 %


                                </td>


                                <td align="center">
                                    5 %
                                </td>










                                <td align="center">
                                    00:02:42                                </td>


                            </tr>
                            </tbody>
                        </table>





                    </div>
                </div>
            </div>


        </div>







        <script src="/js/chartJs/Chart.bundle.js"></script>






        <div class="clearfix"></div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary hidden" data-toggle="modal" data-target="#myModal" id="modalbtn"></button>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modal_title">Modal title</h4>
                    </div>
                    <div class="modal-body" id="modal_body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-primary hidden" data-toggle="modal" data-target="#myModal2" id="modalbtn2"></button>
        <!-- Modal -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modal_title2">Modal title</h4>
                    </div>
                    <div class="modal-body" id="modal_body2">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="/js/plugins/player/player.min.js"></script>
        <script>

            $(".listen-audio").hover(function () {
                if ($(this).hasClass( "btn-warning" )){
                    var id = $(this).attr('data-id');
                    removeClassBtn(id);
                    $('#audio_'+id).removeClass('btn-info');
                    $('#audio_'+id).addClass('btn-danger');
                    $('#audio_'+id).html('<i class="fa fa-stop-circle"></i> Durdur');
                }
            });
            $(".listen-audio").mouseleave(function () {
                if ($(this).hasClass( "btn-danger" )){
                    var id = $(this).attr('data-id');
                    removeClassBtn(id);
                    $('#audio_'+id).removeClass('btn-info');
                    $('#audio_'+id).addClass('btn-warning');
                    $('#audio_'+id).html('<i class="fa fa-volume-up"></i> Çalınıyor');
                }
            });
            //.on('click', "a.tabclick", function() {




            function puanlama()
            {
                console.log("tıklandı")

                console.log(modal)
                modal.style.display = "block";
                console.log("tıkland222222222")
            }


            $(".edit-button").click(function(){
                console.log("asdasdasd")
                var content = $(this).data("content");
                alert(content);
            });


            $(function(){
                $('#orderModal').modal({
                    keyboard: true,
                    backdrop: "static",
                    show:false,

                }).on('show', function(){
                    var getIdFromRow = $(this).data('orderid');
                    //make your ajax call populate items or what even you need
                    $(this).find('#orderDetails').html($('<b> Order Id selected: ' + getIdFromRow  + '</b>'))
                });

                $(".table-striped").find('tr[data-target]').on('click', function(){
                    //or do your operations here instead of on show of modal to populate values to modal.
                    $('#orderModal').data('orderid',$(this).data('id'));
                });

            });



            $(function(){
                $('#extensionModel').modal({
                    keyboard: true,
                    backdrop: "static",
                    show:false,

                }).on('show', function(){
                    var getIdFromRow = $(event.target).closest('tr').data('id');
                    //make your ajax call populate items or what even you need
                    $(this).find('#orderDetails').html($('<b> Order Id selected: ' + getIdFromRow  + '</b>'))
                });
            });


            $(function(){
                $('#extensionModal').modal({
                    keyboard: true,
                    backdrop: "static",
                    show:false,

                }).on('show', function(){
                    var getIdFromRow = $(event.target).closest('tr').data('id');
                    //make your ajax call populate items or what even you need
                    $(this).find('#modal_body').html($('<b> Order Id selected: ' + getIdFromRow  + '</b>'))
                });
            });

            var player = new Audio();
            var oldId = 0;

            function dinle(iddd)
            {
                console.log('tıklandı.')
                if ($(this).hasClass("btn-danger")) {   //durdur
                    var id = $(this).attr('data-id');
                    removeClassBtn(id);
                    audio.pause();
                    $('#audio0').hide();
                } else {
                    var id = iddd;//$(this).attr('data-id');
                    var url = $(this).attr('path');
                    var path = $(this).attr('path');


                    if(oldId != 0 ){
                        audio.pause();
                        resetListenButton(oldId);
                    }
                    oldId = id;
                    loadingListenBtn(id);
                    var path = $(this).attr('path');
                    var action="/istatistik/ses_listen?id=degistiricemseni";
                    action = action.replace("degistiricemseni", id);

                    $.ajax({
                        url: action,
                        type: 'GET',

                        success: function (response) {
                            //console.log(response)
                            var object = (response);
                            $('html, body').animate({
                                scrollTop: $("#down").offset().top
                            }, 1000);
                            isPlayingListenBtn(id);
                            $('#audio0').show('slow');



                            jQuery(function ($) {
                                'use strict'
                                var supportsAudio = !!document.createElement('audio').canPlayType;
                                if (supportsAudio) {
                                    var player = new Plyr('#audio', { controls: [ 'restart', 'play', 'progress', 'current-time', 'duration', 'volume', 'mute' ] });

                                    $('#audio').on('play', function () {

                                    }).on('pause', function () {

                                    }).on('ended', function () {
                                        if(oldId != 0){
                                            $('#audio0').hide();
                                        }
                                        removeClassBtn(id);
                                    });

                                    var playing = false,
                                        loadTrack = function () {
                                            console.log("geldim");
                                            //audio.src = 'data:audio/ogg;base64,'+response.data;
                                            audio.src = 'data:audio/ogg;base64,'+object
                                        };
                                    loadTrack();
                                    audio.play();
                                } else {
                                    var noSupport = $('#audio_'+id).text();
                                    $('.container').append('<p class="no-support">' + noSupport + '</p>');
                                }
                            });
                        }
                    });
                }
            }

            /*
                    $(".listen-audio").on('click', 'a.listen-audio',function () {

                    });*/


            function removeClassBtn(id) {
                $(".listen-audio").each(function( index ) {
                    $( this ).removeClass('btn-danger');
                    $( this ).removeClass('btn-warning');
                    $( this ).removeClass('btn-default');
                    $( this ).addClass('btn-info');
                    $( this ).html('<i class="fa fa-volume-up"></i> Dinle');
                });
            }

            function resetListenButton(id) {
                removeClassBtn(id);
                $('#audio_'+id).html('<i class="fa fa-volume-up"></i> Dinle');
            }

            function loadingListenBtn(id) {
                removeClassBtn(id);
                $('#audio_'+id).removeClass('btn-info');
                $('#audio_'+id).addClass('btn-default');
                $('#audio_'+id).html('<i class="fa fa-refresh"></i> Yükleniyor');
            }

            function isPlayingListenBtn(id) {
                removeClassBtn(id);
                $('#audio_'+id).removeClass('btn-info');
                $('#audio_'+id).addClass('btn-warning');
                $('#audio_'+id).html('<i class="fa fa-volume-up"></i> Çalınıyor');
            }

        </script>





        <script src="/js/momentJs/moment.min.js"></script>



        <script>
            $( "#search" ).submit(function( event ) {
                // $('#loadBarforSearch').css("display", "block");
                $('#loadBarforSearch').show();
                $('#loadBarforSearch').css("width", "100%");
                $('#loadBarforSearch').css("height", "2px");
                $( "#getStaticticsBtn" ).addClass('disabled');
            });
        </script>
        <script src="/js/plugins/dataTables/dataTables.fixedHeader.min.js"></script>

        <link href="/css/plugins/dataTables/fixedHeader.dataTables.min.css" rel="stylesheet">
        <style>
            table.dataTable {
                margin-top: 0px !important;
            }
            .loadBarSearch{
                float: left;
                width: 0%;
                height: 0px;
                background: #23C6C8;
                -webkit-transition: width 2s, height 4s;
                transition: width 2s, height 0.4s;
                font-size: 9px
            }
            .scrollable-menu {
                height: auto;
                max-height: 200px;
                overflow-x: hidden;
                position: absolute;
                left: -60px;
                right: 16px;
            }


















            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
                background-color: #fefefe;
                margin: auto;
                padding: 10px;
                border: 1px solid #888;
                width: 95%;
                height: 85%;
            }

            /* The Close Button */
            .close {
                color: #aaaaaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }





        </style>




        <br><br><br>
        <script>
            $('#extensionMultiple').multiselect({
                includeSelectAllOption: true,
                enableFiltering: true,
                nonSelectedText: 'Seçiniz...',
                nSelectedText: ' Dahili seçildi',
                allSelectedText: 'Tümü Seçildi',
                selectAllText: 'Tümünü Seç',
                filterPlaceholder: 'Ara',
                maxHeight: 200,
                numberDisplayed: 1,
            });

            $('.staticticsbuttons').on('click', 'button', function() {
                $('#staticticsType').val($(this).attr('data'));
                $('#loadingmessage').show();
                $('#getStaticticsBtn').click();
            });

            function countSlider(className, count, type, attribute, time=500) {
                $({value:0}).animate({value: Math.floor(count)}, {
                    duration: 2000,
                    easing: 'swing',
                    step: function () {
                        if(type == 1){
                            $('.'+className).html(commaSeparateNumber(Math.round(this.value))+ attribute);
                        } else if(type == 2){
                            $('.'+className).width(commaSeparateNumber(Math.round(this.value))+ attribute);
                        }
                    },
                    complete: function () {
                        if(type == 1){
                            $('.'+className).animate({opacity : 1},{
                                duration:1000,
                                complete: function () {
                                    $('.'+className).animate({opacity : 0.1},{
                                        duration:time,
                                        easing:'swing',
                                        complete: function () {
                                            if (className == 'widget0'){
                                                $('.'+className).html(count,0+ '');
                                            }else {
                                                $('.'+className).html(sureyeCevir(count,0)+ '');
                                            }
                                            $('.'+className).animate({opacity : 1});
                                        }
                                    });
                                }
                            });
                        }
                    }
                });
                if(type == 1){
                    $('.'+className).html(count+attribute);
                } else if(type == 2){
                    $('.'+className).width(count+attribute);
                }
            }

            function commaSeparateNumber(val) {
                while (/(\d+)(\d{3})/.test(val.toString())) {
                    val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                }
                return val;
            }

            var widgetClasses = ['widget0', 'widget1', 'widget2', 'widget3', 'detailCount1', 'detailCount2', 'detailCount3'];
            var progressClasses = ['widgetprogress0', 'widgetprogress1', 'widgetprogress2', 'widgetprogress3', /*'detailprogress0',*/ 'detailprogress1', 'detailprogress2', 'detailprogress3'];

            widgetClasses.forEach(function (value,i) {
                if (i == 0){
                    countSlider(value, countDatas[i], 1, ' <small><small>adet.</small></small>');
                } else {

                    countSlider(value, countDatas[i], 1, ' <small><small>sn.</small></small>');
                }
            });
            progressClasses.forEach(function (value,i) {
                countSlider(value, percentDatas[i], 2, '%');
            });

            $('[data-toggle="tooltip"]').tooltip();



            function filterButtonReset() {
                $('.datasetFilterDiv button.active').removeClass('btn-primary');
                $('.datasetFilterDiv button.active').addClass('btn-white');
                $('.datasetFilterDiv button.active').removeClass('active');
            }
            $('.datasetFilterDiv').on('click', 'button', function() {
                filterButtonReset();
                $(this).removeClass('btn-white');
                $(this).addClass('active');
                $(this).addClass('btn-primary');

                var tab = getActiveTab(1);
                var setting = {'yLabel':'Saniye', 'xLabel':'Tarih', 'type':'line'};
                var types = {'#tab-1':'cevaplanan', '#tab-2':'topKonusma', '#tab-3':'ortKonusma', '#tab-4':'topBekleme', '#tab-5':'ortBekleme', '#tab-6':'maxBekleme'};
                var types2 = {'#tab-1':'chart1', '#tab-2':'chart2', '#tab-3':'chart3', '#tab-4':'chart4', '#tab-5':'chart5'};

                if (getActiveTab(2)==1){ setting.yLabel='Adet'; }

                var type = $(this).attr('data');
                $('#filterName').val(type);
                switch (type) {
                    case 'max':
                        graph(types2[tab], setDataset(types[tab],setting), 2);
                        break;
                    case 'min':
                        graph(types2[tab], setDataset(types[tab],setting), 1);
                        break;
                    case 'all':
                        graph(types2[tab], setDataset(types[tab],setting), 0);
                        break;
                    default:
                        break;
                }
            });

            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                if ($('#staticticsType').val() != 'density') {
                    var tab = $(e.target).attr('href');
                    document.getElementById('tabName').value = $(e.target).attr('href');
                    var filterName = $('#filterName').val();

                    filterButtonReset();
                    $('#filter_' + filterName + '_tab-' + getActiveTab(2)).removeClass('btn-white');
                    $('#filter_' + filterName + '_tab-' + getActiveTab(2)).addClass('btn-primary');
                    $('#filter_' + filterName + '_tab-' + getActiveTab(2)).addClass('active');

                    var type = 0;
                    switch (filterName) {
                        case 'max':
                            type = 2;
                            break;
                        case 'min':
                            type = 1;
                            break;
                    }

                    var setting = {'yLabel':'Saniye', 'xLabel':'Tarih', 'type':'line'};
                    switch(tab) {
                        case '#tab-1':
                            setting.yLabel='Adet';
                            graph('chart1', setDataset('cevaplanan',setting), type);
                            break;
                        case '#tab-2':
                            graph('chart2', setDataset('topKonusma',setting), type);
                            break;
                        case '#tab-3':
                            graph('chart3', setDataset('ortKonusma',setting), type);
                            break;
                        case '#tab-4':
                            graph('chart4', setDataset('topBekleme',setting), type);
                            break;
                        case '#tab-5':
                            graph('chart5', setDataset('ortBekleme',setting), type);
                            break;
                        case '#tab-6':
                            graph('chart6', setDataset('maxBekleme',setting), type);
                            break;
                        default:
                    }
                }
            });
        </script>
        <div class="clearfix"></div>
    </div>
</div>
</body>
</html>
