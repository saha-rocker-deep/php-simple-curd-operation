



<div >

<table class="tab" style="display:none;">

   <tr>
   <td class="edit">Edit page</td>
   </tr> 

    <tr>
<td> Name </td>
<td>
    
<input   id="chi0" class="ii" type="hidden">
<input  id="chi1" class="ii" type="text"></td>

    </tr>
    <tr>
    <td> Age </td>
<td><input id="chi2" class="ii" type="text"></td>
    </tr>
    <tr>

    <td> city </td>
<td><input id="chi3" class="ii" type="text"></td>
    </tr>
<tr>

<td >
<button class="butt">
update

    </button>


</td>

</tr>


</table>
</div>

<div >

<table class="tub" style="display:none;">

   
   
   


<tr>
<td>

<p   id="pp0" class="edit1"><a  class="conform" href="#">yes</a></p>

</td>

<td>

<p  id="pp1" class="edit1">Do you want to delete</p>

</td>


<td>

<p  id="pp2" class="edit1"><a  class="not-conform" href="#">NO</a></p>

</td>



<td>

<input   id="ch0" class="ii" type="hidden">




</td>



</tr>


<input   id="ch0" class="ii" type="hidden">




















</table>

</div>















































<div class="box">
<table class="tab1">
<tr>
<td class="t1">PHP REST API CRUD</td>
<td>
<table>
<tr class="se1">
    <td>search</td><td>:</td>
</tr>
<tr class="se2">
  <table class="inpu1">
    <tr><td><input class="child1" id="gg" type="text"></td></tr>
  </table>
</tr>
<table>
</td>

</tr>
</table>


<table class="tab2">

<tr class="tr1">
 <form  id="add-form">
    <td class="td1">Name:</td>
   <td>
    <input  class="child2" type="text">

</td>

    <td class="td1">age: <input  type="text"  class="child3"></td>
       
        <td class="td1  pa1">city:</td><td>
        <input  type="text"  class="child4"></td>

    <td>
        <input type="submit" class="but1" value="save"  id="save-button">
        </td>


</form>


</tr>


</table>











<table class="loadtable">
    <tr>
        <td class="id">id</td>
        <td class="name">Name</td>
        <td class="age">Age</td>
        <td class="city">City</td>
        <td class="edit">Edit</td>
        <td class="delete">Delete</td>
</tr>


 
 
 
 
 
 








</table>





</div>
  <style>



#pp1{
    position:relative;
    left:600px;
    gap:120px;
}
#pp2{
    position:relative;
    left:800px;
}
#pp0{
    position:relative;
 left:300px;
    
}


    .edit1 a:link{
        color:green;
        text-decoration:none;
    }
    .butt{
        width:100px;
        font-size:20px;
        background: green;
        positiion:relative;
        top:220px;
        left:120px;
    }
    .green{
         background:green;
         font-size:20px;
    }
    .changing{
        width:100%;
        background-color:green;
    }
    .red{
          background:red;
          font-size:20px;
    }
body{
    background-color:#ACA9A8;
     display:flex;
     flex-direction:row;
     justify-content:center;
     align-item:center;
}
.box{
     width:1200px;
    height:100%;
    background-color:white;


}
.tab1{
width:100%;
height:100px;
background-color: #730000;

}
.t1{
      font-size:50px;
      color:white;
       font-weight:800;
}
.se1{
     font-size:30px;
}
.inpu1{
    width:100%;
}
 .child1{
    width:100%;
    height:40px;
 }
 .child2{
    width:110%;
 height:40px;
 position:relative;
 right:40px;
 }
 .child3,.child4{
    height:40px;
 }
 .child3{
    width:30%;
 }
 .child4{
     position:relative;
     right:120px;
 }
 .tab2{
background-color: #ffb1be;
    width:100%;
    height:100px;
 }
 .td1{
    font-size:25px;
 }
 .but1{
    height:40px;
    width:140%;
    position:relative;
    right:120px;
     background-color:black;
     border-radius:5px;
     color:white;
     font-size:30px;

 }
 tr1{
    display:flex;
    flex-direction:row;
    gap:71px;
 }
 .pa1{
      position:relative;
      right:99px;
 }
 .loadtable{
     width:100%;
 }
 .id,.name,.age,.city,.age,.edit,.delete{
     background-color:red;
     color:white;
     font-size:30px;
     text-align:center;
 }
 .name{
    width:200px;
 }
 .l1,.l2,.l3,.l4,.l5,.l6{
    text-align:center;
    color:black;
    background:#ACA9A8;
    font-size:30px;
 }
