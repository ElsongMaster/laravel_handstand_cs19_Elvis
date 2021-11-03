       <!-- Start of Map Area -->
        {{-- <div class="map-area"> --}}
            <!-- google-map-area start -->
            {{-- <div class="google-map-area"> --}}
                <!--  Map Section -->
                {{-- <div id="contacts" class="map-area"> --}}
                    {{-- <div id="googleMap" style="width:100%;height:380px;"></div> --}}
                {{-- </div> --}}
            {{-- </div> --}}
        {{-- </div> --}}
        <!-- End of Map Area -->


{{-- <iframe src="https://www.google.com/maps?q=[Boulevard Edmond machtens ]&output=embed" width="100%" height="380px"></iframe> --}}

{{-- <iframe src="https://www.google.com/maps?q=Randall Miller %26 Associates 300 E Broadway, Logansport, IN 46947&output=embed" width="100%" height="380px"></iframe> --}}
{{-- <iframe src="https://www.google.com/maps?q=[Boulevard%Edmond%machtens%152%,%Bruxelles%,%IN%1080]&output=embed" width="100%" height="380px"></iframe> --}}

{{-- <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="380" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div> --}}
{{-- {{dd(str_replace(' ','%20',$map->street))}} --}}
<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="380" id="gmap_canvas" src="https://maps.google.com/maps?q={{$map->numero}}%20{{str_replace(' ','%20',$map->street)}},%20{{$map->city}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>