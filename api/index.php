<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="assets/custom.css">
    <title>Subscription Form</title>
</head>

<body>

    <div class="container">


        <div class="section-block d-flex justify-content-center align-items-center">
            <div class="left-section">
                <img src="assets/reading_04.jpg" alt="Company Logo" class="img-fluid rounded">
            </div>
            <div class="right-section">

                <p class="big-title">This reading list includes the 100 most important and impactful books I&#8217;ve
                    ever read.</p>

                <p class="second-text">Where Should I Send It?</p>

                <form id="subscriptionForm">
                    <div class="form-group">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
                    </div>

                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email Address" required>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="subscribe" id="subscribe">
                        <label class="form-check-label" for="subscribe">I consent to being added to Chris Williamson's
                            mailing list</label>
                    </div>

                    <button type="submit" class="btn submit" id="subscribeButton"><span class="">⇨ Get the FREE Reading
                            List now.</span></button>

                </form>

                <div Class="d-none alert-message">
                    <ul class="alert alert-error" data-element="errors" data-group="alert"></ul>
                    <div class="alert alert-success" data-element="success" data-group="alert">Success! Now check your email to confirm your subscription.</div>
                </div>

                <p class="bottom-text">Your email will always remain private</p>

            </div>
        </div>


        <span class="copy-text">Copyright 2023 Chris Williamson. All Rights Reserved</span>


    </div>


    <div class="modal fade" id="subscriptionModal" tabindex="-1" role="dialog" aria-labelledby="subscriptionModalLabel" aria-hidden="true">

        <button type="button" class="close-mobile close" data-dismiss="modal" aria-label="Close">
            <svg viewBox="0 0 24 24" style="font-size: inherit;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor">
                <path d="M7.53 6.47a.75.75 0 0 0-1.06 1.06L10.94 12l-4.47 4.47a.75.75 0 1 0 1.06 1.06L12 13.06l4.47 4.47a.75.75 0 1 0 1.06-1.06L13.06 12l4.47-4.47a.75.75 0 0 0-1.06-1.06L12 10.94 7.53 6.47z"></path>
            </svg>
        </button>

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <!-- Modal Body -->
                <div class="modal-body">

                    <!-- Modal Header -->
                    <div class="header">
                        <div class="valide d-flex flex-row justify-center items-center">
                            <svg class="fill-current inline-block overflow-visible w-8 h-8 text-green-500 my-1" name="check-circle" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" style="font-size: inherit;">
                                <path d="M16.016 10.133a.75.75 0 1 0-1.06-1.06l-4.359 4.358-1.623-1.622a.75.75 0 0 0-1.06 1.06l2.167 2.167a.75.75 0 0 0 1.168-.135l2.384-2.384 2.383-2.384z"></path>
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM3.75 12a8.25 8.25 0 1 1 16.5 0 8.25 8.25 0 0 1-16.5 0z" clip-rule="evenodd"></path>
                            </svg>
                            <div class="head-title col-md-11 flex flex-col gap-2">
                                <h1 class="text-2xl font-semibold pr-4 leading-10">Thanks for subscribing!</h1>
                                <p class="pb-6 text-sm leading-6">These are fellow creators that I follow and you should too. Check them out!</p>
                            </div>

                            <button type="button" class="close-desk close" data-dismiss="modal" aria-label="Close">
                                <svg viewBox="0 0 24 24" style="font-size: inherit;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor">
                                    <path d="M7.53 6.47a.75.75 0 0 0-1.06 1.06L10.94 12l-4.47 4.47a.75.75 0 1 0 1.06 1.06L12 13.06l4.47 4.47a.75.75 0 1 0 1.06-1.06L13.06 12l4.47-4.47a.75.75 0 0 0-1.06-1.06L12 10.94 7.53 6.47z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="deselectAll d-flex flex-row justify-end items-end">
                            <button id="deselectAllButton" class="border-none outline-none focus:outline-none" style="line-height: 22px;">
                                <span class="text-sm font-semibold text-gray-800 py-2">Deselect all</span>
                            </button>
                        </div>
                    </div>

                    <hr>

                    <div id="modalBody">

                        <!-- Content will be dynamically added here -->

                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn-later-modal btn btn-secondary" data-dismiss="modal">Maybe Later</button>
                    <button type="button" class="btn-subscribe-modal btn btn-danger" onclick="subscribe()">Subscribe</button>
                </div>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="assets/main.js"></script>
</body>

</html>