<!DOCTYPE html>
<html>
  <head>
    <title>Add Map</title>

    <style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 800px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
      }
    </style>


    <script>

   
    var markers = [];

    function clearMarkers() {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(null);
    }
    markers = [];
    }




      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const kid = { lat: 7.224766, lng: 124.799523 };
       
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 10,
          mapId: "688258360f1e0646",
          center: kid,
        });

        setMarkers3(map);   

  
          
      }

       
        // The marker, positioned at Uluru
       
       function setMarkers(map){

        let x = { lat: 7.08907, lng: 125.08270 };
        const uluru = x;
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });

        const infowindow = new google.maps.InfoWindow({
                    content: "sdfsfd",
                  });

              marker.addListener("click", () => {
                    infowindow.open({
                      anchor: marker,
                      map,
                      shouldFocus: false,
                    });
                  });



       }

      

      function setMarkers2(map){

        
        const beaches = [
                          ["Bondi Beach", 7.45612, 125.01234, 4],
                          ["Coogee Beach", 7.84562, 125.12345, 5],
                          ["Cronulla Beach", 7.32456, 125.23456, 3],
                          ["Manly Beach", 7.14523, 125.34567, 2],
                          ["Maroubra Beach", 7.02345, 125.45678, 1],
                        ];


                        for (let i = 0; i < beaches.length; i++) {
                            const beach = beaches[i];

                            new google.maps.Marker({
                              position: { lat: beach[1], lng: beach[2] },
                              map,
                              // icon: image,
                              // shape: shape,
                              title: beach[0],
                              zIndex: beach[3],
                            });

                         
                
                    var bermudaTriangle1 = new google.maps.Polygon({
                    paths: [
                          new google.maps.LatLng(7.94310, 125.99071),
                          new google.maps.LatLng(7.24587, 125.77371),
                          new google.maps.LatLng(7.56351, 125.66432)
                    ],
                    strokeColor: '#FF0000',
                    strokeOpacity: 0.8,
                    strokeWeight: 1,
                    fillColor: '#FF0000',
                    fillOpacity: 0.35,
                    name: 'name 1', // dynamic, not an official API property..
                    map: map
                });
                          }


      }
     
     function setMarkers3(map){

          const data = @json($mapsdata);

          const trr = [];

          for(i = 0; i<data.length; i++ ){
              
              const dt = data[i];               
                
                        
                //const latLng = new google.maps.LatLng(dt['lat'], dt['long']);
           
                //trr.push(latLng);
    

                // new google.maps.Marker({
                //               position: { lat: dt['lat'], lng: dt['long'] },
                //               map,
                //               //icon: "http://maps.google.com/mapfiles/ms/micons/rangerstation.png"
                //               // shape: shape,
                //               // title: beach[0],
                //               // zIndex: beach[3],
                //             });


                const color1 = "";

                      if (dt['mine'] > dt['hold']) {  

                        $color1 = '#FF0000';

                      } else if (dt['opponent'] > dt['hold']) {      

                        $color1 = '#000000';
                          
                      } else {

                          $color1 = '#ffff00';
                        

                      };//end of if else

                      infoWindow = new google.maps.InfoWindow;

                      function showArrays(event) {
                     // var vertices = this.getPath();
                      infoWindow.setContent(this.content);
                      infoWindow.setPosition(event.latLng);
                      infoWindow.open(map);
                  }




                 const uu = dt['polygons'];
                
                 const pl = [];

                 for(f = 0;f < uu.length; f++ ){     

                    const latLng2 = new google.maps.LatLng(uu[f][1],uu[f][0]);
                      pl.push(latLng2);
                 }

                var bermudaTriangle = new google.maps.Polygon({
                    paths: pl,
                    strokeColor: '#000000',
                    strokeOpacity: 1,
                    strokeWeight: 1,
                   
                    fillColor: $color1,
                    fillOpacity: 1,
                    name: 'name 1', // dynamic, not an official API property..
                    map: map,
                    content: dt["mapName"] +"</br>"+"Total - "+ dt["total"]
                });

                bermudaTriangle.setMap(map);
                bermudaTriangle.addListener('click', showArrays);    


                            
                          
                 
          }//end for loop
   

        

     }//end setmarkers3


