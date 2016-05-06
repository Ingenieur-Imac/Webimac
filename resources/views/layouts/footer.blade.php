<!--<div class="slanted"></div>-->

<div class="container">
    <div class="useful-informations clearfix">
        <p class="title-2">{{trans("messages.ftr-t")}}</p>
        <div class="useful-links">
            <!-- <a class="simple-primary-btn" href="#">FAQ</a> -->
            <a class="simple-primary-btn" href="{{action('PagesController@contact')}}">{{trans("messages.ftr-contact")}}</a>
            <div class="social-media">
                <a href="https://www.linkedin.com/grps/Ing%C3%A9nieur-IMAC-3693605/about?" target="_blank">
                    <span class="icon-linkedin color"></span>
                </a>
                <a href="https://www.facebook.com/ingenieur.imac.officiel/" target="_blank">
                    <span class="icon-facebook color"></span>
                </a>
                <a href="https://twitter.com/imac_ingenieur" target="_blank">
                    <span class="icon-twitter-bird color"></span>
                </a>
            </div>
        </div>
        <div class="col-3">
            <span class="lnr lnr-map-marker lnr-bigger color"></span>
            <p class="contact">
                IMAC - ESIPE<br />
                5 boulevard Descartes<br />
                77420 Champs-sur-Marne
            </p>
        </div>
        <div class="col-3">
            <span class="lnr lnr-phone lnr-bigger color"></span>
            <p class="contact">01.60.95.72.16</p>
        </div>
        <div class="col-3">
            <span class="lnr lnr-envelope lnr-bigger color"></span>
            <p class="contact">sec.imac[at]u-pem.fr</p>
        </div>
    </div>

    <div class="col-3">
        <img class="logo-imac" src="{{URL::asset('images/logoIMACblanc.png')}}" alt="Logo IMAC" />
        <h2 class="title-2">{{trans("messages.ftr-ctn-2-t")}}</h2>
        <p>{{trans("messages.ftr-ctn-2-c")}}</p>
            <a href="http://www.u-pem.fr/" target="_blank">
                <img src="{{URL::asset('images/UPEM_LOGO_EDITION_BLANC72DPI.png')}}" alt="Logo UPEM" />
            </a>
            <a href="http://esipe.u-pem.fr/" target="_blank">
                <img src="{{URL::asset('images/UPEM-ESIPE-V2-BLANC72DPI.png')}}" alt="Logo ESIPE" />
            </a>
            <a href="http://www.cti-commission.fr/" target="_blank">
                <img src="{{URL::asset('images/cti_logo_gris.png')}}" alt="Logo CTI" />
            </a>
    </div>
</div>

<div class="end-footer">
    <p>&copy; IMAC <?php echo date('Y'); ?> |
        <!--<a href="#">Plan du site</a> |-->
        <a href="{{action('PagesController@legalNotice')}}">{{trans("messages.ftr-ctn-3-c")}}</a>
    </p>
</div>
