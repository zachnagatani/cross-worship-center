                <!-- Modal -->
        <div class="modal fade" id="contact-us">
            
            <div class="modal-dialog">
            
              <div class="modal-content">
            
                <div class="modal-header">
            
                  <button class="close" data-dismiss="modal">&times;</button>
            
                  <h4 class="modal-title text-center">Contact Us</h4>
            
                </div>
            
                <div class="modal-body">

                <form method="post" role="form" action="php/process.php" id="contact-form">

                   <div class="form-group input-group contact-input">

                    <label for="first-name">Name</label>
                    <!-- <input type="text" class="form-control modal-sign" id="name" name="name" placeholder="John" /> -->
                    <input type="text" class="form-control input-lg" id="contact-name" name="name" placeholder="ex. John Cena" required>

                  </div>

                  <div class="form-group input-group contact-input">

                    <label for="email">Valid Email</label>
                    <!-- <input type="email" class="form-control modal-sign" id="email" name="email" placeholder="example@example.com" /> -->
                    <input type="email" class="form-control input-lg" id="contact-email" name="email" placeholder="ex. example@example.com" required>


                  </div>

                  <div class="form-group">

                    <label for="comment">Comment:</label>

                    <!-- <textarea class="form-control" name="message" placeholder="What's your question, comment, or concern?"></textarea> -->
                    <textarea class="form-control input-lg " id="contact-message" name="message" placeholder="What's on your mind?" rows="5"></textarea>


                  </div>
                  
            
                </div>
            
                <div class="modal-footer">
                     <div id="msgSubmit" class="text-center hidden"><h4>We've Received Your Message! Thanks!</h4></div>
                     <div id="msgFail" class="text-center hidden"><h4>That didn't work. Try double checking your inputs? :)</h4></div>

                  <button class="btn btn-default" data-dismiss="modal">Close</button>
                  <!-- <button class="btn btn-success">Send it!</button>-->
                  <input type="submit" class="btn btn-success" name="contact-submit" value="Send It!"/>
                </div>

                </form>

              </div>

            </div>

          </div>

<!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; The Cross Worship Center 2015</p>
            <p style="font-size: 1em;"> Site by Zach Nagatani.</p>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/grayscale.js"></script>

    <!-- Contact Form Script -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>

</body>

</html>