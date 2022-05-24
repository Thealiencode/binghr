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
          <h5 class="modal-title" id="modal-lbl">Add User</h5>
          <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-line"></i></button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="user_id">
            <input type="hidden" name="type" value="create">

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
    var token = "{{ csrf_token() }}"


</script>

<script src="/js/users.js"></script>
@endsection
