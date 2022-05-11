<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>SEARCH BOOK</h1>
<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <table class="table table borderless"></table>
                <tr>
                    <td>BookName</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-success">SEARCH</button></td>
                </tr>
            </table>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <h1>EDIT BOOK</h1>
            <table class="table table table borderless">
                <tr>
                    <td>BookName</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-warning">Search</button></td>
                </tr>
                <tr>
                    <td>Author</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="number" name="" id="" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><buttoon class="btn btn-warning">EDIT</buttoon></td>
                </tr>
            </table>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
        <h1>DELETE BOOK</h1>
        <table class="table table-borderless"></table>
            <tr>
                <td>BookName</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-danger">DELETE</button></td>
            </tr>
        </table>
        
    </div>
    <div class="row">
        <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus iusto alias minus totam maxime voluptatibus eius animi necessitatibus. Temporibus voluptatem eum maxime vitae corrupti nesciunt voluptatibus consequatur velit, doloremque odit.</p>
        </div>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMVyEvReBKLYKGvqkktV6gA4MFKOE_01tKrS-6FYIv5Owqk-aIL88OuQDQPbWPG_NWqXg&usqp=CAU" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>