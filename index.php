<?php
/**
 * Copyright (c) 2018.
 * orveg.com (https://www.orveg.com)
 *
 * @link   https://soyagaci.orveg.com
 * @author Orhan V. Gülenay
 *
 *
 *
 */

if($_POST) {

    $data = $_POST["data"];

    $datas = explode("\n", $data);

    $k = 0;

    foreach($datas as $key => $datum) {
        $s = explode("\n", $datum);


        $a = trim($s[0][0]);

        if(intval($a)) {
            if(!strstr($datum, "/")) {
                $j = explode("\t", $datas[$key + 1])[0];
                if(intval($j[0]) || $j[0] == "0") {
                    $f = $j;
                } else {
                    $f = "";
                }
                $reel_data[] = trim($datum) . "\t" . trim($f);
            }

        }
        $k++;
    }

    $i = 0;

    foreach($reel_data as $reelDatum) {
        $datas2[$i] = explode("\t", $reelDatum);

        $c[] = array(array('v' => (string)xc($datas2[$i][2])[1],
                           'f' => '<div style="color:black; font-weight: 600">' . $datas2[$i][3] . " " . $datas2[$i][4] . '</div><div style="color:red; font-style:italic">' . xc($datas2[$i][2])[2] . ' </div><div style="color:black;">' . $datas2[$i][7] . '(' . $datas2[$i][8] . ') </div>'),
            (string)xc($datas2[$i][2])[0]);
        $i++;
    }

    $asd = json_encode($c);
}

function xc($x) {

    if($x == "Eşi") {
        return array(0,
            39);
    }
    if($x == "Oğlu") {
        return array(0,
            40,
            "Oğlu");
    }
    if($x == "Kızı") {
        return array(0,
            41,
            "Kızı");
    }

    if($x == "Kendisi") {
        return array(0,
            0,
            "Kendisi");
    }

    //ANA-BABA
    if($x == "Annesi") {
        return array(0,
            1,
            "Annesi");
    }
    if($x == "Babası") {
        return array(0,
            2,
            "Babası");
    }

    //DEDELER NİNELER
    if($x == "Annesinin Annesi") {
        return array(1,
            3,
            "Annanne");
    }
    if($x == "Annesinin Babası") {
        return array(1,
            4,
            "Dede");
    }
    if($x == "Babasının Annesi") {
        return array(2,
            5,
            "Babanne");
    }
    if($x == "Babasının Babası") {
        return array(2,
            6,
            "Dede");
    }


    //DEDELER NİNELERİN ANASI BABASI
    if($x == "Annesinin Annesinin Annesi") {
        return array(3,
            7,
            "Annanenin Annesi");
    }
    if($x == "Annesinin Annesinin Babası") {
        return array(3,
            8,
            "Annanenin Babası");
    }
    if($x == "Annesinin Babasının Annesi") {
        return array(4,
            9,
            "Dedenin Annesi");
    }
    if($x == "Annesinin Babasının Babası") {
        return array(4,
            10,
            "Dedenin Babası");
    }

    if($x == "Babasının Annesinin Annesi") {
        return array(5,
            11,
            "Babannenin Annesi");
    }
    if($x == "Babasının Annesinin Babası") {
        return array(5,
            12,
            "Babannenin Babası");
    }
    if($x == "Babasının Babasının Annesi") {
        return array(6,
            13,
            "Dedenin Annesi");
    }
    if($x == "Babasının Babasının Babası") {
        return array(6,
            14,
            "Dedenin Babası");
    }


    if($x == "Annesinin Annesinin Annesinin Annesi") {
        return array(7,
            15,
            "Annanenin Annanesi");
    }
    if($x == "Annesinin Annesinin Annesinin Babası") {
        return array(7,
            16,
            "Annanenin Dedesi");
    }
    if($x == "Annesinin Annesinin Babasının Annesi") {
        return array(8,
            17,
            "Annanenin Babaannesi");
    }
    if($x == "Annesinin Annesinin Babasının Babası") {
        return array(8,
            18,
            "Annanenin Dedesi");
    }

    if($x == "Annesinin Babasının Annesinin Annesi") {
        return array(9,
            19,
            "Dedenin Annennesi");
    }

    if($x == "Annesinin Babasının Annesinin Babası") {
        return array(9,
            20,
            "Dedenin Dedesi");
    }

    if($x == "Babasının Babasının Babasının Babası") {
        return array(14,
            21,
            "Dedenin Dedesi");
    }
    if($x == "Babasının Babasının Babasının Annesi") {
        return array(14,
            22,
            "Dedenin Babannesi");
    }

    if($x == "Babasının Babasının Annesinin Babası") {
        return array(13,
            23,
            "Dedenin Dedesi");
    }
    if($x == "Babasının Babasının Annesinin Annesi") {
        return array(13,
            24,
            "Dedenin Annanesi");
    }

    if($x == "Babasının Annesinin Babasının Babası") {
        return array(12,
            25,
            "Babanenin Dedesi");
    }
    if($x == "Babasının Annesinin Babasının Annesi") {
        return array(12,
            26,
            "Babanenin Babannesi");
    }

    if($x == "Babasının Annesinin Annesinin Babası") {
        return array(11,
            27,
            "Babanenin Dedesi");
    }
    if($x == "Babasının Annesinin Annesinin Annesi") {
        return array(11,
            28,
            "Babanenin Annanesi");
    }


    if($x == "Annesinin Annesinin Annesinin Annesinin Annesi") {
        return array(15,
            29,
            "Annanenin Annanesinin Annesi");
    }
    if($x == "Annesinin Annesinin Annesinin Annesinin Babası") {
        return array(15,
            30,
            "Annanenin Annanesinin Babası");
    }

    if($x == "Annesinin Annesinin Annesinin Babasının Annesi") {
        return array(16,
            31,
            "Annanenin Dedesinin Annesi");
    }
    if($x == "Annesinin Annesinin Annesinin Babasının Babası") {
        return array(16,
            32,
            "Annanenin Annanesinin Dedesi");
    }

    if($x == "Annesinin Annesinin Babasının Babasının Annesi") {
        return array(18,
            33,
            "Annanenin Annanesinin Babannesi");
    }
    if($x == "Annesinin Annesinin Babasının Babasının Babası") {
        return array(18,
            34,
            "Annanenin Babannesinin Babannesi");
    }

    if($x == "Annesinin Babasının Babasının Babasının Annesi") {
        return array(21,
            35,
            "Dedenin Babannesinin Annesi");
    }
    if($x == "Annesinin Babasının Babasının Babasının Babası") {
        return array(21,
            36,
            "Dedenin Babannesinin Babası");
    }

    if($x == "Babasının Babasının Babasının Babasının Annesi") {
        return array(14,
            37,
            "Dedenin Dedesinin Annesi");
    }
    if($x == "Babasının Babasının Babasının Babasının Babası") {
        return array(21,
            38,
            "Dedenin Dedesinin Babası");
    }


}

