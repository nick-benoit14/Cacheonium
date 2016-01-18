<article <?php post_class("post post-single"); ?> > <!-- Cache Makers People Block -->
	<div class="cachemakers-content">
     <h2>Things We Do</h2>
     <div style="text-align:center;">
       <div id="Electronics" class="cachemakers-thingsWeDo"><p>Electronics. subtext about the thing that i clicked. We have some really cool things going on in relation to the thing you want to hear about.</p></div>
       <div id="Programming" class="cachemakers-thingsWeDo"><p>Programming. subtext about the thing that i clicked. We have some really cool things going on in relation to the thing you want to hear about.</p></div>
       <div id="Mechanical Design" class="cachemakers-thingsWeDo"><p>Mechanical. subtext about the thing that i clicked. We have some really cool things going on in relation to the thing you want to hear about.</p></div>
       <div id="Robotics" class="cachemakers-thingsWeDo"><p>Robotics. subtext about the thing that i clicked. We have some really cool things going on in relation to the thing you want to hear about.</p></div>
    </div>

    <hr style="width:66%; margin:5% auto;">
    <div style="margin:6%; text-align:center;">
      <div class="cachemakers-thingsWeDo"></div>
      <div style="display:inline-block; margin:5%; vertical-align:top; min-width:100px; max-width: 500px;">
        <h3 id="whatWeDo-Header">The Thing I Clicked</h3>
        <p id="whatWeDo-Description">subtext about the thing that i clicked. We have some really cool things going on in relation to the thing you want to hear about.</p>
      </div>
    </div>
  </div>
  <script>

   $('.cachemakers-thingsWeDo').click(function(){update(this);});

   function update(current){
    $('#whatWeDo-Header').html(current.id);
    $('#whatWeDo-Description').html(current.dataset.description);
   }
 </script>

</article>
