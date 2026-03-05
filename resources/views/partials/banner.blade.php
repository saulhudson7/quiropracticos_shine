<!-- Start Banner -->
<div class="ulockd-home-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="pogoSlider" id="js-main-slider">

                @foreach($carrucelImg as $slide)
                <div class="pogoSlider-slide" 
                     data-transition="fade" 
                     data-duration="1500" 
                    style="background-image:url('{{ asset('images/carrucel/' . $slide->imagen) }}');">
                    <div class="lbox-caption pogoSlider-slide-element">
                        <div class="lbox-details">
                            <h1>{{ $slide->titulo }}</h1>
                            <p>{{ $slide->descripcion }}</p>
                            @if(!empty($slide->btn_text) && !empty($slide->btn_link))
                                <a href="{{ $slide->btn_link }}" class="btn">{{ $slide->btn_text }}</a>
                            @else
                                <a href="#" class="btn">Contactanos</a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach

            </div><!-- .pogoSlider -->
        </div>
    </div>
</div>
<!-- End Banner -->
