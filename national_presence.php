<?php require 'header.php'; ?>
<style>
    #top-building{
        background: url(assets/images/resource/contact-bg.jpg);
    }    
    .slider-description, .slider-main-title, .section-main-title.contact, .contact-discription, .faq-title h4, .call-do-title, .counter-content h5, .counter-numbar h4, .counter-numbar span, .breatcome-title h1{
		text-shadow: 1px 4px 6px black;
	} 
    .vbox-inline{
		width: 960px;
    	height: 720px;
		margin-top: -200px !important;
		overflow: hidden;
	}
	.vbox-inline video{
		margin-top: 15%;
		margin-left: 10%;
		width: 80% !important;
		height: 80%;
	}
	.eulding-btn{
		display: block;		
	}
	.eulding-btn a{
		width: 415px;
		text-align: center;
	}
</style>
<!--==================================================-->
<!-- Start Euildint Breatcome Area -->
<!--==================================================-->
<div class="breatcome-area" id="top-building">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">
                        <h1>National Presence</h1>
                    </div>
                    <div class="bratcome-text"> 
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>National Presence</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- Start Euildint Map Area -->
<!--==================================================-->
<div class="map-area" style="margin-bottom: 120px; margin-top: 70px">
    <div class="container-fluid p-0">
    <div class="row">
            <div class="col-lg-12">
                <!-- start section title -->
                <div class="section-title text-center">
                    <div class="section-shape">
                        <img src="assets/images/resource/section-shape.png" alt="">
                    </div>
                    <div class="section-sub-title">
                        <h4>PROJECTS</h4>
                    </div>
                    <div class="section-main-title">
                        <h2>Locations of Our Projects </h2>
                        <h2>Throughout The U.S.</h2>
                    </div>
                </div>
                <!-- End section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="map" style="width:100%;height:500px;"></div>
                <!-- <iframe id="map_home" src="https://www.google.com/maps/d/embed?mid=15pzP_D5CR59IjAgO1_dJAvUPkIVOKnQ&ehbc=2E312F&noprof=1" width="1920" height="608" style="border: 0px;" allowfullscreen="" loading="lazy"></iframe> -->
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Euildint Map Area -->
<!--==================================================--> 

<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDnJF7TpAgieAe_Z3E34ZIaaCZR88Vrli8&libraries=places&v=weekly&callback=Function.prototype" defer></script>
    
<script>

/**
 * This sample sets the gesture handling mode to 'cooperative',
 * which means that on a mobile device, the user must swipe with one
 * finger to scroll the page and two fingers to pan the map.
 */
function initMap() {
  const center = { lat: -25.363, lng: 131.044 };
  const zoom = 4;

  new google.maps.Map(document.getElementById("map"), {
    zoom,
    center,
    gestureHandling: "cooperative",
  });
}

window.initMap = initMap;

</script>

<?php require 'footer.php'; ?>