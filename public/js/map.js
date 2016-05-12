function initMap() {
    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
      center: {lat: 48.8392, lng: 2.58692},
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      scrollwheel: false,
      navigationControlOptions: {style:google.maps.NavigationControlStyle.SMALL}
    });
    var image = "../images/map-marker.png";
    //var image = {url: "http://chart.apis.google.com/chart?chst=d_map_spin&chld=1.3|0|f73c3c|13|b|IMAC"};
    var marker = new google.maps.Marker({
        position: {lat: 48.8392, lng: 2.58692},
        icon: image,
        map: map,
        title: "Les IMAC sont ici !"
    });
    map.set('styles', [
    {
      featureType: 'road',
      elementType: 'geometry',
      stylers: [
        { color: '#dadbd9' },
        { weight: 1.0 }
      ]
    }, {
      featureType: 'landscape',
      elementType: 'geometry',
      stylers: [
        { color: '#f7f7f7' }
      ]
    }, {
      featureType: 'poi.school',
      elementType: 'geometry',
      stylers: [
        { color: '#50d33d' }
      ]
    }
  ]);
}
