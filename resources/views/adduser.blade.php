@extends('layout.mainadmin')


@section('breadcrumb')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Atur User</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Atur User</h6>
@endsection

@section('body')
<div class="container-fluid py-4 px-0">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
      <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-0">Tambahkan User</p>
          </div>
        </div>
        <div class="card-body">
        <div class="row">
          <form action="/aturuser/simpan_user" method="post" class="">                        
            @php echo csrf_field() @endphp
          <div class="form-group required">
            <div class="row mb-1">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Username</label>
                <div class="col-sm-8"> 
                    <input type="text" class="form-control form-control-sm" name="username"id="username" placeholder="Masukan Username">
                </div>
            </div>
        </div>
        <div class="form-group required">
            <div class="row mb-1">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Password</label>
                <div class="col-sm-8"> 
                    <input type="text" class="form-control form-control-sm" id="password" name="password" placeholder="Masukan Password">
                </div>
            </div>
        </div>
        <div class="form-group required">
            <div class="row mb-1">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Email</label>
                <div class="col-sm-8"> 
                    <input type="text" class="form-control form-control-sm" id="email" name="email" placeholder="Masukan Email">
                </div>
            </div>
        </div>
        <div class="form-group required">
            <div class="row mb-1">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Nama Supplier</label>
                <div class="col-sm-8"> 
                    <select class="form-select  form-select-sm" onchange="pilihSP(this)" placeholder="Pilih Supplier" id="selection" name="supplier" required="required">
                        <option selected>Pilih Supplier</option>
                        @foreach ($supp as $s)
                        <option value="{{ $s->SUPP_ID }}">{{ $s->SUPP_NAME }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        
        <div class="form-group required">
            <div class="row mb-1">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Active Flag</label>
                <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="activeflag1" id="activeflag1" value="Y">
                        <label class="form-check-label" for="inlineRadio3">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="activeflag2" id="activeflag2" value="N">
                        <label class="form-check-label" for="inlineRadio4">Tidak</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tabel TTF -->

        <div class="row">
          <div class="col-md-12 mt-4">
              <div class="card">
              <div class="card-header pb-0">
                  <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal5">Add Supplier</button>
                  
                </div>
                  </div>
                  <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                      <thead>
                          <tr>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">No  </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Supplier</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Cabang</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Action</th>
                          </tr>
                      </thead>
                      <tbody id="selectedSupSite">
                      </tbody>
                      </table>
                  </div>
                  </div>
          </div>
          </div>
          </div>
          </div>
             
        </form>
        </div>
      </div>
</div>
</div>

                        
<!-- Tabel TTF -->

<div id="modal5" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title">Tambah Data</h5>
            </div>
    <!-- Modal Body -->
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
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">KODE SUPPLIER</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">NAMA SUPPLIER</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">KODE SITE</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">BRANCH CODE</th>
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder">PILIH</th>
                            </tr>
                            </thead>
                            <tbody id="body-modal5">
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
    <!-- End Modal Body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    

<script>
    var appUrl = "{{env('http://ttfcp.test')}}";
    var selectedSupId = null;
    var optionsSupSite = []; // array of SuppSite from api
    var selectedSupSite = []; // array of selected SuppSite

    function pilihSP(sup) {
    selectedSupId = sup.value;
    console.log('selectedSupId:',selectedSupId)
    };

    $('#modal5').on('shown.bs.modal', function (e) {
      const supplierID = selectedSupId;
      fetch(`${appUrl}/get-Sys-Supp?` + new URLSearchParams({
        spp_id: supplierID
        })
      )
        .then(response => response.json())
        .then(data => {
          data.forEach((el,index) => {
            indexSupSite = selectedSupSite.find(ele => ele.SUPP_BRANCH_CODE === el.SUPP_BRANCH_CODE);
            let number = index + 1;
            let row, cb;
            row =`
            <tr>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">${number}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">${el.SUPP_CODE}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">${el.SUPP_NAME}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">${el.SUPP_SITE_CODE}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">${el.SUPP_BRANCH_CODE}</span>
                </td>
                     
            `;
            if(indexSupSite) {
              cb =  `<td class="align-middle text-center">
                <div class="form-check" id="input_cb_sup">
                  <input class='form-check-input checklist-sup' type='checkbox' id='${el.SUPP_BRANCH_CODE}' name='cb_sup' checked>
                </div>
              </td>
            </tr> `;
            }else{
              cb =  `<td class="align-middle text-center">
                <div class="form-check" id="input_cb_sup">
                  <input class='form-check-input checklist-sup' type='checkbox' id='${el.SUPP_BRANCH_CODE}' name='cb_sup'>
                </div>
              </td>
            </tr> `;
            }
            row +=cb;
            $('#body-modal5').append(row);
            
          })

          optionsSupSite = data;
            console.log('optionsSupSite:',optionsSupSite)
            console.log('selectedSupSite:',selectedSupSite)
        }).
        catch(error => alert(error))
    })

    $(document).on('change', '.checklist-sup', function(e) {
        const isChecked = $(this).is(':checked');
        const idSupSite = $(this).attr('id');

        if (isChecked) {
            const selected = optionsSupSite.find(el => el.SUPP_BRANCH_CODE === idSupSite);
            // check if selectedBPB already has the selected BPB
            const isExist = selectedSupSite.find(el => el.SUPP_BRANCH_CODE === idSupSite);
            if (!isExist) {      
                selectedSupSite.push(selected);
                }
                           
        } else {
            const index = selectedSupSite.findIndex(el => el.SUPP_BRANCH_CODE === idSupSite);
            selectedSupSite.splice(index, 1);
        }

        console.log('selectedSupSite', selectedSupSite)
        
    })

    $("#selectedSupSite").on('click', '.siteDelete', function(){
      $(this).closest('tr').remove();  
      const idSupSite = $(this).attr('id');
      const index = selectedSupSite.findIndex(el => el.SUPP_SITE_ID === idSupSite);
      selectedSupSite.splice(index, 1);

      console.log('selectedSupSite', selectedSupSite)

    })
  
    $('#modal5').on('hidden.bs.modal', function (e) {
        $('#body-modal5').empty();
        $('#selectedSupSite').empty();
        selectedSupSite.forEach((el, index) => {
            let number = index + 1;
            let row = `
              <tr id="row">
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">${number}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">${el.SUPP_NAME}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">${el.SUPP_BRANCH_CODE}</span>
                </td>
                <td class="align-middle text-center">
                  <button class="siteDelete btn btn-danger btn-sm" id ="${el.SUPP_BRANCH_CODE}">Delete</button>
                  
                </td>
                
              </tr>
              `
            $('#selectedSupSite').append(row);
          })
        })


  </script>
@endsection
