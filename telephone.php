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
}
else {
     header('Location: index.html');
}
?>

<style>
::-webkit-input-placeholder {
   text-align: center;
}

:-moz-placeholder { /* Firefox 18- */
   text-align: center;
}

::-moz-placeholder {  /* Firefox 19+ */
   text-align: center;
}

:-ms-input-placeholder {
   text-align: center;
}
label {
    margin-right: 80px;
}
.myInput
{
   border-style:none;
   font-weight: bold;
}
.myInput:hover
{
   border-style:solid;
}
.myInput:focus
{
   border-style:solid;
}
.myInput1
{
   border-style:none;
}
.myInput1:hover
{
   border-style:solid;
}
.myInput1:focus
{
   border-style:solid;
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
  <input type="text" class="myInput" name="name" value="<?php echo $name; ?>" disabled="disabled" >
</label>
  &nbsp;&nbsp;Designation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   :
<label>
  <input type="text"  class="myInput" name="designation" value="<?php echo $designation; ?>" placeholder="Designation" disabled="disabled" >
</label>
<br>
  <label>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department   :
  <input type="text"  class="myInput" name="department" value="<?php echo $department; ?>" placeholder="department" disabled="disabled" >
</label>
<label>
 &nbsp; Employee No. &nbsp;:
  <input type="text"  class="myInput" name="employeenumber" value="<?php echo $empid; ?>" placeholder="Employee No." disabled="disabled" >
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
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kindly arrange to reimburse Telephone charges of <input type="text"  id="totalchargesup" class="myInput" name="telcharges" placeholder="Rs 0" disabled="disabled" ><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for the period from <input id="from_month" type="text"  class="myInput" size="10" name="month" placeholder="from month"> to <input id="to_month" type="text"  class="myInput" size="10" name="month" placeholder="to month"> as per details given below.<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The amount may be credited to my bank account number with Vijaya Bank <input type="text"  class="myInput" name="accnumber"  value="<?php echo $accno; ?>"  placeholder="A/C Number" disabled="disabled"><br>
	</p>
<form>
 <label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Landline Telephone No.:
  <input id ="landline" type="text" class="myInput" name="landline" placeholder="Landline" required>
</label>
  &nbsp;&nbsp;MobileNo.&nbsp;:
<label>
  <input id ="mobile1" type="text"  class="myInput" name="mobilenumber1" placeholder="Pre-paid" >
</label>
<br>
<label>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MobileNo. :
  <input id ="mobile2" type="text" class="myInput" name="mobileumber2" placeholder="Post-paid" required>
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
            <td><input class="myInput1" size=15 type="text" id="op11" onChange="calc();" ></td>
            <td><input class="myInput1" size=15 type="text" id="op21" onChange="calc();"></td>
            <td><input class="myInput1" size=15 type="text" id="op31" onChange="calc();" ></td>
            <td><input class="myInput1" size=15 type="text" id="total1" readonly="true"></td>
            <td><input class="myInput1" size=15 type="text" id="claim1" readonly="true"></td>
            <td><input class="noprint" type="button" id="delmonth" value="Delete" onclick="deleteRow(this)"/></td>
            <td><input class="noprint" type="button" id="addmonth" value="Add more months" onclick="insRow()"/></td>
        </tr>
    </table>
</p>
    <p>
    	<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>Total Telephone Charges:</b><input type="text"  class="myInput" id="totalchargesdown" name="totalchargesdown" placeholder="Rs 0" readonly="true"></center><br>
    	</p>
<p>
    	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Certified that the above telephones are in my name and all the numbers are made available to my Head of the Department/Section in-charge for communication with me.<br>
    	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.Cetified that I have incurred the above expenditure towards telephone/broadband charges during the period mentioned above.
</p>

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:&nbsp;:<input type="text"  class="myInput" name="date" placeholder="DD/MM/YY">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature&nbsp;:
</div>
<br/><br/>
<div align="center">
    <button class="noprint" type="button" onclick="confirmAlert();" > Confirm </button>
    <span style="padding-left: 10px"> <button class="noprint" type="button" onclick="history.back();">Back</button> </span>
</div>


<script>
function confirmAlert() {
    if(window.confirm("Are you sure you want to confirm ? ")) {
        var x=document.getElementById('billtable');
        var rowlen = x.rows.length;
        sessionStorage.setItem('rowlen', rowlen);
        for (i = 1; i < rowlen; i++) {
            var month = document.getElementById("month"+i).value;
            var op1 = document.getElementById("op1"+i).value;
            var op2 = document.getElementById("op2"+i).value;
            var op3 = document.getElementById("op3"+i).value;
            var total = document.getElementById("total"+i).value;
            var claim = document.getElementById("claim"+i).value;
            sessionStorage.setItem('month'+i, month);
            sessionStorage.setItem('op1'+i, op1);
            sessionStorage.setItem('op2'+i, op2);
            sessionStorage.setItem('op3'+i, op3);
            sessionStorage.setItem('total'+i, total);
            sessionStorage.setItem('claim'+i, claim);

            console.log(month);
            console.log(op1);
            console.log(op2);
            console.log(op3);
            console.log(total);
            console.log(claim);

        }
        var landline=document.getElementById("landline").value;
        var mobile1=document.getElementById("mobile1").value;
        var mobile2=document.getElementById("mobile2").value;
        var from_month = document.getElementById("from_month").value;
        var to_month = document.getElementById("to_month").value;
        var totalchargesup =  document.getElementById("totalchargesup").value;
        var totalchargesdown =  document.getElementById("totalchargesdown").value;
        sessionStorage.setItem('landline', landline);
        sessionStorage.setItem('mobile1', mobile1);
        sessionStorage.setItem('mobile2', mobile2);
        sessionStorage.setItem('from_month', from_month);
        sessionStorage.setItem('to_month', to_month);
        sessionStorage.setItem('totalchargesup', totalchargesup);
        sessionStorage.setItem('totalchargesdown', totalchargesdown);
        setTimeout("location.href = 'telephone_confirm.php';",0);
    }
}

function deleteRow(row)
{
    var i=row.parentNode.parentNode.rowIndex;
    document.getElementById('billtable').deleteRow(i);
}

function insRow()
{
    var x=document.getElementById('billtable');
    var new_row = x.rows[1].cloneNode(true);
    var len = x.rows.length;
    var inp1 = new_row.cells[0].getElementsByTagName('input')[0];
    inp1.id = "month"+len;
    inp1.value = '';
    var inp2 = new_row.cells[1].getElementsByTagName('input')[0];
    inp2.id="op1"+len;
    inp2.value = '';
    var inp3= new_row.cells[2].getElementsByTagName('input')[0];
    inp3.id="op2"+len;
    inp3.value='';
    var inp4 = new_row.cells[3].getElementsByTagName('input')[0];
    inp4.id="op3"+len;
    inp4.value='';
    var inp5 = new_row.cells[4].getElementsByTagName('input')[0];
    inp5.id="total"+len;
    inp5.value='';
    var inp6 = new_row.cells[5].getElementsByTagName('input')[0];
    inp6.id="claim"+len;
    inp6.value='';
    new_row.onChange
    x.appendChild( new_row );
}

function calc() {
  var x=document.getElementById('billtable');
  var len = x.rows.length-1;
  var one = parseFloat(document.getElementById("op1"+len).value);
  var two = parseFloat(document.getElementById("op2"+len).value);
  var three = parseFloat(document.getElementById("op3"+len).value);
  if (isNaN(one)) one= 0;
  if (isNaN(two)) two= 0;
  if (isNaN(three)) three= 0;
  document.getElementById("total"+len).value = one + two + three;
  document.getElementById("claim"+len).value = one + two + three;
  calcTotal();
}

function calcTotal() {
  var x=document.getElementById('billtable');
  var len = x.rows.length;
  var total = 0.0;
  for ( i = 1; i < len ; i++) {
      var value = document.getElementById("claim"+i).value;
      if(!isNaN(value))
        total+=parseFloat(value,10);
  }
  document.getElementById('totalchargesup').value = "Rs. " + total;
  document.getElementById('totalchargesdown').value = " Rs. " + total;

}

</script>

</body>

</html>
