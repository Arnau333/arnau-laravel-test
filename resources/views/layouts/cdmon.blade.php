<!DOCTYPE html>
<html>
<head>
<title>JUNIOR TECHNICAL TEST</title>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
  
#server {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
  margin: auto;
  box-shadow: -4px 4px 0px #000;
}

#server td, #server th {
  border: 1px solid #ddd;
  padding: 8px;
  border: 2px solid #000;

}

#server tr:nth-child(even){background-color: #f2f2f2;}

#server tr:hover {background-color: #ddd;}

#server th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #6dca9e;
  color: #000;
  
}

.btn-success{
  background-color:#6dca9e !important;
  border: 2px solid #000;

}

.img-CDmon{
  
  margin-bottom:30px;
}

footer{
  bottom: -170px !important;
  position: absolute !important;
  width: 100% !important;
}

</style>
</head>
<body>

<h1>{{$titulo}}</h1>
<center><img class="img-CDmon" src="img/logo.png" alt="CDmon"></center>

@yield('content')


</body>
</html>

<!-- Footer -->
<footer class="bg-dark text-center text-white">

  <div class="container p-4">

    <section class="mb-4">
  
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class=""> <img src="img/linkedin.png" alt=""></i
      ></a>


      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class=""><img src="img/meta.png" alt=""></i
      ></a>


      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class=""><img src="img/radio.png" alt=""></i
      ></a>


      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class=""><img src="img/yotube.png" alt=""></i
      ></a>


      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class=""><img src="img/linkedin.png" alt=""></i
      ></a>

 
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class=""><img src="img/github.png" alt=""></i
      ></a>
    </section>

    <section class="">
      <form action="">
       
        <div class="row d-flex justify-content-center">
         
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
         

         
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
            </div>
          </div>
         

         
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
         
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
       
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
       

       
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
       

       
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
       

       
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
       
      </div>
   
    </section>

  </div>


  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © {{date("Y")}} Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">cdmon.com</a>
  </div>
  <!-- Copyright -->
</footer>
