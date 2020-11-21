<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<script>


    var responsex = "";

    function dataolustur() {

        $.ajax({
            type: "POST",
            url: "/home/dashboard/datarefresh",
            data: "dashboard_data_refresh",
            success: function (response) {
                data_refresh(response);

            },
            error: function (data) {
            },
            dataType: "json"
        });
    }

    response = "";
    $(document).ready(function () {

        dataolustur();
    })

    function dahililer(response) {
        $tmiz = "";
        $tmiz = "<div class='row'>";
        $sayac = 0;
        Object.keys(response.dahililer).forEach(function (key) {


            var y = response.dahililer[key];
            //console.log(y);

            if (y.pausedreason !="") {
                var reason=1;
                if (y.pausedreason==0){
                    reason=1;
                }else {
                    reason=y.pausedreason;
                }
                //console.log(reason);

                //console.log(response.breaks);
                if (response.breaks[reason]){

                    var molatip = response.breaks[reason].molatip;

                }else {
                    var molatip='';
                }
            }else {
                var molatip='';
            }
            //console.log(molatip);
            $sayac %= 4;
            if ($sayac == 0) {
                $tmiz = $tmiz + "</div><div class='row'>";
            }
            $sayac++;
            $tmiz = $tmiz + '<div class="col-md-3 " style="padding-right:0px;padding-bottom:10px;min-height: 130px;"  >\n'
            ;
            olustur = "<div><div><div>";
            if (y.durum == 'onhook') {
                olustur = '<div class="uk-card uk-card-secondary uk-card-body tv-div-back3 tv-gorusme mb-2"  >\n' + '           ' +
                    ' <div class="row">\n' +
                    '<div class="col-md-3 tv-col2">\n' +
                    '<div class="circle-gorusme"  ><img src="/dashboard/images/p1.svg" width="19" alt=""></div>';
            } else if (y.durum == 'paused') {
                olustur = '<div class="uk-card uk-card-secondary uk-card-body tv-div-back3 tv-mola  mola mb-2"  >\n' + '            ' +
                    '<div class="row">\n' +
                    '<div class="col-md-3 tv-col2">\n' +
                    ' <div class="circle-mola"  ><img src="/dashboard/images/cup.svg" width="19" alt=""></div>';
            } else if (y.durum == 'empty') {
                olustur = '<div class="uk-card uk-card-secondary uk-card-body tv-div-back3 tv-musait mb-2"  >\n' + '            ' +
                    '<div class="row">\n' +
                    '<div class="col-md-3 tv-col2">\n' +
                    '<div class="circle-musait" ><img src="/dashboard/images/checked.svg" width="19" alt=""></div>';
            }else if (y.durum == 'unregister') {
                olustur = '<div class="uk-card uk-card-secondary uk-card-body tv-div-back3 tv-pasif mb-2"  >\n' + '            ' +
                    '<div class="row">\n' +
                    '<div class="col-md-3 tv-col2">\n' +
                    '<div class="circle-musait" ><img src="/dashboard/images/phone/back.svg" width="19" alt=""></div>';
            }else    {
                olustur = '<div class="uk-card uk-card-secondary uk-card-body tv-div-back3 tv-pasif mb-2"  >\n' + '            ' +
                    '<div class="row">\n' +
                    '<div class="col-md-3 tv-col2">\n' +
                    '<div class="circle-musait" ><img src="/dashboard/images/phone/back.svg" width="19" alt=""></div>';
            }



            $tmiz = $tmiz + olustur;
            $tmiz = $tmiz + '</div>\n' +
                '              <div class="col-md-9 text-left tv-col">\n' +
                '                <span class="tag-limit2 font-20 "><b>' + y.ad + ' - ' + y.talkingnumseconds + '</b><b></b><span class="ml-2" id="time-' + y.talkingnumseconds + '"></span></span>';


            if (y.durum == 'onhook') {
                $tmiz = $tmiz + '<br><span  class="font-11 mola"  > Görüşmede - ' + y.talkingnum + '</span>';
            } else if (y.durum == 'paused') {
                $tmiz = $tmiz + '<br><span   class="font-12 mola"> ' + molatip + ' Molasında ' + y.lastpausedtime + '</span>';
            } else if (y.durum == 'empty') {
                $tmiz = $tmiz + '<br><span   class="font-12"> Müsait</span>';
            }


            $tmiz = $tmiz + '</div>\n';


            $tmiz = $tmiz + '    <div class="col-md-9 text-left tv-col"> ' +
                '<span  class="tag-limit2 font-14  mola mb-2"> GELEN: ' + y.gelen + '  HARICI: ' + y.giden + '<b></b> </span>' +
                '</div>\n';


            $tmiz = $tmiz + '</div>\n' + '   </div>\n' + '</div>';


            /*    $tmiz=$tmiz+'<div class="col-md-3  " style="padding-right:0px">\n' +
                  '<div class="uk-card uk-card-secondary uk-card-body tv-div-back3 tv-gorusme mb-2">\n' +
                  '            <div class="row">\n' +
                  '<div class="col-md-3 tv-col2">\n' +
                  '<div class="circle-gorusme"><img src="http://192.168.51.26/dashboard/images/p1.svg" alt="" width="19"></div></div>\n' +
                  '              <div class="col-md-9 text-left tv-col">\n' +
                  '                <span class="tag-limit2 font-20 "><b>3294-Arzu Buse Celen - 00:06:05</b><b></b><span class="ml-2" id="time-00:06:05"></span></span><br><span class="font-11 mola"> Görüşmede - 05466091580</span></div>\n' +
                  '    <div class="col-md-9 text-left tv-col"> <span class="tag-limit2 font-14  mola mb-2"> GELEN: 1  HARICI: 19<b></b> </span></div>\n' +
                  '</div>\n' +
                  '   </div>\n' +
                  '</div>\n';
              */

        });
        $tmiz = $tmiz + "</div>";
        return $tmiz;
    }
    function kuyruklar(response) {
        $tmiz = "";
        $sayac = 0;
        $tmiz = "<div class='row'>";

        Object.keys(response.kuyruklar).forEach(function (queue) {
            var y = response.kuyruklar[queue];
            $sayac %= 2;
            if ($sayac == 0) {
                $tmiz = $tmiz + "</div><div class='row'>";
            }
            $sayac++;
            $tmiz = $tmiz + '<div class="col-md-6" style="padding-right:0px;padding-bottom:10px;">';
            if (y.bekleyen > 0) {
                $tmiz = $tmiz +
                    '          <div class="uk-card uk-card-secondary uk-card-body kuyruk_bekleyen" >\n' +
                    '            <div class="row">\n' +
                    '              <div class="col-md-12 text-center tag-limit2 font-14">\n' +
                    '                ' + y.ad + ' \n|' + y.toplam_konusma + ' \n' +
                    '              </div>\n' +
                    '              <div class="col-md-7 text-left tv-col">\n' +
                    '                <img src="/dashboard/images/phone.svg" class="mt-12 ml-2 mr-2" width="20" alt="">\n' +
                    '                <span class="font-25"><b>' + y.gorusmede + '/</b></span>\n' +
                    '                <span class="font-25"><b>' + y.cagrialabiliragent + '/</b></span>\n' +
                    '                <span class="font-25">' + y.kuyruktotalagents + '</span>\n' +
                    '              </div>\n' +
                    '              <div class="col-md-5 text-right tv-col">\n' +
                    '                <img src="/dashboard/images/hourglass.svg" class="mtt-10 ml-2 mr-2" width="18" alt="">\n';
                if (y.bekleyen > 0) {
                    $tmiz = $tmiz + '          <span  class="bg-bekliyor font-25 float-right mr-2">\n' +
                        '                  ' + y.bekleyen + '\n' +
                        '                </span>\n';
                } else {
                    $tmiz = $tmiz + ' <span   class="bg-bekliyor font-25 float-right mr-2">\n' +
                        '                  <b>0</b>\n' +
                        '                </span>\n';
                }


                $tmiz = $tmiz +
                    '              </div>\n' +
                    '            </div>\n';


                $tmiz = $tmiz + '            <div class="row">\n' + '    <div class="col-md-12 text-left tv-col"> ' +
                    '<span  class="tag-limit2 font-14  mola mb-2"> GELEN: ' + y.gelen + '  KAYIP: ' + y.terkedilmis + '<b></b> </span>' +
                    '</div>\n'
                ;



                $tmiz = $tmiz + '          </div>\n' +
                    '        </div>\t\t\n';
            } else {
                $tmiz = $tmiz +
                    '          <div class="uk-card uk-card-secondary uk-card-body tv-div-back5" >\n' +
                    '            <div class="row">\n' +
                    '              <div class="col-md-12 text-center tag-limit2 font-14">\n' +
                    '                ' + y.ad + '\n|' + y.toplam_konusma + ' \n' +
                    '              </div>\n' +
                    '              <div class="col-md-7 text-left tv-col">\n' +
                    '                <img src="/dashboard/images/phone.svg" class="mt-12 ml-2 mr-2" width="20" alt="">\n' +
                    '                <span class="font-25"><b>' + y.gorusmede + '/</b></span>\n' +
                    '                <span class="font-25"><b>' + y.cagrialabiliragent + '/</b></span>\n' +
                    '                <span class="font-25">' + y.kuyruktotalagents + '</span>\n' +
                    '              </div>\n' +


                    '              <div class="col-md-5 text-right tv-col">\n' +
                    '                <img src="/dashboard/images/hourglass.svg" class="mtt-10 ml-2 mr-2" width="18" alt="">\n';
                if (y.bekleyen > 0) {
                    $tmiz = $tmiz + '   <span  class="bg-bekliyor font-25 float-right mr-2">\n' +
                        '                  ' + y.bekleyen + '\n' +
                        '                </span>\n';
                } else {
                    $tmiz = $tmiz + ' <span   class="bg-bekliyor font-25 float-right mr-2">\n' +
                        '                  <b>0</b>\n' +
                        '                </span>\n';
                }


                $tmiz = $tmiz +
                    '              </div>\n' +
                    '            </div>\n';


                $tmiz = $tmiz + '            <div class="row">\n' + '    <div class="col-md-12 text-left tv-col"> ' +
                    '<span  class="tag-limit2 font-14  mola mb-2"> GELEN: ' + y.gelen + '  KAYIP: ' + y.terkedilmis + '<b></b> </span>' +
                    '</div>\n' +
                    '</div>\n'


                ;




                $tmiz = $tmiz + '       ' +
                    '        </div>\t\t\n';
            }
            $tmiz = $tmiz + "</div>";
        });
        $tmiz = $tmiz + "</div>";
        return $tmiz;
    }
    function data_refresh(response) {

        var html = '<div style="background: #1c2431"><div class="a-container tv-background  text-center"> ' +
            '  <div class="row">\n'
        html=html+'<div class="col-md-6"><div class="row">';

        html= html+'    <div class="col-md-4 top-buffer">\n' +
            '      <div class="uk-card uk-card-secondary uk-card-body tv-div-back">\n' +
            '        <div class="uk-card-header bg-gorusmede">\n' +
            '          GORUSME / MUSAIT / AKTIF\n' +
            '        </div>\n' +
            '        <div class="row mb-2">\n' +
            '          <div class="col-md-6 mt-3 tv-col">\n' +
            '            <img src="/dashboard/images/telephone.svg" width="40" alt="">\n' +
            '          </div>\n' +
            '          <div class="col-md-12 tv-col">\n' +
            '            <span class="font-50"  > ' + response.kartlar.gorusmedekiler + '/'+ response.kartlar.musaitagentcount + '/' + response.dahili_say + '</span>\n' +
            '          </div>\n' +
            '        </div>\n' +
            '      </div>\n' +
            '    </div>\n';


        html=html+ '    <div class="col-md-4 top-buffer" >\n' +
            '      <div class="uk-card uk-card-secondary uk-card-body tv-div-back">\n' +
            '        <div class="uk-card-header bg-acik">\n' +
            '          MOLADAKI AGENT\n' +
            '        </div>\n' +
            '        <div class="row mb-2 ">\n' +
            '          <div class="col-md-6 mt-3 tv-col">\n' +
            '            <img src="/dashboard/images/cup.svg" width="40" alt="">\n' +
            '          </div>\n' +
            '          <div class="col-md-6 tv-col">\n' +
            '            <div class="row">\n' +
            '              <div class="col-md-12 mt-10">\n' +
            '                <b>\n' +
            '                  <span class="font-50"  >' + response.kartlar.breakcount + '</span>\n' +
            '                </b>\n' +
            '              </div>\n' +

            '            </div>\n' +
            '          </div>\n' +
            '        </div>\n' +
            '      </div>\n' +
            '    </div>\n' ;


        html=html+ '    <div class="col-md-4 top-buffer">\n' +
            '      <div class="uk-card uk-card-secondary uk-card-body tv-div-back">\n' +
            '        <div class="uk-card-header bg-bekleyen">\n' +
            '          BEKLEYENLER\n' +
            '        </div>\n' +
            '        <div class="row mb-2">\n' +
            '          <div class="col-md-6 mt-3 tv-col">\n' +
            '            <img src="/dashboard/images/hourglass.svg" width="40" alt="">\n' +
            '          </div>\n' +
            '          <div class="col-md-6 tv-col">\n' +
            '            <b>\n' +
            '            <span class="font-50" style="color:#ffb900" >' + response.kartlar.kuyruktakiler + '</span>\n' +
            '            </b>\n' +
            '          </div>\n' +
            '        </div>\n' +
            '      </div>\n' +
            '    </div>\n';





        html=html+'</div></div>';
        html=html+'<div class="col-md-6"><div class="row">';


        html= html+'    <div class="col-md-4 top-buffer" >\n' +
            '      <div class="uk-card uk-card-secondary uk-card-body tv-div-back">\n' +
            '        <div class="uk-card-header bg-acik">\n' +
            '          GELEN ÇAĞRI\n' +
            '        </div>\n' +
            '        <div class="row mb-2 ">\n' +
            '          <div class="col-md-6 mt-3 tv-col">\n' +
            '            <img src="/dashboard/images/incomming-call.svg" width="40" alt="">\n' +
            '          </div>\n' +
            '          <div class="col-md-6 tv-col">\n' +
            '            <div class="row">\n' +
            '              <div class="col-md-12 mt-10">\n' +
            '                <b>\n' +
            '                  <span class="font-50"  >' + response.kartlar.gelen + '</span>\n' +
            '                </b>\n' +
            '              </div>\n' +
            '              <div class="col-md-12 mt-10">\n' +
            '                <span class="font-14">' + response.kartlar.gelen_s + '</span>\n' +
            '              </div>\n' +
            '            </div>\n' +
            '          </div>\n' +
            '        </div>\n' +
            '      </div>\n' +
            '    </div>\n' ;


        html=html+ '    <div class="col-md-4 top-buffer">\n' +
            '      <div class="uk-card uk-card-secondary uk-card-body tv-div-back">\n' +
            '        <div class="uk-card-header bg-giden">\n' +
            '          GİDEN ÇAĞRI\n' +
            '        </div>\n' +
            '        <div class="row mb-2">\n' +
            '          <div class="col-md-6 mt-3 tv-col">\n' +
            '            <img src="/dashboard/images/out-call.svg" width="40" alt="">\n' +
            '          </div>\n' +
            '          <div class="col-md-6 tv-col">\n' +
            '            <div class="row">\n' +
            '              <div class="col-md-12 mt-10">\n' +
            '                <b>\n' +
            '                  <span class="font-50"  >' + response.kartlar.giden + '</span>\n' +
            '                </b>\n' +
            '              </div>\n' +
            '              <div class="col-md-12 mt-10">\n' +
            '                <span class="font-14">' + response.kartlar.giden_sure + '</span>\n' +
            '              </div>\n' +
            '            </div>\n' +
            '          </div>\n' +
            '        </div>\n' +
            '      </div>\n' +
            '    </div>\n';



        html=html+ '    <div class="col-md-4 top-buffer" >\n' +
            '      <div class="uk-card uk-card-secondary uk-card-body tv-div-back">\n' +
            '        <div class="uk-card-header bg-acik">\n' +
            '          TERKEDILMIŞ ÇAĞRI\n' +
            '        </div>\n' +
            '        <div class="row mb-2 ">\n' +
            '          <div class="col-md-6 mt-3 tv-col">\n' +
            '            <img src="/dashboard/images/phone/hangup.svg" width="40" alt="">\n' +
            '          </div>\n' +
            '          <div class="col-md-6 tv-col">\n' +
            '            <div class="row">\n' +
            '              <div class="col-md-12 mt-10">\n' +
            '                <b>\n' +
            '                  <span class="font-50"  >' + response.kartlar.terkedilmis + '</span>\n' +
            '                </b>\n' +
            '              </div>\n' +
            '              <div class="col-md-12 mt-10">\n' +
            '                <span class="font-14">Adet</span>\n' +
            '              </div>\n' +
            '            </div>\n' +
            '          </div>\n' +
            '        </div>\n' +
            '      </div>\n' +
            '    </div>\n' ;







        html=html+'</div></div>';






        html= html+ '  </div>\n';


        html = html + "<div class='row'  style='padding-top:20px;background: #1c2431'>";
        html = html + "<div class='col-md-8'>";
        html = html + dahililer(response);
        html = html + "</div>";
        html = html + "<div class='col-md-4'>";
        html = html + kuyruklar(response);
        html = html + "</div>";
        html = html + "</div>"
        html = html + "</div>"
        $('.a-container').html(html);
        // location.reload();
        //console.log(response);
        // setTimeout(dataolustur(), 2000); // call refreshStatus every 5 seconds
        setTimeout(function(){ dataolustur(); }, 10000);

    }

    //        data_refresh(); // call on page load
    // setInterval(data_refresh, 10000); // call refreshStatus every 5 seconds




</script>

</body>
</html>
