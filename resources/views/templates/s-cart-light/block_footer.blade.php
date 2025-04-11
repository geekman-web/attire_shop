      <!-- Page Footer-->
      <footer class="section footer-classic">
        <div class="footer-classic-body section-lg bg-brown-2">
          <div class="container">
            <div class="row row-40 row-md-50 justify-content-xl-between">
              <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInRight">
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInRight" data-wow-delay=".1s">
                <h4 class="footer-classic-title">{{ sc_language_render('about.page_title') }}</h4>
                <ul class="contacts-creative">
                  <li>
                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                      <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                      <div class="unit-body"><a href="#">{{ sc_language_render('store.address') }}: {{ sc_store('address', ($storeId ?? null)) }}</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                      <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                      <div class="unit-body"><a href="tel:#">{{ sc_language_render('store.hotline') }}: {{ sc_store('long_phone', ($storeId ?? null)) }}</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                      <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                      <div class="unit-body"><a href="mailto:#{{ sc_store('email', ($storeId ?? null)) }}">{{ sc_language_render('store.email') }}: {{ sc_store('email', ($storeId ?? null)) }}</a></div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                <h4 class="footer-classic-title">Links</h4>
                <!-- RD Mailform-->
                <ul class="contacts-creative">
                  <li><a href="t-shirt-designer">T-Shirt Deisgner</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="footer-classic-panel">
          <div class="container">
            <div class="row row-10 align-items-center justify-content-sm-between">
              <div class="col-md-auto">
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>{{ sc_store('title', ($storeId ?? null)) }}</span><span>.&nbsp; All rights reserved</span></p>
              </div>
              @if (sc_config('fanpage_url'))
              <div class="col-md-auto order-md-1">
                <!-- Stuff here -->
              </div>
              @endif
              @if (!sc_config('hidden_copyright_footer'))
              <div class="col-md-auto">
                    <!--Stuff here-->
              </div>
              @endif
            </div>
          </div>
        </div>
      </footer>
