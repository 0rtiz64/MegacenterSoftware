<?php
/**
 * Created by PhpStorm.
 * User: David Ortiz
 * Date: 12/4/2019
 * Time: 9:45 AM
 */

function consultarMenu($tipoAcceso){

    if($tipoAcceso == 0){
        //MENU DESARROLLO INICIO
        $menu ='  <div class="sub-left-menu scroll">
                  <ul class="nav nav-list">
                      <li><div class="left-bg"></div></li>
                      <li class="time">
                          <h1 class="animated fadeInLeft">21:00</h1>
                          <p class="animated fadeInRight">Sat,October 1st 2029</p>
                      </li>
                      <li class="active ripple">
                          <a class="tree-toggle nav-header"><span class="fa-home fa"></span> DESARROLLO
                              <span class="fa-angle-right fa right-arrow text-right"></span>
                          </a>
                          <ul class="nav nav-list tree">
                              <li><a href="index.php">Dashboard v.1</a></li>
                         
                          </ul>
                      </li>
                      <li class="active ripple">
                          <a class="tree-toggle nav-header"><span class="fa fa-barcode"></span> EQUIPOS DEMOS
                              <span class="fa-angle-right fa right-arrow text-right"></span>
                          </a>
                          <ul class="nav nav-list tree">
                              <li><a href="listarEquipoDemo.php">LISTAR TODOS</a></li>
                          </ul>
                      </li>

                  </ul>
              </div>';
        //MENU DESARROLLO FINAL

    }elseif ($tipoAcceso == 1){
        //MENU ADMINISTRADOR INICIO
        $menu ='  <div class="sub-left-menu scroll">
                  <ul class="nav nav-list">
                      <li><div class="left-bg"></div></li>
                      <li class="time">
                          <h1 class="animated fadeInLeft">21:00</h1>
                          <p class="animated fadeInRight">Sat,October 1st 2029</p>
                      </li>
                      <li class="active ripple">
                          <a class="tree-toggle nav-header"><span class="fa-home fa"></span> ADMINISTRADOR
                              <span class="fa-angle-right fa right-arrow text-right"></span>
                          </a>
                          <ul class="nav nav-list tree">
                              <li><a href="dashboard-v1.html">Dashboard v.1</a></li>
                              <li><a href="dashboard-v2.html">Dashboard v.2</a></li>
                          </ul>
                      </li>

                  </ul>
              </div>';
        //MENU ADMINISTRADOR FINAL
    }elseif ($tipoAcceso ==2){
        //MENU VENTAS INICIO
        $menu ='  <div class="sub-left-menu scroll">
                  <ul class="nav nav-list">
                      <li><div class="left-bg"></div></li>
                      <li class="time">
                          <h1 class="animated fadeInLeft">21:00</h1>
                          <p class="animated fadeInRight">Sat,October 1st 2029</p>
                      </li>
                      <li class="active ripple">
                          <a class="tree-toggle nav-header"><span class="fa-home fa"></span> VENTAS
                              <span class="fa-angle-right fa right-arrow text-right"></span>
                          </a>
                          <ul class="nav nav-list tree">
                              <li><a href="dashboard-v1.html">Dashboard v.1</a></li>
                              <li><a href="dashboard-v2.html">Dashboard v.2</a></li>
                          </ul>
                      </li>

                  </ul>
              </div>';
        //MENU VENTAS FINAL
    }elseif ($tipoAcceso ==3){
        //MENU TALLER INICIO
        $menu = '  <div class="sub-left-menu scroll">
                  <ul class="nav nav-list">
                      <li><div class="left-bg"></div></li>
                      <li class="time">
                          <h1 class="animated fadeInLeft">21:00</h1>
                          <p class="animated fadeInRight">Sat,October 1st 2029</p>
                      </li>
                      <li class="active ripple">
                          <a class="tree-toggle nav-header"><span class="fa-home fa"></span> TALLER
                              <span class="fa-angle-right fa right-arrow text-right"></span>
                          </a>
                          <ul class="nav nav-list tree">
                              <li><a href="dashboard-v1.html">Dashboard v.1</a></li>
                              <li><a href="dashboard-v2.html">Dashboard v.2</a></li>
                          </ul>
                      </li>

                  </ul>
              </div>';
        //MENU TALLER FINAL
    }elseif ($tipoAcceso ==4){
        //MENU LOGISTICA INICIO
        $menu='  <div class="sub-left-menu scroll">
                  <ul class="nav nav-list">
                      <li><div class="left-bg"></div></li>
                      <li class="time">
                          <h1 class="animated fadeInLeft">21:00</h1>
                          <p class="animated fadeInRight">Sat,October 1st 2029</p>
                      </li>
                      <li class="active ripple">
                          <a class="tree-toggle nav-header"><span class="fa-home fa"></span> LOGISTICA
                              <span class="fa-angle-right fa right-arrow text-right"></span>
                          </a>
                          <ul class="nav nav-list tree">
                              <li><a href="dashboard-v1.html">Dashboard v.1</a></li>
                              <li><a href="dashboard-v2.html">Dashboard v.2</a></li>
                          </ul>
                      </li>

                  </ul>
              </div>';
        //MENU LOGISTICA FINAL
    }

    return $menu;

}

?>