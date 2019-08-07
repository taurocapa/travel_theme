<?php
/**
 * Template Name: inquiry 
*/

get_header( );
?>

<body id="inquiry">

    <div class="message">
        
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>

                <div class="row modal-top m-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="inquiry-title p-3">Where you Want, yes. You can make your dreems's trip with us</h4>
                        </div>
                    </div>
                    <div class="row m-auto">
                        <p class="text-center">
                            Get free information. Don't worry, <span style="color:yellow">we respect your privacy!
                        </span></p>
                    </div>
                </div>


                <div class="modal-body p-5">
                    <form>
                        <div class="form-group">
                            <label for="recipient-where" class="col-form-label">Where would you like to go:</label>
                            <input type="text" class="form-control" id="recipient-where">
                        </div>
                        <div class="col-md-4 form-group p-0 mt-1">
                            <label for="recipient-when" class="col-form-label">When:</label>
                            <input type="date" class="form-control" id="recipient-when">

                        </div>
                        <div class="row p-3 mt-1">
                            <div class="col-md-6 p-1">
                                <label for="recipient-first-name" class="col-form-label">First Name:</label>
                                <input type="text" class="form-control" id="recipient-first-name">
                            </div>
                            <div class="col-md-6 p-1 ">
                                <label for="recipient-last-name" class="col-form-label">Last Name:</label>
                                <input type="text" class="form-control" id="recipient-last-name">
                            </div>
                        </div>
                        <div class="form-group mt-1">
                            <label for="recipient-email" class="col-form-label">e-mail:</label>
                            <input type="text" class="form-control" id="recipient-email">
                        </div>
                        <div class="form-group mt-1">
                            <label for="recipient-phone" class="col-form-label">phone:</label>
                            <input type="text" class="form-control" id="recipient-phone">
                        </div>

                        <div class="form-group mt-1">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                    <button type="submit" class="btn  e-option" data-dismiss="modal" id="button-inquiry" onclick="inquiry_call()">Submit Inquiry</button>
                </div>
            </div>
        </div>
    </div>
</body>

<?php get_footer(  );?>