@extends('app')
@section('content')
<!-- home 
================================================== -->
<section id="home" class="s-home page-hero target-section" data-parallax="scroll"
    data-image-src="{{asset('stellar/images/services-bg.jpg')}}" data-natural-width=3000 data-natural-height=2000
    data-position-y=center>

    <div class="shadow-overlay"></div>

    <div class="home-content" style="vertical-align: top; padding-top:15.6rem;">

        <div class="row home-content__main">

            <h1>
                Tabungan Anggota
            </h1>


            <form method="POST" class="group mc-form" action="{{route('unda.check')}}">
                @csrf
                <input type="text" name="undian" placeholder="Nomor Undian"
                    class="form-control @error('undian') is-invalid @enderror" autocomplete="off" autofocus
                    <?php if (isset($undian)) {?> value="{{$undian}}" <?php } ?>>

                @error('undian')
                <span class="invalid-feedback" role="alert">
                    <small style="color: whitesmoke; font-family:  Montserrat, sans-serif;">
                        {{ $message }}
                    </small>
                </span>
                @enderror

                <input type="submit" name="search" value="search">
            </form>

            <?php if (isset($check)) {?>

            <?php if($check == "notfound"){ ?>
            <table>
                <col style="width:35%">
                <col style="width:65%">
                <tr>
                    <th style="font-size: 30px">Nomor Undian</th>
                    <th style="font-size: 30px">{{$undian}}</th>
                </tr>
                <tr>
                    <td colspan="2">Nomor Undian Tidak Ditemukan</td>
                    <td></td>
                </tr>

            </table>

            <?php } else {?>

            <table>
                <col style="width:35%">
                <col style="width:65%">
                <tr>
                    <th style="font-size: 30px">Nomor Undian</th>
                    <th style="font-size: 30px">{{$undian}}</th>
                </tr>
                <tr>
                    <td>Nomor Tabungan</td>
                    <td>{{$check->nomo}}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>{{$check->name}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{{$check->add1}}</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>{{$check->date}}</td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>Rp. {{number_format($check->jumlah,0,",",".")}}</td>
                </tr>
            </table>

            <?php } ?>
            <?php } ?>

            <?php if (isset($undian)) {?>
            <a href="{{route('unda')}}" style="color: white"><i class="fas fa-undo-alt fa-2x"></i></a>
            <?php } ?>
        </div> <!-- end home-content__main -->

        <div class="home-content__scroll">
            <a href="#about" class="scroll-link smoothscroll">
                Scroll
            </a>
        </div>

    </div> <!-- end home-content -->

</section> <!-- end s-home -->
@endsection