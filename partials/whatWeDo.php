<article <?php post_class("post post-single"); ?> > <!-- Cache Makers People Block -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<div class="cachemakers-content">
     <h2>Things We Do</h2>
     <p>Cache Makers is all about hands on experimental learning. Here are some of the things we work with on a regular basis.</p>
     <div style="text-align:center;">
       <div id="Electronics" class="cachemakers-thingsWeDo">
         <p>Electronics is a classical pursuit of the maker. No self respecting makerspace would be complete without some cool electrical projects.
           From basic soldering, blinky christmas tree ornaments, microcontrollers and robotic arms that can draw pictures, there awaits you some cool
            combination of electrical components that you will think is neat.</p>
         <img src="http://45.55.18.170/wp-content/uploads/2016/01/blueBlock.png">
       </div>

       <div id="Programming" class="cachemakers-thingsWeDo">
         <p>You may not be allowed to tell your parents, friends, or family what to do. Your computationally inclined electronic friends however are another story.
            Come learn how to speak with your computer to tell it exactly what you want it to do.</p>
         <img src="http://45.55.18.170/wp-content/uploads/2016/01/g67.png">
       </div>

       <div id="Robotics" class="cachemakers-thingsWeDo">
         <p>Researchers have found that robotics might actually be the coolest thing that there is. Come build your own bot that can walk, talk, and do cool stuff.
            Or maybe start with one that can roll its way along a line you drew on the ground.</p>
         <img src="http://45.55.18.170/wp-content/uploads/2016/01/greenBlock.png">
       </div>

       <div id="Mechanical Design" class="cachemakers-thingsWeDo">
         <p>If you can dream it up, we can make it real. Design the world around you and then turn it into reality with our 3-D printers!</p>
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

   update(document.getElementById("Electronics"));
 </script>

</article>
