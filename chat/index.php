
<!DOCTYPE html>
<html dir="ltr" lang="en-US">	
	<head>
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <meta charset="utf-8">
    <title>PHP CHART</title>
     <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
      <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">
        <link rel="stylesheet" href="script/flags24.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/login.js"></script>

 <script src="script/sweetalert.min.js"></script>
 <link rel="stylesheet" type="text/css" href="script/sweetalert.css">
 <script src="script.js"></script>

  <script src="script.responsive.js"></script>
  <script type="text/javascript"> 
 	$(document).ready(function(){
 
    	$("#btn").click(function() {
    	            swal({
    	    text: "Enter First name",
    	    html:true,   
            title:"<div class='checkout-wrap' style='padding-bottom:3px;'><ul class='checkout-bar'><li class='active'></li><li class='next'></li><li class=''></li><li class=''></li><li class=''></li><li class=''></li><li class=''></li></ul></div>",              
            type:"input",
            showCancelButton: true,   
            closeOnConfirm: false,   
            animation: "slide-from-top",   
            inputPlaceholder: "Firstname" 
        },
        function(inputValue){
            if (inputValue === false) return false;      
            if (inputValue === "") {
                swal.showInputError("Please enter your firstname!");     
                return false;
            }   	
    	 swal({
            text: "Enter your sirname:",   
            html:true,  
            title:"<div class='checkout-wrap' style='padding-bottom:3px;'><ul class='checkout-bar'><li class='visited first'></li><li class='active'></li><li class='next'></li><li class=''></li><li class=''></li><li class=''></li><li class=''></li></ul></div>",                
            type: "input",
            showCancelButton: true,   
            closeOnConfirm: false,   
            animation: "slide-from-top",   
            inputPlaceholder: "Sirname" 
        },
        function(inputValue1){
            if (inputValue1 === false) return false;      
            if (inputValue1 === "") {
                swal.showInputError("Please enter your sirname!");     
                return false;
            }  	
    	 swal({
             
            text: "Enter your email address:", 
             html:true,
            title:"<div class='checkout-wrap' style='padding-bottom:3px;'><ul class='checkout-bar'><li class='visited first'></li><li class='visited second'></li><li class='active'></li><li class='next'></li><li class=''></li><li class=''></li><li class=''></li></ul></div>",                
            type: "input",
            showCancelButton: true,   
            closeOnConfirm: false,   
            animation: "slide-from-top",   
            inputPlaceholder: "Email" 
        },
        function(inputValue2){
            if (inputValue2 === false) return false;      
            if (inputValue2 === "") {
                swal.showInputError("Please enter your email address!");     
                return false;
            }
    swal({
            text: "Enter password:",
             html:true,
            title:"<div class='checkout-wrap' style='padding-bottom:3px;'><ul class='checkout-bar'><li class='visited first'></li><li class='visited second'></li><li class='visited third'></li><li class='active'></li><li class='next'></li><li class=''></li><li class=''></li></ul></div>",                   
            type: "input",
            inputType: "password",
            showCancelButton: true,   
            closeOnConfirm: false,   
            animation: "slide-from-top",   
            inputPlaceholder: "Password" 
        },
        function(inputValue4){
            if (inputValue4 === false) return false;      
            if (inputValue4 === "") {
                swal.showInputError("Please enter your password!");     
                return false;
            }
                 swal({
            text: "Repeat password",
            html:true,
            title:"<div class='checkout-wrap' style='padding-bottom:3px;'><ul class='checkout-bar'><li class='visited first'></li><li class='visited second'></li><li class='visited third'></li><li class='visited forth'></li><li class='active'></li><li class='next'></li><li class=''></li></ul></div>",                      
            type: "input",
            inputType: "password",
            showCancelButton: true,   
            closeOnConfirm: false,   
            animation: "slide-from-top",   
            inputPlaceholder: "Repeat password" 
        },
        function(inputValue5){
            if (inputValue5 === false) return false;      
            if (inputValue5 === "") {
                swal.showInputError("Please enter your password again!");     
                return false;
            }else if(inputValue4!=inputValue5){
            	    swal.showInputError("Password dont match try again!");     
                return false;     
                  }
    	     swal({
             
            text: "Institution/College:", 
            html:true,
            title:"<div class='checkout-wrap' style='padding-bottom:3px;'><ul class='checkout-bar'><li class='visited first'></li><li class='visited second'></li><li class='visited third'></li><li class='visited forth'></li><li class='visited fifth'></li><li class='active'></li><li class='next'></li></ul></div>",                      
            type: "input",
            showCancelButton: true,   
            closeOnConfirm: false,   
            animation: "slide-from-top",   
            inputPlaceholder: "Inst/Col" 
        },
        function(inputValue6){
            if (inputValue6 === false) return false;      
            if (inputValue6 === "") {
                swal.showInputError("Please enter your institution/college!");     
                return false;
            }
    	   swal({
              
            html:true,
            title:"<div class='checkout-wrap' style='padding-bottom:3px;'><ul class='checkout-bar'><li class='visited first'></li><li class='visited second'></li><li class='visited third'></li><li class='visited forth'></li><li class='visited fifth'></li><li class='visited sixth'></li><li class='active'></li></ul></div>",                      

            text:"<div><label style='font-family:Times New Roman;font-weight:bold;'>Select your country & enter your primary phone number<label></div><center><div style='border:solid 1px #ADD8E6;width:276px;'><div id='dvFlag' style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mw'></div><select style='width:250px; border-color: gray;color:black; border: none;font-family:Times New Roman;font-size:15px;font-weight:bold;' onchange='changeFlag()' onkeypress='changeFlag()' id='CountryList'><option value='AF'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='af'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AFGHANISTAN (+93)</option>        <option value='AL'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='al'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ALBANIA (+355)</option><option value='DZ'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='dz'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ALGERIA (+213)</option><option value='AS'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='as'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AMERICAN SAMOA (+684)</option><option value='AD'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ad'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ANDORRA (+376)</option><option value='AO'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ao'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ANGOLA (+244)</option><option value='AI'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ai'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ANGUILLA (+264)</option><option value='AG'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ag'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ANTIGUA & BARBUDA (+268)</option><option value='AR'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ar'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ARGENTINA (+54)</option><option value='AM'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='am'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ARMENIA (+374)</option><option value='AW'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='aw'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ARUBA (+297)</option><option value='AU'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='au'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AUSTRALIA (+61)</option><option value='AT' style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='at'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AUSTRIA (+43)</option><option value='AZ' style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='az'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AZERBAIJAN (+994)</option><option value='BS' style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='bs'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BAHAMAS (+242)</option><option value='BH' style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='bh'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BAHRAIN (+973)</option><option value='BD'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='bd'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BANGLADESH (+880)</option><option value='BB'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='bb'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BARBADOS (+246)</option><option value='AG'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ag'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BARBUDA (ANTIGUA) (+)</option><option value='BY'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='by'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BELARUS (BYELORUSSIA) (+375)</option><option value='BE'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='be'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BELGIUM (+32)</option><option value='BZ'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='bz'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BELIZE (+501)</option><option value='BJ'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='bj'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BENIN (+229)</option><option value='BM'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='bm'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BERMUDA (+441)</option><option value='BT'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='bt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BHUTAN (+975)</option><option value='BO'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='bo'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOLIVIA (+591)</option><option value='BA'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ba'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOSNIA-HERZEGOVINA (+387)</option> <option value='BW'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='bw'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BOTSWANA (+267)</option><option value='BR'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='br'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BRAZIL (+55)</option> <option value='BN'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='bn'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BRUNEI (+673)</option> <option value='BG'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='bg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BULGARIA (+359)</option> <option value='BF'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='bf'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BURKINA FASO (+226)</option><option value='BI'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='bi'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BURUNDI (+257)</option> <option value='KH'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='kh'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CAMBODIA (+855)</option> <option value='CM'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='cm'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CAMEROON (+237)</option><option value='CA'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ca'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CANADA (+1)</option> <option value='CV'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='cv'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CAPE VERDE (+238)</option> <option value='KY'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ky'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CAYMAN ISLANDS (+345)</option> <option value='CF'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='cf'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CENTRAL AFRICAN REPUBLIC (+236)</option><option value='TD'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='td'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHAD (+235)</option> <option value='CL'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='cl'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHILE (+56)</option> <option value='CN'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='cn'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHINA (+86)</option> <option value='CO'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='co'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COLOMBIA (+57)</option><option value='KM'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='km'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMOROS (+269)</option><option value='CG'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='cg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONGO (+242)</option> <option value='CD'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='cd'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONGO, DEM. REP. OF (+243)</option><option value='CK'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ck'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COOK ISLANDS (+682)</option><option value='CR'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='cr'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COSTA RICA (+506)</option>  <option value='HR'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='hr'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CROATIA (+385)</option> <option value='CU'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='cu'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CUBA (+53)</option>   <option value='CY'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='cy'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CYPRUS (+357)</option> <option value='CZ'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='cz'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CZECH REPUBLIC (+420)</option> <option value='DK'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='dk'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DENMARK (+45)</option> <option value='DJ'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='dj'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DJIBOUTI (+253)</option> <option value='DM'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='dm'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOMINICA (+767)</option><option value='DO'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='do'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOMINICAN REPUBLIC (+809)</option> <option value='TL'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='tl'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EAST TIMOR (+)</option><option value='EC'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='lt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ECUADOR (+593)</option>  <option value='EG'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ec'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EGYPT (+20)</option><option value='SV'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='eg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EL SALVADOR (+503)</option> <option value='GB'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='gb'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENGLAND (+1)</option><option value='GQ'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='gq'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EQUATORIAL GUINEA (+240)</option> <option value='ER'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='er'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ERITREA (+291)</option><option value='EE'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ee'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ESTONIA (+372)</option>  <option value='ET'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='et'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ETHIOPIA (+251)</option> <option value='FK'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ck'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FALKLAND ISLANDS (+500)</option><option value='FO'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='fo'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FAROE ISLANDS (+298)</option> <option value='FJ'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='fj'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FIJI (+679)</option> <option value='FI'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='fi'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FINLAND (+358)</option> <option value='FR'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='fr'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FRANCE (+33)</option><option value='GF'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='fr'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FRENCH GUIANA (+594)</option><option value='PF'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='pf'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FRENCH POLYNESIA (+689)</option><option value='GA'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ga'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GABON (+241)</option><option value='GM'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='gm'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GAMBIA (+220)</option><option value='GE'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ge'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GEORGIA (+995)</option><option value='DE'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='de'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GERMANY (+49)</option><option value='GH'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='gh'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GHANA (+233)</option> <option value='GI'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='gi'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GIBRALTAR (+350)</option><option value='GR'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='gr'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GREECE (+30)</option><option value='GL'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='gl'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GREENLAND (+299)</option> <option value='GD'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='gd'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GRENADA (+471)</option><option value='GP'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='gf'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GUADELOUPE (+590)</option><option value='GU'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='gu'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GUAM (+671)</option> <option value='GT'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='gt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GUATEMALA (+502)</option><option value='GG'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='gg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GUERNSEY (CHANNEL ISLANDS) (+44)</option><option value='GW'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='gw'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GUINEA BISSAU (+245)</option><option value='GN'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='gn'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GUINEA REPUBLIC (+224)</option><option value='GY'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='gy'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GUYANA (+592)</option> <option value='HT'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ht'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HAITI (+509)</option><option value='HN'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='hn'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HONDURAS (+504)</option> <option value='HK'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='hk'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HONG KONG (+852)</option> <option value='HU'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='hu'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HUNGARY (+60)</option><option value='IS'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='is'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ICELAND (+354)</option><option value='IN'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='in'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INDIA (+91)</option><option value='ID'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='id'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INDONESIA (+62)</option><option value='IR'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ir'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IRAN (+98)</option> <option value='IQ'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='iq'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IRAQ (+964)</option><option value='IE'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ie'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IRELAND (REPUBLIC OF) (+353)</option> <option value='IL'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='il'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ISRAEL (+972)</option><option value='IT'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='it'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ITALY (+39)</option> <option value='CI'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ci'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IVORY COAST (COTE DIVOIRE) (+225)</option><option value='JM'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='jm'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JAMAICA (+876)</option><option value='JP'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='jp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JAPAN (+81)</option><option value='JE'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='je'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JERSEY (CHANNEL ISLANDS)(+44)</option> <option value='JO'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='jo'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JORDAN (+962)</option><option value='KZ'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='kz'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KAZAKHSTAN (+7)</option><option value='KE'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ke'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KENYA (+254)</option><option value='KI'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ki'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KIRIBATI (+868)</option><option value='KP'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='kp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KOREA, D.P.R OF (+850)</option><option value='KR'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='kr'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KOREA, SOUTH (+82)</option><option value='KW'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='kw'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KUWAIT (+965)</option><option value='KG'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='kg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KYRGYZSTAN (+996)</option> <option value='LA'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='la'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LAOS (+856)</option><option value='LV'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='lv'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LATVIA (+371)</option><option value='LB'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='lb'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LEBANON (+961)</option><option value='LS'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ls'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LESOTHO (+266)</option><option value='LR'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='lr'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LIBERIA (+231)</option> <option value='LY'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ly'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LIBYA (+218)</option><option value='LI'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='li'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LIECHTENSTEIN (+423)</option><option value='LT'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='lt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LITHUANIA (+370)</option> <option value='LU'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='lu'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LUXEMBOURG (+352)</option><option value='MO'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mo'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MACAU (+853)</option><option value='MK'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mk'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MACEDONIA (FORMER YUG. REP.) (+389)</option> <option value='MG'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MADAGASCAR (+261)</option><option value='MW'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mw' selected='selected'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XYZ (+265)</option> <option value='MY'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='my'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MALAYSIA (+60)</option><option value='MV'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mv'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MALDIVES (+960)</option><option value='ML'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ml'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MALI (+223)</option> <option value='MT'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MALTA (+356)</option><option value='MH'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mh'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MARSHALL ISLANDS (+692)</option> <option value='MQ'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mq'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MARTINIQUE (+596)</option><option value='MR'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mr'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAURITANIA (+222)</option> <option value='MU'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mu'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAURITIUS (+230)</option><option value='YT'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='yt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAYOTTE (+262)</option><option value='MX'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mx'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MEXICO (+52)</option><option value='FM'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='fm'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MICRONESIA (FEDERATED STATES OF) (+691)</option> <option value='MD'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='md'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MOLDOVA, REPUBLIC OF (+373)</option> <option value='MC'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mc'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MONACO (+377)</option><option value='MN'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mn'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MONGOLIA (+976)</option> <option value='ME'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='me'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MONTENEGRO (+382)</option> <option value='MS'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ms'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MONTSERRAT (+664)</option> <option value='MA'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ma'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MOROCCO (+212)</option><option value='MZ'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mz'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MOZAMBIQUE (+258)</option><option value='MM'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mm'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MYANMAR (+95)</option><option value='NA'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='na'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAMIBIA (+264)</option><option value='NR'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='nr'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAURU, REPUBLIC OF (+674)</option> <option value='NP'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='np'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEPAL (+977)</option><option value='AN'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='an'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NETHERLANDS ANTILLES (+599)</option><option value='NL'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='nl'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NETHERLANDS, THE (HOLLAND) (+31)</option> <option value='KN'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='kn'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEVIS</option> <option value='NC'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='nc'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEW CALEDONIA (+687)</option><option value='NZ'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='nz'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEW ZEALAND (+64)</option> <option value='NI'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ni'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NICARAGUA (+505)</option><option value='NE'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ne'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIGER (+227)</option><option value='NG'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ng'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIGERIA (+234)</option><option value='NU'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='nu'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIUE (+683)</option><option value='NU'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='nu'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIUE ISLAND (+683)</option><option value='NF'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='nf'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NORFOLK ISLAND (+672)</option> <option value='MP'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NORTHERN MARIANA ISLANDS (+670)</option><option value='NO'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='no'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NORWAY (+47)</option> <option value='OM'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='om'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMAN (+968)</option><option value='PK'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='pk'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAKISTAN (+92)</option> <option value='PW'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='pw'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PALAU (+680)</option><option value='PA'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='pa'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PANAMA (+507)</option><option value='PG'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='pg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAPUA NEW GUINEA (+675)</option><option value='PY'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='py'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PARAGUAY (+595)</option> <option value='PE'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='pe'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERU (+51)</option><option value='PH'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ph'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHILIPPINES (+63)</option> <option value='PL'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='pl'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;POLAND (+48)</option><option value='PT'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PORTUGAL (+351)</option><option value='PR'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='pr'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PUERTO RICO (+787)</option><option value='QA'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='qa'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QATAR (+974)</option><option value='RE'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='re'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REUNION (+262)</option><option value='RO'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ro'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROMANIA (+40)</option><option value='RU'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ru'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RUSSIA (+7)</option><option value='RW'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='rw'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RWANDA (+250)</option><option value='WS'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ws'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SAMOA (+685)</option><option value='SM'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='sm'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SAN MARINO (+378)</option><option value='ST'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='st'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SAO TOME & PRINCIPE (+239)</option><option value='SA'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='sa'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SAUDI ARABIA (+966)</option><option value='scotland'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='scotland'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SCOTLAND</option><option value='SN'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='sn'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SENEGAL (+221)</option><option value='RS'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='rs'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SERBIA (+381)</option><option value='SC'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='sc'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEYCHELLES (+248)</option><option value='SL'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='sl'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIERRA LEONE (+232)</option> <option value='SG'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='sg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SINGAPORE (+65)</option><option value='SK'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='sk'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SLOVAKIA REPUBLIC (+421)</option><option value='SI'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='si'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SLOVENIA (+386)</option><option value='SB'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='sb'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOLOMAN ISLANDS (+677)</option> <option value='SO'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='so'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOMALIA (+252)</option><option value='ZA'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='za'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOUTH AFRICA (+27)</option><option value='ES'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='es'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SPAIN (+34)</option> <option value='LK'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='lk'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SRI LANKA (+94)</option> <option value='SD'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='sd'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUDAN (+249)</option> <option value='SR'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='sr'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SURINAME (+597)</option><option value='SZ'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='sz'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SWAZILAND (+268)</option><option value='SE'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='se'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SWEDEN (+46)</option><option value='CH'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ch'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SWITZERLAND (+41)</option> <option value='SY'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='sy'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SYRIA (+963)</option><option value='PF'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='pf'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TAHITI </option> <option value='TW'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='tw'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TAIWAN (+886)</option><option value='TJ'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='tj'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TAJIKISTAN (+992)</option><option value='TZ'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='tz'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TANZANIA (+255)</option><option value='TH'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THAILAND (+66)</option> <option value='MP'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='mp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TINIAN (NORTHERN MARIANA ISLANDS)</option><option value='TG'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='tg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOGO (+228)</option> <option value='TO'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='to'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TONGA (+676)</option> <option value='TT'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='tt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRINIDAD AND TOBAGO (+868)</option><option value='TN'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='tn'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TUNISIA (+216)</option><option value='TR'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='tr'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TURKEY (+90)</option> <option value='TM'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='tm'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TURKMENISTAN (+993)</option><option value='TC'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='tc'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TURKS AND CAICOS ISLANDS (+1)</option> <option value='TV'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='tv'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TUVALU (+688)</option><option value='UG'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ug'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UGANDA (+256)</option> <option value='UA'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ua'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UKRAINE (+380)</option><option value='AE'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ae'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UNITED ARAB EMIRATES (+971)</option> <option value='US'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='us'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UNITED STATES OF AMERICA (+1)</option><option value='UY'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='uy'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;URUGUAY (+598)</option><option value='UZ'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='uz'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UZBEKISTAN (+998)</option><option value='VU'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='vu'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VANUATU (+678)</option><option value='VY'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='va'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VATICAN CITY (+39)</option><option value='VE'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ve'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VENEZUELA  (+58)</option> <option value='VN'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='vn'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIETNAM (+84)</option><option value='VI'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='vi'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIRGIN ISLANDS US (+1)</option><option value='WF'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='wf'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WALLIS AND FUTUNA ISLANDS (+681)</option><option value='YE'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='ye'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YEMEN, REPUBLIC OF (+967)</option> <option value='YU'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='yu'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YUGOSLAVIA (+)</option><option value='ZM'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='zm'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ZAMBIA (+260)</option><option value='ZW'style='background-image:url(flags24.png);background-repeat:no-repeat;float:left;height:24px;width:24px;' class='zw'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ZIMBABWE (+263)</option></select></div></center>",
             type: "input",
            showCancelButton: true,   
            closeOnConfirm: false,
            showLoaderOnConfirm: true,   
            animation: "slide-from-top",   
            inputPlaceholder: "+265 999 667 662" 
        },
        function(inputValue7){
            if (inputValue7 === false) return false;      
            if (inputValue7 === "") {
                swal.showInputError("Please enter your phone number!");     
                return false;
            }
                  var vals;var vals1;var vals2;var vals3;var vals4;var vals5;var vals6;var vals7;
                  //var vals1;
    	 		vals=inputValue; vals1=inputValue1;	vals2=inputValue2;
                vals4=inputValue4;vals6=inputValue6;
                    	 		vals7=inputValue7;
             $.ajax ({
            type : 'POST',
            url: "register.php",
            data: { valz : vals,valz1:vals1,valz2:vals2,
            	    valz4:vals4,valz6:vals6,valz7:vals7 },
            success: function(result) {
                if(result=="Now"){
                swal("Account created successfully", "", "success" ); 
                
                }
                else if(result=="pass")
                     {
                	   sweetAlert("Oops...", "Password too weak use numbers and latters!", "error");
                	}
                else{
                	   sweetAlert("Oops...", "It seems you arleady have an account try again!", "error");
                	}
            }
        });                
            });  
            }); 
            });	  }); }); 	});        
    });});
});
 </script>           				                                   				                                         				                          				          				
   <script type="text/javascript">
        function changeFlag() {$("#dvFlag").attr('class', $("#CountryList").val().toLowerCase());}
 </script>
   
