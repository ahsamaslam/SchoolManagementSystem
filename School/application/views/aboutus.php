<?php $this->load->view('templates/header');?>
<style>
    /* body > section{
        display: block;
        position: relative;
        padding: 20rem;
    } */
    #wrapper > section > div{
        padding-top: 150px;

    }
    #wrapper > header > div.topbar.clearfix{     
        margin-bottom: 0px;
    }
    #wrapper > header > div.container{
        background: black;
        margin: 0;
        width: 100%;
        padding-left: 8%;
        padding-right: 33%;
    }
    
</style>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 hidden-sm hidden-xs">
                <div class="custom-module">
                    <img src="assets/upload/device_01.png" alt="" class="img-responsive wow slideInLeft">
                </div><!-- end module -->
            </div><!-- end col -->
            <div class="col-md-8">
                <div class="custom-module p40l">
                    <h2>We are a passionate <mark>learning system</mark> from<br>
                        London. Do beautiful and easy-to-use digital <br>
                        design & web development</h2>

                    <p>Nam dictum sem, ipsum aliquam . Etiam sit amet fringilla lacus. Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Praesent sed nisi eleifend, fermentum orci amet, iaculis libero.</p>

                    <hr class="invis">

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 first">
                            <ul class="check">
                                <li>Custom Shortcodes</li>
                                <li>Visual Page Builder</li>
                                <li>Unlimited Shortcodes</li>
                                <li>Responsive Theme</li>
                                <li>Tons of Layouts</li>
                            </ul><!-- end check -->
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <ul class="check">
                                <li>Font Awesome Icons</li>
                                <li>Pre-Defined Colors</li>
                                <li>AJAX Transitions</li>
                                <li>High Quality Support</li>
                                <li>Unlimited Options</li>
                            </ul><!-- end check -->
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last">
                            <ul class="check">
                                <li>Shopping Layouts</li>
                                <li>Pre-Defined Fonts</li>
                                <li>Style Changers</li>
                                <li>Footer Styles</li>
                                <li>Header Styles</li>
                            </ul><!-- end check -->
                        </div><!-- end col-lg-4 -->
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="btn-wrapper">
                        <a href="#" class="btn btn-primary">Learn More About us</a>
                    </div>

                </div><!-- end module -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<?php $this->load->view('templates/footer');?>