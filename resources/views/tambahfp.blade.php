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

            <div class="form-group">
              <h6 class="font-weight-bolder mb-2">Faktur Pajak</h6>
              <div class="row mb-0">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">No
                  FP</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control form-control-sm" id="nofaktur" name="nofaktur" value="{{$a}}"
                    placeholder="Pilih No Faktur">
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-secondary mb-3 btn-sm">Pilih No FP</button>
                </div>
              </div>
              <form action="/tambahfp2/{id1}" method="post" enctype="multipart/form-data">
                {{-- <form action="/tambahfp2/{id1}" method="post" enctype="multipart/form-data"> --}}
               @csrf
              <div class="row mb-0">
                <label for="colFormLabelSm"
                  class="col-sm-3 col-form-label col-form-label-sm text-primary">File FP</label>
                <div class="col-sm-5">
                  <input type="file" id="pdf" name="file" placeholder="Select a PDF file" required="" class="form-control-file form-control-sm">
                  {{-- <input type="hidden" id="id_branch" name="id_branch" value="{{$a}}"> --}}
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-secondary mb-3 btn-sm" name="submit">Cek</button>
                </div>
              </div>
            </form>
              <div class="row mb-2">
                <label for="colFormLabelSm"
                  class="col-sm-3 col-form-label col-form-label-sm text-primary">Tanggal FP</label>
                <div class="col-sm-5">
                  <input type="input" class="form-control form-control-sm" id="tanggalfaktur" name="tanggalfaktur" value="{{$c}}"
                    placeholder="date">
                </div>
              </div>

              <!--  Summary -->

              <div class="form-group">
                <h6 class="font-weight-bolder mb-2 mt-3">Summary</h6>
                <div class="row ">
                  <label for="colFormLabelSm"
                    class="col-sm-2 col-form-label col-form-label-sm text-primary">DPP FP</label>
                  <div class="col-sm-3 mb-1">
                    <input type="text" class="form-control form-control-sm" id="dppfp" name="dppfp" value="{{$d}}">
                  </div>
                  <label for="colFormLabelSm"
                    class="col-sm-2 col-form-label col-form-label-sm text-primary">Total DPP BPB</label>
                  <div class="col-sm-3 mb-1">
                    <input type="text" class="form-control form-control-sm" id="total_dppbpb" name="total_dppbpb">
                  </div>
                  <label for="colFormLabelSm"
                    class="col-sm-2 col-form-label col-form-label-sm text-primary">Selisih DPP</label>
                  <div class="col-sm-3 mb-1">
                    <input type="text" class="form-control form-control-sm" id="selisih_dpp" name="selisih_dpp">
                  </div>
                  <label for="colFormLabelSm"
                    class="col-sm-2 col-form-label col-form-label-sm text-primary">PPN FP</label>
                  <div class="col-sm-3 mb-1">
                    <input type="text" class="form-control form-control-sm" id="ppnfp" name="ppnfp" value="{{$b}}">
                  </div>
                  <label for="colFormLabelSm"
                    class="col-sm-2 col-form-label col-form-label-sm text-primary">Total PPN BPB</label>
                  <div class="col-sm-3 mb-1">
                    <input type="text" class="form-control form-control-sm" id="total_ppnbpb" name="total_ppnbpb">
                  </div>
                  <label for="colFormLabelSm"
                    class="col-sm-2 col-form-label col-form-label-sm text-primary">Selisih PPN</label>
                  <div class="col-sm-3 mb-1">
                    <input type="text" class="form-control form-control-sm" id="selisih_ppn" name="selisih_ppn">
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
              @forEach($fp as $fp)
              {{-- <a data-branch-code="{{ $fp->BRANCH_CODE }}" data-toggle="modal" title="Add this item"
                class="openModal btn btn-primary btn-sm" href="#modal4">Add BPB</a> --}}
                @endforeach
            <button class="btn btn-danger btn-sm ms-1">Remove</button>
          </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0" id="table-bpb">
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
              <tbody>
                <tr>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold" id="nomor_bpb"></span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold" id="tanggal_bpb"></span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold" id="DPP_BPB"></span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold" id="PPN_BPB"></span>
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
  <!-- Modal HTML -->

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
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Action</th>
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
            <input type="button" class="btn btn-primary btn-sm" id="btn-add-bpb" onclick="closebpb()" value="Tambah BPB" />
            <button type ="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>

          </div>
        </div>
      </div>
    </div>
  </div>


  <script>
    var appUrl = "{{env('http://ttfcp.test/get-ttf-data-bpb?')}}";
    var selectedBranchCode = null;

    var optionsBPB = []; // array of BPB from api
    var selectedBPB = []; // array of selected BPB

    
    $('#modal4').on('shown.bs.modal', function (e) {
      const branchCode = $(e.relatedTarget).data('branch-code');
      selectedBranchCode = branchCode;

        fetch(`${appUrl}/get-ttf-data-bpb?` + new URLSearchParams({
            supp_branch_code: branchCode
        }))
        .then(response => response.json())
        .then(data => {
          data.forEach((el,index) => {
            let number = index + 1;
            let row =`
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
              <td class="align-middle text-center">
                <div class="form-check">
                  <input class="form-check-input checklist-bpb" type="checkbox" id="${el.BPB_NUMBER}">
                  </label>
                </div>
              </td>
            </tr>
            `;

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
            }
        } else {
            const index = selectedBPB.findIndex(el => el.BPB_NUMBER === bpbNumber);
            selectedBPB.splice(index, 1);
        }

        console.log('selectedBPB', selectedBPB)
    })

    $('#modal4').on('hidden.bs.modal', function (e) {
        $('#body-modal4').empty();
        $('#selectedBPB').empty();

        selectedBPB.forEach(el => {
            let row = `
              <tr>
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
                  <a class="openModal btn btn-danger btn-sm" >Delete</a>
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
  }
  </script>
   

  @endsection
