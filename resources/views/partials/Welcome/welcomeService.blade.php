{{-- <section class="site-section-small section-services">
    <div class="container">
        <div class="text-center">
            <h3 class="section-title">We Are The Best</h3>
            <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row">
            @foreach ($homecontents as $homecontent)
                    <div class="col-sm-5 col-sm-offset-1 col-xs-6">
                        <div class="service">
                            <div class="service-icon">
                                <i class="{{ $homecontent->icon }}" aria-hidden="true"></i>
                            </div><!-- /.service-icon -->
                            <div class="service-content">
                                <h4 class="service-title">{{ $homecontent->title }}</h4>
                                <p>{{ $homecontent->text }}</p>
                            </div><!-- /.service-content -->
                        </div><!-- /.service -->
                    </div>
        </div>
        <div class="col-sm-5 col-xs-6">
            @endforeach
        </div>
    </div>
</section><!-- /.section-services --> --}}



<section class="site-section-small section-services">
    <div class="container">
        <div class="text-center">
            <h3 class="section-title">We Are The Best</h3>
            <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1 col-xs-6">
                <div class="service">
                    <div class="service-icon">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                    </div><!-- /.service-icon -->
                    <div class="service-content">
                        <h4 class="service-title">Clean Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div><!-- /.service-content -->
                </div><!-- /.service -->
                <div class="service">
                    <div class="service-icon">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                    </div><!-- /.service-icon -->
                    <div class="service-content">
                        <h4 class="service-title">Customizable</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div><!-- /.service-content -->
                </div><!-- /.service -->
            </div>
            <div class="col-sm-5 col-sm-offset-1 col-xs-6">
                <div class="service">
                    <div class="service-icon">
                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                    </div><!-- /.service-icon -->
                    <div class="service-content">
                        <h4 class="service-title">Responsive Layout</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div><!-- /.service-content -->
                </div><!-- /.service -->
                <div class="service">
                    <div class="service-icon">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    </div><!-- /.service-icon -->
                    <div class="service-content">
                        <h4 class="service-title">Multi-Purpose</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div><!-- /.service-content -->
                </div><!-- /.service -->
            </div>
        </div>
        <div class="row">
            @foreach ($homecontents as $homecontent)
                <div class="col-sm-5 col-sm-offset-1 col-xs-6" id="foreachContent">
                    <!-- {{-- {{dd($loop)}} --}} -->
                    <div class="service">
                        <div class="service-icon">
                            <i class="{{ $homecontent->icon }}" aria-hidden="true"></i>
                        </div><!-- /.service-icon -->
                        <div class="service-content">
                            <h4 class="service-title">{{ $homecontent->title }}</h4>
                            <p>{{ $homecontent->text }}</p>
                        </div><!-- /.service-content -->
                    </div><!-- /.service -->
                </div>
            @endforeach
        </div>
    </div>
</section><!-- /.section-services -->



















<!-- <div class="service">
    <div class="service-icon">
        <i class="fa fa-wrench" aria-hidden="true"></i>
    </div>
    <div class="service-content">
        <h4 class="service-title">Customizable</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
    </div>
</div> -->