?>
<html>
<head>
    <title>SOY AĞACI GÖRME</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas2image@1.0.5/canvas2image.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css"/>
    <?php if(!empty($asd)) { ?>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            console.log(<?= $asd ?>)
            google.charts.load('current', {packages: ["orgchart"]});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Name');
                data.addColumn('string', 'Manager');

                // For each orgchart box, provide the name, manager, and tooltip to show.
                data.addRows(<?= $asd ?>);
                var options = {
                    allowHtml: true
                };


                var chart_div = document.getElementById('chart_div');
                var chart = new google.visualization.OrgChart(chart_div);

                chart.draw(data, options);

            }
        </script>
    <?php } ?>
    <script>
        $(function () {
            $("#btnShow").click(function () {
                html2canvas($("#chart_div"), {
                    onrendered: function (canvas) {
                        theCanvas = canvas;
                        // document.body.appendChild(Canvas2Image.convertToImage(canvas));
                        $("#exampleModal").modal();
                        $("#exampleModal").find('.modal-body').append(Canvas2Image.convertToImage(canvas));
                        $("#exampleModal").find("img").css("width", "100%");
                    }
                });
            });
            $("#btnSave").click(function () {
                html2canvas($("#chart_div"), {
                    onrendered: function (canvas) {
                        theCanvas = canvas;
                        Canvas2Image.saveAsPNG(canvas);
                    }
                });
            });
            $("#ornek").click(function () {
                $("#exampleModal2").modal();
            });
        });

        function trackingEvent(category, action, label, value) {
            label = label.replace("'", "\'");
            if (value == 0) {
                ga('send', 'event', {
                    eventCategory: category,
                    eventAction: action,
                    eventLabel: label
                });
            } else {
                ga('send', 'event', {
                    eventCategory: category,
                    eventAction: action,
                    eventLabel: label,
                    eventValue: value
                });
            }

        }
    </script>
    <script src="//www.google-analytics.com/analytics.js" type="text/javascript" async></script>
    <script>window.GoogleAnalyticsObject = 'ga';
        window.ga = window.ga || function () {
            (ga.q = ga.q || []).push(arguments)
        };
        ga.l = +new Date;
        ga('create', 'UA-9603135-4', 'auto');
        ga('send', 'pageview')</script>
</head>
<style>
    .container {
        max-width: 960px;
    }

    .modal-dialog {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;

    }

    .modal-content {
        height: auto;
        min-height: 100%;
        border-radius: 0;
    }

    @media (min-width: 576px) {

        .modal-dialog {
            max-width: 100% !important;
        }
    }

    /*
     * Custom translucent site header
     */

    .site-header {
        background-color: rgba(0, 0, 0, .85);
        -webkit-backdrop-filter: saturate(180%) blur(20px);
        backdrop-filter: saturate(180%) blur(20px);
    }

    .site-header a {
        color: #999;
        transition: ease-in-out color .15s;
    }

    .site-header a:hover {
        color: #fff;
        text-decoration: none;
    }

    .flex-equal > * {
        -ms-flex: 1;
        -webkit-box-flex: 1;
        flex: 1;
    }

    @media (min-width: 768px) {
        .flex-md-equal > * {
            -ms-flex: 1;
            -webkit-box-flex: 1;
            flex: 1;
        }
    }

    .overflow-hidden {
        overflow: hidden;
    }

    table {
        border-collapse: inherit;
    }
</style>

