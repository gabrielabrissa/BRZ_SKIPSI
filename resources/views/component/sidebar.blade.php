<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs my-0 fixed-start  ms-0 ">
    <div class="sidenav-header ">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0">
        <img src="/assets/img/imc.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Tanda Tukar Faktur</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
      <ul class="navbar-nav">
      <div class= "border-top border-muted">
        <li class="nav-item {{($title === "home") ? 'bg-light' : ''}}">
          <a class="nav-link {{($title === "home") ? 'active' : ''}}" href="/home">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>
      </div>
      <div class= "border-top border-muted">
        <li class="nav-item {{($title === "inputttf") ? 'bg-light' : ''}}">
          <a class="nav-link {{($title === "inputttf") ? 'active' : ''}}" href="/inputttf">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Create TTF</span>
          </a>
        </li>
      </div>
      <div class= "border-top border-muted">
        <li class="nav-item {{($title === "download") ? 'bg-light' : ''}}">
        <a class="nav-link {{($title === "download") ? 'active' : ''}}"  href="/download">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-archive-2 text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Download</span>
          </a>
        </li>
        </div>
      </ul>
  </aside>