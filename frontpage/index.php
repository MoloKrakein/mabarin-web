<?php
// import config.php
require_once "config.php";
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Mabarin Apps</title>
</head>

<body style="background-color: #141414;">
<div class="container-fluid">
        <nav class="navbar bg-body-dark border-bottom sticky-top">
            <div class="container-fluid">
                <img src="assets/LOGO.png" alt="logo">
                <form class="d-flex" role="search">
                   <?php
                   session_start();
                   if (isset($_SESSION['email'])) {
                       echo '<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Profile">Profile</button>';
                       if(isset($_SESSION['vendor'])){
                           echo '<a href="../dashboard/index.php" class="btn btn-warning ms-3">Dashboard</a>';
                       }
                       echo '<a href="logout.php" class="btn btn-danger ms-3">Log Out</a>';
                   } else {
                       echo '<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Sign_In">Sign Up</button>';
                       echo '<button class="btn btn-warning ms-3" type="button" data-bs-toggle="modal" data-bs-target="#Log_In">Log In</button>';
                   }

                   ?>
                </form>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center">
            <div id="carouselExampleControlsNoTouching" class="carousel slide mb-5" data-bs-touch="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/game_lists.png" class="d-block w-70" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-5 mt-3 d-flex justify-content-end">
                <div style="border-top: 1px solid #FFF; width: 240px;"></div>
            </div>
            <div class="col-2">
                <p class="text-center" style="color: #FF9212; font-size: 24px;">Pemilihan Mode</p>
            </div>
            <div class="col-5 mt-3">
                <div style="border-top: 1px solid #FFF;  width: 240px;"></div>
            </div>
        </div>

        <div class="row">
            <div class="col mt-5">
                <div class="card border border-0" style="background-color: #141414;">
                    <div class="card-body">
                        <h5 class="card-title text-light text-center">Kompetitif</h5>
                        <div class="d-flex justify-content-center mt-4">
                            <div style="border-top: 1px solid #535353; width: 240px;"></div>
                        </div>
                        <ul class="list-group mt-5 boder border-0">
                            <li class="list-group-item boder border-0" style="background-color: #141414;">
                                <input class="form-check-input me-1 boder mt-3" type="radio" name="listGroupRadio" value="" id="firstRadio" style="background-color: #141414; border: 3px solid #FAFF12;">
                                <label class="form-check-label text-light" for="firstRadio">
                                    <div class="row">
                                        <div class="col"><label class="form-check-label text-light" for="firstRadio" style="font-size: 18px;">Duo</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><label class="form-check-label text-light" for="firstRadio" style="font-weight: 100;">Main bersama dua orang </label></div>
                                    </div>
                                </label>
                            </li>
                            <li class="list-group-item boder border-0" style="background-color: #141414;">
                                <input class="form-check-input me-1 boder mt-3" type="radio" name="listGroupRadio" value="" id="firstRadio" style="background-color: #141414; border: 3px solid #FAFF12;">
                                <label class="form-check-label text-light" for="firstRadio">
                                    <div class="row">
                                        <div class="col"><label class="form-check-label text-light" for="firstRadio" style="font-size: 18px;">Team</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><label class="form-check-label text-light" for="firstRadio" style="font-weight: 100;">Main full team bersama teman</label></div>
                                    </div>
                                </label>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center mt-5">
                            <div style="border-top: 1px solid #535353; width: 240px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card border border-0" style="background-color: #141414;">
                    <div class="card-body">
                        <h5 class="card-title text-light text-center">Coaching</h5>
                        <div class="d-flex justify-content-center mt-4">
                            <div style="border-top: 1px solid #535353; width: 240px;"></div>
                        </div>
                        <ul class="list-group mt-5 boder border-0">
                            <li class="list-group-item boder border-0" style="background-color: #141414;">
                                <input class="form-check-input me-1 boder mt-3" type="radio" name="listGroupRadio" value="" id="firstRadio" style="background-color: #141414; border: 3px solid #FAFF12;">
                                <label class="form-check-label text-light" for="firstRadio">
                                    <div class="row">
                                        <div class="col"><label class="form-check-label text-light" for="firstRadio" style="font-size: 18px;">Full Coach</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><label class="form-check-label text-light" for="firstRadio" style="font-weight: 100;">Sesi coaching bersama pemain pro</label></div>
                                    </div>
                                </label>
                            </li>
                            <li class="list-group-item boder border-0" style="background-color: #141414;">
                                <input class="form-check-input me-1 boder mt-3" type="radio" name="listGroupRadio" value="" id="firstRadio" style="background-color: #141414; border: 3px solid #FAFF12;">
                                <label class="form-check-label text-light" for="firstRadio">
                                    <div class="row">
                                        <div class="col"><label class="form-check-label text-light" for="firstRadio" style="font-size: 18px;">Live Coaching</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><label class="form-check-label text-light" for="firstRadio" style="font-weight: 100;">Melihat coaching secara live</label></div>
                                    </div>
                                </label>
                            </li>
                            <li class="list-group-item boder border-0" style="background-color: #141414;">
                                <input class="form-check-input me-1 boder mt-3" type="radio" name="listGroupRadio" value="" id="firstRadio" style="background-color: #141414; border: 3px solid #FAFF12;">
                                <label class="form-check-label text-light" for="firstRadio">
                                    <div class="row">
                                        <div class="col"><label class="form-check-label text-light" for="firstRadio" style="font-size: 18px;">Online Coaching</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><label class="form-check-label text-light" for="firstRadio" style="font-weight: 100;">Sesi coaching secara tidak langsung / Online</label></div>
                                    </div>
                                </label>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center mt-5">
                            <div style="border-top: 1px solid #535353; width: 240px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card border border-0" style="background-color: #141414;">
                    <div class="card-body">
                        <h5 class="card-title text-light text-center">Kasual</h5>
                        <div class="d-flex justify-content-center mt-4">
                            <div style="border-top: 1px solid #535353; width: 240px;"></div>
                        </div>
                        <ul class="list-group mt-5 boder border-0">
                            <li class="list-group-item boder border-0" style="background-color: #141414;">
                                <input class="form-check-input me-1 boder mt-3" type="radio" name="listGroupRadio" value="" id="firstRadio" style="background-color: #141414; border: 3px solid #FAFF12;">
                                <label class="form-check-label text-light" for="firstRadio">
                                    <div class="row">
                                        <div class="col"><label class="form-check-label text-light" for="firstRadio" style="font-size: 18px;">Duo</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><label class="form-check-label text-light" for="firstRadio" style="font-weight: 100;">Sesi bermain bersama dua orang</label></div>
                                    </div>
                                </label>
                            </li>
                            <li class="list-group-item boder border-0" style="background-color: #141414;">
                                <input class="form-check-input me-1 boder mt-3" type="radio" name="listGroupRadio" value="" id="firstRadio" style="background-color: #141414; border: 3px solid #FAFF12;">
                                <label class="form-check-label text-light" for="firstRadio">
                                    <div class="row">
                                        <div class="col"><label class="form-check-label text-light" for="firstRadio" style="font-size: 18px;">Team</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><label class="form-check-label text-light" for="firstRadio" style="font-weight: 100;">Bermain bersama team</label></div>
                                    </div>
                                </label>
                            </li>
                            <li class="list-group-item boder border-0" style="background-color: #141414;">
                                <input class="form-check-input me-1 boder mt-3" type="radio" name="listGroupRadio" value="" id="firstRadio" style="background-color: #141414; border: 3px solid #FAFF12;">
                                <label class="form-check-label text-light" for="firstRadio">
                                    <div class="row">
                                        <div class="col"><label class="form-check-label text-light" for="firstRadio" style="font-size: 18px;">Team vs Team</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><label class="form-check-label text-light" for="firstRadio" style="font-weight: 100;">Bermain dalam custom match</label></div>
                                    </div>
                                </label>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center mt-5">
                            <div style="border-top: 1px solid #535353; width: 240px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="d-flex justify-content-center">
                <div style="border-top: 1px solid #FFF; width: 220px;"></div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="d-flex justify-content-center">
                <button type="button" class="btn" style="background-color: #FAFF12; width: 15%;">
                    <p class="text-center mt-1" style="color: #141414; font-size: 20px; font-weight: 800;">Cari Teman</p>
                    <div class="d-flex justify-content-center mt-1">
                        <div style="border-top: 2px solid black; width: 220px;"></div>
                    </div>
                    <p class="text-center mt-2" style="color: #141414; font-size: 20px; font-weight: 800;">Rp. 1000</p>
                </button>
            </div>
        </div>
        <div class="row mt-3 ">
            <div class="d-flex justify-content-center mb-5">
                <div style="border-top: 1px solid #FFF; width: 220px;"></div>
            </div>
        </div>
        <div class="row mt-5">
            <h1 class="text-light text-center">Buruan Skuy,</h1>
            <p class="text-light text-center mt-2">Cari teman mabar dengan mudah dan cepat biar semakin asik!</p>
        </div>

        <div class="row" style="margin-top: 15%;">
            <div class="d-flex justify-content-center mb-5">
                <div style="border-top: 1px solid #08D3FF; width: 100%;"></div>
            </div>
        </div>

        <div class="row mt-5">
            <h3 class="text-center" style="color:#08D3FF;">Deskripsi</h3>
            <p class="text-center text-white">Naikkan rank anda dengan bermain bersama teman, yang dapat anda cari disini pada berbagai macam game. Bermain bersama teman <br> dapat meningkatkan performa anda baik dalam segi koordinasi dan performa</p>
            <p class="text-center text-white mt-3">Dimana setiap teman anda akan membantu anda dalam meraih goals yang anda inginkan seperti rank ataupun pengembangan skill anda</p>
            <p class="text-center text-white mt-3 mb-5">Anda dapat mencari berbagai macam teman dari berbagai macam segi skill. Serta kamudapat mencari sesi coaching dari pemain-pemain yang sudah pro<br> atau sudah berpengalaman.</p>
        </div>

        <div class="row mt-5">
            <h3 class="text-center" style="color:#08D3FF;">Mengapa Kita ?</h3>
            <img class="mt-5" src="assets/Group 25.png" alt="logo" class="d-block mx-auto mt-5">
        </div>

        <div class="row mt-5">
            <div class="d-flex justify-content-center mb-5">
                <div style="border-top: 1px solid #08D3FF; width: 100%;"></div>
            </div>
        </div>

        <div class="row mt-5">
            <h3 class="text-center" style="color:#08D3FF;">Cara Kerja</h3>
            <img class="mt-5" src="assets/Group 26.png" alt="logo" class="d-block mx-auto mt-5">
            <div class="d-flex justify-content-center">
                <button type="button" class="btn" style="background-color: #FAFF12; width: 15%;" data-bs-toggle="modal" data-bs-target="#vendor">
                    <p  class="text-center mt-1" style="color: #141414; font-size: 20px; font-weight: 800;">Daftar Vendor</p>
                </button>
            </div>

        </div>

        <div class="row mt-4">
            <div class="d-flex justify-content-center mb-5">
                <div style="border-top: 1px solid #08D3FF; width: 100%;"></div>
            </div>
        </div>

        <div class="row mt-5">
            <h3 class="text-center" style="color:#08D3FF;">Pertanyaan Yang Sering Muncul</h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-light" style="background-color:#141414; font-size: 16px; font-weight:600;">Berapa lama biasanya untuk mendpatkan teman?<br> <button type="button" style="background-color: #141414; border: 2px solid #c0f302; border-radius: 100%;">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" style="fill: #c0f302; margin-top: -5px;">
                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg></button>
                </li>
                <li class="list-group-item text-light" style="background-color:#141414; font-size: 16px; font-weight:600;">Saya benci teman saya, bisakah saya mengganti ke orang lain?<br> <button type="button" style="background-color: #141414; border: 2px solid #c0f302; border-radius: 100%;">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" style="fill: #c0f302; margin-top: -5px;">
                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg></button>
                </li>
                <li class="list-group-item text-light" style="background-color:#141414; font-size: 16px; font-weight:600;">Bagaimana jika saya tidak puas?<br> <button type="button" style="background-color: #141414; border: 2px solid #c0f302; border-radius: 100%;">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" style="fill: #c0f302; margin-top: -5px;">
                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg></button>
                </li>
                <li class="list-group-item text-light mb-5" style="background-color:#141414; font-size: 16px; font-weight:600;">Apakah saya bisa cancel pesanan saya?<br> <button type="button" style="background-color: #141414; border: 2px solid #c0f302; border-radius: 100%;">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" style="fill: #c0f302; margin-top: -5px;">
                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg></button>
                </li>
            </ul>
        </div>

    </div>
        <!-- Daftar Vendor -->


                            <!-- Login -->
