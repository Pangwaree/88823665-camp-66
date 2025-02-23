@extends('layouts.default_with_menu')

@section('content')
<!-- <h1>{{ session('user')->name }}</h1> -->
<div class="row">
  <div class="col-md-12">
    <div class="card mb-12">
      <div class="card-header">
        <h3 class="card-title">User Tables</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead class="table-primary">
            <tr>
              <th style="width: 10px">#</th>
              <th>Name</th>
              <th>Email</th>
              <th style="width: 240px">Option</th>
            </tr>

          <tbody>
            <?php foreach ($users as $index => $user) { ?>
              <tr class="align-middle">
                <td>{{ $index+1 }}.</td>
                <td>{{ $user->name }}</td>
                <td>{{$user->email}}</td>
                <td>
                  <a href="{{url('/user/'.$user->id)}}">
                    <button class="btn btn-warning">Edit</button>
                  </a>
                  <form action="{{url('/user')}}" method="post" style="display:inline;" onsubmit="confirm_delete(event)">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{ $user->id}}">
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
            <?php } ?>
          </tbody>
          </thead>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-end">
          <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
      </div>
    </div>
    <!-- /.card -->

  </div>
</div>
@endsection

@section('scripts')
<script>
  function confirm_delete(event) {
    event.preventDefault(); // ป้องกันไม่ให้ฟอร์มส่งค่าโดยอัตโนมัติ

    const form = event.target; // ดึงฟอร์มที่ถูกกดลบ

    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, delete it!",
      cancelButtonText: "No, cancel!",
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "Deleted!",
          text: "Your User has been deleted.",
          icon: "success"
        }).then(() => {
          form.submit(); // ส่งฟอร์มเพื่อลบข้อมูล
        });
      } else {
        Swal.fire({
          title: "Cancelled",
          text: "Your User isn't deleted :)",
          icon: "error"
        });
      }
    });
  }
</script>



@endsection