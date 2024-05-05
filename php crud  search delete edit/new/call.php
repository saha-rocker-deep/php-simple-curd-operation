<script src="https://code.jquery.com/jquery-2.2.4.min.js">

</script>
<input name="take" type="text">
<button onclick="click_here()">
click here
</button>
<div class="replace">
<table></table>
</div>
<script>
    function click_here(){
        jQuery.ajax({
            url:'inform.php',
            type:'GET',
            

            success:function(result){

               console.log(JSON.parse(result));
               p=JSON.parse(result);
               console.log(JSON.parse(result));
               console.log(p[0].length);
               txt="";
                for(i=0;p[0].length>i;i++){
                      console.log(p[0][i].id,p[0][i].name,p[0][i].age,p[0][i].city);
                      txt+="<tr><td>"+p[0][i].id+"</td><td>"+p[0][i].name+"</td><td>"+p[0][i].age+"</td><td>"+p[0][i].city+"</td></tr>";
        
            
   
            
                    }
                    txt="<table>"+txt+"</table>";
                    $('.replace').html(txt);
                   
                    $('table').css({"border":"1px solid black","width":"100%","font-size":"50px"});
                    $('td').css({"border":"1px solid black","height":"100%"});
                    $('tr').css({"border":"1px solid black"});
                }
            
        });
        
    }
    </script>