<style>.art-content .art-postcontent-0 .layout-item-0 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:0px;border-top-color:#949494;border-right-color:#949494;border-bottom-color:#949494;border-left-color:#949494;  border-collapse: separate;  }
.art-content .art-postcontent-0 .layout-item-1 { color: #000000; background: #E8E8E8; padding: 3px; border-radius: 30px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style>
</head>
<body>
<div id="art-main">
    <div class="art-sheet clearfix">
<header class="art-header">

    <div class="art-shapes">
        
            </div>

<h1 class="art-headline">
    PHP CHAT SYSTEM
</h1>
<h2 class="art-slogan">PHP, JAVASCRIPT, BOOTSTRAP, HTML5, CSS3 </h2>

                <div id="art-flash-area">
                    <div id="art-flash-container">
                    <object width="900" height="225" id="art-flash-object" data="images/flash.swf" type="application/x-shockwave-flash">
                        <param name="quality" value="high">
                    	<param name="scale" value="exactfit">	
		
	              	<param name="wmode" value="transparent">
                    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.70&amp;framerate1=24&amp;loop=true&amp;wmode=transparent">
                        <param name="swfliveconnect" value="true">
                        <!--[if !IE]>-->
                        <object type="application/x-shockwave-flash" data="images/flash.swf" width="900" height="225">
                            <param name="quality" value="high">
                    	    <param name="scale" value="exactfit">
                            <param name="wmode" value="transparent">
                                                    	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.70&amp;framerate1=24&amp;loop=true&amp;wmode=transparent">
                            <param name="swfliveconnect" value="true">
                        <!--<![endif]-->
                          	<div class="art-flash-alt"><a href="https://www.adobe.com/go/getflashplayer"><img src="https://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"></a></div>
                        <!--[if !IE]>-->
                        </object>
                        <!--<![endif]-->
                    </object>
                    </div>
                    </div>
<nav class="art-nav">
    <ul class="art-hmenu"><li><a href="index.php" >WELCOME</a></li>
    	</ul> 
 
    </nav>                    
</header>
	<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">                                
                                <div class="art-postcontent art-postcontent-0 clearfix">
                                	       
                                	<div class="art-content-layout layout-item-0">
	  <div class="art-content-layout-row">
	  	<div class="art-layout-cell layout-item-1" style="width: 50%;color:white;background-color:#363636;border-radius:0%; " >
        &nbsp; &nbsp; &nbsp;<span style="font-family: 'Times New Roman'; font-weight: bold;">WELCOME TO PHP CHAT SYSTEM</span>
        <p class="MsoNormal" style="text-align: justify;"><span style="font-family: 'Times New Roman'; font-weight: bold;"><span style="font-size: 12pt;">
        	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></span></p>
         
         </div>

 <div class="art-layout-cell" style="width: 50%" >
 	
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        	<span style="font-family: 'Times New Roman'; font-size: 22px;">
        		<span style="font-weight: bold; color: rgb(255, 255, 255);">Do you have an account?</span>
        		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
        <p>	<center> <div id="error" style="width:60%";> </div> </center>
                </p>
        	<form class="form-login" method="post" id="login-form">
        		<p>&nbsp; &nbsp; &nbsp;&nbsp;
       <span style="font-weight: bold; font-family: 'Times New Roman'; font-size: 16px; color: rgb(255, 255, 255);">
       	Email address:</span><span style="font-weight: bold; font-family: 'Times New Roman'; font-size: 16px;">&nbsp;</span>
	<input type="email" class="form-control" placeholder="email address" name="user_email" id="user_email" />
       	</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="font-weight: bold;">&nbsp;
       		<span style="font-family: 'Times New Roman'; font-size: 16px; color: #FFFFFF;">Password</span>
       		<span style="font-family: 'Times New Roman'; font-size: 16px; color: #FFFFFF;">:</span></span>
			<input type="password" class="form-control" placeholder="Password" name="password" id="password" />       		
       		</p><p style="text-align: -webkit-auto;">
       			<label class="art-checkbox">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
       				 &nbsp; &nbsp; &nbsp;
       		</label>
       		 <button class="art-button" name="login_button" id="login_button" >&nbsp;       		 
       		 <span class="glyphicon glyphicon-log-in"> </span> &nbsp; Sign In </button>
       	 
       		  <button class="art-button" name="login_button" id="btn" >&nbsp;       		 
       		 <span class="glyphicon glyphicon-user"> </span> &nbsp; Register </button> 
       	    
       	    </p>
    	   </form>    	  
    	   
	</div>
		
	 </div>
</div>
</div>


</article></div>

                    </div>
                </div>
            </div>
            <footer class="art-footer">
<div style="position:relative;padding-left:10px;padding-right:10px">
	</div>
</footer>

    </div>
    <p class="art-page-footer">
        <span style="font-size: 16px; font-weight:bold; font-family: 'Times New Roman';">Brought to you by: <a href="http://code-projects.org/"  style="font-weight: bold; font-family: 'Comic Sans MS'; font-size:18px;color:  #5261D1;">code-projects.org </a></span>

    </p>
</div>


</body></html>