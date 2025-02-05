@extends('layouts.default')

@section('content')
<div class="register-page" >
    <div class="register-box">
        <div class="register-logo">
          <a href="../index2.html"><b>Admin</b>LTE</a>
        </div>
        <!-- /.register-logo -->
        <div class="card">
          <div class="card-body register-card-body">
            <p class="register-box-msg">Register a new membership</p>
            <form action="{{ url('/register') }}" onsubmit="return myfunction();" method="post">
                @csrf
              <div class="input-group mb-3">
                <input type="text" name="name" id ="name" class="form-control" placeholder="Full Name" />
                <div class="input-group-text"><span class="bi bi-person"></span></div>
                <div class ="valid-feedback">
                  ok
                </div>
                <div class ="invalid-feedback" id="invalid-name">
                  กรุณาระบุข้อมูล Name
                </div>
              </div>

              <div class="input-group mb-3">
                <input type="email" name="email" id ="email" class="form-control" placeholder="Email" />
                <div class="input-group-text"><span class="bi bi-envelope"></span></div>
              </div>
              <div class="input-group mb-3">
                <input type="password" name="password" id ="password" class="form-control" placeholder="Password" />
                <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
              </div>
              <!--begin::Row-->
              <div class="row">
                <div class="col-8">
                  <div class="form-check">
                    <input class="form-check-input" id = "mycheckbox" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                      I agree to the <a href="#">terms</a>
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!--end::Row-->
            </form>
           <button class="btn" onclick="myfunction()"> Click me </button>
            <!-- /.social-auth-links -->
            <p class="mb-0">
              <a href="login.html" class="text-center"> I already have a membership </a>
            </p>
          </div>
          <!-- /.register-card-body -->
        </div>
      </div>
</div>
@endsection

@section('scripts')
<script>
  console.log("Hello world!")
  //alert("Hello world!")
</script>

<script>
  //alert("Hello world!")
  let myvar //ส่วนใหญ่ใข้
  var myvar2 //แบบเก่า
  const PI=3.14
  pi = 2
  console.log(PI,pi)

let myarry = [];
myarry = Array();

myarry[0] = 1
myarry["1"] = 2
myarry.push(3)
myarry.push(4)
console.log(myarry)
myarry.pop()
console.log(myarry)

for(a=1;a<10;a++){
  console.log(a)
}

//function clickme(){
  //document.getElementById('name');
    //name.value = "new test"
    //name = $('#name').val("new with jquery") //เรียกidใช้#
    //$('name').addClass('is-invalid') //error
    //$('name').addClass('is-valid') //ok
    //email format @[a-z].[a-z]
    //password format [0-9][a-z][A-Z]
  //return false;
//}

function myfunction(){
  let name = document.getElementById('name')
  name = $('#name')
  let email = document.getElementById('email')
  let password = document.getElementById('password')
  let mycheckbox = document.getElementById('mycheckbok')
  //name.value = "My Name Value"
  //name.val("My Name Value")
  console.log(name.val(), email.value, password.value, mycheckbox.checked)
  if(name.val() == " "){
    name.addClass('is-invalid');
    $('#invalid-name').html("<b> กรุณากรอกชื่อ </b>") //เป็นการเปลี่ยนข้อความ
    return false; //ถ้าค่าผิดจะไม่ส่งค่า
  }else{
    name.removeClass('is-invalid');
  }
 return true;
}

//$(document).ready(function(){
  //alert("Hello world!")
//})
</script>


@endsection