<li class="{{request()->is('home')? 'active':''}}">
    <a href="{{route('home')}}">
        <i class="material-icons">home</i>
        <span>Inicio</span>
    </a>
</li>
@if(Auth::user()->hasPermiso('users.index'))
<li class="{{request()->is('users*')? 'active':''}}">
    <a href="{{route('users.index')}}">
        <i class="material-icons">people</i>
        <span>Usuarios</span>
    </a>
</li>
@endif

@if(Auth::user()->hasPermiso('tarifas.index'))
<li class="{{request()->is('tarifas*')? 'active':''}}">
    <a href="{{route('tarifas.index')}}">
        <i class="material-icons">assignment</i>
        <span>Tarifas</span>
    </a>
</li>
@endif

@if(Auth::user()->hasPermiso('propietarios.index'))
<li class="{{request()->is('propietarios*')? 'active':''}}">
    <a href="{{route('propietarios.index')}}">
        <i class="material-icons">face</i>
        <span>Propietarios</span>
    </a>
</li>
@endif

@if(Auth::user()->hasPermiso('vehiculos.index'))
<li class="{{request()->is('vehiculos*')? 'active':''}}">
    <a href="{{route('vehiculos.index')}}">
        <i class="material-icons">directions_car</i>
        <span>Vehiculos</span>
    </a>
</li>
@endif

@if(Auth::user()->hasPermiso('tipos.index'))
<li class="{{request()->is('tipos*')? 'active':''}}">
    <a href="{{route('tipos.index')}}">
        <i class="material-icons">view_list</i>
        <span>Tipos de vehiculos</span>
    </a>
</li>
@endif

@if(Auth::user()->hasPermiso('secciones.index'))
<li class="{{request()->is('secciones*')? 'active':''}}">
    <a href="{{route('secciones.index')}}">
        <i class="material-icons">border_all</i>
        <span>Secciones</span>
    </a>
</li>
@endif



@if(Auth::user()->hasPermiso('cobros.index'))
 <li class="{{request()->is('cobros*')? 'active':''}}">
    <a href="{{route('cobros.index')}}">
        <i class="material-icons">attach_money</i>
        <span>Cobros</span>
    </a>
</li>
@endif

@if(Auth::user()->hasPermiso('ingresos_salidas.index'))
<li class="{{request()->is('ingresos_salidas*')? 'active':''}}">
    <a href="{{route('ingresos_salidas.index')}}">
        <i class="material-icons">content_paste</i>
        <span>Ingresos y salidas</span>
    </a>
</li>
@endif

@if(Auth::user()->hasPermiso('reportes.index'))
<li class="{{request()->is('reportes*')? 'active':''}}">
    <a href="{{route('reportes.index')}}">
        <i class="material-icons">assessment</i>
        <span>Reportes</span>
    </a>
</li>
@endif

@if(Auth::user()->hasPermiso('empresa.index'))
<li class="{{request()->is('empresa*')? 'active':''}}">
    <a href="{{route('empresa.index')}}">
        <i class="material-icons">business</i>
        <span>Configuración</span>
    </a>
</li>
@endif