<body>
<nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">
            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCIgdmlld0JveD0iMCAwIDU3Ni41MjIgNTc2LjUyMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTc2LjUyMiA1NzYuNTIyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ0OS45NDEsMjg5LjMxMWMtNy43NzYsMC41NjEtMTkuMDkyLDAuNTc1LTI3Ljc3My0xLjc1OWMtMS40NTYtMC4zOTItMS4zOTItMC45LDAuMTEtMS4wMzUgICAgYzQyLjI4OS0zLjg1NSw3OS42MzctMTkuNTU2LDk5LjI2Ny00MC42NDljNS41ODgtNi4wMSw5Ljk5NC0xMi42MDEsMTMuMTI0LTE5LjY1N2MxLjQyLTMuMTk4LDIuMzA1LTYuNTgyLDMuNDU4LTkuODc4ICAgIGMxLjIzOS0zLjU0LDEuNDcyLTUuMzg5LDEuMjYxLTYuM2MtMC4zNC0xLjQ2OS0yLjU1NSwwLjg5LTIuOTkyLDIuMzMyYy0wLjU3MiwxLjg5NC0xLjE0NywzLjc4Mi0xLjkzNSw1LjYwNiAgICBjLTEuNjQ5LDMuODEzLTMuNzkxLDcuNDQyLTYuMTU5LDEwLjk3M2MtMC44MzksMS4yNTEtMi4xNTcsMS4xOTYtMi45MzUtMC4wOTVjLTMuMzItNS41MTQtNi44NDYtMTAuOTUyLTguMDk3LTE2LjMzNyAgICBjLTAuMzQzLTEuNDY5LTAuNjc3LTEuNDkzLTAuNzQ3LDAuMDEyYy0wLjQ0Niw5LjU1LDUuNDEzLDIwLjgyLDAuNTM5LDI5LjA2N2MtNS4wMTMsOC40NzMtMTcuMjc3LDE0LjczNy0yOC40NCwxOS42NzYgICAgYy0yMi40OSw5Ljk1NC01Mi4wMjksMTIuOTY1LTc3LjYyLDIwLjA2MmMtMjcuNDExLDcuNjA0LTQ0LjY1NywyMS4wMzgtNTQuMjM1LDM3Ljg3Yy0wLjc0NiwxLjMxMS0xLjQxNiwxLjE4Mi0xLjYxMi0wLjMxNCAgICBjLTAuMTMyLTAuOTk4LTAuMjg0LTIuMDA0LTAuNDY4LTMuMDE4Yy0zLjMyOS0xOC41MS05LjkyMS0zNy40MzktOS40MDctNTUuNTgyYzAuNDg3LTE3LjA5Niw3Ljg4LTMzLjI1LDIzLjE2Mi00NS4zNTggICAgYzMuNjEzLTIuODQ5LDcuNjEzLTUuNDY1LDExLjg5OS03Ljg4OWMyLjYzOC0xLjUsMTEuNTYyLTUuNzcxLDEzLjAyMy02LjEzNmMzNy4yMzEtOS4yMSw2OC42ODItMjkuNDc0LDgzLjc1Ni01Mi44MzMgICAgYzQuMjk5LTYuNjY4LDcuNDc2LTEzLjc2Nyw5LjQ2MS0yMS4xNjNjMC45LTMuMzUxLDEuMzAxLTYuODI0LDEuOTUyLTEwLjIzNmMwLjY1OC0zLjQ0MiwwLjY5Mi01LjI5NywwLjQ1My02LjIzNiAgICBjLTAuMzczLTEuNDU5LTIuMjMsMS4wMzQtMi40NTcsMi41MjRjLTAuMjk0LDEuOTQ5LTAuNTg4LDMuODkzLTEuMDgzLDUuODAyYy0xLjAyOCwzLjk3NS0yLjUxOSw3LjgyOC00LjIxNywxMS42MTMgICAgYy0wLjYxOCwxLjM3Ny0xLjgzOSwxLjQ3Mi0yLjcxNCwwLjI0NWMtMy41NzctNS4wMTUtNy4zMi05LjkzLTkuMDUyLTE1LjA4Yy0wLjQ4LTEuNDI5LTAuNzgzLTEuNDE3LTAuNjcsMC4wODkgICAgYzAuNyw5LjUyOSw3LjIzNiwxOS45NjYsMy44MzEsMjguNzY0Yy0zLjUwNCw5LjA0Mi0xMy43MzksMTYuODA2LTIzLjE0MywyMy4xMjFjLTE4Ljk0OCwxMi43MjEtNDQuOTkxLDE5LjQ1My02Ny4wMzksMjkuNzMxICAgIGMtNDIuMTA1LDE5LjYzNi01My4yNDcsNTMuNTUzLTQ3LjUwMyw4OS45MjdjMC4yMzUsMS40OS0wLjU0MiwxLjk4My0xLjg0LDEuMjEyYy0wLjU4MS0wLjM0Ni0xLjE3OC0wLjY4LTEuNzg3LTEuMDA3ICAgIGMtMS4zMzEtMC43MS0zLjI4LTIuMTE0LTQuMzYtMy4xNjdjLTUuMDkyLTQuOTYzLTExLjExNy05LjY0OC0xOC4xODgtMTMuOTljLTIwLjczNC0xMi43MjEtNDUuODQyLTIyLjM2OS02My4yMjMtMzcuMTY0ICAgIGMtOC42MjMtNy4zNDEtMTcuOTEtMTYuMjIxLTIwLjM2MS0yNS42MDNjLTIuMzg0LTkuMTI1LDUuMjk3LTE4Ljc1NSw3LjA3OC0yOC4xNGMwLjI4MS0xLjQ4MS0wLjAxNi0xLjUzMy0wLjY1NS0wLjE2NSAgICBjLTIuMzA4LDQuOTE3LTYuNTgyLDkuMzc5LTEwLjcxLDEzLjk1NGMtMS4wMSwxLjEyLTIuMjEyLDAuODg0LTIuNjY4LTAuNTUxYy0xLjI1OC0zLjk1Ny0yLjI5OC03Ljk1My0yLjg2Ny0xMi4wMTcgICAgYy0wLjI3Mi0xLjk1Mi0wLjM0Ni0zLjkxNy0wLjQxNy01Ljg4OGMtMC4wNTUtMS41MDUtMS42MTUtNC4xOTUtMi4xNTQtMi43ODhjLTAuMzQ2LDAuOTA5LTAuNTIxLDIuNzUxLTAuMjYsNi4yNDkgICAgYzAuMjU3LDMuNDY3LDAuMjYzLDYuOTYxLDAuNzc0LDEwLjM5MmMxLjEzMiw3LjU3NiwzLjQ3OSwxNC45ODgsNi45OTIsMjIuMTAyYzEyLjMyLDI0LjkyMSw0MS4yNjEsNDguNjI5LDc3LjIwNCw2Mi4wMTcgICAgYzEuNDEzLDAuNTI2LDEuMzUsMS4wODYtMC4xNTksMS4xMjljLTcuOTU5LDAuMjI5LTE3LjU1NS0yLjI2NS0yNC4xNDQtNC41MjljLTEuNDI2LTAuNDktMS44MTQsMC4wNC0wLjc1OSwxLjExNyAgICBjNC42NDIsNC43MzQsMTIuMTM5LDkuMDQyLDIxLjU3Niw5LjQ4OWMzLjExOCwwLjE2Miw1Ljg5MS0wLjc2NSw4LjcyMS0xLjY0OWM0LjI4Ny0xLjM0LDQuNTU0LDAuMjI5LDcuMDA1LDIuMDIgICAgYzMuOTgzLDIuODk1LDcuNjYyLDUuOTQ5LDEwLjkyNyw5LjE4OWMxMy44MDQsMTMuNzY4LDE5LjMxMiwzMC42NTgsMTcuODUzLDQ3LjY5N2MtMC4wNTMsMC42MDUtMC4xMTMsMS4yMTUtMC4xODQsMS44MiAgICBjLTAuMTEzLDEuMDA2LTAuNjMxLDIuOTc3LTEuMjE1LDQuMzY1Yy0xLjUyNCwzLjYxNS0zLjQ5Miw3LjA4NC01LjYwOSwxMC41MDZjLTAuNzkzLDEuMjgxLTIuNTIxLDEuNzE3LTMuODE5LDAuOTQzICAgIGMtMi4yLTEuMzE0LTQuMjk2LTIuNjg4LTYuMTY1LTQuMTg5Yy0xLjE3Ni0wLjk0NS0xLjMwNC0wLjgzNi0wLjM3NCwwLjM0OGMxLjY3MSwyLjEyNywzLjM1Nyw0LjI1NCw1LjA3Myw2LjM3NSAgICBjMC45NDksMS4xNzIsMS4wNiwzLjE0NSwwLjI0OCw0LjQxOGMtNC43MTgsNy40My05LjAwMiwxNC45ODQtOS42NjksMjMuNjY2Yy0wLjE0NSwxLjgyNi0wLjIwMiwzLjY2NC0wLjE5LDUuNTA2ICAgIGMwLjAxLDEuNTA4LTAuNjA4LDEuNzA3LTEuNTMyLDAuNTE0Yy04LjIyLTEwLjU3Ni0yMS41OTgtMTcuNTUzLTI5LjQ5Ni0yOC40MThjLTEuNjQ5LTIuMjY2LTMuMDI2LTQuNjkxLTQuMjAyLTcuMjI5ICAgIGMtMC42MzMtMS4zNjctMC45MDktMi44NzktMC42OTQtMy4zMzhjMC4yMTQtMC40NTksMC4xOTItMC41NDEtMC4wNzQtMC4xOTlzLTAuOTMtMC41MDgtMS40Mi0xLjkzOCAgICBjLTEuMTA3LTMuMjQtMS45NjctNi42MDUtMi42NjUtMTAuMDM5Yy0wLjczNy0zLjYxMy0yLjE0Mi03LjQyNC0wLjUzNi0xMS44MTJjMS4zNjItMy43MjcsNC4zOTQtNy41MTgsNi40NjMtMTEuMjUyICAgIGM0LjA3My03LjM5OCw3LjU5Mi0xNC43MzIsMTAuOTctMjIuMDYyYzAuNjMxLTEuMzY5LDAuNDgtMS40NDctMC40NTItMC4yNjZjLTQuOTQyLDYuMjUyLTEyLjY4NCwxMS4zMzQtMTguMDQ1LDE3LjM3NSAgICBjLTEsMS4xMjktMS44OTEsMC44OTMtMi4xMjEtMC41OThjLTUuNTktMzYuMzk4LTI2LjUyMS02NS4zMTgtNzIuNjA0LTcxLjIyMWMtMjQuMTI4LTMuMDg3LTUwLjk4Ni0xLjU3OS03Mi45MDQtNy45MzUgICAgYy0xMC44NzUtMy4xNTUtMjIuOTktNy40MzktMjkuMDc2LTE0Ljk4OGMtNS45MTgtNy4zNDQtMi44NzEtMTkuMjc1LTUuMDk4LTI4LjU2NWMtMC4zNTItMS40NjYtMC42NDMtMS4zOS0wLjY2NywwLjExNiAgICBjLTAuMDg1LDUuNDMxLTIuMTU0LDExLjI1MS00LjAzNiwxNy4xMjFjLTAuNDYyLDEuNDM1LTEuNjU1LDEuNzEzLTIuNjYyLDAuNTkxYy0yLjc3LTMuMDkxLTUuMzU4LTYuMzEtNy41NDktOS43OCAgICBjLTEuMDUyLTEuNjY3LTEuOTIxLTMuNDMtMi43OTctNS4xOTljLTAuNjY3LTEuMzUzLTMuMTk0LTMuMTY0LTMuMTA5LTEuNjU5YzAuMDU1LDAuOTcsMC42NTUsMi43MjQsMi4zMjYsNS44MDUgICAgYzEuNjU5LDMuMDU0LDMuMDk3LDYuMjM5LDQuOTczLDkuMTU5YzQuMTQsNi40NDQsOS4zMjQsMTIuMjQsMTUuNDUsMTcuMjgzYzIxLjQ2NiwxNy42NjYsNTcuNTg5LDI3LjQwNSw5NS44NTgsMjQuODU5ICAgIGMxLjUwNS0wLjEwMSwxLjY3NywwLjQzOCwwLjMyMSwxLjA5NmMtNy4xNjQsMy40NzYtMTYuOTM4LDUuMTQ0LTIzLjg3NSw1Ljc4Yy0xLjUwMiwwLjEzOC0xLjYzNywwLjc4LTAuMjMyLDEuMzMxICAgIGM2LjE3NSwyLjQxMSwxNC43ODMsMy4yNjUsMjMuNTcxLTAuMjA1YzIuOTEtMS4xMzIsNS4wNTUtMy4xMTUsNy4yNzctNS4wODNjMy4zNi0yLjk4LDQuMjQ3LTEuNjU5LDcuMjE1LTEuMDM1ICAgIGM0LjgxOSwxLjAwNCw5LjQyOCwyLjI4LDEzLjczNiwzLjg5NmMxOC4yNDEsNi44ODgsMzAuMTk2LDIwLjAyOCwzNS44NTcsMzYuMTY2YzYuMDEsMTcuMTI4LDUuNDgzLDM3LjE2Myw3Ljk0NCw1NS44MTIgICAgYzAuODE0LDYuMTgyLDIuMzQ0LDExLjg1Miw0LjQ0MywxNy4xNjZjMC41NTQsMS40MDIsMC4xMjksMy4zMTgtMC45OTEsNC4zM2MtMS42ODYsMS41MjctMy4yOTksMy4wODItNC43NDMsNC43MDcgICAgYy0xLDEuMTI1LTEuODkxLDAuODkzLTIuMTIxLTAuNTk4Yy01LjU5LTM2LjM5OC0yNi41MjEtNjUuMzE4LTcyLjYwMi03MS4yMjFjLTI0LjEyOC0zLjA4OC01MC45ODUtMS41NzgtNzIuOTA0LTcuOTM1ICAgIGMtMTAuODc1LTMuMTU1LTIyLjk5LTcuNDM5LTI5LjA3Ni0xNC45ODhjLTUuOTE4LTcuMzQ0LTIuODctMTkuMjc1LTUuMDk4LTI4LjU2NWMtMC4zNTItMS40NjYtMC42NDMtMS4zODktMC42NjcsMC4xMTYgICAgYy0wLjA4NSw1LjQzMi0yLjE1NCwxMS4yNTItNC4wMzYsMTcuMTIxYy0wLjQ2MiwxLjQzNS0xLjY1NSwxLjcxMy0yLjY2MiwwLjU5Yy0yLjc2OS0zLjA5MS01LjM1OC02LjMxLTcuNTQ5LTkuNzggICAgYy0xLjA1My0xLjY2Ny0xLjkyMi0zLjQzLTIuNzk3LTUuMTk5Yy0wLjY2Ny0xLjM1My0zLjE5NS0zLjE2NC0zLjEwOS0xLjY1OWMwLjA1NSwwLjk3LDAuNjU1LDIuNzI0LDIuMzI1LDUuODA1ICAgIGMxLjY1OSwzLjA1NCwzLjA5Nyw2LjIzOSw0Ljk3Myw5LjE1OWM0LjE0LDYuNDQ0LDkuMzI0LDEyLjIzNywxNS40NSwxNy4yODNjMjEuNDY2LDE3LjY2Nyw1Ny41ODksMjcuNDA1LDk1Ljg1NywyNC44NiAgICBjMS41MDUtMC4xMDIsMTEuMzA0LDEuMjU4LDE0LjI3MiwxLjg4MWM0LjgxOSwxLjAwNCw5LjQyOCwyLjI4MSwxMy43MzYsMy44OTZjMTguMjQsNi44ODksMzAuMTkzLDIwLjAyNywzNS44NTcsMzYuMTY2ICAgIGM2LjAxLDE3LjEyNyw1LjQ4MywzNy4xNjQsNy45NDQsNTUuODA5YzIuNTAzLDE5LjAyOSwxMS43MjMsMzMuMzA1LDIzLjc4OCw0Ni44NDJjMS4wMDQsMS4xMjcsMC43NjUsMS40MjYtMC42MDMsMC43ODcgICAgYy01Ljk3Ni0yLjc5MS0xMy42MDUtNC41NDUtMjIuMzcyLTMuMTkxYy0xLjQ5LDAuMjI5LTEuNDU3LDAuNDQ1LDAuMDQ5LDAuNTIzYzE0LjgyNiwwLjc0MiwyMi4zOSwxMS45NzcsMjkuNTg0LDE5Ljc3ICAgIGMxLjY3MSwxLjgwNywzLjM2MywzLjYsNS4yNDIsNS4yNTRjMi45NDcsMi41OTgsMi4xODUsOS4wODgsMi42MTMsMTMuMDk4YzAuNDY1LDQuMzczLDAuODQ4LDguNzc5LDEuMjI0LDEzLjE4OCAgICBjMS4wNDMsMzguNTk0LTMuNTEsNjQuMDQ5LTUuMTk2LDcyLjAwMmMtMC4zMTIsMS40NzUsMC41NjksMi4zMjIsMi4wMzgsMS45NzdjNS42OC0xLjM0Miw4LjAwOC0wLjgxMSwxNC43OTUsMC42ODkgICAgYzcuNzUxLDEuNzEzLDY0LjU4OCwyLjgwOSw2Mi4wMDUsMHMtMTQuODI2LTg0LjI3OS0xMy44NzQtODYuODNjMy42ODEtOS44NDQsNC43NTgtMjAuMzE4LDQuMjItMzEuMDIgICAgYy0wLjA3Ni0xLjUwNiwwLjU0NS0zLjcxOSwxLjQ4Ny00Ljg5M2M0LjUzOC01LjY0NiwxMC40NjgtMTAuNjcyLDE5LjkzLTEyLjUwNGMxLjQ4LTAuMjg3LDEuNDcyLTAuNDg2LTAuMDM3LTAuNDc1ICAgIGMtNy45OTksMC4wNjQtMTQuNzMzLDIuMDQ3LTIwLjE2NSw0Ljc4OWMtMS4zNDcsMC42OC0yLjQ4NCwwLjcxMy0yLjU5NS0wLjAxOGMtMC4xMS0wLjczMiwwLjQ0Ni0yLjM1NCwxLjIzMi0zLjYzOSAgICBjOC40MjItMTMuNzgzLDEzLjgzOC0yOC4wNTEsMTIuNjUzLTQ1LjE1Yy0wLjU5NC04LjYwNS0xLjkyNS0xNy4zOTMtMi45MjItMjYuMTExYy0wLjE3Mi0xLjUsMC42NDYtMy40OTIsMS44MDItNC40NTkgICAgYzIuNDI0LTIuMDI3LDQuODA4LTQuMDY4LDcuMTctNi4xMjNjMS4xMzktMC45ODgsMS4wMzctMS4xMjMtMC4zMDMtMC40MjhjLTEuNzExLDAuODg3LTMuNTQxLDEuNjQzLTUuNDM4LDIuMzI4ICAgIGMtMS40MTcsMC41MTYtMS41MzYsMC4yNDYtMC4xNzUtMC40YzAuNjg2LTAuMzI0LDEuMzk4LTAuNjMxLDIuMTQzLTAuOTE0YzEuNDEtMC41MzcsMS4zNzMtMC43NTQtMC4xMTctMC41MTYgICAgYy0xLjE0NCwwLjE4NC0yLjI1NSwwLjQxOC0zLjMzMiwwLjY4NmMtMS40NjMsMC4zNjctMi43MTQtMC40NjUtMi43OTctMS45NzNjLTAuMzQ2LTYuMzEyLTAuMjUxLTEyLjUyNywwLjcyLTE4LjU0MSAgICBjMi43MjMtMTYuODg1LDEyLjkyOC0zMS44NjcsMzEuMzA0LTQxLjcyOWM0LjM0Mi0yLjMxNiw5LjA4Mi00LjM1LDE0LjExMi02LjE1YzMuMDk3LTEuMTE1LDMuNzc5LTIuNTY4LDguMDY5LTAuMTg4ICAgIGMyLjgzMywxLjU3LDUuNTkxLDMuMTcsOC45OTYsMy44MDFjMTAuMzg2LDEuOTY3LDE5LjYzMy0wLjM3MSwyNS44MzYtMy44MzRDNDUxLjY1NywyODkuNzg1LDQ1MS40NDYsMjg5LjIwMSw0NDkuOTQxLDI4OS4zMTF6ICAgICBNMjYyLjUxNiwzODcuMzMyYzEuMzYxLTMuNzI3LDQuMzk0LTcuNTIsNi40NjItMTEuMjUyYzAuNDQxLTAuNzk5LDAuODY5LTEuNTk4LDEuMjkyLTIuMzkzYzAuNzA0LTEuMzI4LDEuODU3LTEuMzM0LDIuNjI4LTAuMDQxICAgIGMzLjgxOSw2LjM4NSw4LjQ2MSwxMi4zMiwxMy42MjYsMTguMTE5YzEuMDAzLDEuMTI3LDAuNzYyLDEuNDI2LTAuNjAzLDAuNzg5Yy01LjcyNS0yLjY2NC0xMi45NzgtNC4zNTctMjEuMjg1LTMuMzAxICAgIGMtMS40OTcsMC4xODktMi42MjUtMC4xMDUtMi40Ny0wLjc1NkMyNjIuMjU5LDM4OC4xMTEsMjYyLjM3MiwzODcuNzI3LDI2Mi41MTYsMzg3LjMzMnogTTMwMS42ODEsNDUwLjM5OCAgICBjLTguMjEtMTAuNjMxLTIxLjY1Mi0xNy42MTctMjkuNTc1LTI4LjUxNmMtNC44MDQtNi41OTYtNy4zNzUtMTQuNDktOS4wNTEtMjIuNzRjLTAuNDI5LTIuMDktMS4wNjItNC4yNDQtMS4yMTUtNi41MzkgICAgYy0wLjEwMS0xLjUwNiwxLjMtMi43NDQsMi44MDMtMi42MTVjMTQuMTMxLDEuMjA1LDIxLjUyNywxMi4wNTksMjguNTUsMTkuNjY2YzEuNjcxLDEuODA1LDMuMzYzLDMuNTk4LDUuMjQyLDUuMjU0ICAgIGMyLjk0MywyLjU5OCwyLjE4NSw5LjA4OCwyLjYxMywxMy4wOThjMC43NzEsNy4yNTIsMS4zMzQsMTQuNTg2LDEuOTg1LDIxLjg4NUMzMDMuMTYyLDQ1MS4zOTYsMzAyLjYwMiw0NTEuNTkyLDMwMS42ODEsNDUwLjM5OHogICAgIE0zNDcuMTA0LDM2NS44MDdjMC4xMDEtMC4yNCwwLjIwOC0wLjE4LDAuMjAyLDAuMTMzYy0wLjAwMywwLjMxMi0wLjExOSwwLjUwMi0wLjIxOCwwLjQzNCAgICBDMzQ2Ljk5MywzNjYuMzAzLDM0Ny4wMDMsMzY2LjA0OSwzNDcuMTA0LDM2NS44MDd6IE0zNDkuMjQyLDM5Mi43MTVjLTAuMDU1LDYuNzE5LTAuNzkyLDEzLjMwNS0zLjAyMywxOS40MDggICAgYy0wLjUxNywxLjQxOC0xLjI5MSwxLjMzOC0xLjYxNS0wLjEzNWMtMC4zOTItMS43NzctMC43NzEtMy41NTUtMS4xMzktNS4zMzJjLTAuODA4LTMuOTQ3LTMuNTA3LTkuOS0xLjQ5My0xMy4yNzEgICAgYzEuMjg4LTIuMTQ4LDIuMzU0LTQuMzcxLDMuMzk0LTYuNjAyYzAuNDA0LTAuODY5LDAuODA1LTEuNzY2LDEuMjA5LTIuNjhjMC42MDUtMS4zODEsMS43MzgtMS40NDUsMi4xNzMsMCAgICBDMzQ5LjY0NCwzODcuMDc4LDM0OS4yNywzODkuOTgyLDM0OS4yNDIsMzkyLjcxNXoiIGZpbGw9IiM5MURDNUEiLz4KCQk8Y2lyY2xlIGN4PSIzMTYuOTkzIiBjeT0iMTQ4LjA5OCIgcj0iMTkuODYzIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iMjcxLjA5MyIgY3k9IjE1Ny4yNzgiIHI9IjE5Ljg2MiIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjE3My4yMTMiIGN5PSIxNjguODMyIiByPSIxOS44NjMiIGZpbGw9IiM5MURDNUEiLz4KCQk8Y2lyY2xlIGN4PSIxOTEuNTczIiBjeT0iMjExLjY3MiIgcj0iMTkuODYyIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iMjI2LjI5NSIgY3k9IjE0My4yMzUiIHI9IjE5Ljg2MiIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjM3My4wOTIiIGN5PSIxMzkuMzMxIiByPSIxOS44NjMiIGZpbGw9IiM5MURDNUEiLz4KCQk8Y2lyY2xlIGN4PSIzMzEuNjE3IiBjeT0iMTAxLjk1MyIgcj0iMTkuODYzIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iMzkxLjc2NSIgY3k9IjIyOS42MzciIHI9IjE5Ljg2MyIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjM3MS45MDEiIGN5PSIyNjcuNzc0IiByPSIxOS44NjMiIGZpbGw9IiM5MURDNUEiLz4KCQk8Y2lyY2xlIGN4PSIxNzYuNTQ1IiBjeT0iMTIyLjUyOCIgcj0iMTkuODYyIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iMTE5LjQyNCIgY3k9IjE1OC40NzQiIHI9IjE5Ljg2MiIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjEzOS4yODciIGN5PSIyMDQuMzE2IiByPSIxOS44NjMiIGZpbGw9IiM5MURDNUEiLz4KCQk8Y2lyY2xlIGN4PSIxMjYuNTY2IiBjeT0iMTA5Ljk5MSIgcj0iMTkuODYzIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iMzc5LjIxMiIgY3k9Ijg4LjkyNyIgcj0iMTkuODYzIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iNDUwLjYxNCIgY3k9IjIwNy4wNTIiIHI9IjE5Ljg2MyIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjQzMi4yNTQiIGN5PSIyNDkuODkyIiByPSIxOS44NjIiIGZpbGw9IiM5MURDNUEiLz4KCQk8Y2lyY2xlIGN4PSI0OTUuNDkyIiBjeT0iMTcxLjg5MiIgcj0iMTkuODYzIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iNDkxLjgzOSIgY3k9IjIyMy45OTUiIHI9IjE5Ljg2MyIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9Ijc4LjY4OSIgY3k9IjMxMC43NzYiIHI9IjE5Ljg2MiIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjM4Ljk2OCIgY3k9IjI3NS45NiIgcj0iMTkuODYzIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iMzExLjEyNyIgY3k9IjMyNC4xNDMiIHI9IjE5Ljg2MyIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjUzMC4xNzQiIGN5PSIxMzUuNTUyIiByPSIxOS44NjIiIGZpbGw9IiM5MURDNUEiLz4KCQk8Y2lyY2xlIGN4PSI1MzkuNDU4IiBjeT0iMTg0LjEzMiIgcj0iMTkuODYyIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iNDA4LjU2NiIgY3k9IjMzMC42MzYiIHI9IjE5Ljg2MiIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjM2NS4yMjIiIGN5PSIzOS43MjUiIHI9IjE5Ljg2MyIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjQ1OS43MzYiIGN5PSIzMjEuMDgzIiByPSIxOS44NjIiIGZpbGw9IiM5MURDNUEiLz4KCQk8Y2lyY2xlIGN4PSI1MDYuMTc1IiBjeT0iMjkwLjY5NyIgcj0iMTkuODYyIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iNTQ1Ljg5OSIgY3k9IjI1OC42NzciIHI9IjE5Ljg2MyIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjEwMS4zODkiIGN5PSI2Ni44MzYiIHI9IjE5Ljg2MiIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjIxOS4zMjciIGN5PSI0Mi4zNTYiIHI9IjE5Ljg2MyIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjI4NC44OTEiIGN5PSIxOS44NjIiIHI9IjE5Ljg2MiIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjM1Ny42IiBjeT0iMTgyLjA0MiIgcj0iMTkuODYzIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iMjExLjYyMiIgY3k9IjI3OC4xNTQiIHI9IjE5Ljg2MiIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjEwNS45NDgiIGN5PSIyNTguNjc3IiByPSIxOS44NjMiIGZpbGw9IiM5MURDNUEiLz4KCQk8Y2lyY2xlIGN4PSIxNDkuNDg2IiBjeT0iMjcyLjgxNCIgcj0iMTkuODYyIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iMTg5LjIxIiBjeT0iMzQyLjg3NiIgcj0iMTkuODYyIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iMTMzLjQ4OCIgY3k9IjMzOC45NDQiIHI9IjE5Ljg2MiIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjUwLjQ4NSIgY3k9IjIxOS4yOTIiIHI9IjE5Ljg2MyIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9Ijc2LjQ2OCIgY3k9IjE2My4wOTIiIHI9IjE5Ljg2MyIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjMwLjYyMyIgY3k9IjE3NC40MiIgcj0iMTkuODYzIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iNzkuNTI4IiBjeT0iMTE1Ljc5NiIgcj0iMTkuODYyIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iMjE5LjMyNyIgY3k9IjkwLjEyOSIgcj0iMTkuODYzIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iMzE5LjM3NyIgY3k9IjU4LjM4MiIgcj0iMTkuODYzIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iNDI1LjM2OSIgY3k9IjEwMy43MjEiIHI9IjE5Ljg2MyIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjQyMi4zMSIgY3k9IjE0OS42MjIiIHI9IjE5Ljg2MiIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjQ2OS41MTMiIGN5PSI3OC4yNDQiIHI9IjE5Ljg2MyIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjUxOS41OTkiIGN5PSI5MC4xMjkiIHI9IjE5Ljg2MyIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjQxNy43NDciIGN5PSI1My40NjQiIHI9IjE5Ljg2MyIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjI1OS4wNTIiIGN5PSIyMDcuMzc2IiByPSIxOS44NjIiIGZpbGw9IiM5MURDNUEiLz4KCQk8Y2lyY2xlIGN4PSIyMTkuMzI3IiBjeT0iMzg0LjUzOCIgcj0iMTkuODYyIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iMjY1LjAzMSIgY3k9IjYyLjIxNiIgcj0iMTkuODYzIiBmaWxsPSIjOTFEQzVBIi8+CgkJPGNpcmNsZSBjeD0iMjc0LjIxMSIgY3k9IjEwOC4xMTYiIHI9IjE5Ljg2MiIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjE2OS4zNDgiIGN5PSI3Ny41MTYiIHI9IjE5Ljg2MyIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjE0Ni40MjYiIGN5PSIzMy42MDUiIHI9IjE5Ljg2MyIgZmlsbD0iIzkxREM1QSIvPgoJCTxjaXJjbGUgY3g9IjMxMS4xMjciIGN5PSIyNDMuMjkxIiByPSIxOS44NjMiIGZpbGw9IiM5MURDNUEiLz4KCQk8Y2lyY2xlIGN4PSIzMDguMDY3IiBjeT0iMTk3LjM5MSIgcj0iMTkuODYzIiBmaWxsPSIjOTFEQzVBIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg=="/>
            Soyağacı Görselleşitrme
        </a>
        <a onclick="trackingEvent('Soyagaci','click','Resim-Ornek')" id="ornek" class="py-2" href="#">
            Örnek
        </a>
    </div>
