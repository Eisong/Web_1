<?php
include('php/connect.php');
session_start();
$email = $_SESSION["uname"];
if(!isset($_SESSION["uname"]))
{
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="T@-TRACK SECURE POINT">
    <meta name="author" content="Eisong">
    <meta name="url" content="http://www.maxcowrange.com">
    <meta name="copyright" content="MaxCow Range">
    <meta name="robots" content="index,Buy cow, Range, Affordable cow">
    
    
    <title>Geofencing App</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    
    <title>geofencing</title>
    <style>
        body{
            width: 100%;
        }
        .map{
            width:80%; 
            height: 70vh;
            margin:auto;
        }
    
            .this a{
                color: white;
                background-color: cadetblue;
                padding: 5px;
            }
            .this{
                color: white;
                background-color: cadetblue;
                padding: 3px;
                
            }
            .puss{
                margin-top: -80vh;
                margin-bottom: 300px;
            }
              @media screen and (max-width: 1300px) {
              .puss {
              margin-top:  -80vh;        
                }
              }
        
        </style>
</head>
<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="loader"></div>
      </div>
      <!-- Preloader End -->

      <header id="home" class="home-section">
        
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-6">
                        <div class="logo">
                            <a href="index.php">T@-TRACK SECURE POINT</a>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="index.php">Home<div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="aboutus.html">About</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#services">services</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#contact">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="home-section-background" data-stellar-background-ratio="0.6" style="height: 70px">
            
        </div>

        
    </header>
    <div class="row puss">
        <div class="container">
            <div id="map" class="map">
            </div>
         <div class="col-sm-12">
         <?php
        
        $query = 'SELECT * From user where username = "'.$email.'" ';
        $result = mysqli_query($conn,$query);
            while($row = mysqli_fetch_assoc($result)){
                $lng = $row['lng'];
                $lat = $row['lat'];
                $id = $row['id'];
                
            }
           
        if(mysqli_num_rows($result)==1){
           
           
        }
        else{
            echo 'it dint select';
        }
       ?>
            
            <form action="php/change_co.php" method="post" id="login">
              <h2 class="text-center">Set Co-ordinates</h2>
                
               
                 <div class="col-sm-6">
                   <div class="form-group">
                     <input type="text" id="lat" class="form-control" placeholder="Longitude" name="lng" value="<?php echo $lng ?>">
                    </div>
                   </div>
                           
                  <div class="col-sm-6">
                   <div class="form-group">
                    <input type="text" id="lng" class="form-control" placeholder="Latitude" name="lat" value="<?php echo $lat ?>">
                    </div>
                    
                   </div>
                   <div class="col-sm-12">
                      <!-- <a id="submit" onclick="set()"> set co-ordinates</a> -->
                      <input type="submit" value="submit">
                   <div class="form-group"></div></div>
     
             
                  
             </form>


         </div>
        </div>
        
            </div>

    



    <footer id="contact" class="footer-section">
        <div class="container">
            <div class="row">
               
      <div class="col-md-4 text-left">
       <p><span><a href="#about" class="smoth-scroll">T@-TRACK SECURE POINT</a></span> 
          </div>
               
            <div class="col-md-4 text-left">
                <p>CONTACT US</p>
                <p><i class="fa fa-phone"></i> +234-08168360199, 00234-9026-607399</p>
                <p><i class="fa fa-envelope"></i> racygeo@gmail.com </p>
                <p><i class="fa fa-map-marker"></i> University of Calabar, Calabar;
		              Department of Computer Science,
		          Faculty of Physical Science,
		          Graduating Set of 2019.</p>
               </div>
              
             <div class="col-md-4 uipasta-credit text-right">
                <p>© Copyright 2019 <a href="" target="_blank" title="UiPasta"> Diamonk-Link</a></p>
                </div>
                
             </div>
        </div>
        
    </footer>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-mapevents.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://stuk.github.io/jszip/dist/jszip.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" type="text/javascript" charset="utf-8"></script>

    <script>
        
    //      function set()
    //    {
        
    //        var lng = $('#lng').val();
    //        var lat = $('#lat').val();
    //         makerlat = lat;
    //         makerlng = lng;
    //        alert(lng + " " + lat);
    //        alert(makerlat);
    //    }
        var makerlng = '<?php echo $lng ;?>';//37.21
        var makerlat ='<?php echo $lat ;?>';//-121.2
        const platform = new H.service.Platform({
            "app_id":"0JK53jN7Faa5a5rF35Sz",
            "app_code": "SqWcupOF8jY3JHYYKD0NSw"
        });
        const map = new H.Map(
            document.getElementById('map'),
            platform.createDefaultLayers().normal.map,
            {
                zoom:10,
                 center:{lat: 4.975716, lng: 8.341701}// this is the calabar own
                // center:{lat: 37, lng: -121}
            }
        );
        const mapEvent = new H.mapevents.MapEvents(map);
        const mapBehavior =new H.mapevents.Behavior(mapEvent);
        const LineString =new H.geo.LineString();

        LineString.pushPoint({lat: 5.05, lng: 8.34});
        LineString.pushPoint({lat: 4.9, lng: 8.38});
        LineString.pushPoint({lat: 4.9, lng: 8.3});
        LineString.pushPoint({lat: 5.05, lng: 8.34});//this is the calabar own

        // LineString.pushPoint({lat: 37, lng: -121});
        // LineString.pushPoint({lat: 37.2, lng: -121.002});
        // LineString.pushPoint({lat: 37.2, lng: -121.2});
        // LineString.pushPoint({lat: 37, lng: -121});

        const polygon =new H.map.Polygon(LineString);
        map.addObject(polygon);
        
        const geometry = polygon.getGeometry();
        const wkt = geometry.toString();
        
        console.log(wkt);
        const zip = new JSZip();
        zip.file('data.wkt', 'NAME\tWKT\n' + 'testfence' +'\t' + wkt);
        zip.generateAsync({
            type:'blob'
        }).then(content =>{
            var formdata = new FormData()
            formdata.append('zipefile',content);
            axios.post('https://gfe.api.here.com/2/layers/upload.json', formdata,{
                headers:{
                    "content-type": "multipart/form-data"
                },
                params:{
                    "app_id":"0JK53jN7Faa5a5rF35Sz",
                    "app_code": "SqWcupOF8jY3JHYYKD0NSw",
                    "layer_id" :"5678"
                }
            }).then(result=>{
                console.log(result);
            },err =>{
                console.error(err);
            });
        },err =>{
            console.error(err);
        })
        
        
        var marker = new H.map.Marker({lat : makerlat, lng: makerlng});
        var geofencing =platform.getGeofencingService();
        map.addObject(marker);
        map.addEventListener('tap', ev=>{
            var target = ev.target;
            map.removeObject(marker);
            marker = new H.map.Marker(map.screenToGeo(ev.currentPointer.viewportX, ev.currentPointer.viewportY));
            map.addObject(marker);
            geofencing.request(
                H.service.extension.geofencing.Service.EntryPoint.SEARCH_PROXIMITY,
                {
                    'layer_ids': '5678',
                    'proximity': marker.getPosition().lat + "," + marker.getPosition().lng,
                    'key_attributes':["NAME"]
                },
                result =>{
                    if(result.geometries.length > 0)
                    {
                    alert('You Are Within The Boundary');
                    console.log(result);
                    }
                    else{
                        alert('You Are Not In The Boundary');
                    }
                },
                err=>{
                    
                    console.error(err);
                }
            );
        });
      
        window.addEventListener('load', ev=>{
            var target = ev.target;
            // map.removeObject(marker);
            // marker = new H.map.Marker(map.screenToGeo(ev.currentPointer.viewportX, ev.currentPointer.viewportY));
            // map.addObject(marker);
            geofencing.request(
                H.service.extension.geofencing.Service.EntryPoint.SEARCH_PROXIMITY,
                {
                    'layer_ids': '5678',
                    'proximity': marker.getPosition().lat + "," + marker.getPosition().lng,
                    'key_attributes':["NAME"]
                },
                result =>{
                    if(result.geometries.length > 0)
                    {
                    alert('You Are Within The Boundary');
                    console.log(result);
                    }
                    else{
                        alert('You Are Not In The Boundary');
                    }
                },
                err=>{
                    console.log('not so much');
                    console.error(err);
                }
            );
        });
        </script>

<a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
<!-- Back to Top End -->


<!-- All Javascript Plugins  -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/plugin.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0HAKwKinpoFKNGUwRBgkrKhF-sIqFUNA"></script>

<!-- Main Javascript File  -->
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/scot.js"></script>

</body>
</html>