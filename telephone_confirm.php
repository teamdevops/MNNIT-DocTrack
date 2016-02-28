<!DOCTYPE html>
<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
    $name = $_SESSION['name'];
    $username = $_SESSION['username'];
    $designation = $_SESSION['designation'];
    $department = $_SESSION['department'];
    $empid = $_SESSION['empid'];
    $accno = $_SESSION['accno'];
    $uuid = $_SESSION['uuid'];
}
else {
     header('Location: index.html');
}
?>

<style>
label {
    margin-right: 80px;

}
</style>
<style>
.myInput
{
   border-style:none;
   font-weight: bold;
}
.myInput1
{
   border-style:none;
}
.h4
{
	margin-bottom: 0px;
}
.layout
{
  padding-left: 0px;
  padding-right: 0px;
}
#billtable
{
  padding-left: 20px;
}
</style>
<style type="text/css" media="print">
.noprint{
        display:none;
}
</style>

<html>
<head>
<meta charset="UTF-8">
<title>ClaimForm-Telephone</title>
</head>

<body class="layout" id="body">
	<div class="header">
<p><img style="float: left; align:center; margin: 5px 15px 15px 0px;" src="images/mnnitlogo.png" width="80">
	<h3><center>मोतीलाल नेहरू राष्ट्रीय प्रौद्योगिकी संस्थान इलाहाबाद</center>
		<center>इलाहाबाद-211004 (भारत)</center>
 <center>Motilal Nehru National Institute of Technology Allahabad</center>
<center> Allahabad-211004 (India) </center> </h3>
</div>
<hr>
	<h4><center><u>CLAIM FORM:TELEPHONE REIMBURSEMENT </center></u></h4>

	<form>
 <label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
  <input type="text" class="myInput" name="name" value="<?php echo $name; ?>" readonly="true" required>
</label>
  &nbsp;&nbsp;Designation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   :
<label>
  <input type="text"  class="myInput" name="designation" value="<?php echo $designation; ?>" placeholder="Designation" readonly="true" >
</label>
<br>
  <label>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department   :
  <input type="text"  class="myInput" name="department" value="<?php echo $department; ?>" placeholder="department" readonly="true" required>
</label>
<label>
 &nbsp; Employee No. &nbsp;:
  <input type="text"  class="myInput" name="employeenumber" value="<?php echo $empid; ?>" placeholder="Employee No." readonly="true" required>
</label>
</form>
<br>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To,<br>
	<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Deputy Registrar(Accounts)</b><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Motilal Nehru National Institute of Technology Allahabad<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Allahabad-211004
</p>
<p>
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kindly arrange to reimburse Telephone charges of <input id="totalchargesup" type="text"  class="myInput" name="telcharges" readonly="true"><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for the period from <input id="from_month" type="text"  class="myInput" size="10" name="month" readonly="true"> to <input id="to_month" type="text"  class="myInput" size="10" name="month" readonly="true"> as per details given below.<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The amount may be credited to my bank account number with Vijaya Bank <input type="text"  class="myInput" name="accnumber"  value="<?php echo $accno; ?>" readonly="true"><br>
	</p>
<form>
 <label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Landline Telephone No.:
  <input id ="landline" type="text" class="myInput" name="landline"  readonly="true" required>
</label>
  &nbsp;&nbsp;MobileNo.&nbsp;:
<label>
  <input id ="mobile1" type="text"  class="myInput" name="mobilenumber1" readonly="true"  >
</label>
<br>

<label>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MobileNo. :
  <input id ="mobile2" type="text"  class="myInput" name="mobileumber2"  readonly="true" required>
</label>
</form>

<p>
	<h3><center>Bill Amount<center></h3>
<div id="billtablediv">
    <table id="billtable" class="myInput"  border="0">
        <tr>
            <td><b>Month</b></td>
            <td><b>Landline</b></td>
            <td><b>Broadband</b></td>
            <td><b>Mobile</b></td>
            <td><b>Total</b></td>
            <td><b>Claimed Amount</b></td>

        </tr>
        <tr>
            <td><input class="myInput1" size=15 type="text" id="month1" ></td>
            <td><input class="myInput1" size=15 type="text" id="op11" readonly="true"></td>
            <td><input class="myInput1" size=15 type="text" id="op21" readonly="true"></td>
            <td><input class="myInput1" size=15 type="text" id="op31" readonly="true"></td>
            <td><input class="myInput1" size=15 type="text" id="total1" readonly="true"></td>
            <td><input class="myInput1" size=15 type="text" id="claim1" readonly="true"></td>
        </tr>
    </table>
