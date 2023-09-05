<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row justify-content-center">
      <!-- begin product -->
      @foreach ( $products as $product )
      <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="card text-black">
          <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i>
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/3.webp"
            class="card-img-top" alt="Apple Computer" />
          <div class="card-body">
            <div class="text-center">
              <h5 class="card-title">{{ $product->category -> category_name }}</h5>
              <p class="text-muted mb-4">{{ $product->name }}</p>
            </div>
            <div>
              <div class="d-flex justify-content-between">
                <span>Exceptional 6K resolution and HDR capability.</span><span>{{ $product->display }}</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Marketing and Branding</span><span>{{ $product->stand }}</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Pricing and Packaging</span><span>{{ $product->adapter }}</span>
              </div>
              <div class="d-flex justify-content-between total font-weight-bold">
              <span>Total</span><span>{{ $product->total }}</span>
              </div>
              <!-- <div class="d-flex justify-content-between  mt-4 "> -->
              
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <!-- end product -->
    </div>
  </div>
</section>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>