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
        header,
        footer {
            /* position: relative; */
            left: 0;
            right: 0;
            /* background-color: #ccc; */
            /* padding-right: 1.5cm;
            padding-left: 1.5cm; */
        }
        header {
            top: 0;
            font-family: myFont;
            /* padding-top: 5mm;
            padding-bottom: 3mm; */
        }
        footer {
            bottom: 0;
            color: #000;
            padding-top: 3mm;
            padding-bottom: 5mm;
        }
        .form{
            position: absolute;
            z-index: -1;
        }
        .parag{
            text-indent: 2.5em;
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
        .text-center{
            text-align: center;
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
                page-break-before: always;
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
            header,
            footer {
                /* position: relative; */
                left: 0;
                right: 0;
                top :0;
                /* padding-right: 1.5cm;
                padding-left: 1.5cm; */
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
                            <br>(แบบ ผบ. ๑)<br>คำฟ้องคดีผู้บริโภค
                        </td>
                        <td style="width:20%" align="top"><img src="../assets/logo.png"></td>
                        <td style="width:40%" align="right">
                            <br><br>
                            <div>คดีหมายเลขดำที่...<a class="absolute"><input class="transparent text-center" type="text" id="text1" name="text1" size="4"></a>…………/๒๕<a class="absolute"><input class="transparent" type="text" id="text2" name="text2" size="1"></a>……</div>
                            คดีหมายเลขแดงที่...<a class="absolute"><input class="transparent text-center" type="text" id="text3" name="text3" size="4"></a>…………/๒๕<a class="absolute"><input class="transparent" type="text" id="text4" name="text4" size="1"></a>……
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="right">
                            ศาล...<a class="absolute"><input class="transparent text-center" type="text" id="text5" name="text5" size="28"></a>…………………………………………&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                            วันที่<a class="absolute"><input class="transparent text-center" type="text" id="text6" name="text6" size="1"></a>.........เดือน<a class="absolute"><input class="transparent text-center" type="text" id="text7" name="text7" size="8"></a>………………พุทธศัราช ๒๕<a class="absolute"><input class="transparent" type="text" id="text8" name="text8" size="1"></a>.........&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                            ความแพ่ง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                        </td>
                    </tr>
                </table>
                <div></div>
                <p><img src="../assets/plan_def_dot.png">
                <a class="absolute"><textarea style="margin-left:-500px;margin-top:1px;line-height:1.2;font-size: 21px;font-family: myFont;" rows="2" cols="62" class="transparent" id="text9" name="text9"></textarea></a>
                <a class="absolute"><textarea style="margin-left:-500px;margin-top:85px;line-height:1.2;font-size: 21px;font-family: myFont;" rows="2" cols="62" class="transparent" id="text10" name="text10"></textarea></a>
                <p>
                    เรื่อง…<a class="absolute"><input class="transparent text-center" type="text" id="text11" name="text11" size="75"></a>…………………………………………………………………………………………………………<br>
                    จำนวนทุนทรัพย์<a class="absolute"><input class="transparent text-center" type="text" id="text12" name="text12" size="34"></a>…………………………………………………บาท<a class="absolute"><input class="transparent text-center" type="text" id="text13" name="text13" size="19"></a>……………………………..สตางค์<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ข้าพเจ้า………………………………………………………………………………โจทก์<br>
                    เชื้อชาติ…………………...สัญชาติ…………………อาชีพ……………………………..อายุ…………..ปี<br>
                    เลขประจำตัวประชาชน       อยู่บ้านเลขที่…………………………<br>
                    หมู่ที่………… ถนน…………………….ตรอก/ซอย……………………..ใกล้เคียง………………………<br>
                    ตำบล/แขวง……………………….. อำเภอ/เขต……………………. จังหวัด…………………………….<br>
                    โทรศัพท์………………โทรสาร………………จดหมายอิเล็กทรอนิกส์……………………………………<br>
                    สถานที่ติดต่อ………………………………………………………………………………………………….<br>
                    โทรศัพท์…………………โทรสาร………………จดหมายอิเล็กทรอนิกส์……………………………………<br>
                    ขอยื่นฟ้อง………………………………………………………………………………………….…………<br>
                    ………………………………………………………………..........................................................จำเลย<br>
                    เชื้อชาติ…………………….….สัญชาติ……………………………อาชีพ……………………………..……<br>
                    อยู่บ้านเลขที่………….…………….…….…หมู่……………………………...…ซอย………………………<br>
                    ตำบล/แขวง……….…….…….…………….………………อำเภอ……….…….…….……………………<br>
                    จังหวัด………………………………………โทรศัพท์……………………โทรสาร…………………………<br>
                    จดหมายอิเล็กทรอนิกส์……………………………………………มีข้อความตามที่จะกล่าวต่อไปนี้
                </p>


            <!-- </div> -->
        </div>    
    </div>
    
    <?php
        for($i=2;$i<32;$i++){
            $mod = $i % 2;
    ?>

        <div class="page">
            <div class="subpage">
            <header>
                <table style="width:100%;border: 0px solid black">
                    <tr style="color:#85929E ">
                        <td style="width:33%" align="left"></td>
                        <td style="width:33%"></td>
                        <td style="width:33%" align="right"><?php echo $i ?></td>
                    </tr>
                </table>
            </header>
            <?php
                if($i==2){
                    ?> <p><a class="absolute"><textarea style="margin-top:-16px;margin-left:-5px;line-height:2.3;font-size: 22px;font-family: myFont;" rows="18" cols="84" class="transparent" id="textarea<?php echo $i ?>" name="textarea<?php echo $i ?>"></textarea></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อ ๑. ……………………………………………………………………………………………………</p> <?php
                }else{
                    ?> <p><a class="absolute"><textarea style="margin-top:-16px;margin-left:-5px;line-height:2.3;font-size: 22px;font-family: myFont;" rows="18" cols="84" class="transparent" id="textarea<?php echo $i ?>" name="textarea<?php echo $i ?>"></textarea></a>…………………..…………………………………………………………………………………………………</p> <?php
                }
            ?>
                <p>…………………..…………………………………………………………………………………………………</p>
                <p>…………………..…………………………………………………………………………………………………</p>
                <p>…………………..…………………………………………………………………………………………………</p>
                <p>…………………..…………………………………………………………………………………………………</p>
                <p>…………………..…………………………………………………………………………………………………</p>
                <p>…………………..…………………………………………………………………………………………………</p>
                <p>…………………..…………………………………………………………………………………………………</p>
                <p>…………………..…………………………………………………………………………………………………</p>
                <p>…………………..…………………………………………………………………………………………………</p>
                <p>…………………..…………………………………………………………………………………………………</p>
                <p>…………………..…………………………………………………………………………………………………</p>
                <p>…………………..…………………………………………………………………………………………………</p>
                <p>…………………..…………………………………………………………………………………………………</p>
                <p>…………………..…………………………………………………………………………………………………</p>
                <p>…………………..…………………………………………………………………………………………………</p>
                <p>…………………..…………………………………………………………………………………………………</p>
                <p>…………………..…………………………………………………………………………………………………</p>
            </div>
        </div>
    <?php
        }
    ?>
</div>

</body>

<script>

// window.print();

</script>

</html>