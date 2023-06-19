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
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                @foreach($fp as $c)
                <table class="table table-bordered -mb-1">
                  <tbody>
                    <tr>
                      <th class="fw-semibold text-xs font-weight-bolder ">Kode Supplier</th>
                      <td class="fw-semibold text-xs" id="x1">{{$c->SUPP_SITE_CODE}}</td>
                    </tr>
                    <tr>
                      <th class="fw-semibold text-xs font-weight-bolder ">Nama Supplier</th>
                      <td class="fw-semibold text-xs" id="x2">{{$c->SUPP_SITE_ALT_NAME}}</td>
                    </tr>
                    <tr>
                      <th class="fw-semibold text-xs font-weight-bolder ">Tipe Supplier</th>
                      <td class="fw-semibold text-xs" id="x3">{{$c->SUPP_TYPE}}</td>
                    </tr>
                    <tr>
                      <th class="fw-semibold text-xs font-weight-bolder ">No NPWP</th>
                      <td class="fw-semibold text-xs" id="x4">{{$c->SUPP_PKP_NUM}}</td>
                    </tr>
                    <tr>
                      <th class="fw-semibold text-xs font-weight-bolder ">Alamat</th>
                      <td class="fw-semibold text-xs" id="x5">{{$c->SUPP_ADDR_LINE1 }}{{ $c->SUPP_ADDR_LINE2}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
                @endforeach
                <div class="row">
                  <div class="col-12">
                    <div class="card mb-0">
                      <div class="card-header pb-0">
                        <a data-branch-code="{{ $c->BRANCH_CODE }}" data-toggle="modal" title="Add this item"
                          class="openModal btn btn-primary btn-sm" href="#modal3">Add FP</a>
                          {{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal3">Add FP --}}
                        {{-- <a href="/tambahfp/{{ $c->BRANCH_CODE }}" class="btn btn-primary btn-sm">Add FP</a> --}}
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#">Delete
                          FP</button>
                      </div>
                      <div class="card-body px-0 pt-0 pb-0">
                        <div class="table-responsive p-0">
                          <table class="table table-bordered -mb-1">
                            <thead>
                              <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Type Faktur Pajak </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nomor Faktur Pajak </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Tanggal Faktur Pajak</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">DPP Faktur Pajak </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">PPN Faktur Pajak </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Total Bundel BPB  </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Selisih DPP </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Tanggal Faktur Pajak</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">FLAG GO BPB </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">FLAG PPN BPB </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold " ></span>
                                </td>
                                <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold"></span>
                                </td>
                                <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold"></span>
                                </td>
                                <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold"></span>
                                </td>
                                <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold"></span>
                                </td>
                                <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold"></span>
                                </td>
                                <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold"></span>
                                </td>
                                <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold"></span>
                                </td>
                                <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold"></span>
                                </td>
                                <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold"></span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Modal HTML -->

  <div id="modal3" class="modal fade" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-lg ">
      <div class="modal-content ">
        <div class="modal-header bg-light">
          <h5 class="modal-title">Tambah Tanda Terima Faktur</h5>
        </div>
        <div class="modal-body">
          <div class="container-fluid py-1">
            <div class="row">
              <div class="col-md-12 mt-0">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="form-group">
                        <h6 class="font-weight-bolder mb-2">Tipe Faktur Pajak</h6>
                        <div class="col-sm-5">
                          <select id="selection" onchange="disableFP(this)" class="form-select" aria-label="Pilih Tipe FP">
                            <option selected>Pilih Tipe FP</option>
                            <option value="1">Standart</option>
                            <option value="2">Tanpa Faktur Pajak</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group" id="faktur_pj">
                        <h6 class="font-weight-bolder mb-2">Faktur Pajak</h6>
                        <div class="row mb-0">
                          <label class="col-sm-3 col-form-label col-form-label-sm text-primary">No FP</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control form-control-sm" id="nofaktur"
                              placeholder="Pilih No Faktur">
                          </div>
                          <div class="col-auto">
                            <button type="submit" class="btn btn-secondary mb-3 btn-sm">Pilih No FP</button>
                          </div>
                        </div>
                        
                        <form action="" method="POST" enctype="multipart/form-data">
                          <div class="row mb-0">
                            <label class="col-sm-3 col-form-label col-form-label-sm text-primary">File FP</label>
                            <div class="col-sm-5">
                              <input type="file" class="form-control-file form-control-sm" id="filefaktur">
                            </div>
                            <div class="col-auto">
                              <button type="submit"  class="btnFP btn btn-secondary mb-3 btn-sm">Cek</button>
                            </div>
                          </div>
                        </form>
                        
                        <div class="row mb-2">
                          <label class="col-sm-3 col-form-label col-form-label-sm text-primary">Tanggal FP</label>
                          <div class="col-sm-5">
                            <input type="date" class="form-control form-control-sm" id="tanggalfaktur"
                              placeholder="date">
                          </div>
                        </div>

                        <!--  Summary -->

                        <div class="form-group">
                          <h6 class="font-weight-bolder mb-2 mt-3">Summary</h6>
                          <div class="row ">
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary">DPP FP</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="sum_TTF form-control form-control-sm" id= "DPP_FP">
                            </div>
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary">Total DPP BPB</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="sum_TTF_BPB form-control form-control-sm" id= "Total_DPP_BPB">
                            </div>
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary ">Selisih DPP</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="sum_TTF form-control form-control-sm"  id= "Selisih_DPP">
                            </div>
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary">PPN FP</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="sum_TTF form-control form-control-sm" id= "PPN_FP">
                            </div>
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary">Total PPN BPB</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="sum_TTF_BPB form-control form-control-sm" id= "Total_PPN_BPB">
                            </div>
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary">Selisih PPN</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="sum_TTF form-control form-control-sm" id= "Selisih_PPN">
                            </div>
                          </div>
                        </div>

                        <!--  End Summary -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Tabel BPB -->
              <div class="col-md-12 mt-2">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal4">Add
                        BPB</button>
                      {{-- <button class="btn btn-danger btn-sm ms-1">Remove</button> --}}
                    </div>
                  </div>
                  <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nomor BPB
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">BPB Date
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">DPP BPB
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">PPN BPB
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Action
                            </th>
                          </tr>
                        </thead>
                        <tbody id="selectedBPB">
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--  End Tabel BPB -->
            <div class="modal-footer ">
              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary btn-sm">Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="modal4" class="modal fade" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content ">
        <div class="modal-header bg-light">
          <h5 class="modal-title">Pilih BPB</h5>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <div class="card mb-0">
                <div class="card-body px-0 pt-0 pb-0">
                  <div class="table-responsive p-0">
                    <table class="table table-bordered -mb-1">
                      <thead>
                        <tr>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">No</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nomor BPB
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Due Date BPB
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">FLAG PPN
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">DPP BPB
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">PPN BPB</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Add BPB</th>
                        </tr>
                      </thead>
                      <tbody id="body-modal4">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer ">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    var appUrl = "{{env('http://ttfcp.test')}}";
    var selectedBranchCode = null;

    var optionsBPB = []; // array of BPB from api
    var selectedBPB = []; // array of selected BPB
    var parsefaktur = [];
    var sumBPB_DPP = 0;
    var sumBPB_PPN = 0;
    var jumFP_DPP = 0;
    var jumFP_PPN = 0;

    var parsefaktur = [];
    // $("#faktur_pj").on('click', '.btnFP', function(){
    //   fetch(`${appUrl}/read_qr?` + new URLSearchParams()
    //   )
    //   .then(response => response.json())
    //   .then((data) => {
    //     let parsefaktur = data;
    //   })
    //   .catch(error => alert(error))

    //   // console.log('jumFP_DPP', jumFP_DPP);
    //   // console.log('jumFP_PPN', jumFP_PPN);
    //   // document.getElementById("DPP_FP").value = jumFP_DPP;
    //   // document.getElementById("PPN_FP").value = jumFP_PPN;
    // })
    $('#modal3').on('shown.bs.modal', function (e) {
      const branchCode = $(e.relatedTarget).data('branch-code');
      selectedBranchCode = branchCode;
      fetch(`${appUrl}/get-sys-supp-site?` + new URLSearchParams({
        supp_branch_code: branchCode
        })
      )
        .then(response => response.json()).
        catch(error => alert(error))
    })

    $('#modal4').on('shown.bs.modal', function (e) {
      const branchCode = selectedBranchCode;
        fetch(`${appUrl}/get-ttf-data-bpb?` + new URLSearchParams({
            supp_branch_code: branchCode
        }))
        .then(response => response.json())
        .then(data => {
          data.forEach((el,index) => {
            indexBPB = selectedBPB.find(ele => ele.BPB_NUMBER === el.BPB_NUMBER);
            let number = index + 1;
            let row, cb;
            row =`
            <tr>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${number}</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${el.BPB_NUMBER}</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${el.BPB_DATE}</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${el.FLAG_PPN}</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${el.BPB_DPP}</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${el.BPB_TAX}</span>
              </td>
              
            `;
            if(indexBPB) {
              cb =  `<td class="align-middle text-center">
                <div class="form-check" id="input_cb">
                  <input class='form-check-input checklist-bpb' type='checkbox' id='${el.BPB_NUMBER}' name='cb_bpb' checked>
                </div>
              </td>
            </tr> `;
            }else{
              cb =  `<td class="align-middle text-center">
                <div class="form-check" id="input_cb">
                  <input class='form-check-input checklist-bpb' type='checkbox' id='${el.BPB_NUMBER}' name='cb_bpb'>
                </div>
              </td>
            </tr> `;
            }
            row +=cb;
            $('#body-modal4').append(row);
            
          })

          optionsBPB = data;
        }).
        catch(error => alert(error))
    })



    $(document).on('change', '.checklist-bpb', function(e) {
        const isChecked = $(this).is(':checked');
        const bpbNumber = $(this).attr('id');

        if (isChecked) {
            const selected = optionsBPB.find(el => el.BPB_NUMBER === bpbNumber);
            // check if selectedBPB already has the selected BPB
            const isExist = selectedBPB.find(el => el.BPB_NUMBER === bpbNumber);
            if (!isExist) {      
              
                selectedBPB.push(selected);
                sumBPB_DPP = selectedBPB.map((el) => el.BPB_DPP).reduce((sum, current)=> sum + current,0);
                sumBPB_PPN = selectedBPB.map((el) => el.BPB_TAX).reduce((sum, current)=> sum + current,0);
                }
                           
        } else {
            const index = selectedBPB.findIndex(el => el.BPB_NUMBER === bpbNumber);
            selectedBPB.splice(index, 1);
            sumBPB_DPP = selectedBPB.map((el) => el.BPB_DPP).reduce((sum, current)=> current - sum,0);
            sumBPB_PPN = selectedBPB.map((el) => el.BPB_TAX).reduce((sum, current)=> current - sum,0);
            
        }

        console.log('selectedBPB', selectedBPB)
        console.log('sumBPB_DPP', sumBPB_DPP)
        console.log('sumBPB_PPN', sumBPB_PPN)
        document.getElementById("Total_DPP_BPB").value = sumBPB_DPP;
        document.getElementById("Total_PPN_BPB").value = sumBPB_PPN;
    })

    $("#selectedBPB").on('click', '.bpbDelete', function(){
      $(this).closest('tr').remove();  
      const bpbNumber = $(this).attr('id');
      const index = selectedBPB.findIndex(el => el.BPB_NUMBER === bpbNumber);
      selectedBPB.splice(index, 1);
      sumBPB_DPP = selectedBPB.map((el) => el.BPB_DPP).reduce((sum, current)=> sum + current,0);
      sumBPB_PPN = selectedBPB.map((el) => el.BPB_TAX).reduce((sum, current)=> sum + current,0);

      console.log('selectedBPB', selectedBPB)
      console.log('sumBPB_DPP', sumBPB_DPP)
      console.log('sumBPB_PPN', sumBPB_PPN)
      document.getElementById("Total_DPP_BPB").value = sumBPB_DPP;
      document.getElementById("Total_PPN_BPB").value = sumBPB_PPN;

    })
  
    $('#modal4').on('hidden.bs.modal', function (e) {
        $('#body-modal4').empty();
        $('#selectedBPB').empty();
        selectedBPB.forEach(el => {
            let row = `
              <tr id="row">
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">${el.BPB_NUMBER}</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">${el.BPB_DATE}</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">${el.BPB_DPP}</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">${el.BPB_TAX}</span>
                </td>
                <td class="align-middle text-center">
                  <button class="bpbDelete btn btn-danger btn-sm" id ="${el.BPB_NUMBER}">Delete</button>
                  
                </td>
                
              </tr>
              `
            $('#selectedBPB').append(row);
          })
        })

    function disableFP(faktur) {
    console.log(faktur.value)
    if(faktur.value == 1){
      document.getElementById("nofaktur").disabled = false;
      document.getElementById("filefaktur").disabled = false;
      document.getElementById("tanggalfaktur").disabled = false;
    }else {
      document.getElementById("nofaktur").disabled = true;
      document.getElementById("filefaktur").disabled = true;
      document.getElementById("tanggalfaktur").disabled = true;
    }
  };
  </script>
  @endsection
