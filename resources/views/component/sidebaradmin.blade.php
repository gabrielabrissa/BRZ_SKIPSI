<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs my-0 fixed-start  ms-0 " >
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
        <li class="nav-item {{($title === "homeadmin") ? 'bg-light' : ''}}">
        <a class="nav-link {{($title === "homeadmin") ? 'active' : ''}}"  href="/homeadmin">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </a>
        </li>
      </div>
      <div class= "border-top border-muted">
        <li class="nav-item {{($title === "aturuser") ? 'bg-light' : ''}}">
        <a class="nav-link {{($title === "aturuser") ? 'active' : ''}}"  href="/aturuser">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Atur User</span>
          </a>
        </li>
      </div>
        {{-- <div class= "border-top border-muted">
        <li class="nav-item {{($title === "kuotaharian") ? 'bg-light' : ''}}">
        <a class="nav-link {{($title === "kuotaharian") ? 'active' : ''}}"  href="/kuotaharian">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-chart-pie-35 text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Kuota Harian Supplier</span>
          </a>
        </li>
        </div> --}}
        {{-- <div class= "border-top border-muted">
        <li class="nav-item {{($title === "datattf") ? 'bg-light' : ''}}">
        <a class="nav-link {{($title === "datattf") ? 'active' : ''}}"  href="/datattf">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data TTF Supplier</span>
          </a>
        </li>
        </div> --}}
        {{-- <div class= "border-top border-muted">
        <li class="nav-item {{($title === "aturlimit") ? 'bg-light' : ''}}">
        <a class="nav-link {{($title === "aturlimit") ? 'active' : ''}}"  href="/aturlimit">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Atur Limit TTF</span>
          </a>
        </li>
        </div> --}}
        {{-- <div class= "border-top border-muted">
        <li class="nav-item {{($title === "monitoringfp") ? 'bg-light' : ''}}">
        <a class="nav-link {{($title === "monitoringfp") ? 'active' : ''}}"  href="/monitoringfp">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-paper-diploma text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Monitoring File FP</span>
          </a>
        </li>
        </div> --}}
        <div class= "border-top border-muted">
        <li class="nav-item {{($title === "laporanttf") ? 'bg-light' : ''}}">
        <a class="nav-link {{($title === "laporanttf") ? 'active' : ''}}"  href="/laporanttf">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Laporan TTF</span>
          </a>
        </li>
        </div>
        <div class= "border-top border-muted">
        <li class="nav-item {{($title === "aturpemberitahuan") ? 'bg-light' : ''}}">
        <a class="nav-link {{($title === "aturpemberitahuan") ? 'active' : ''}}"  href="/aturpemberitahuan">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-notification-70 text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Atur Pemberitahuan</span>
          </a>
        </li>
        </div>
        <div class= "border-top border-muted">
        <li class="nav-item {{($title === "download") ? 'bg-light' : ''}}">
        <a class="nav-link {{($title === "download") ? 'active' : ''}}"  href="/downloadadmin">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-archive-2 text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Download</span>
          </a>
        </li>
        </div>
      </ul>
  </aside>