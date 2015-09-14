<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sorry!!! testing</title>



<script language="JavaScript" type="text/javascript">  
    var count =6  
    var redirect="http://www.fbcoverforyou.com/"  
      
    function countDown(){  
     if (count <=0){  
      window.location = redirect;  
     }else{  
      count--;  
      document.getElementById("timer").innerHTML = "This page will redirect in "+count+" seconds."  
      setTimeout("countDown()", 1000)  
     }  
    }  
    </script>  
      
  
</head>

<body>
<h1>Forbidden</h1>

Yu don't have permission to accesss on this server<br /><br />
  
      
    <span id="timer">  
    <script>  
     countDown();  
    </script>  
    </span>  
</script>
</body>
</html>
