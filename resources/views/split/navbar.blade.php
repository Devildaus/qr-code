@extends('main')

<!-- Links (sit on top) -->
<div class="w3-top" style="z-index: 1;">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="/" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s3">
      <a href="#menu" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s3">
      @auth
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome back, {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li>
            <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
          </li>
          @else
        </ul>
      </div>
      <li class="nav-item">
        <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>
          Login</a>
      </li>
      @endauth
    </div>
  </div>
</div>