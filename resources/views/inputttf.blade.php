@extends('layout.main')

@section('breadcrumb')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Create TTF</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Inquiry Tanda Tukar Faktur Pajak</h6>
@endsection

@section('body')

<!-- Tabel TTF -->
<div class="container-fluid py-4 px-0">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group" role="group" aria-label="First group">
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal1">Add
                TTF</button>
              <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#">Submit
                TTF</button>
              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#">Delete
                TTF</button>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group mb-2">
                    <input class="form-control" placeholder="Search" type="text">
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-bordered -mb-1">
                  <thead>
                    <tr>
                      <th class="fw-semibold text-xs font-weight-bolder "></th>
                      <th class="fw-semibold text-xs font-weight-bolder ">No</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">No TTF</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Status</th>
                      <th class="fw-semibold text-xs font-weight-bolder ">Cabang</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Tanggal TTF</th>
                      <th class="fw-semibold text-xs font-weight-bolder ">Tanggal Validasi </th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Supplier</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Lampiran</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="align-middle text-center">
                        <span class="mb-0 text-sm"></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">1</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">230022129138</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">SUBMITTED</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">JAKARTA</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">28 September 2022</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">-</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">PT IMC IND</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="#" class="text-decoration-none text-xs font-weight-bold">Download</a>
                      </td>
                      <td class="align-middle text-center">
                        <a href="#" class="text-decoration-none text-xs font-weight-bold">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <nav aria-label="...">
                  <ul class="pagination pagination-sm">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Modal HTML -->
  <div id="modal1" class="modal fade" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-light">
          <h5 class="modal-title">Pilih Cabang</h5>
        </div>
        <div class="modal-body">
          <div class="table-responsive p-0">
            <table class="table table-bordered -mb-1">
              <thead>
                <tr>
                  <th class="fw-semibold text-xs font-weight-bolder ">No</th>
                  <th class="fw-semibold  text-xs font-weight-bolder ">Site Code</th>
                  <th class="fw-semibold  text-xs font-weight-bolder ">Supplier Name</th>
                  <th class="fw-semibold  text-xs font-weight-bolder ">Branch</th>
                  <th class="fw-semibold  text-xs font-weight-bolder ">Count BPB</th>
                  <th class="fw-semibold  text-xs font-weight-bolder ">Action </th>
                </tr>
              </thead>
              @foreach($cbg as $c)
              <tbody>
                <tr>
                  <td class="align-middle text-center">
                    <span class="fw-semibold text-xs font-weight-bolder ">{{ $loop->iteration }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="fw-semibold text-xs font-weight-bold">{{ $c->SUPP_SITE_CODE }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $c->SUPP_SITE_ALT_NAME }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $c->BRANCH_CODE }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $c->jumlah }}</span>
                  </td>
                  <td class="align-middle text-center">
             
                  <a data-branch-code="{{ $c->BRANCH_CODE }}"class="openModal btn btn-primary btn-sm" href="/addttf/{{ $c->BRANCH_CODE }}">Pilih</a>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>



  @endsection
