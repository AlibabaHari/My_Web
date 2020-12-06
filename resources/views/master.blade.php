
@include('header')
<style type="text/css">
   .zoom {
 
  background-color: white;
  padding: 20px;
  transition: transform .2s; /* Animation */
  width: 200px;
  height: 250px;
  margin:  auto;
}
 .zoom_image {
 
  background-color: white;

  transition: transform .2s; /* Animation */
  width: 300px;
  height: 300px;
  }

.zoom:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
.zoom_image:hover {
  transform: scale(1.3); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

</style>




