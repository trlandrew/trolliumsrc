<?php
  session_start();
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login");
    exit;
}
?>

<!DOCTYPE html>
<html>
  <head><?php include('../shortcuts/cssftr.php'); ?></head>
  <body>
    <?php include('../shortcuts/nav.php'); ?>
    <main class="py-4">
<div class="modal fade" id="colorPicker" tabindex="-1" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<table class="table-color text-center">
<tbody>
<tr>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(45)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(180,210,228); color: rgb(180,210,228); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Light blue"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1024)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(175,221,255); color: rgb(175,221,255); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pastel light blue"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(11)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(128,187,219); color: rgb(128,187,219); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pastel Blue"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(102)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(110,153,202); color: rgb(110,153,202); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Medium blue"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(23)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(13,105,172); color: rgb(13,105,172); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Bright blue"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1010)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(0,0,255); color: rgb(0,0,255); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Really blue"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1012)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(33,84,185); color: rgb(33,84,185); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Deep blue"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1011)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(0,32,96); color: rgb(0,32,96); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Navy blue"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1027)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(159,243,233); color: rgb(159,243,233); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pastel blue-green"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1018)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(18,238,212); color: rgb(18,238,212); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Teal"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(151)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(120,144,130); color: rgb(120,144,130); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Sand green"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1022)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(127,142,100); color: rgb(127,142,100); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Grime"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(135)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(116,134,157); color: rgb(116,134,157); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Sand blue"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1019)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(0,255,255); color: rgb(0,255,255); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Toothpaste"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1013)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(4,175,236); color: rgb(4,175,236); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Cyan"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(107)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(0,143,156); color: rgb(0,143,156); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Bright bluish green"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1028)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(204,255,204); color: rgb(204,255,204); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pastel green"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(29)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(161,196,140); color: rgb(161,196,140); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Medium green"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(119)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(164,189,71); color: rgb(164,189,71); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Br. yellowish green"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(37)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(75,151,75); color: rgb(75,151,75); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Bright green"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1021)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(58,125,21); color: rgb(58,125,21); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Camo"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1020)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(0,255,0); color: rgb(0,255,0); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Lime green"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(28)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(40,127,71); color: rgb(40,127,71); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Dark green"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(141)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(39,70,45); color: rgb(39,70,45); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Earth green"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1029)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(255,255,204); color: rgb(255,255,204); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pastel yellow"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(226)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(253,234,141); color: rgb(253,234,141); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Cool yellow"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1008)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(193,190,66); color: rgb(193,190,66); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Olive"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(24)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(245,205,48); color: rgb(245,205,48); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Bright yellow"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1017)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(255,175,0); color: rgb(255,175,0); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Deep orange"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1009)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(255,255,0); color: rgb(255,255,0); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="New Yeller"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1005)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(255,176,0); color: rgb(255,176,0); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Deep orange"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(105)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(226,155,64); color: rgb(226,155,64); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Br. yellowish orange"> </td>
 <td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1025)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(255,201,201); color: rgb(255,201,201); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pastel orange"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(125)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(234,184,146); color: rgb(234,184,146); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Light orange"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(101)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(218,134,122); color: rgb(218,134,122); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Medium red"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1007)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(163,75,75); color: rgb(163,75,75); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Dusty Rose"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1016)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(255,102,204); color: rgb(255,102,204); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pink"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1032)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(255,0,191); color: rgb(255,0,191); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Hot pink"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1004)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(255,0,0); color: rgb(255,0,0); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Really red"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(21)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(196,40,28); color: rgb(196,40,28); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Bright red"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(9)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(232,186,200); color: rgb(232,186,200); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Light reddish violet"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1026)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(177,167,255); color: rgb(177,167,255); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pastel violet"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1006)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(180,128,255); color: rgb(180,128,255); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Alder"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(153)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(149,121,119); color: rgb(149,121,119); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Sand red"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1023)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(140,91,159); color: rgb(140,91,159); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Lavender"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1015)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(170,0,170); color: rgb(170,0,170); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Magenta"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1031)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(98,37,209); color: rgb(98,37,209); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Royal purple"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(104)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(107,50,124); color: rgb(107,50,124); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Bright violet"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(5)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(215,197,154); color: rgb(215,197,154); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Brick yellow"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1030)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(255,204,153); color: rgb(255,204,153); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pastel brown"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(18)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(204,142,105); color: rgb(204,142,105); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Nougat"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(106)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(218,133,65); color: rgb(218,133,65); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Bright orange"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(38)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(160,95,53); color: rgb(160,95,53); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Dark orange"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1014)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(170,85,0); color: rgb(170,85,0); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="CGA brown"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(217)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(124,92,70); color: rgb(124,92,70); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Brown"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(192)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(105,64,40); color: rgb(105,64,40); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Reddish brown"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1001)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(248,248,248); color: rgb(248,248,248); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Institutional white"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(242,243,243); color: rgb(242,243,243); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="White"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(208)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(229,228,223); color: rgb(229,228,223); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Light stone grey"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1002)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(205,205,205); color: rgb(205,205,205); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Mid gray"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(194)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(163,162,165); color: rgb(163,162,165); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Medium stone grey"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(199)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(99,95,98); color: rgb(99,95,98); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Dark stone grey"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(26)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(27,42,53); color: rgb(27,42,53); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Black"> </td>
