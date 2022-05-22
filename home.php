 <section id="bg-bus" class="d-flex align-items-center">
    <div class="container">
      <?php if(!isset($_SESSION['login_id'])): ?>
      	<center><button class="btn btn-info btn-lg" type="button" id="book_now">Book Now</button></center>
      <?php else: ?>
        <h2><marquee>WELCOME! Happy journey</marquee></h2>
         <h2><marquee>The journey is the destination. Stay Safe!! Have a great day!</marquee></h2>
        <a href="/bot/index.php">bot</a>
      <?php endif; ?>
    </div>
  </section>
  <script>
  	$('#book_now').click(function(){
      uni_modal('Find Schedule','book_filter.php')
  })
  </script>