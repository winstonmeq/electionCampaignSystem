<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Arrays</h2>

<p>Polygon</p>

<p id="demo"></p>

<script>
 let text = "text";
  let x = "";
//  let y = array();
 
 const data = @json($mapsdata);

//  data.features.forEach(function(item,index){

//     x = item.geometry.coordinates; 
  
//  });


const xx = [];

for(i = 0;i < data.length; i++ ){

  
  //const dt = data[i];

  const pt = [];

  const uu = data[0]['polygon'];
  

    for(v = 0;v < uu.length; v++ ){     
  
        //x += uu[v][0] + "," + uu[v][1] + "</br>";

        
        x += uu[v][0] + "</br>";

     // pt.push(x)
  }




  // const yy = [{"key":"1","value":"32"},{"key":"2","value":"72"},
  //            {"key":"3","value":"62"},{"key":"4","value":"22"}];



  // for(i = 0;i < uu.length; i++ ){

  //     const yt = yy[i];
  
  //       x = yy[2]["key"] +","+yt["value"];
  // }



  // x += dt['id'];


}

 



document.getElementById("demo").innerHTML = x;
 


</script>

</body>
</html>











