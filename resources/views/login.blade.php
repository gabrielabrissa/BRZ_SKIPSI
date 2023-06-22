<!DOCTYPE html>
<html lang="en">

@include('component.head');

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100 ">
        <div class="container">
        <div class="row justify-content-end">
        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
        @if(session()->has('logineror'))
            <div class = "alert alert-danger alert-dismissible fade show  text-white" role="alert">
                {{session('logineror')}}
            <button type ="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card z-index-0">
            <div class="card-header text-center pt-4 bg-secondary">
                  <h4 class="font-weight-bolder text-white ">Login</h4>
                </div>
                <div class="card-body bg-gradient-light">
                  <form action="/" method="post">
                    @csrf
                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" name="USERNAME" placeholder="Username" id="USERNAME" autofocus required value="{{ old('USERNAME') }}" aria-label="USERNAME">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" name="password" id="password"  placeholder="Password" required aria-label="password">
                    </div>
                    <button class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" type="submit">Login</button>
                  
                  </form>
                </div>
              </div>
            </div>
             
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-start flex-column">
              <div class="position-relative h-100 m-3 px-7 bg-gradient-primary border-radius-lg d-flex flex-column justify-content-center overflow-hidden">
                <center>
                  <img src="/assets/img/imc.png"  height="41" width="60" alt="image">
                  </center>
                <h1 class="mt-5 text-white font-weight-bolder position-relative">TTF</h1>
                <h3 class="text-white position-relative">Tanda Tukar Faktur</h3>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </main>

</body>

</html>