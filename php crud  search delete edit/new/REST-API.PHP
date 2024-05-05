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
    <tr><td><input class="child1" type="text"></td></tr>
  </table>
</tr>
<table>
</td>

</tr>
</table>


<table class="tab2">

<tr class="tr1">
 
    <td class="td1">Name:</td>
   <td>
    <input  class="child2" type="text">

</td>

    <td class="td1">age: <input  type="text"  class="child3"></td>
       
        <td class="td1  pa1">city:</td><td>
        <input  type="text"  class="child4"></td>

    <td>
        <button class="but1">save</button>
        </td>





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

<tr>
        <td class="l1">id</td>
        <td class="l2">Name</td>
        <td class="l3">Age</td>
        <td class="l4">City</td>
        <td class="l5"><button class="green">Edit</button></td>
        <td class="l6"><button class="red">Delete</button></td>
</tr>







</table>

<button onclick="click_here()">
click here
</button>

</div>
  <style>
    .green{
         background:green;
         font-size:20px;
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
background-color:#730000;

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
           //      txt+="<tr><td class='l1'>"+p[0][i].id+"</td><td class="l2">"+p[0][i].name+"</td><td class="l3">"+p[0][i].age+"</td><td class='l4'>
                  //    <button class='green'>"+Edit+"</button></td><td class='l6'><button class='red'>"+Delete+"</button></td></tr>";
     
               //    txt+="<tr><td>"+p[0][i].id+"</td><td>"+p[0][i].name+"</td><td>"+p[0][i].age+"</td><td>"+p[0][i].city+"</td></tr>";
               
               
               
               txt+="<tr><td class='l1'>"+p[0][i].id+"</td><td class='l2'>"+p[0][i].name+"</td><td class='l3'>"+p[0][i].age+"</td><td class='l4'>"+p[0][i].city+"</td><td class='l5'><button class='green'>Edit</button></td><td class='l6'><button class='red'>Delete</button></td></tr>";
         
                 }
                
                 $('.loadtable').append(txt);
                
                
                
                
             }
         
     });
     
 }




</script>