<td data-toggle="tooltip" data-placement="top" title="" onclick="sendColorRequest(1003)" class="color rounded-circle shadow-lg border m-1" style="background-color: rgb(17,17,17); color: rgb(17,17,17); display: inline-block; height: 45px; cursor: pointer; width: 45px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Really black"> </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="modal fade" id="colorPicker2" tabindex="-1" role="dialog" aria-labelledby="colorPickerLbl">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<h4 class="modal-title" id="colorPickerLbl">Choose color</h4>
</div>
<div class="modal-body">
<div class="back-color">
<h3 class="h3-color">Select a color</h3>
<table class="table-color">
<tbody>
<tr>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(45)" class="color rounded-circle" style="background-color: rgb(180,210,228); color: rgb(180,210,228); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Light blue"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1024)" class="color rounded-circle" style="background-color: rgb(175,221,255); color: rgb(175,221,255); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pastel light blue"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(11)" class="color rounded-circle" style="background-color: rgb(128,187,219); color: rgb(128,187,219); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pastel Blue"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(102)" class="color rounded-circle" style="background-color: rgb(110,153,202); color: rgb(110,153,202); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Medium blue"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(23)" class="color rounded-circle" style="background-color: rgb(13,105,172); color: rgb(13,105,172); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Bright blue"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1010)" class="color rounded-circle" style="background-color: rgb(0,0,255); color: rgb(0,0,255); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Really blue"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1012)" class="color rounded-circle" style="background-color: rgb(33,84,185); color: rgb(33,84,185); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Deep blue"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1011)" class="color rounded-circle" style="background-color: rgb(0,32,96); color: rgb(0,32,96); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Navy blue"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1027)" class="color rounded-circle" style="background-color: rgb(159,243,233); color: rgb(159,243,233); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pastel blue-green"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1018)" class="color rounded-circle" style="background-color: rgb(18,238,212); color: rgb(18,238,212); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Teal"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(151)" class="color rounded-circle" style="background-color: rgb(120,144,130); color: rgb(120,144,130); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Sand green"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1022)" class="color rounded-circle" style="background-color: rgb(127,142,100); color: rgb(127,142,100); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Grime"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(135)" class="color rounded-circle" style="background-color: rgb(116,134,157); color: rgb(116,134,157); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Sand blue"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1019)" class="color rounded-circle" style="background-color: rgb(0,255,255); color: rgb(0,255,255); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Toothpaste"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1013)" class="color rounded-circle" style="background-color: rgb(4,175,236); color: rgb(4,175,236); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Cyan"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(107)" class="color rounded-circle" style="background-color: rgb(0,143,156); color: rgb(0,143,156); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Bright bluish green"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1028)" class="color rounded-circle" style="background-color: rgb(204,255,204); color: rgb(204,255,204); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pastel green"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(29)" class="color rounded-circle" style="background-color: rgb(161,196,140); color: rgb(161,196,140); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Medium green"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(119)" class="color rounded-circle" style="background-color: rgb(164,189,71); color: rgb(164,189,71); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Br. yellowish green"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(37)" class="color rounded-circle" style="background-color: rgb(75,151,75); color: rgb(75,151,75); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Bright green"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1021)" class="color rounded-circle" style="background-color: rgb(58,125,21); color: rgb(58,125,21); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Camo"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1020)" class="color rounded-circle" style="background-color: rgb(0,255,0); color: rgb(0,255,0); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Lime green"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(28)" class="color rounded-circle" style="background-color: rgb(40,127,71); color: rgb(40,127,71); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Dark green"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(141)" class="color rounded-circle" style="background-color: rgb(39,70,45); color: rgb(39,70,45); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Earth green"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1029)" class="color rounded-circle" style="background-color: rgb(255,255,204); color: rgb(255,255,204); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pastel yellow"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(226)" class="color rounded-circle" style="background-color: rgb(253,234,141); color: rgb(253,234,141); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Cool yellow"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1008)" class="color rounded-circle" style="background-color: rgb(193,190,66); color: rgb(193,190,66); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Olive"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(24)" class="color rounded-circle" style="background-color: rgb(245,205,48); color: rgb(245,205,48); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Bright yellow"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1017)" class="color rounded-circle" style="background-color: rgb(255,175,0); color: rgb(255,175,0); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Deep orange"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1009)" class="color rounded-circle" style="background-color: rgb(255,255,0); color: rgb(255,255,0); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="New Yeller"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1005)" class="color rounded-circle" style="background-color: rgb(255,176,0); color: rgb(255,176,0); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Deep orange"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(105)" class="color rounded-circle" style="background-color: rgb(226,155,64); color: rgb(226,155,64); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Br. yellowish orange"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1025)" class="color rounded-circle" style="background-color: rgb(255,201,201); color: rgb(255,201,201); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pastel orange"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(125)" class="color rounded-circle" style="background-color: rgb(234,184,146); color: rgb(234,184,146); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Light orange"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(101)" class="color rounded-circle" style="background-color: rgb(218,134,122); color: rgb(218,134,122); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Medium red"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1007)" class="color rounded-circle" style="background-color: rgb(163,75,75); color: rgb(163,75,75); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Dusty Rose"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1016)" class="color rounded-circle" style="background-color: rgb(255,102,204); color: rgb(255,102,204); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pink"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1032)" class="color rounded-circle" style="background-color: rgb(255,0,191); color: rgb(255,0,191); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Hot pink"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1004)" class="color rounded-circle" style="background-color: rgb(255,0,0); color: rgb(255,0,0); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Really red"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(21)" class="color rounded-circle" style="background-color: rgb(196,40,28); color: rgb(196,40,28); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Bright red"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(9)" class="color rounded-circle" style="background-color: rgb(232,186,200); color: rgb(232,186,200); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Light reddish violet"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1026)" class="color rounded-circle" style="background-color: rgb(177,167,255); color: rgb(177,167,255); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pastel violet"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1006)" class="color rounded-circle" style="background-color: rgb(180,128,255); color: rgb(180,128,255); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Alder"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(153)" class="color rounded-circle" style="background-color: rgb(149,121,119); color: rgb(149,121,119); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Sand red"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1023)" class="color rounded-circle" style="background-color: rgb(140,91,159); color: rgb(140,91,159); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Lavender"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1015)" class="color rounded-circle" style="background-color: rgb(170,0,170); color: rgb(170,0,170); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Magenta"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1031)" class="color rounded-circle" style="background-color: rgb(98,37,209); color: rgb(98,37,209); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Royal purple"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(104)" class="color rounded-circle" style="background-color: rgb(107,50,124); color: rgb(107,50,124); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Bright violet"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(5)" class="color rounded-circle" style="background-color: rgb(215,197,154); color: rgb(215,197,154); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Brick yellow"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1030)" class="color rounded-circle" style="background-color: rgb(255,204,153); color: rgb(255,204,153); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Pastel brown"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(18)" class="color rounded-circle" style="background-color: rgb(204,142,105); color: rgb(204,142,105); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Nougat"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(106)" class="color rounded-circle" style="background-color: rgb(218,133,65); color: rgb(218,133,65); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Bright orange"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(38)" class="color rounded-circle" style="background-color: rgb(160,95,53); color: rgb(160,95,53); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Dark orange"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1014)" class="color rounded-circle" style="background-color: rgb(170,85,0); color: rgb(170,85,0); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="CGA brown"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(217)" class="color rounded-circle" style="background-color: rgb(124,92,70); color: rgb(124,92,70); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Brown"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(192)" class="color rounded-circle" style="background-color: rgb(105,64,40); color: rgb(105,64,40); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Reddish brown"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1001)" class="color rounded-circle" style="background-color: rgb(248,248,248); color: rgb(248,248,248); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Institutional white"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1)" class="color rounded-circle" style="background-color: rgb(242,243,243); color: rgb(242,243,243); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="White"> </td>
 <td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(208)" class="color rounded-circle" style="background-color: rgb(229,228,223); color: rgb(229,228,223); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Light stone grey"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1002)" class="color rounded-circle" style="background-color: rgb(205,205,205); color: rgb(205,205,205); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Mid gray"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(194)" class="color rounded-circle" style="background-color: rgb(163,162,165); color: rgb(163,162,165); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Medium stone grey"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(199)" class="color rounded-circle" style="background-color: rgb(99,95,98); color: rgb(99,95,98); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Dark stone grey"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(26)" class="color rounded-circle" style="background-color: rgb(27,42,53); color: rgb(27,42,53); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Black"> </td>