</style>



<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script> 
$(window).on("load",
  function(){
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
           //      txt+="<tr><td class='l1'>"+p[0][i].id+"</td><td class="l2">"+p[0][i].name+"</td><td class="l3">"+p[0][i].age+"</td><td class='l4'>
                  //    <button class='green'>"+Edit+"</button></td><td class='l6'><button class='red'>"+Delete+"</button></td></tr>";
     
               //    txt+="<tr><td>"+p[0][i].id+"</td><td>"+p[0][i].name+"</td><td>"+p[0][i].age+"</td><td>"+p[0][i].city+"</td></tr>";
               


               txt+="<tr><td class='l1'>"+p[0][i].id+"</td><td class='l2'>"+p[0][i].name+"</td><td class='l3'>"+p[0][i].age+"</td><td class='l4'>"+p[0][i].city+"</td><td class='l5'><button  data-eid='"+p[0][i].id+ "'class='green'>Edit</button></td><td class='l6'><button class='red'data-eid='"+p[0][i].id+ "'>Delete</button></td></tr>";
         
                 }
                
                 $('.loadtable').append(txt);
                
                
                
                
             }
         
     });
     
 }

);



$("#save-button").on("click",function(e){
       e.preventDefault();
    v= $(".child2").val();
    k= $(".child3").val();
    j= $(".child4").val();
  if(v!=""&&k!=0&&j!=""){
     if(Number(k)){
          console.log("it is a number",k);
     
      
      
      
data={
    name:v,
    age:k,
    city:j
};
 var s=JSON.stringify(data);
   console.log(JSON.stringify(data));
   jQuery.ajax({
url:'insert.php',
type:'POST',
data:s,
success:function(data){
  //  data=JSON.parse(data);
      console.log(data);
      $(".child2").val("");
      $(".child3").val("");
      $(".child4").val("");

}



   })
}
else{
   console.log("it is a not number",k);
 }
}
 else{
    console.log("required all input ");
 }
       });
       







</script>


  <style>

table{
   
   width:20%;
   border:1px solid black;
   height:15%;
   border-radius:5px;
}
.edit{
    
    
    font-size:20px;
}
 .edit1{
    font-size:30px;
 }
 
 body{
      
      
      
      
 }
 .tab{
     width:25%;
     height:25%;
    background-color:#034f84;
   position:absolute;
   left:700px;
   top:40%;
   box-shadow: 10px 10px 10px 10px black;
     
 }
 .tub{
    width:100%;
  height:5%;
 background-color:red;
position:absolute;
left:00px;
top:40%;
box-shadow: 10px 10px 10px 10px black;
  

 }
.tub tr{
     width:100%;
}
 
 

 .ii{
   
    margin-top:10%;
     width:130%;
 }
  </style>
   <script>


