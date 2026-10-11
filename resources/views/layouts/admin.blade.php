<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>PARQUEO</title>

    <!-- Google Fonts -->
    <link rel="stylesheet" href="{{ asset('google-fonts/roboto.css') }}">
    <link rel="stylesheet" href="{{ asset('google-fonts/material-icons.css') }}">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('AdminBSBMaterialDesign-master/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    @yield('css')

    <!-- Custom Css -->
    <link href="{{ asset('AdminBSBMaterialDesign-master/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('AdminBSBMaterialDesign-master/css/themes/all-themes.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/notificaciones.css') }}">

    <!-- Sweet Alert Css -->
    <link href="{{ asset('AdminBSBMaterialDesign-master/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

    <style type="text/css">
        div.form-group.contenedor_subir {
            position: relative;
        }

        #foto {
            max-width: 100%;
        }

        .subir {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background: #f55d3e;
            color: #fff;
            border: 0px solid #fff;
            position: absolute;
            top: 0;
            width: 100%
        }

        .subir span {
            margin-left: 5px;
        }

        .subir:hover {
            cursor: pointer;
            color: #fff;
            background: #F44336;
        }

        .contenedor_foto {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .contenedor_subir .form-line.error {
            position: relative;
        }

        .contenedor_subir label.error {
            position: absolute;
            bottom: -40px;
        }

        #m_propietario {
            overflow: auto !important;
        }

        #m_vehiculo {
            overflow: auto !important;
        }
    </style>

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Por favor espera...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar bg2">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{ route('home') }}">@yield('nom_empresa')</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::user()->tipo == 'AUXILIAR')
                        <li class="oculto" id="cobros_pendientes">
                            <a href="#" data-toggle="modal" data-target="#m_cobro">
                                <i class="material-icons" data-toggle="tooltip" data-placement="bottom"
                                    title="Tienes un cobro pendiente">alarm</i>
                            </a>
                        </li>
                        <li class="oculto" id="registro_vehiculo">
                            <a href="#" data-toggle="modal" data-target="#m_vehiculo">
                                <i class="material-icons" data-toggle="tooltip" data-placement="bottom"
                                    title="Tienes un registro pendiente">directions_car</i>
                            </a>
                        </li>
                    @endif

                    @if (Auth::user()->tipo == 'ADMINISTRADOR')
                        <li>
                            <a href="{{ route('controles.index') }}" data-toggle="tooltip" data-placement="bottom"
                                title="Controladores">
                                <i class="material-icons">airplay</i>
                            </a>
                        </li>
                    @endif
                    <li class="dropdown">
                        <a href="javascript:void(0);" id="marca_visto" class="dropdown-toggle" data-toggle="dropdown"
                            role="button">
                            <i class="material-icons" data-toggle="tooltip" data-placement="bottom"
                                title="Notificaciones">notifications</i>
                            <span class="label-count" id="span_notis">0</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICACIONES</li>
                            <li class="body">
                                <ul class="menu" id="contenedor_notis">
                                    {{-- <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li> --}}
                                </ul>
                            </li>
                            {{-- <li class="footer">
                                <a href="">Ver todas las notificaciones</a>
                            </li> --}}
                        </ul>
                    </li>
                    <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="material-icons">power_settings_new</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ asset('imgs/users/' . Auth::user()->foto) }}" width="55" height="55"
                        alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if (Auth::user()->datosUsuario)
                            {{ Auth::user()->datosUsuario->nom }} {{ Auth::user()->datosUsuario->apep }}
                            {{ Auth::user()->datosUsuario->apem }}
                        @else
                            {{ Auth::user()->name }}
                        @endif
                    </div>
                    <div class="email">
                        {{ Auth::user()->tipo }}
                    </div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{ route('users.config', Auth::user()->id) }}"><i
                                        class="material-icons">person</i>Perfil</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    <i class="material-icons">input</i>Salir
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu bg1">
                <ul class="list">
                    <li class="header">NAVEGACIÓN PRINCIPAL</li>
                    @if (Auth::user()->tipo == 'ADMINISTRADOR')
                        @include('includes.menu_admin')
                    @endif
                    @if (Auth::user()->tipo == 'AUXILIAR')
                        @include('includes.menu_auxiliar')
                    @endif
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; {{ date('Y') }} <a
                        href="javascript:void(0);">{{ App\Models\Empresa::first()->name }}</a>
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    {{-- COBROS --}}
    <input type="text" id="url_salidas" value="{{ route('cobros.control') }}" hidden>
    @include('modales.salida')
    @include('modales.vehiculo')
    @include('modales.propietario')
    @include('modales.ubicacion')
    {{-- FIN COBROS --}}

    {{-- URL'S Y TOKEN --}}
    <input type="text" name="url_notis_foco" id="url_notis_foco" value="{{ route('ingresos_salidas.index') }}"
        hidden>
    <input type="text" name="url_visto" id="url_visto" value="{{ route('notificaciones.update') }}" hidden>
    <input type="text" name="url_notificaciones" id="url_notificaciones"
        value="{{ route('home.notificaciones') }}" hidden>
    <input type="text" value="{{ asset('imgs') }}" id="url_imgs" hidden>
    <input type="text" value="{{ csrf_token() }}" id="token" hidden>

    <input type="text" value="{{ route('pendiente.obtienePendiente') }}" id="url_obtienePendiente" hidden>
    <input type="text" value="{{ route('mapeos.obtieneUbicacionVehiculo') }}" id="url_mapeo" hidden>

    <input type="text" value="{{ route('tipos.cargaTipos') }}" id="url_cargaTipos" hidden>
    <input type="text" value="{{ route('propietarios.cargaPropietarios') }}" id="url_cargaPropietarios" hidden>
    <input type="text" value="{{ route('tarifas.cargaTarifas') }}" id="url_cargaTarifas" hidden>

    {{-- FIN --}}

    @yield('content')

    <!-- Jquery Core Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery/jquery-3.2.1.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <script src="{{ asset('js/carga_notificaciones.js') }}"></script>

    @if (Auth::user()->hasPermiso('cobros.create') && Auth::user()->datosUsuario)
        <script src="{{ asset('js/salidas.js') }}"></script>
    @endif
    @if (Auth::user()->hasPermiso('vehiculos.create'))
        <script src="{{ asset('js/v_pendientes.js') }}"></script>
    @endif
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    @yield('scripts')
    <!-- Jquery Validation Plugin Css -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('AdminBSBMaterialDesign-master/js/pages/ui/notifications.js') }}"></script>

    <script>
        $('#form_vehiculo').validate({
            rules: {
                'checkbox': {
                    required: true
                },
                'gender': {
                    required: true
                }
            },
            highlight: function(input) {
                $(input).parents('.form-line').addClass('error');
            },
            unhighlight: function(input) {
                $(input).parents('.form-line').removeClass('error');
            },
            errorPlacement: function(error, element) {
                $(element).parents('.form-group').append(error);
            }
        });

        // IMAGEN DEL VEHICULO
        $('body').on('change', '#foto_v', function(e) {
            addImage_v(e);
        });

        function addImage_v(e) {
            var file = e.target.files[0],
                imageType = /image.*/;

            if (!file.type.match(imageType))
                return;

            var reader = new FileReader();
            reader.onload = fileOnload_v;
            reader.readAsDataURL(file);
        }

        function fileOnload_v(e) {
            var result = e.target.result;
            $('#imagen_select_v').attr("src", result);
        }

        // IMAGEN DEL PROPIETARIO
        $('body').on('change', '#foto_p', function(e) {
            addImage_p(e);

        });

        function addImage_p(e) {
            var file = e.target.files[0],
                imageType = /image.*/;

            if (!file.type.match(imageType))
                return;

            var reader = new FileReader();
            reader.onload = fileOnload_p;
            reader.readAsDataURL(file);
        }

        function fileOnload_p(e) {
            var result = e.target.result;
            $('#imagen_select_p').attr("src", result);
        }
    </script>
    <!-- Demo Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/js/demo.js') }}"></script>
</body>

</html>
