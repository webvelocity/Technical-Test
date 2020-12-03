<footer>
    <div class="container">
        <div class="row px-4 px-md-3">
            <div class="col-md-6 col-lg-7">
                <img src="{{asset('img/vivid-logo.svg')}}" alt="Vivid Footer Logo" class="footer-logo">
                <p class="tagline my-4 pt-lg-2">More homes, bright futures</p>
                <address>
                    Peninsular House, Wharf Road, Portsmouth, PO2 8HB
                </address>
                <p class="desc">
                    VIVID Housing Limited is registered in England and Wales as a registered society under the
                    Co-operative
                    and Community Benefit Societies Act 2014 under number 7544 with exempt charity status and as a
                    registered provider of social housing with the Homes and Communities Agency under number 4850. Our
                    registered o!ce is at Peninsular House, Wharf Road, Portsmouth, Hampshire, PO2
                </p>
            </div>

            <div class="col-md-5 col-lg-4 offset-md-1">

                <form class="searchbox-container mb-5 d-none d-md-inline-flex">
                    @csrf
                    <input type="search" class="searchbox" name="q" autocomplete="off" placeholder="Search By keyword"/>
                    <button type="submit" class="searchbutton fa fa-search"></button>
                </form>

                <h5 class="headings">About us</h5>
                <p>Who we are and <a href="/what-we-do" class="text-dark"><u>what we do</u></a></p>

                <h5 class="headings">Contact us</h5>
                <p>We’ve lots of ways to <a href="/what-we-do" class="text-dark"><u>get in touch</u></a></p>

            </div>
        </div>

        <div class="row px-4 px-md-3 mt-3 mt-md-5">
            <div class="col-12">
                <div class="social-icons">
                    <ul class="d-flex flex-row list-unstyled">
                        {{--                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        {{--                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3 mt-md-5">
        <div class="row footer-nav">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 py-3 px-4 px-md-3">
                        <nav arial-label="Footer navigation">
                            <ul class="m-0 d-flex list-unstyled">
                                <li><a href="#">Accessibility</a></li>
                                <li><a href="#">Policies</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#" class="d-none d-md-block">Cookies</a></li>
                                <li><a href="#" class="d-none d-md-block">Sitemap</a></li>
                                <li><a href="#" class="d-none d-md-block">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