</p>
    <p>
    	<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <b>Total Telephone Charges:</b><input type="text" class="myInput" id="totalchargesdown" name="totalchargesdown" readonly="true"></center><br>
    	</p>
<p>

    	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Certified that the above telephones are in my name and all the numbers are made available to my Head of the Department/Section in-charge for communication with me.<br>
    	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.Cetified that I have incurred the above expenditure towards telephone/broadband charges during the period mentioned above.
</p>

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:&nbsp;:<input type="text"  class="myInput" name="date" readonly="true">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature&nbsp;:
</div>
<br/><br/>
<div align="center">
    <button class="noprint" type="button" onclick="submitAndPrint()" > Print Form </button>
    <span style="padding-left: 10px"> <button class="noprint" type="button" onclick="history.back();">Back</button> </span>
</div>

<script>
window.onload = fillTheDetails;
function fillTheDetails() {
    document.getElementById("landline").value = sessionStorage.getItem('landline');
    document.getElementById("mobile1").value = sessionStorage.getItem('mobile1');
    document.getElementById("mobile2").value = sessionStorage.getItem('mobile2');
    document.getElementById("from_month").value = sessionStorage.getItem('from_month');
    document.getElementById("to_month").value = sessionStorage.getItem('to_month');
    document.getElementById("totalchargesup").value = sessionStorage.getItem('totalchargesup');
    document.getElementById("totalchargesdown").value = sessionStorage.getItem('totalchargesdown');
    var rowlen = sessionStorage.getItem('rowlen');

    for(i=1; i < rowlen; i++) {
        var month = sessionStorage.getItem('month'+i);
        var op1 = sessionStorage.getItem('op1'+i);
        var op2 = sessionStorage.getItem('op2'+i);
        var op3 = sessionStorage.getItem('op3'+i);
        var total = sessionStorage.getItem('total'+i);
        var claim = sessionStorage.getItem('claim'+i);
        insRow(i,month,op1,op2,op3,total,claim);
    }


}
function submitAndPrint() {

    var uuid = '<?php echo $_SESSION['uuid']; ?>';
    var landline=document.getElementById("landline").value;
    var mobile1=document.getElementById("mobile1").value;
    var mobile2=document.getElementById("mobile2").value;
    var from_month = document.getElementById("from_month").value;
    var to_month = document.getElementById("to_month").value;
    var totalcharges = document.getElementById("totalchargesdown").value.split(" ")[2];
    console.log(uuid + " " + landline + " " + mobile1 + " " + mobile2 + " " + from_month + " " + to_month + " " + totalcharges);

    var xhttp;
    if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            console.log(xhttp.responseText);
             if(xhttp.responseText == 'successful') {
                 window.print();
             } else {
                 console.log("unsuccessfull entry");
             }
        }
    }
    xhttp.open("POST", "submitTeleBill.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("uuid=" + uuid + "&landline=" + landline + "&mobile1=" + mobile1 + "&mobile2=" + mobile2 + "&from_month=" + from_month + "&to_month=" + to_month + "&totalcharges=" + totalcharges);
    }


function insRow(i,month,op1,op2,op3,total,claim)
{
    if(i == 1) {
        document.getElementById('month1').value = month;
        document.getElementById('op11').value = op1;
        document.getElementById('op21').value = op2;
        document.getElementById('op31').value = op3;
        document.getElementById('total1').value = total;
        document.getElementById('claim1').value = claim;
    }
    else {
        var x=document.getElementById('billtable');
        var new_row = x.rows[1].cloneNode(true);
        var inp1 = new_row.cells[0].getElementsByTagName('input')[0];
        inp1.value = month;
        var inp2 = new_row.cells[1].getElementsByTagName('input')[0];
        inp2.value = op1;
        var inp3 = new_row.cells[2].getElementsByTagName('input')[0];
        inp3.value = op2;
        var inp4 = new_row.cells[3].getElementsByTagName('input')[0];
        inp4.value = op3;
        var inp5 = new_row.cells[4].getElementsByTagName('input')[0];
        inp5.value = total;
        var inp6 = new_row.cells[5].getElementsByTagName('input')[0];
        inp6.value = claim;
        new_row.onChange
        x.appendChild( new_row );
    }
}

</script>

</body>

</html>
