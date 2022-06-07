@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title text-center">Mahsulotlar bo'yicha filter</h5>
              <!-- <p><code>Barcha mahsulotlar shu yerda ko'rinadi</code></p> -->

              <table class="table table-bordered border-dark">
                <thead>
                  <tr align="center">
                    <th scope="col">Mahsulot Nomi</th>
                    <th scope="col">Mahsulot Turi</th>
                    <th scope="col">Qolgan Soni</th>
                    <th scope="col">Sotilgan Soni</th>
                  </tr>
                </thead>
                <tbody>
                  <?
                  $i=0;
                  foreach ($products as $key) {
                    $i = $i+$key->m_soni;
                  }
                  ?>
              <h5 class="card-title">Jami soni: <?echo $i?> dona</h5>
                @foreach ($products as $data)
                  <tr align="center">
                    <td>{{$data->m_nomi}}</td>
                    <td>{{$data->m_turi}}</td>
                    <td>{{$data->m_soni-$data->sotilgan_soni}} dona</td>
                    <td>{{$data->sotilgan_soni}} dona</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
</div>
@endsection