  <!-- login-form -->

  <div id="logincard"  style=" z-index:15; height:100vh; display:none;  position:fixed; top:0px; width:100%; ">
        <div style=" border:solid 1px; border-color:orange; border-radius:6px; height:50%; left:50%; top:50%; transform:translate(-50%,-50%)" class=" w-75 position-absolute bg-white">
            <h3 class=" text-center mt-1 ">Login</h3>
            <hr class="w-100" style="color:orange;">
            <form class=" position-absolute" style=" width:90%;  left:50%; top:50%; transform:translate(-50%,-50%);">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control " required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button class="orderbutton mt-2">Login</button>
            </form>
            <div class="d-flex flex-row position-absolute" style=" bottom: 35px; left:5%">
                <div><a href="">
                        <i class="fa-brands fa-2x fa-facebook"></i></a>
                </div>
                <div class="mx-2"> <a style="color:pink;" href="">
                        <i class="fa-brands fa-2x  fa-instagram"></i></a>
                </div>
            </div>

            <div id="cancel" class="mx-2 position-absolute " style="right: 30px; top:3%;"> <a class="cancel" >
                    <i class="fa-solid fa-2x fa-xmark "></i></a>
            </div>

        </div>


    </div>
    </div>

    <!-- Registration form -->
    <div id="registercard" style=" z-index:15; height:100vh; display:none;   position:fixed; top:0px; width:100%;  ">
        <div style=" border:solid 1px; border-color:orange; border-radius:6px; height:60%; left:50%; top:50%; transform:translate(-50%,-50%)" class=" w-75 position-absolute bg-white">
            <h3 class=" text-center mt-3 ">Registration</h3>
            <hr class="w-100" style="color:orange;">
            <form class=" position-absolute" style=" width:90%;  left:50%; top:50%; transform:translate(-50%,-50%);">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Repeatpassword</label>
                    <input type="password" required class="form-control" id="exampleInputPassword1" placeholder="Repeat Password">
                </div>

                <button class="orderbutton mt-2">Register</button>
            </form>
            <div class="d-flex flex-row position-absolute" style=" bottom: 45px; left:5%">
                <div><a href="">
                        <i class="fa-brands fa-2x fa-facebook"></i></a>
                </div>
                <div class="mx-2"> <a style="color:orange;" href="">
                        <i class="fa-brands fa-2x  fa-instagram"></i></a>
                </div>
            </div>
           
            <div id="canceling" class="mx-2 position-absolute " style="right: 30px; top:3%;"> <a class="cancel" >
                    <i class="fa-solid fa-2x fa-xmark "></i></a>
            </div>
        </div>
    </div>

<!-- login registration botton -->

<div class="bg-login">
    <div class="d-flex flex-row justify-content-end px-1">
        <a id="login" class="ancor mx-2" href="#">Login</a>
        <a id="register" class="ancor" href="#">Register</a>
    </div>
</div>

<!-- navbar -->
<nav class="navbar pt-0 pb-0 navbar-expand-lg navbar-light bg-nav">

    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img style=" height: 40px;" src="public/img/tamannaa.png" alt=""></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-caret-square-down"></i>
        </button>

        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav px-lg-5 px-sm-0">
                <li class="nav-item mx-3">
                    <a class="productbar active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="productbar" href="#">Page</a>
                </li>
                <li class="nav-item mx-3 ">
                    <a class="productbar" href="#">Shop</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="productbar disabled" href="fooddescription.php">Product</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="productbar disabled" href="#">About us</a>
                </li>


            </ul>
        </div>

        <!-- searcbar -->

        <form class="form-inline my-2 my-lg-0 float-sm-start  searchbar">
            <div class="d-flex flex-row">
                <input class="form-control mr-sm-2 h-25" type="search" placeholder="Search" aria-label="Search">
                <a class="ancor mx-2 mt-1" href="#"><i class="fas fa-search"></i></a>
            </div>
        </form>

    </div>
</nav>


<script>

    
        // login and registration toggle

        var $loginbtn = document.getElementById('login');
        var $registerbtn = document.getElementById('register');

        var $logincard = document.getElementById('logincard');
        var $registercard = document.getElementById('registercard');

        var $cancel = document.getElementById('cancel');
        var $cancelregister = document.getElementById('canceling');

     

        $loginbtn.addEventListener('click',()=>{
            $logincard.style.display = 'block';
        })

        $registerbtn.addEventListener('click',()=>{
            $registercard.style.display = 'block';
        })

        $cancel.addEventListener('click',()=>{
            $logincard.style.display = 'none';
        })
       
        $cancelregister.addEventListener('click',()=>{
            $registercard.style.display = 'none';
        })


</script>