<td data-toggle="tooltip" data-placement="left" title="" onclick="sendColorRequest(1003)" class="color rounded-circle" style="background-color: rgb(17,17,17); color: rgb(17,17,17); display: inline-block; height: 40px; width: 40px; border-color: #fff; border-style: solid; border-width: 2px;" data-original-title="Really black"> </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="card">
<div class="card-header text-center">Character</div>
<div class="card-body text-center">
<button id="regenerate-character" class="btn btn-secondary btn-block shadow-sm "><i class="fas fa-redo mr-1"></i>Not loading? Re-draw</button>
<div class="position-relative my-2" id="thumbnail-container">
<button class="position-absolute btn btn-outline-secondary" id="toggle-character-3d" style="bottom: 5; right: 0;">3D</button>
<img width="250" height="250" class="img-fluid" data-tadah-thumbnail-type="user-thumbnail" data-tadah-thumbnail-id="722" src="/images/thumbnail/full.png" alt="Character image" id="thumbnail" style="">
<div class="d-none" id="three-dee-spinner">
<div class="text-center d-inline-flex align-items-center justify-content-center" style="height: 250px; width: 250px">
<div class="spinner-border text-dark" role="status" style="width: 50px; height: 50px;">
<span class="sr-only">Loading 3D Thumbnail...</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-8">
<div class="card mt-3 mt-md-0">
 <div class="card-header border-bottom-0">
