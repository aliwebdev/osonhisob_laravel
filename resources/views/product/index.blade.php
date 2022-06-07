@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title text-center">Mahsulotlar</h5>
              <!-- <p><code>Barcha mahsulotlar shu yerda ko'rinadi</code></p> -->
              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-dark">
                <thead>
                  <tr align="center">
                    <th scope="col">#</th>
                    <th scope="col">Mahsulot Nomi</th>
                    <th scope="col">Mahsulot Turi</th>
                    <th scope="col">Qolgan Soni</th>
                    <th scope="col">Sotilgan Soni</th>
                    <th scope="col">Qo'shimcha</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($products as $data)
                  <tr align="center">
                    <th scope="row">{{ (($products->currentpage()-1)*$products->perpage()+($loop->index+1)) }}</th>
                    <td>{{$data->m_nomi}}</td>
                    <td><a href="{{route('products.show',['product'=>$data->m_turi])}}">{{$data->m_turi}}</a></td>
                    <td>{{$data->m_soni-$data->sotilgan_soni}} dona</td>
                    <td>{{$data->sotilgan_soni}} dona</td>
                    <td>
                      <a style="width: 120px;" href="{{ route('products.edit',['product' => $data->id]) }}" class="btn btn-success"><i class="bi bi-pen">Tahrirlash</i></a>
                      <form action="{{ route('products.destroy',['product' => $data->id]) }}" method="post">
                      @method('DELETE')  
                      @csrf
                        <button type="submit" style="width: 120px;" class="btn btn-danger"><i class="bi bi-trash">O'chirish</i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->
              {{$products->links()}}
</div>

@endsection