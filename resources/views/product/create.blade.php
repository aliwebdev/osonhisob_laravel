@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title">Mahsulotlarini qo'shish</h5>

              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <!-- General Form Elements -->
              <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="nomi" class="col-sm-2 col-form-label">Mahsulot Nomi</label>
                  <div class="col-sm-10">
                    <input type="text" id="m_nomi" name="m_nomi" autocomplete="off" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label">Mahsulot Soni</label>
                  <div class="col-sm-10">
                    <input type="number" id="m_soni" name="m_soni" autocomplete="off" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="hidden" name="sotilgan_soni" value="0" autocomplete="off" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label">Mahsulot Turi</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="m_turi" aria-label="multiple select example">
                      <option disabled selected>--Turi--</option>
                      <option value="Erkaklar uchun">Erkaklar uchun</option>
                      <option value="Ayollar uchun">Ayollar uchun</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="add" class="col-sm-2 col-form-label">Qo'shish tugmasi</label>
                  <div class="col-sm-10">
                    <button id="add" type="submit" class="btn btn-primary">Qo'shish</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
</div>
@endsection