</nav>
<div class="position-relative overflow-hidden text-center bg-light">
    <div class="col-md-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">SOY AĞACI GÖRSELLEŞTİRME</h1>
        <p class="lead font-weight-normal">E-devletten aldığınız soy ağacını buraya kopyalayın. Sizin yerinize
            görselleştirelim :)</p>
        <a class="btn btn-outline-secondary" target="_blank" href="https://www.turkiye.gov.tr/nvi-alt-15.02.2018ust-soy-bilgisi-sorgulama">E-Devletten
            Soyağacı Al</a>
        <a class="btn btn-outline-secondary" href="#chart_div">Soyağacı Görselleştir</a>
    </div>
</div>

<?php if(!empty($asd)) { ?>
    <div id="chart_div"></div>
    <div class="container ">
        <button id="btnShow" onclick="trackingEvent('Soyagaci','click','Resim-Goster')" class="btn btn-outline-secondary btn-lg my-5">
            Resim Olarak Göster
        </button>
    </div>
<?php } ?>
<div class="container my-5">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <div class="col-md-12 col-xs-12">
        <h1>NASIL KULLANILIR</h1>
        <p>E-devlette soy ağacı listesini gördüğünüz sayfada CTRL + A tuşlarına basıp bütün metni CTRL + C ile
            kopyalarak aşağıdaki alana CRTL + V yapıştırınız. Daha sonra Göster butonuna tıklayarak soy ağacınızı
            göreselleştirebilirsiniz.</p>
    </div>
    <!-- soyagaci -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-1414667239698934"
         data-ad-slot="1027181805"
         data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    <form method="post">
        <div class="input-group">
            <textarea name="data" style="height: 500px;margin: 10px 0" class="form-control" aria-label="With textarea"></textarea>
        </div>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- soyagaci -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-1414667239698934"
             data-ad-slot="1027181805"
             data-ad-format="auto"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <button onclick="trackingEvent('Soyagaci','click','Olustur')" class="btn btn-primary btn-lg" style="margin-top: 10px;width: 100%">
            Göster
        </button>
    </form>
</div>

<footer class="container py-5">
    <div class="row">
        <div class="col-12 col-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
            </svg>
            <small class="d-block mb-3 text-muted"><a href="https://orveg.com/">orveg.com</a> &copy; 2017-2018 | Bu çalışan kod tamamen açık kaynak kodlu bir yazılımcıktır. Kodları <a href="https://github.com/orveg/soyagaci-gorsellestirme">buradan</a>  inceleyebilirsiniz.</small>
        </div>

    </div>
</footer>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Soy Ağacı</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="trackingEvent('Soyagaci','click','Resim-Kapat')" class="btn btn-secondary" data-dismiss="modal">
                    Kapat
                </button>
                <button id="btnSave" onclick="trackingEvent('Soyagaci','click','Resim-Kaydet')" type="button" class="btn btn-primary">
                    Kaydet
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Soy Ağacı</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="/soy.png">
            </div>
            <div class="modal-footer">
                <button type="button" onclick="trackingEvent('Soyagaci','click','Resim-Ornek-Kapat')" class="btn btn-secondary" data-dismiss="modal">
                    Kapat
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
