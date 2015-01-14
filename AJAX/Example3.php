<html>
<head>
<title>
Example3
</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>

function addcheckbox()
{
	var value=document.getElementById("check").value;
	ajaxRequest(value,0);
	
}

function chkboxlength(){
	 $("input:checkbox[name=chk]:checked").each(function () {
     var id= $(this).attr("id");
     ajaxRequest("",id);
    });
}

function ajaxRequest(val,id)
{
	var flag=false;
	
	if(val!="")
	{
		flag=true;
	}
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET", "ajax3.php?value="+val+"&id="+id, true);
	 xmlhttp.send();
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
			responseHandler(flag, xmlhttp.responseText);
		}
	
  
}


function responseHandler(flag,response) {
 	if (flag) {
     	
          $("#chck").append(response); 
 	}
 	else
 	{
     	jQuery('#'+response).parent().remove();
   }
}


/*

function ajaxRequest(url, successCallback, errorCallback)
{
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET", url, true);
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4) {
			if(xmlhttp.status == 200) {
				successCallback(xmlhttp.responseText);
			}
			else {
				
				errorCall(xmlhttp.responseText);
			}	
		}
	}
   xmlhttp.send();
}

function errorCall(response)
{
	alert(response);
}

function addcheckbox()
{
	var value=document.getElementById("check").value;
    var url = "ajax3.php?value="+value;
	ajaxRequest(url, responseHandlerCheckbox);
	
}

function responseHandlerCheckbox(response) {
	$("#chck").append(response); 
}

function chkboxlength(){

	$("input:checkbox[name=chk]:checked").each(function () {

		var id= $(this).attr("id");

		var url = "ajax3.php?id="+id;
		
		ajaxRequest(url, responseHandlerDelete);
		
	    
   	});
}

function responseHandlerDelete(id) {
	jQuery('#'+id).parent().remove();
}

*/

</script>
</head>

<body>

<div id="result"  style="padding:200px">


  <input class="chk"  type="checkbox" id="chkSelect" onclick="chkboxlength()"/> Todo List 1 </br>
  
  <input class="chk"  type="checkbox" id="chkSelect" onclick="chkboxlength()"/> Todo List  2</br>
  <input class="chk"  type="checkbox" id="chkSelect" onclick="chkboxlength()"/> Todo List  3</br>
  <input class="chk"  type="checkbox" id="chkSelect" onclick="chkboxlength()"/> Todo List  4</br>
  <input class="chk"  type="checkbox" id="chkSelect" onclick="chkboxlength()"/> Todo List  5</br>
  <input class="chk" type="checkbox" id="chkSelect" onclick="chkboxlength()"/> Todo List  6</br>
  <input class="chk"  type="checkbox" id="chkSelect" onclick="chkboxlength()"/> Todo List  7</br>
  <input class="chk"  type="checkbox" id="chkSelect" onclick="chkboxlength()"/> Todo List  8</br>
  <input class="chk"  type="checkbox" id="chkSelect" onclick="chkboxlength()"/> Todo List  9</br>
  <input class="chk"  type="checkbox" id="chkSelect" onclick="chkboxlength()"/> Todo List  10</br>
  
  <div id="chck">
  
  <?php 
  $con = mysqli_connect("localhost","root","root","ajax_test");
  $sql ="SELECT * FROM checkbox";
  $result = mysqli_query($con, $sql);
  $storeArray = Array();
  while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
  	echo  '<div><input  name="chk" type="checkbox" class="chk1" id="'.$row['id'].'" onclick="chkboxlength()"/>'.$row['addCheck'].'</div>';
  }
  
?>
  
  
  </div>
 
   <div  style="padding-top:100px;">
   <strong><label for="add">ADD CHECKBOX</label></strong>
              <input type="text" id="check"/>
              <button onclick="addcheckbox()">ADD CHECKBOX</button>
    </div>

 
<div>




</body>
</html>