<div class="modal fade" id="Log_In" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <h4 class="text-center">Selamat Datang Di Mabarin</h4>
        <h5 class="text-center" style="font-weight: 400;">Belum memiliki akun? <a style="font-weight: 400;">Sign In</a></h5>
        <form action="login.php" method="post">
          <div class="input-group mb-3 mt-5 container">
            <input id="login-email" type="text" class="form-control" placeholder="Email" name="email" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3 container">
            <input id="login-pass" type="password" class="form-control" placeholder="Password" name="password" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3 container">
            <button type="submit" class="btn btn-info w-100">Masuk</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

                            <!-- Register -->
<div class="modal fade" id="Sign_In" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="text-center">Selamat Datang Di Mabarin</h4>
                <h5 class="text-center" style="font-weight: 400;">Sudah memiliki akun? <a style="font-weight: 400;">Log In</a></h5>
                <form action="register.php" method="post">
                    <div class="input-group mb-3 mt-5 container">
                        <input id="regis-email" name="email" type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3 container">
                        <input id="regis-pass" name="password" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3 container">
                        <button type="submit" class="btn btn-info w-100">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="vendor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <h4 class="text-center">Daftar Vendor Mabarin</h4>
        <form action="register_vendor.php" method="post">
          <div class="input-group mb-3 mt-5 container">
            <input id="login-email" type="text" class="form-control" placeholder="Email" name="email" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3 container">
            <input id="login-pass" type="password" class="form-control" placeholder="Password" name="password" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3 container">
            <button type="submit" class="btn btn-info w-100">Daftar</button>
          </div>
        </form>
        <div class="input-group mb-3 container">
      </div>
    </div>
  </div>
