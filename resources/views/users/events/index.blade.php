@extends('layouts.master')

@section('title')
EVENT
@endsection
@section('nama_user')
budi
@endsection
@section('nama_halaman')
Event
@endsection

@section('body')
  onload="openEvent(event, 'tabaktif');"
@endsection

@section('content')
<div class="w3-container w3-padding-32">
  <a href="{{ route('Event.Create') }}" class="w3-btn w3-teal w3-right"> Tambah Event</a>
  <!--Search Bar-->
  <h3>Event</h3>
  <p>
  <div class="w3-row-padding">
    <div class="w3-half">
    <input type="text" class="w3-bar-item w3-input" placeholder="Cari Event....">
    </div>
  </div>
  </p>
    <!--Tabs-->
    <p>
    <div class="w3-row">
      <a href="javascript:void(0)" onclick="openEvent(event, 'tabaktif');">
        <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">EVENT AKTIF</div>
      </a>
      <a href="javascript:void(0)" onclick="openEvent(event, 'tablalu');">
        <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">EVENT LALU</div>
      </a>
    </div>
    </p>

    <div id="tabaktif" class="w3-container city" style="display:none">
        <!--Awal Tabel-->
        <p>
        <div class="w3-responsive">
          <table class="w3-table-all">
            <tr>
              <th>Nama Event</th>
              <th>Tanggal Event</th>
              <th>Kapasitas</th>
              <th>Venue dan Lokasi</th>
              <th>Lihat</th>
              {{-- <th>Waktu</th> --}}
            </tr>

            @foreach ($acaras as $acara)
              <tr>
                <td> {{ $acara->nama }} </td>
                <td> {{date('d-m-Y', strtotime($acara->tgl_mulai))}} </td>
                {{-- <td> {{ date_format($acara->tgl_mulai, "Y/m/d H:i:s") }} - {{$acara->tgl_selesai}}  </td> --}}
                <td> {{ $acara->kapasitas }} </td>
                <td> {{ $acara->lokasi }} </td>
                <td> <a href="{{ route('Event.Show', ['id' => $acara->id]) }}" class="w3-btn w3-teal">Lihat</a> </td>
              </tr>
            @endforeach
            <tr>
              <td>OVO Points</td>
              <td>18-19 Januari 2018</td>
              <td>09.00am-12.00pm</td>
              <td>400</td>
              <td>Universitas Ciputra</td>
            </tr>
          </table>
        </div>
        </p>
    </div>
        <!--Akhir Tabel-->

    <div id="tablalu" class="w3-container city" style="display:none">
      <p>
      <div class="w3-responsive">
        <table class="w3-table-all">
          <tr>
            <th>Nama Event</th>
            <th>Tanggal Event</th>
            <th>Waktu</th>
            <th>Kapasitas</th>
            <th>Venue dan Lokasi</th>
          </tr>
          <tr>
            <td>OVO Points</td>
            <td>18-19 Januari 2018</td>
            <td>09.00am-12.00pm</td>
            <td>400</td>
            <td>Universitas Ciputra</td>
          </tr>
        </table>
      </div>
      </p>
    </div>
    <!--Akhir Tabs-->

  </div>
  <!--Akhir Container-->



  <script>
  function openEvent(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.firstElementChild.className += " w3-border-red";
  }
  </script>


@endsection