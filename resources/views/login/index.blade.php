<!DOCTYPE html>  
 <html lang="en">  
  <head>  
   <meta charset="UTF-8" />  
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
   <link rel="stylesheet" href="style.css" />  
   <title>{!! $konfigurasi[0]->judul !!}</title>  
   <link rel="shortcut icon" href="{{ asset('storage/' . $konfigurasi[0]->favicon) }}" type="image/x-icon">

   <style>
    @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');  
 * {  
  box-sizing: border-box;  
 }  
 body {  
  background: url('assets/user/login/bg_login.jpg');  
  color: #fff;  
  font-family: 'Muli', sans-serif;  
  display: flex;  
  flex-direction: column;  
  align-items: center;  
  justify-content: center;  
  height: 100vh;  
  overflow: hidden;  
  margin: 0;  
 }  
 .container {  
  background-color: rgba(0, 0, 0, 0.4);  
  padding: 20px 40px;  
  border-radius: 5px;  
 }  
 .container h1 {  
  text-align: center;  
  margin-bottom: 30px;  
 }  
 .container a {  
  text-decoration: none;  
  color: lightblue;  
 }  
 .btn {  
  cursor: pointer;  
  display: inline-block;  
  width: 100%;  
  background: lightblue;  
  padding: 15px;  
  font-family: inherit;  
  font-size: 16px;  
  border: 0;  
  border-radius: 5px;  
 }  
 .btn:focus {  
  outline: 0;  
 }  
 .btn:active {  
  transform: scale(0.98);  
 }  
 .text {  
  margin-top: 30px;  
 }  
 .form-control {  
  position: relative;  
  margin: 20px 0 40px;  
  width: 300px;  
 }  
 .form-control input {  
  background-color: transparent;  
  border: 0;  
  border-bottom: 2px #fff solid;  
  display: block;  
  width: 100%;  
  padding: 15px 0;  
  font-size: 18px;  
  color: #fff;  
 }  
 .form-control input:focus,  
 .form-control input:valid {  
  outline: 0;  
  border-bottom-color: lightblue;  
 }  
 .form-control label {  
  position: absolute;  
  top: 15px;  
  left: 0;  
  pointer-events: none;  
 }  
 .form-control label span {  
  display: inline-block;  
  font-size: 18px;  
  min-width: 5px;  
  transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);  
 }  
 .form-control input:focus + label span,  
 .form-control input:valid + label span {  
  color: lightblue;  
  transform: translateY(-30px);  
 }  
   </style>
  </head>  
  <body>  
   <div class="container">  
    <h1>Please Login</h1>  
    @if ($message = Session::get('success'))
    <div class="alert alert-success mt-2">
      <p>{{ $message }}</p>
    </div>
  @endif
  @if (session()->has('loginError'))
    <div class="alert alert-danger mt-2">
      <p>{{ session('loginError') }}</p>
      <p>Periksa Username dan Password Anda</p>

    </div>
  @endif
  <form action="{{ route('authenticate') }}" method="post">
    @csrf
    <div class="form-control">  
      <input type="text" name="name" required>  
      <label>Username</label>  
         </div>  
     <div class="form-control">  
      <input type="password" name="password" required>  
      <label>Password</label>  
     </div>  
     <button class="btn">{{ __('Log in') }}</button>  
    </form>  
   </div>  
   <script src="script.js"></script>  
  </body>  
  <script>
    const labels = document.querySelectorAll('.form-control label')  
 labels.forEach(label => {  
   label.innerHTML = label.innerText  
     .split('')  
     .map((letter, idx) => `<span style="transition-delay:${idx * 50}ms">${letter}</span>`)  
     .join('')  
 })  
  </script>
 </html>  