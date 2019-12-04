<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @font-face {
            font-family: myFont;
            src: url(../font/cordia.ttf);
        }
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #FAFAFA;
            font-size: 21px;
            font-weight: 100;
            font-family: myFont;
        }
        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        .page {
            width: 210mm;
            /* min-height: 297mm; */
            padding-top: 10mm;
            padding-left: 20mm;
            padding-right: 10mm;
            padding-bottom: 10mm;
            margin: 10mm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .A4{
            background: white;
            width: 21cm;
            height: 29.7cm;
            display: block;
            margin: 10 auto;
            padding: 50px 25px;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
            /* overflow-y: scroll; */
            box-sizing: border-box;
            font-size: 17pt;
        }
        .subpage {
            padding: 0.5cm;
            /* border: 5px red solid; */
            height: 277mm;
            /* outline: 1cm #FFEAEA solid; */
        }
        .form{
            position: absolute;
            z-index: -1;
        }

        .left-top{
            vertical-align: top;
            text-align: left;
        }
        .right{
            text-align: right;
        }
        .normal-line{
            line-height: 0.6cm;
        }
        .short-line{
            line-height: 0.3cm;
        }

        /* Text Box Start*/

        .absolute {
            position: absolute;
            font-family: myFont;
        }
        .transparent{
            background: transparent;
            font-family: myFont;
            font-size: 21px;
            margin-top: -3px;
            /* border: 0; */
        }
        .text1 {
            position: absolute;
            /* padding-inline-start : 100px */
            /* padding-top: 50px; */
            /* margin-left: 20px; */
        }
        #print_helper {
            /* display: none; */
        }

        /* Text Box End */

        p.line {border-top: 2px solid black;}
        
        @page {
            size: A4;
            margin: 0;
            /* padding: 10px; */
        }
        @media print {
            body {
                width: 210mm;
                height: 297mm;
            }
            .page {
                display: block;
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                /* min-height: initial; */
                box-shadow: initial;
                background: initial;
                page-break-after: auto;
                /* page-break-after:auto;
                position:relative;
                display:block; */
               
            }
            .page-break {
                display: block;
                page-break-before: always;
            }
            size: A4 portrait;

            .A4 {
                box-shadow: none;
                margin: 0;
                width: auto;
                height: auto;
            }
            
            
            #print_helper { 
                display: block;
                overflow: visible;
                font-family: myFont;
                white-space: pre;
                white-space: pre-wrap;
                page-break-after: auto;
                /* margin-top:0.5in; */
            }
            #the_textarea {
                display: none;
            }
            .transparent{
                border: 0;
            }
        }
    </style>
    
</head>
<body>

<div class="book">
    <div class="page">
        <div class="subpage">
            <!-- <div class="form"> -->
                <table style="width:100%;border: 0px solid black" align="left">
                    <tr>
                        <td class="left-top" align="left" style="width:40%">
                            <br><img src="../assets/circle.png">&nbsp;&nbsp;(๗)<br>คำแถลงขอส่งหมายและปิดหมาย
                        </td>
                        <td style="width:20%" align="top"><img src="../assets/logo.png"></td>
                        <td style="width:40%" align="right">
                            <br><br>
                            <div>คดีหมายเลขดำที่_<a class="absolute"><input class="transparent" type="text" id="text1" name="text1" size="4"></a>_________/๒๕<a class="absolute"><input class="transparent" type="text" id="text2" name="text2" size="1"></a>___</div>
                            คดีหมายเลขแดงที่_<a class="absolute"><input class="transparent" type="text" id="text3" name="text3" size="4"></a>_________/๒๕<a class="absolute"><input class="transparent" type="text" id="text4" name="text4" size="1"></a>___
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="right">
                            ศาล_<a class="absolute"><input class="transparent" type="text" id="text5" name="text5" size="28"></a>________________________________<br>
                            วันที่<a class="absolute"><input class="transparent" type="text" id="text6" name="text6" size="1"></a>_____เดือน<a class="absolute"><input class="transparent" type="text" id="text8" name="text8" size="8"></a>_____________พุทธศัราช ๒๕<a class="absolute"><input class="transparent" type="text" id="text9" name="text9" size="1"></a>___<br>
                            ความ_<a class="absolute"><input class="transparent" type="text" id="text10" name="text10" size="26"></a>_______________________________<br><br>
                        </td>
                    </tr>
                </table>
                <div></div>
                <p><img src="../assets/plan_def.png">
                <a class="absolute"><textarea style="margin-left:-550px;margin-top:1px;line-height:1.2;font-size: 21px;font-family: myFont;" rows="2" cols="68" class="transparent" id="text11" name="text11"></textarea></a>
                <a class="absolute"><textarea style="margin-left:-550px;margin-top:100px;line-height:1.2;font-size: 21px;font-family: myFont;" rows="2" cols="68" class="transparent" id="text12" name="text12"></textarea></a>
                <p style="text-indent: 2.5em;">ข้าพเจ้า_<a class="absolute" style="margin-left:-55px"><input class="transparent" type="text" id="text18" name="text18" size="66"></a>_____________________________________________________________________<br>
                เลขประจำตัวประชาชน <a class="absolute" style="margin-left:-55px;margin-top:-2px"><input class="transparent" type="text" id="text19" name="text19" size="29"></a>---- <br>
                เชื้อชาติ__________________สัญชาติ__________________อาชีพ____________________________<br>
                เกิดวันที่____เดือน__________________พ.ศ. __________อายุ_____ปี อยู่บ้านเลขที่______________<br>
                หมู่ที่ __________ถนน____________________________ตรอก/ซอย___________________________<br>
                ตำบล/แขวง______________________อำเภอ/เขต___________________จังหวัด________________<br>
                รหัสไปรษณีย์_________________โทรศัพท์______________________โทรสาร___________________<br>
                ไปรษณีย์อิเล็กทรอนิกส์ ______________________________________________________________<br>
                ขอยื่นคำร้อง / คำแถลง / คำขอ มีข้อความตามที่จะกล่าวต่อไปนี้<br>
                </p>
                <p style="text-indent: 2.5em;">
                ข้อ ๑. _______________________________________________________________________<br>
                ____________________________________________________________________________________<br>
                ____________________________________________________________________________________<br>
                ____________________________________________________________________________________<br>
                </p>
                <p class="line" style="margin-top:-15px;width:90%"></p>
                <p><u>หมายเหตุ </u> ข้าพเจ้ารอฟังคำสั่งอยู่ ถ้าไม่รอให้ถือว่าทราบแล้ว</p>
                <p class="right">__________________________________________ผู้ร้อง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>


            <!-- </div> -->
        </div>    
    </div>

    <div class="page">
        <div class="subpage">

        </div>
    </div>
    
</div>

</body>

<script>

// window.print();

</script>

</html>