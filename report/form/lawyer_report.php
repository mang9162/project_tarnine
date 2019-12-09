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
            min-height: 297mm;
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
        .subpage {
            padding: 0.5cm;
            /* border: 5px red solid; */
            height: 277mm;
            /* outline: 1cm #FFEAEA solid; */
        }
        .form{
            position: absolute;
            /* top: 0;
            left: 0;
            bottom: 0;
            right: 0; */
            z-index: -1;
            /* overflow: hidden; */
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
        }

        /* Text Box End */
        
        @page {
            size: A4;
            margin: 0;
        }
        @media print {
            html, body {
                width: 210mm;
                height: 297mm;        
            }
            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
            .transparent{
                border: 0;
            }
        }
    </style>
</head>
<body>

<div class="book" id="div_id">
    <div class="page">
        <div class="subpage">
            <!-- <div class="form"> -->
                <table style="width:100%;border: 0px solid black" align="left">
                    <tr>
                        <td class="left-top" align="left" style="width:40%">
                            <br><img src="../assets/circle.png">&nbsp;&nbsp;(๙)<br>ใบแต่งทนายความ
                        </td>
                        <td style="width:20%" align="top"><img src="../assets/logo.png"></td>
                        <td style="width:40%" align="right">
                            <br><br>
                            <div>คดีหมายเลขดำที่_<a class="absolute"><input class="transparent text-center" type="text" id="text1" name="text1" size="4"></a>_________/๒๕<a class="absolute"><input class="transparent" type="text" id="text2" name="text2" size="1"></a>___</div>
                            คดีหมายเลขแดงที่_<a class="absolute"><input class="transparent text-center" type="text" id="text3" name="text3" size="4"></a>_________/๒๕<a class="absolute"><input class="transparent" type="text" id="text4" name="text4" size="1"></a>___
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="right">
                            ศาล_<a class="absolute"><input class="transparent text-center" type="text" id="text5" name="text5" size="28"></a>________________________________<br>
                            วันที่<a class="absolute"><input class="transparent text-center" type="text" id="text6" name="text6" size="1"></a>_____เดือน<a class="absolute"><input class="transparent text-center" type="text" id="text8" name="text8" size="8"></a>_____________พุทธศัราช ๒๕<a class="absolute"><input class="transparent" type="text" id="text9" name="text9" size="1"></a>___<br>
                            ความ_<a class="absolute"><input class="transparent text-center" type="text" id="text10" name="text10" size="26"></a>_______________________________<br>
                        </td>
                    </tr>
                </table>
                
                <p><img src="../assets/plan_def.png">
                <a class="absolute"><textarea style="margin-left:-550px;margin-top:1px;line-height:1.2;font-size: 21px;font-family: myFont;" rows="2" cols="68" class="transparent" id="text11" name="text11"></textarea></a>
                <a class="absolute"><textarea style="margin-left:-550px;margin-top:100px;line-height:1.2;font-size: 21px;font-family: myFont;" rows="2" cols="68" class="transparent" id="text12" name="text12"></textarea></a>
                <div class="normal-line">
                    <p style="text-indent: 2.5em;">ข้าพเจ้า_<a class="absolute" style="margin-left:-55px;margin-top:-5px"><input class="transparent text-center" type="text" id="text13" name="text13" size="68"></a>______________________________________________________________________</p>
                    <p>ขอแต่งตั้งให้_<a class="absolute"><input class="transparent text-center" style="margin-top:-7px" type="text" id="text14" name="text14" size="68"></a>__________________________________________________________________________</p>
                    <p><a class="absolute"><textarea style="margin-top:-13px;line-height:2;font-size: 21px;font-family: myFont;" rows="3" cols="85" class="transparent" id="text15" name="text15"></textarea></a>เป็นทนายความของข้าพเจ้าในคดีนี้ และให้มีอำนาจ *__________________________________________</p>
                    <p>_____________________________________________________________________________________</p>
                    <p>_____________________________________________________________________________________</p>
                    <p>ข้าพเจ้ายอมรับผิดชอบตามที่_<a class="absolute"><input class="transparent text-center" style="margin-top:-7px" type="text" id="text16" name="text16" size="56"></a>____________________________________________________________</p>
                    <p>ทนายความจะได้ดำเนินกระบวนพิจารณาต่อไปตามกฎหมาย</p>
                    <p>ขอรับรองว่าผู้แต่งทนายความได้ลงลายมือชื่อจริง_______________________________ผู้แต่งทนายความ</p>
                    <p style="text-indent: 15em;">(_<a class="absolute" style="margin-left:-318px;margin-top:-6px"><input class="transparent text-center" type="text" id="text17" name="text17" size="13"></a>_________________)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(พลิก)
                </div>
                ลงชื่อ________________________________________________________________________________<br>
                <u>หมายเหตุ</u> *ตามประมวลกฎหมายวิธีพิจารณาความแพ่งมาตรา ๖๒ ทนายความไม่มีอำนาจดำเนินกระบวน  
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พิจารณาใดไปในทางจำหน่ายสิทธิของคู่ความนั้น  เช่น การยอมรับตามที่คู่ความอีกฝ่ายหนึ่งเรียก
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ร้อง การถอนฟ้อง การประนีประนอมยอมความ การสละสิทธิหรือการใช้สิทธิในการอุทธรณ์หรือ
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ฎีกาหรือในการขอให้พิจารณาคดีใหม่ ถ้าจะมอบให้มีอำนาจดังกล่าวประการใดบ้าง ให้กรอกลง
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในช่องที่ว่าง ไว้ โดยระบุให้ชัดเจน (คำที่ไม่ใช้และช่องว่างที่เหลือให้ขีดเสีย)
                </p>
            <!-- </div> -->
        </div>    
    </div>
    <div class="page">
        <div class="subpage">
            <br><br><br>
            <p><center><u>คำรับเป็นทนายความ</u></center></p>
            <p style="text-indent: 2.5em;">ข้าพเจ้า_<a class="absolute" style="margin-left:-55px"><input class="transparent text-center" type="text" id="text18" name="text18" size="66"></a>_____________________________________________________________________<br>
            เลขประจำตัวประชาชน <a class="absolute" style="margin-left:-55px;margin-top:-2px"><input class="transparent" type="text" id="text19" name="text19" size="29"></a>---- <br>
            ใบอนุญาตให้เป็นทนายความเลขที่_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text20" name="text20" size="14"></a>___________________ได้รับอนุญาตให้ว่าความ_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text21" name="text21" size="9"></a>______________<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ที่อยู่ปัจจุบันเลขที่_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text22" name="text22" size="12"></a>_________________หมู่ที่_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text23" name="text23" size="4"></a>_________ถนน_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text24" name="text24" size="22"></a>__________________________<br>
            ตรอก/ซอย_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text25" name="text25" size="14"></a>__________________ตำบล/แขวง_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text26" name="text26" size="11"></a>________________อำเภอ/เขต_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text27" name="text27" size="14"></a>___________________<br>
            จังหวัด_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text28" name="text28" size="14"></a>___________________รหัสไปรษณีย์_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text29" name="text29" size="11"></a>________________โทรศัพท์_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text30" name="text30" size="14"></a>_____________________<br>
            โทรสาร_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text31" name="text31" size="14"></a>__________________ไปรษณีย์อิเล็กทรอนิกส์ _<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text32" name="text32" size="32"></a>_____________________________________<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                สำนักงานอยู่ที่_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text33" name="text33" size="11"></a>________________หมู่ที่_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text34" name="text34" size="4"></a>_________ถนน_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text35" name="text35" size="24"></a>_____________________________<br>
            ตรอก/ซอย_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text36" name="text36" size="14"></a>__________________ตำบล/แขวง_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text37" name="text37" size="11"></a>________________อำเภอ/เขต_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text38" name="text38" size="14"></a>___________________<br>
            จังหวัด_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text39" name="text39" size="14"></a>___________________รหัสไปรษณีย์_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text40" name="text40" size="11"></a>________________โทรศัพท์_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text41" name="text41" size="16"></a>_____________________<br>
            โทรสาร_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text42" name="text42" size="14"></a>__________________ไปรษณีย์อิเล็กทรอนิกส์ _<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text43" name="text43" size="32"></a>_____________________________________<br>
            ขอรับเป็นทนายของ_<a class="absolute" style="margin-left:-55px;"><input class="transparent text-center" type="text" id="text44" name="text44" size="62"></a>__________________________________________________________________<br>
            เพื่อดำเนินกระบวนพิจารณาต่อไปตามหน้าที่ในกฎหมาย<br>
                <p class="right">____________________________ทนายความ<br>
                    (_<a class="absolute"><input class="transparent text-center" type="text" id="text45" name="text45" size="11"></a>________________)
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </p>
            </p>
            <p><center><u>คำสั่ง</u></center></p>
            <p><a class="absolute"><textarea style="margin-top:-10px;line-height:2;font-size: 22px;font-family: myFont;" rows="2" cols="85" class="transparent" id="text46" name="text46"></textarea></a>_______________________________________________________________________________________</p>
            <p>_______________________________________________________________________________________</p>
            <p class="right">_<a class="absolute"><input class="transparent text-center" type="text" id="text47" name="text47" size="19"></a>________________________ผู้พิพากษา</p>
            
            
        </div>    
    </div>
</div>

</body>

<script>

// window.print();

var input = document.getElementById('div_id').getElementsByTagName('input');
for(i=0;i<input.length;i++){
    var text_id_html = input[i].getAttribute('id');
    //console.log(text_id_html);
    var text_id = document.getElementById(text_id_html);
    text_id.value = i;
}

var input_textarea = document.getElementById('div_id').getElementsByTagName('textarea');
// console.log(input_textarea[0]);
for(i=0;i<input_textarea.length;i++){
    var text_id_html = input_textarea[i].getAttribute('id');
    //console.log(text_id_html);
    var text_id = document.getElementById(text_id_html);
    text_id.value = i;
}

</script>

</html>