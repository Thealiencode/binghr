@extends('layouts.app')

@section('table-header', 'List users')

@section('content')


<div class="container-fluid">
    <div class="d-flex justify-content-end mb-4">

    <button class="btn rad-7" data-bs-toggle="modal" data-bs-target="#addModal" style="background: #227056; color:#fff; font-size: 12px">Add User</button>
    </div>

    <div class="bg-light border border-primary">

        <table id="data-table" class="bg-light w-100">
            <thead class="table-header">
                <tr class="p-3" >
                    <th class="table-row">Name</th>
                    <th width="50px"></th>
                    <th>Created Date</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>


                {{-- <tr>
                    <td class="table-row">
                        <div class="d-flex align-items-center">
                            <img src="https://github.com/mdo.png" alt="mdo" width="35" height="35" class="rounded-circle mr-2">

                            <div class="d-flex flex-column">
                                <span>Golden Moses</span>
                                <small class="text-grey">david_wagner@example.com</small>

                            </div>
                        </div>
                    </td>
                    <td><span class="badge bg-primary text-white p-2 rad-7">Super Admin</span></td>
                    <td>22 oct 2022</td>
                    <td>Ceo and founder</td>
                    <td class="action-icons">
                        <i class="ri-edit-2-line mr-3"></i>
                        <i class="ri-delete-bin-5-line"></i>

                    </td>
                </tr> --}}

            </tbody>

        </table>
    </div>

</div>


  <!-- Modal -->
  <div class="modal fade " id="addModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
    <form action="" id="user-form">

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Add User</h5>
          <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-line"></i></button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="mb-3">
                  <input type="text" name="employee_id" id="employee_id" class="form-control" placeholder="Employee ID*">
                </div>

                <div class="row">
                    <div class="col-6 mb-3">
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name*" >
                    </div>
                    <div class="col-6 mb-3">
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name*" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mb-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email ID*" >
                    </div>
                    <div class="col-4 mb-3">
                        <input type="text" name="phone" id="firstname" class="form-control" placeholder="Mobile No" >
                    </div>
                    <div class="col-4 mb-3">
                        <Select class="form-control" name="role">
                            <option disabled selected>Select Role Type</option>
                            <option value="super_admin">Super Admin</option></option>
                            <option value="admin">Admin</option></option>
                            <option value="hr">HR Admin</option></option>
                            <option value="employee">Employee</option></option>
                        </Select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username*" >
                    </div>
                    <div class="col-4 mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password*" >
                    </div>
                    <div class="col-4 mb-3">
                        <input type="password" name="password_confirmation" id="password" class="form-control" placeholder="Confirm Password*">
                    </div>
                </div>
        </div>
        {{-- <div class="modal-section-divider">golden</div> --}}
        <table class="bg-light w-100">
            <thead class="table-header modal-section-divider">
                <tr>
                    <th class="table-row p-3">Module Permission</th>
                    <th>Read</th>
                    <th>Write</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody style="background: #fff; padding: 1rem">
                <tr >
                    <td class="p-3">Super Admin</td>
                    <td>
                          <input type="checkbox" name="" id="" checked>
                    </td>
                    <td>
                          <input type="checkbox" name="" id="" checked>
                    </td>
                    <td>
                          <input type="checkbox" name="" id="" checked>
                    </td>
                </tr>
                <tr >
                    <td class="p-3">Admin</td>
                    <td>
                          <input type="checkbox" name="" id="" checked>
                    </td>
                    <td>
                          <input type="checkbox" name="" id="">
                    </td>
                    <td>
                          <input type="checkbox" name="" id="">
                    </td>
                </tr>
                <tr >
                    <td class="p-3">Employee</td>
                    <td>
                          <input type="checkbox" name="" id="" checked>
                    </td>
                    <td>
                          <input type="checkbox" name="" id="" >
                    </td>
                    <td>
                          <input type="checkbox" name="" id="" >
                    </td>
                </tr>
                <tr >
                    <td class="p-3">HR Admin</td>
                    <td>
                          <input type="checkbox" name="" id="" checked>
                    </td>
                    <td>
                          <input type="checkbox" name="" id="" checked>
                    </td>
                    <td>
                          <input type="checkbox" name="" id="" checked>
                    </td>
                </tr>

            </tbody>
        </table>

        <div class="modal-body">

        </div>
        <div class="modal-footer">
            <button type="sumit" id="form-submit" class="btn btn-primary rad-7">Add User</button>
          <button type="button" class="btn " data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
    </form>

  </div>


@endsection

@section('scripts')

<script>
    tableHeader = $('#table-name').text()
    feather.replace()

    $(document).ready( () => {
        var dataTable = $('#data-table').DataTable({
            "paging":   false,
            "ordering": false,
            "info":     false,
            scrollY: 380,

            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search..."
                },
            "ajax": {
                url : "/users",
                type : 'GET'
            },
            });

            $("#data-table_filter label").append('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search" style="position: relative;right: 58px;width: 18px;"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>');
            $("#data-table_filter").prepend(`<h6 class="float-left ml-2 mt-4">${tableHeader}</h6>`);


            $('#user-form').submit((event) => {
                event.preventDefault();
                let form = $('#user-form');
                formData = form.serialize();

                $.ajax({
                    url : "/",
                    type: "POST",
                    data : formData,
                    success: function(response, textStatus, jqXHR) {
                        if(response.status == 'success'){
                            TOASTIFY.show(response.message, 'success')
                            form[0].reset()
                            $('#addModal').modal('hide')
                            dataTable.ajax.reload();

                        }
                        console.log(response);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        errors = jqXHR.responseJSON.errors;

                        for (const [key, value] of Object.entries(errors)) {
                            TOASTIFY.show(value, 'error')
                        }


                    }
                })

                } )
        } );





</script>

<script src="/js/users.js"></script>
@endsection
