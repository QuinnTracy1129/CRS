function global(y){
				var xmlhttp=new XMLHttpRequest();
				xmlhttp.onreadystatechange=function(){
					var details=document.getElementById("links");
					details.innerHTML=xmlhttp.responseText; }
						if(y==1){
					xmlhttp.open("GET","test.php",true);
						}
					xmlhttp.send(null);
				}