</div>
</body>



<!-- <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-auth.js"></script>
    <script>
    var firebaseConfig = {
    apiKey: "AIzaSyDwmggIXG-wHw8zclFje9-QI8KHkNaQqd4",
  authDomain: "mabarin-c1d84.firebaseapp.com",
  databaseURL: "https://mabarin-c1d84-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "mabarin-c1d84",
  storageBucket: "mabarin-c1d84.appspot.com",
  messagingSenderId: "148935883756",
  appId: "1:148935883756:web:f1f48b0d2968e17fd79ec9",
  measurementId: "G-QS11PTV9JY"
      };
      firebase.initializeApp(firebaseConfig);

      const auth = firebase.auth();


      const signupbtn = document.getElementById('sign-up');
        signupbtn.addEventListener('click', (e) => {
            e.preventDefault();
    
            const email = document.getElementById('sign-up-email').value;
            const password = document.getElementById('sign-up-pass').value;
    
            auth.createUserWithEmailAndPassword(email, password).then(cred => {
                console.log(cred.user);
            })


        });

    </script> -->


    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-auth.js"></script>
<script type="module">
    // Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-analytics.js";
import { GoogleAuthProvider, getAuth, signInWithRedirect, getRedirectResult} from "https://www.gstatic.com/firebasejs/10.4.0/firebase-auth.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDwmggIXG-wHw8zclFje9-QI8KHkNaQqd4",
  authDomain: "mabarin-c1d84.firebaseapp.com",
  databaseURL: "https://mabarin-c1d84-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "mabarin-c1d84",
  storageBucket: "mabarin-c1d84.appspot.com",
  messagingSenderId: "148935883756",
  appId: "1:148935883756:web:f1f48b0d2968e17fd79ec9",
  measurementId: "G-QS11PTV9JY"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const provider = new GoogleAuthProvider();
