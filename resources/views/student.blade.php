<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <title>Opiskeljan tiedot</title>
</head>
<body>
@include("navbar")



<div class="container">
<div class="header-container justify-left">

        <h3></h3>
</div>
</div>

@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("studentslist")
                </section>
            </div>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                 <!--   <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                 -->
                    <div class="card-body">
                        <h5 class="card-title">Syöttä opiskelijan tiedot</h5>
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>ID</label>
                                <input name="cne" type="text" class="form-control"  placeholder="ID">
                            </div>
                            <div class="form-group">
                                <label>Nimi</label>
                                <input name="firstName" type="text" class="form-control"  placeholder="nimi">
                            </div>


                            <div class="form-group">
                                <label>Sukunimi</label>
                                <input name="secondName" type="text" class="form-control"  placeholder="sukunimi">
                            </div>

                            <div class="form-group">
                                <label>Ikä</label>
                                <input name="age" type="text" class="form-control"  placeholder="ikä">
                            </div>
                            <div class="form-group">
                                <label>Tiedot</label>
                                <input name="speciality" type="text" class="form-control"  placeholder="muut tiedot">
                            </div>
                            <input type="submit" class="btn btn-info" value="Talleta">
                            <input type="reset" class="btn btn-warning" value="Tyhjä">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Päivitä opiskelijoiden tiedot:</h5>
                        <form action="{{ url('/update/'.$student->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>ID</label>
                                <input value="{{ $student->cne }}" name="cne" type="text" class="form-control"  placeholder="ID">
                            </div>
                            <div class="form-group">
                                <label>Nimi</label>
                                <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control"  placeholder="opiskelijan nimi">
                            </div>
                            <div class="form-group">
                                <label>Sukunimi</label>
                                <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control"  placeholder="sukunimi">
                            </div>
                            <div class="form-group">
                                <label>Ikä</label>
                                <input value="{{ $student->age }}" name="age" type="text" class="form-control"  placeholder="ikä">
                            </div>
                            <div class="form-group">
                                <label>Tiedot</label>
                                <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control"  placeholder="muut tiedot">
                            </div>
                            <input type="submit" class="btn btn-info" value="Päivitä">
                            <input type="reset" class="btn btn-warning" value="Tyhjä">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endif

<footer class="fixed-bottom text-center py-3 bg-light">@manalap</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>
</html>