function setMarkers4(map){

  
      const data = @json($mapsdata);

    const thres = [];
    const kalaban = [];
    const akoa = [];
    const poly= [];
  

      for(i = 0;i<data.length;i++){
        const dt = data[i];

          thres.push(dt['threshold']);
          kalaban.push(dt['kalaban']);
          akoa.push(dt['akoa']);
          poly.push(dt['polygons']);


       }

       const tri = [

        new google.maps.LatLng(7.206561693225835, 125.026156805141866), new google.maps.LatLng(7.234250844335328, 125.033735944515428), new google.maps.LatLng(7.262272445488787, 125.033687822995574)

];


      if (akoa[0] > thres[0]) {  


              var bermudaTriangle = new google.maps.Polygon({
                  paths: tri,
                  strokeColor: '#FF0000',
                  strokeOpacity: 0.8,
                  strokeWeight: 1,
                  fillColor: '#FF0000',
                  fillOpacity: 0.35,
                  name: 'name 1', // dynamic, not an official API property..
                  map,
                  
              });
              bermudaTriangle.setMap(map);  

      } else if (kalaban[0] > thres[0]) {      


                  var bermudaTriangle = new google.maps.Polygon({
                      paths: tri,
                      strokeColor: '#000000',
                      strokeOpacity: 0.8,
                      strokeWeight: 1,
                      fillColor: '#000000',
                      fillOpacity: 0.35,
                      name: 'name 1', // dynamic, not an official API property..
                      map,
                      
                  });
                  bermudaTriangle.setMap(map);    
                  
      } else {



                var bermudaTriangle = new google.maps.Polygon({
                    paths: tri,
                    strokeColor: '#ffff00',
                    strokeOpacity: 0.8,
                    strokeWeight: 1,
                    fillColor: '#ffff00',
                    fillOpacity: 0.35,
                    name: 'name 1', // dynamic, not an official API property..
                    map,
                    
                });
                bermudaTriangle.setMap(map);    

};//end of if else
    


const tri1 = [

{ lat: 7.70124, lng: 125.2341 },
{ lat: 7.41420, lng: 125.78012 },
{ lat: 7.2010, lng: 125.21423 },
{ lat: 7.3010, lng: 125.29423 },

];


  
      if (akoa[1] > thres[1]) {


              var bermudaTriangle = new google.maps.Polygon({
                  paths: tri1,
                  strokeColor: '#FF0000',
                  strokeOpacity: 0.8,
                  strokeWeight: 1,
                  fillColor: '#FF0000',
                  fillOpacity: 0.35,
                  name: 'name 1', // dynamic, not an official API property..
                  map,
                  
              });
              bermudaTriangle.setMap(map);    


      } else if (kalaban[1] > thres[1]) {


       var bermudaTriangle = new google.maps.Polygon({
           paths: tri1,
           strokeColor: '#000000',
           strokeOpacity: 0.8,
           strokeWeight: 1,
           fillColor: '#000000',
           fillOpacity: 0.35,
           name: 'name 1', // dynamic, not an official API property..
           map,
           
       });
       bermudaTriangle.setMap(map);    


      } else {

        



                  var bermudaTriangle = new google.maps.Polygon({
                      paths: tri1,
                      strokeColor: '#ffff00',
                      strokeOpacity: 0.8,
                      strokeWeight: 1,
                      fillColor: '#ffff00',
                      fillOpacity: 0.35,
                      name: 'name 1', // dynamic, not an official API property..
                      map,
                      
                  });
                  bermudaTriangle.setMap(map);    







      }//end of if else
 


  
 

}///end setMakers4()
       


    

          // To add the marker to the map, use the 'map' property
        // markers[0] = new google.maps.Marker({
        // position: new google.maps.LatLng(7.01245, 125.03654), // Van Munching Hall,
        // map: map,
        // title: "Van Munching Hall"
        // });

        // markers[1] = new google.maps.Marker({
        // position: new google.maps.LatLng(7.04587, 125.31478), // Smith Store,
        // map: map,
        // title: "The Smith Store",
        // icon: "http://maps.google.com/mapfiles/ms/micons/shopping.png"
        // });



      
    </script>


  </head>
  <body>
    
    <!--The div element for the map -->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXCpt5gBlc00l1y0tD_fivHUA9BosFnVQ&callback=initMap"
      async
    ></script>
  </body>
</html>











