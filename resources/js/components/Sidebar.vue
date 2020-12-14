<template>
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>
                            <li>
                                <router-link to="/" class="nav-link waves-effect">
                                    <i class="bx bx-bar-chart-alt-2"></i>
                                    <span key="t-starter-page">Inicio</span>
                                </router-link>
                            </li>

                            <li>
                                <router-link to="/cursos" class="nav-link waves-effect" exact>
                                    <i class="bx bx-clinic"></i>
                                    <span key="t-horizontal">Cursos</span>
                                </router-link>
                            </li>
                             <li>
                                <router-link to="/usuarios" class="nav-link waves-effect">
                                    <i class="bx bx-user-circle"></i>
                                    <span key="t-starter-page">Usuarios</span>
                                </router-link>
                                <router-link to="/asig" class="nav-link waves-effect" >
                                    <i class="bx bx-clinic"></i>
                                    <span key="t-horizontal">Asignatura</span>
                                </router-link>
                            </li>

                            <li class="menu-title" key="t-pages">Certificados</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-user-circle"></i>
                                    <span key="t-authentication">Certicados</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                        <li>
                                            <router-link to="/alumno-regular-certificado" class="nav-link waves-effect">
                                                <span key="t-starter-page">Alumno regular</span>
                                             </router-link>
                                        </li>
                                </ul>
                            </li>
                                 <li class="menu-title" key="t-pages">Exportaciones SIGE</li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-share-alt"></i>
                                    <span key="t-multi-level">SIGE</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                        <router-link to="/notasSIGE" class="nav-link waves-effect">
                                            <span key="t-starter-page">Notas</span>
                                        </router-link>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
</template>
<script>
export default {

}
</script>