$(document).on("click",".green",function(){
    $(".tab").css({"display":"block","shadow":
    "5px 10px  red"});
    $(".tub").css({"display":"none"});
console.log($(this).data("eid"));
var id=$(this).data("eid");



data={
   
   id:id
   
};
 var s=JSON.stringify(data);
   console.log(JSON.stringify(data));
   jQuery.ajax({
url:'single_data.php',
type:'POST',
data:s,
success:function(data){
    data=JSON.parse(data);
      console.log(data);

      console.log(data[0][0].id,data[0][0].name,data[0][0].age,data[0][0].city);
      $("#chi0").val(data[0][0].id);
     $("#chi1").val(data[0][0].name);
     $("#chi2").val(data[0][0].age);
     $("#chi3").val(data[0][0].city);
k=$("#chi1").val();
    console.log($("#chi1").val(),k);

}



   })



});



$(document).on("click",".butt",function(){
    f=$("#chi0").val();
  k = $("#chi1").val();
 q=$("#chi2").val();
 r=$("#chi3").val();

console.log(f,k,q,r);

data={
   
   id:f,
   name:k,
   age:q,
   city:r

   
};
 var s=JSON.stringify(data);
jQuery.ajax({
url:'update.php',
type:'POST',
data:s,
success:function(data){
    //data=JSON.parse(data);
      console.log(data);
     
     
     

}



   });


});
//delete
$(document).on("click",".red",function(){

    var id=$(this).data("eid");
    $(".tab").css({"display":"none"});
    $(".tub").css({"display":"block","shadow":
 "5px 10px  red"});
console.log(id);
$("#ch0").val(id);
if(alert("do you want to delete")){
     console.log("ok")
}
 else{
console.log("not ok");
 }


})
$(document).on("click",".conform",function(){

k=$("#ch0").val();
//console.log(k);
data={
     id:k
};
s=JSON.stringify(data);
jQuery.ajax({
url:'delete.php',
type:'POST',
data:s,
success:function(data){
    //data=JSON.parse(data);
      console.log(data);
     $(".tub").css({"display":"none"});
    location.reload(true);//************************************************* 


}



   });



})


$(document).on("click",".not-conform",function(){
    $(".tub").css({"display":"none"});
 
})





$(document).on("keyup","#gg",function(){
    k=$(this).val();
    data={
         search:k
    };


s=JSON.stringify(data);

    jQuery.ajax({
url:'search.php?search='+k,
type:"GET",

success:function(data){
  //  console.log(JSON.parse(data));
      console.log(data);
      $('.loadtable').html("");
    
      console.log(JSON.parse(data));
      p=JSON.parse(data);
          console.log(p[0].length);
          txt="";
          txt+="<tr><td class='id'>id</td><td class='name'>Name</td><td class='age'>Age</td><td class='city'>City</td><td class='edit'>Edit</td><td class='delete'>Delete</td></tr>";
           for(i=0;p[0].length>i;i++){
           console.log(p[0][i].id,p[0][i].name,p[0][i].age,p[0][i].city);
         //      txt+="<tr><td class='l1'>"+p[0][i].id+"</td><td class="l2">"+p[0][i].name+"</td><td class="l3">"+p[0][i].age+"</td><td class='l4'>
                //    <button class='green'>"+Edit+"</button></td><td class='l6'><button class='red'>"+Delete+"</button></td></tr>";
   
             //    txt+="<tr><td>"+p[0][i].id+"</td><td>"+p[0][i].name+"</td><td>"+p[0][i].age+"</td><td>"+p[0][i].city+"</td></tr>";
            
             txt+="<tr><td class='l1'>"+p[0][i].id+"</td><td class='l2'>"+p[0][i].name+"</td><td class='l3'>"+p[0][i].age+"</td><td class='l4'>"+p[0][i].city+"</td><td class='l5'><button  data-eid='"+p[0][i].id+ "'class='green'>Edit</button></td><td class='l6'><button class='red'data-eid='"+p[0][i].id+ "'>Delete</button></td></tr>";
       
               }
              
               $('.loadtable').html(txt);
              




}



   });

   // console.log(k);
})








   /* function f1(){
         console.log(k);
          document.querySelector('.tab').style.display="block";
        document.queryselector('.tab').style.shadow="5px 10px  red";
    }*/
   </script>