<ul class="nav border-bottom justify-content-center nav-tabs card-header-tabs">
<li class="nav-item"><a id="category-link" href="#" class="nav-link active">Body Colors</a></li>
<li class="nav-item"><a id="category-link" href="#" class="nav-link">Hats</a></li>
<li class="nav-item"><a id="category-link" href="#" class="nav-link">T-Shirts</a></li>
<li class="nav-item"><a id="category-link" href="#" class="nav-link">Shirts</a></li>
<li class="nav-item"><a id="category-link" href="#" class="nav-link">Pants</a></li>
<li class="nav-item"><a id="category-link" href="#" class="nav-link">Faces</a></li>
<li class="nav-item"><a id="category-link" href="#" class="nav-link">Heads</a></li>
<li class="nav-item"><a id="category-link" href="#" class="nav-link">Packages</a></li>
<li class="nav-item"><a id="category-link" href="#" class="nav-link">Gears</a></li>
</ul>
</div>
<div id="item-card" data-type="bodycolors" class="card-body">

<div style="height:240px;width:194px;text-align:center;margin:0 auto;">
<div style="position: relative; margin: 11px 4px; height: 1%;">
<div style="position: absolute; left: 72px; top: 0px; cursor: pointer">
<div class="ColorChooserRegion border border-secondary rounded" data-toggle="modal" id="head" data-target="#colorPicker" style="background-color:rgb(245,205,48);height:44px;width:44px;"> </div>
</div>
<div style="position: absolute; left: 0px; top: 52px; cursor: pointer">
<div class="ColorChooserRegion border border-secondary rounded" data-toggle="modal" id="leftarm" data-target="#colorPicker" style="background-color:rgb(245,205,48);height:88px;width:40px;"> </div>
</div>
<div style="position: absolute; left: 48px; top: 52px; cursor: pointer">
<div class="ColorChooserRegion border border-secondary rounded" data-toggle="modal" id="torso" data-target="#colorPicker" style="background-color:rgb(33,84,185);height:88px;width:88px;"> </div>
</div>
<div style="position: absolute; left: 144px; top: 52px; cursor: pointer">
<div class="ColorChooserRegion border border-secondary rounded" data-toggle="modal" id="rightarm" data-target="#colorPicker" style="background-color:rgb(245,205,48);height:88px;width:40px;"> </div>
</div>
<div style="position: absolute; left: 48px; top: 146px; cursor: pointer">
<div class="ColorChooserRegion border border-secondary rounded" data-toggle="modal" id="leftleg" data-target="#colorPicker" style="background-color:rgb(75,151,75);height:88px;width:40px;"> </div>
</div>
<div style="position: absolute; left: 96px; top: 146px; cursor: pointer">
<div class="ColorChooserRegion border border-secondary rounded" data-toggle="modal" id="rightleg" data-target="#colorPicker" style="background-color:rgb(75,151,75);height:88px;width:40px;"> </div>
</div>
</div>
</div>
</div>
</div>
<hr>
<div class="card">
<div class="card-header">
Currently Wearing
</div>
<div id="wearing-item-card" class="card-body" style=""><div id="loading" class="col d-none justify-content-center">
    <div class="spinner-border d-block" style="width: 3rem; height: 3rem" role="status">                                
        <div class="sr-only">Loading</div>
    </div>
