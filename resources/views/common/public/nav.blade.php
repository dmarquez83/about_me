        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">Sobre Mi</li>

                <li><a href="{{ route('home')}}">Inicio</a> <i class="ion-ios-circle-filled color"></i></li>
                <li><a href="{{ route('about_me')}}">Perfil</a></li>
                <li><a href="{{ route('services')}}">Servicios</a></li>
                <li><a href="{{ route('portfolio')}}">Portafolio</a></li>
                <li><a href="contact.html">Contacto</a></li>

                <li class="box-label">Sigueme</li>
                @include('common.public.social')
            </ul>
        </nav>