// const auth = getAuth();
// const auth2 = app.auth();

firebase.initializeApp(firebaseConfig);
const auth = firebase.auth();
const getauth = getAuth();
// const provider = new GoogleAuthProvider();
// const app = initializeApp(firebaseConfig);

const google_btn = document.getElementById('google_btn');
google_btn.addEventListener('click', () => {
    signInWithRedirect(auth, provider);

});


const sign_up = document.getElementById('sign-up');
sign_up.addEventListener('click', () => {
    // e.preventDefault();

    const email = document.getElementById('regis-email').value;
    const password = document.getElementById('regis-pass').value;

    auth.createUserWithEmailAndPassword(email, password).then(cred => {
        console.log(cred.user);
        // saveUserSession(cred.user);
    })
});

const sign_up_google = document.getElementById('sign-up-google');
sign_up_google.addEventListener('click', () => {
    signInWithRedirect(auth, provider);

});

getRedirectResult(auth)
  .then((result) => {
    // This gives you a Google Access Token. You can use it to access the Google API.
    const credential = GoogleAuthProvider.credentialFromResult(result);
    const token = credential.accessToken;
    // The signed-in user info.
    const user = result.user;
    console.log(user);
    // saveUserSession(user);
    // ...
  }).catch((error) => {
    // Handle Errors here.
    const errorCode = error.code;
    const errorMessage = error.message;
    console.log(errorCode);
    console.log(errorMessage);
  });
  

  const login = document.getElementById('login');
    login.addEventListener('click', () => {
        // e.preventDefault();
    
        const email = document.getElementById('login-email').value;
        const password = document.getElementById('login-pass').value;
    
        auth.signInWithEmailAndPassword(email, password).then(cred => {
            console.log(cred.user);
            saveUserSession(cred.user);
        })
    });

//     auth.onAuthStateChanged(user => {
//   if (user) {
//     // Pengguna telah login
//     const email = user.email;
//     const username = user.displayName; // Atau user.username tergantung pada bagaimana Anda menetapkan username

//     // Kirim data ke signup-process.php menggunakan fetch
//     fetch('signupProcess.php', {
//       method: 'POST',
//       headers: {
//         'Content-Type': 'application/x-www-form-urlencoded',
//       },
//       body: `email=${email}&username=${username}`
//     })
//     .then(response => response.json())
//     .then(data => {
//       console.log(data);
//       // Redirect ke halaman setelah sign up (misalnya, halaman utama)
//       window.location.href = 'index.php';
//     })
//     .catch(error => {
//       console.error('Error:', error);
//     });
//   } else {
//     <?php
//     echo 'console.log("User belum login")';
//     ?>
//   }
});

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>