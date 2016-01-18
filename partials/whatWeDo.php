<article <?php post_class("post post-single"); ?> > <!-- Cache Makers People Block -->
	<div class="cachemakers-content">
     <h2>Things We Do</h2>
     <p>Cache Makers is all about hands on experimental learning. Here are some of the things we work with on a regular basis.</p>
     <div style="text-align:center;">
       <div id="Electronics" class="cachemakers-thingsWeDo">
         <p>Electronics. subtext about the thing that i clicked. We have some really cool things going on in relation to the thing you want to hear about.</p>
         <img src="http://45.55.18.170/wp-content/uploads/2016/01/blueBlock.png">
       </div>

       <div id="Programming" class="cachemakers-thingsWeDo">
         <p>Programming. subtext about the thing that i clicked. We have some really cool things going on in relation to the thing you want to hear about.</p>
         <img src="http://45.55.18.170/wp-content/uploads/2016/01/g67.png">
       </div>

       <div id="Robotics" class="cachemakers-thingsWeDo">
         <p>Robotics. subtext about the thing that i clicked. We have some really cool things going on in relation to the thing you want to hear about.</p>
         <img src="http://45.55.18.170/wp-content/uploads/2016/01/greenBlock.png">
       </div>

       <div id="Mechanical Design" class="cachemakers-thingsWeDo">
         <p>Mechanical. subtext about the thing that i clicked. We have some really cool things going on in relation to the thing you want to hear about.</p>
         <img src="http://45.55.18.170/wp-content/uploads/2016/01/yellowBlock.png">
       </div>

    </div>

    <hr style="width:66%; margin:5% auto;">
    <div style="margin:6%; text-align:center;">
      <div style="display:inline-block; height:200px; width:200px; background-color:#ffffff; opacity:1;">
        <img id="whatWeDo-Image" src="">
      </div>
      <div style="display:inline-block; margin:5%; vertical-align:top; min-width:100px; max-width: 500px;">
        <h3 id="whatWeDo-Header"></h3>
        <p id="whatWeDo-Description"></p>
      </div>
    </div>
  </div>
  <script>

   $('.cachemakers-thingsWeDo').click(function(){update(this);});

   function update(current){
    $('#whatWeDo-Header').html(current.id);
    $('#whatWeDo-Description').html(current.children[0].innerHTML);
    $('#whatWeDo-Image').attr('src', current.children[1].src);
   }
 </script>

</article>