</div>
             <center>  <div class="spinner-border d-block" style="width: 3rem; height: 3rem" role="status">                                
        <div class="sr-only">Loading</div> </center>
            </div>
        </div>
            </div>

</div>
</div>
</div>
</div>
</div>
<template id="bodycolors">
<div style="height:240px;width:194px;text-align:center;margin:0 auto;">
<div style="position: relative; margin: 11px 4px; height: 1%;">
<div style="position: absolute; left: 72px; top: 0px; cursor: pointer">
<div class="ColorChooserRegion border border-secondary rounded" data-toggle="modal" id="head" data-target="#colorPicker" style="background-color:rgb(229,228,223);height:44px;width:44px;"> </div>
</div>
<div style="position: absolute; left: 0px; top: 52px; cursor: pointer">
<div class="ColorChooserRegion border border-secondary rounded" data-toggle="modal" id="leftarm" data-target="#colorPicker" style="background-color:rgb(229,228,223);height:88px;width:40px;"> </div>
</div>
<div style="position: absolute; left: 48px; top: 52px; cursor: pointer">
<div class="ColorChooserRegion border border-secondary rounded" data-toggle="modal" id="torso" data-target="#colorPicker" style="background-color:rgb(255,0,0);height:88px;width:88px;"> </div>
</div>
<div style="position: absolute; left: 144px; top: 52px; cursor: pointer">
<div class="ColorChooserRegion border border-secondary rounded" data-toggle="modal" id="rightarm" data-target="#colorPicker" style="background-color:rgb(229,228,223);height:88px;width:40px;"> </div>
</div>
<div style="position: absolute; left: 48px; top: 146px; cursor: pointer">
<div class="ColorChooserRegion border border-secondary rounded" data-toggle="modal" id="leftleg" data-target="#colorPicker" style="background-color:rgb(13,105,172);height:88px;width:40px;"> </div>
</div>
<div style="position: absolute; left: 96px; top: 146px; cursor: pointer">
<div class="ColorChooserRegion border border-secondary rounded" data-toggle="modal" id="rightleg" data-target="#colorPicker" style="background-color:rgb(13,105,172);height:88px;width:40px;"> </div>
</div>
</div>
</div>
</template>
</main>








