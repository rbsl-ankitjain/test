<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
var count=0;
var flag=false;
jQuery(document).ready(function() {
             count++;
		     var xmlhttp = new XMLHttpRequest(); 
	         xmlhttp.open("GET", "ajax1.php?val="+count, true); 
	         xmlhttp.send(); 
	         xmlhttp.onreadystatechange = function() { 
	               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { 
	            	   jQuery('#counter').text(xmlhttp.responseText)  ; 
	                }
	           }                                    

});

var  clear =setInterval(function()
		 {
	flag=true;
    var xmlhttp = new XMLHttpRequest(); 
    xmlhttp.open("GET", "ajax1.php?flag="+flag, true); 
    xmlhttp.send(); 
    xmlhttp.onreadystatechange = function() { 
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { 
       	   jQuery('#counter').text(xmlhttp.responseText)  ; 
           }
      }
   

	 } , 1000);





</script>
</head>
<body>

<h2>Number of Vistor </h2>

 <div><strong><label for="counter">Counter</label></strong>---&gt&gt<span id="counter"></span></div>
 

</body>
</html>
