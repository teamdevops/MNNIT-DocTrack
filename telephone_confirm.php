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
.myInput:hover
{
   border-style:none;
}
.myInput:focus
{
   border-style:none;
}

.myInput1
{
   border-style:none;
}
.myInput:hover
{
   border-style:none;
}
.myInput:focus
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
<head>
<link rel="stylesheet" type="text/css" href="css/theme">
</head>
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
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kindly arrange to reimburse Telephone charges of <input type="text"  class="myInput" name="telcharges" placeholder="Telephonecharges." readonly="true"><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for the period from <input id="from_month" type="text"  class="myInput" size="10" name="month" placeholder="from"> to <input id="to_month" type="text"  class="myInput" size="10" name="month" readonly="true" placeholder="To"> as per details given below.<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The amount may be credited to my bank account number with Vijaya Bank <input type="text"  class="myInput" name="accnumber"  value="<?php echo $accno; ?>"  placeholder="A/C Number" readonly="true"><br>
	</p>
<form>
 <label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Landline Telephone No.:
  <input id ="landline" type="text" class="myInput" name="landline" placeholder="Landline" readonly="true" required>
</label>
  &nbsp;&nbsp;MobileNo.&nbsp;:
<label>
  <input id ="mobile1" type="text"  class="myInput" name="mobilenumber1" readonly="true" placeholder="Pre-paid" >
</label>
<br>
  <label>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text"  class="myInput" name="department">
</label>
<label>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MobileNo. :
  <input id ="mobile2" type="text"  class="myInput" name="mobileumber2" placeholder="postpaid." readonly="true" required>
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
            <td><input class="myInput1" size=15 type="text" id="month" ></td>
            <td><input class="myInput1" size=15 type="text" id="op1" onChange="calc(); readonly="true"" ></td>
            <td><input class="myInput1" size=15 type="text" id="op2" onChange="calc(); readonly="true""></td>
            <td><input class="myInput1" size=15 type="text" id="op3" onChange="calc(); readonly="true"" ></td>
            <td><input class="myInput1" size=15 type="text" id="total" readonly="true"></td>
            <td><input class="myInput1" size=15 type="text" id="claim" readonly="true"></td>
            <td><input class="noprint" type="button" hidden="true "id="delmonth" value="Delete" onclick="deleteRow(this)"/></td>
            <td><input class="noprint" type="button" hidden="true" id="addmonth" value="Add more months" onclick="insRow()"/></td>
        </tr>
    </table>
</p>
    <p>
    	<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Total Telephone Charges:</b><input type="text"  class="myInput" id="tc" name="totalcharges" placeholder="Totalcharges." onClick="coltotal();" readonly="true"></center><br>
    	</p>
<p>

    	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Certified that the above telephones are in my name and all the numbers are made available to my Head of the Department/Section in-charge for &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;communication with me.<br>
    	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.Cetified that I have incurred the above expenditure towards telephone/broadband charges during the period mentioned above.
</p>

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:&nbsp;:<input type="text"  class="myInput" name="date" placeholder="DD/MM/YY" readonly="true">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature&nbsp;:
</div>
<br/><br/>
<div align="center">
    <button class="noprint" type="button" onclick="confirmAlert();" >Print</button>
</div>


<script>
function confirmAlert() {
    alert('Are you sure you want to confirm? Your choices will be freezed.');
    setTimeout("location.href = 'telephone_confirm.php';",0);
}
function saveAndShow() {
    var landline=document.getElementById("landline").value;
    var mobile1=document.getElementById("mobile1").value;
    var mobile2=document.getElementById("mobile2").value;
    var from_month = document.getElementById("from_month").value;
    var to_month = document.getElementById("to_month").value;
    console.log(landline + " " + mobile1 + " " + mobile2 + " " + from_month + " " + to_month);
}

function deleteRow(row)
{
    var i=row.parentNode.parentNode.rowIndex;
    document.getElementById('billtable').deleteRow(i);
}


function insRow()
{
    console.log('hi');
    var x=document.getElementById('billtable');
    var new_row = x.rows[1].cloneNode(true);
    var len = x.rows.length;
    var inp1 = new_row.cells[0].getElementsByTagName('input')[0];
    inp1.id+=len;
    inp1.value = '';
    var inp2 = new_row.cells[1].getElementsByTagName('input')[0];
    inp2.id="op1"+len;
    inp2.value = '';
    var inp3= new_row.cells[2].getElementsByTagName('input')[0];
    inp3.id="op2"+len;len;
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
  if(len==1)
  {
    var one = parseFloat(document.getElementById('op1').value,10);
  var two = parseFloat(document.getElementById('op2').value,10);
  var three = parseFloat(document.getElementById('op3').value,10);
  if (isNaN(one)) one= 0;
  if (isNaN(two)) two= 0;
  if (isNaN(three)) three= 0;
document.getElementById('total').value = one + two + three;
document.getElementById('claim').value = one + two + three;
  }
else
{
  console.log(len);
  A="op1"+len;
  B="op2"+len;
  C="op3"+len;
  console.log(A);
  console.log(B);
  var one = parseFloat(document.getElementById("op1"+len).value,10);
  var two = parseFloat(document.getElementById("op2"+len).value,10);
  var three = parseFloat(document.getElementById("op3"+len).value,10);
  if (isNaN(one)) one= 0;
  if (isNaN(two)) two= 0;
  if (isNaN(three)) three= 0;
document.getElementById("total"+len).value = one + two + three;
m=
document.getElementById("claim"+len).value = one + two + three;
}
}

function coltotal()
{
  var x=document.getElementById('billtable');
  var len = x.rows.length;
  console.log(len);
  total=parseFloat(document.getElementById("total").value,10);
      console.log(total);

  for(i=2;i<len;i++)
  {
    total=total+parseFloat(document.getElementById("total"+i).value,10);
   console.log(total);
  }
 document.getElementById('tc').value = total;
}

function PrintContent()
    {
        printWindow = window.open("", "Preview", "location=0,status=0,scrollbars=1");
        printWindow.document.write("<div style='width:100%;text-align:left;'>");
        printWindow.document.write("<input type='button' id='btnPrint' value='Print' style='width:100px' onclick='window.print()' />");
        printWindow.document.write("<input type='button' id='btnCancel' value='Cancel' style='width:100px' onclick='window.close()' />");
        printWindow.document.write(document.getElementById('body').innerHTML);
        printWindow.document.write("</div>");
        printWindow.document.close();
        printWindow.focus();
    }
</script>

</body>

</html>