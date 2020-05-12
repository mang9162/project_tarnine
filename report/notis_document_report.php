<?php
session_start();
ob_start();

include("../connect/database.php");
$conDB = new db_conn();

$doc_file_id = $conDB->sqlEscapestr($_GET['doc_file_id']);

$strSQL = "SELECT * FROM `document_filedoc` WHERE `doc_file_id` = '$doc_file_id' ORDER BY `doc_file_date` DESC";
$objQuery = $conDB->sqlQuery($strSQL);
$objResult = mysqli_fetch_assoc($objQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @font-face {
        font-family: 'angsa';
        src: url(font/angsa.ttf);
        }
        @font-face {
        font-family: 'angsab';
        src: url(font/angsab.ttf);
        }
        b{
            font-family:'angsab';
        }
        body {
            background: rgb(204,204,204); 
            font-family:'angsa';
            font-size: 16pt;
        }
        page {
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
            
        }
        page[size="A4"] {  
            width: 21cm;
            height: 29.7cm; 
        }
        @media print {
            body, page {
                margin: 0;
                box-shadow: 0;
            }
        }
    </style>
</head>
<body>
    <page id="data" size="A4">
        <div style="padding: 40px 100px 100px 100px;">
        <table>
            <tr>
                <td width="120"><img src="../dist/img/profile/12795380_443460995864771_2927513966717694732_n.png" alt="" width="100"/></td>
                <td vaglin="top">
                <b>บริษัท ธุรกิจเนติอินเตอร์ลอว์ จำกัด</b></br>
                <b>16/9 ถ.เพชรเกษม ต.หัวหิน อ. หัวหิน จ.ประจวบคีรีขันธ์ 77110</b></br>
                โทร. 089-744-1721   fax 032-511-305
                </td>
            </tr>
        </table>
        <?php echo $objResult['doc_file_text'];?></div>
    </page>

</body>

</html>