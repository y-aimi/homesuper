@extends('layouts.app')

@section('content')
 @if(Session::has('flash_message'))
    <div class="alert alert-success">
      {{ session('flash_message') }}
    </div>
  @endif

<!-- メインここから -->

<!-- 右側ここから -->
<div class="col-12 col-md-12">

  <div class="container" style="">
    <div class="row justify-content-right">
      @foreach ($items as $item)
      <div class="col-12 col-md-4 mb-4">
        <div class="card">
          <div class="card-header" style="background-color:#58C172; height:70px">
            <a href="/item/{{ $item->id }}" style="color:white">{{ $item->name }}</a>
          </div>
          <br>
          <div style="margin:0 auto">
          <img src="/image/{{ $item->imagepath }}" style="width:200px; height:200px;display: block;object-fit:cover">
          </div>
          <div class="card-body" style="text-align:center">
          <h2 style="color:#d9333f">{{ $item->amount }}円</h2>
          </div>

          @auth
          <div class="cartbutton">
              <form method="POST" action="cartitem" class="form-inline m-1">
                  {{ csrf_field() }}
                  <select name="quantity" class="form-control col-3 col-md-2 mr-1">
                      <option selected>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                  </select>
                  <input type="hidden" name="item_id" value="{{ $item->id }}">
                  <button type="submit" class="btn btn-primary col-6 col-md-6">カートに入れる</button>
              </form>
          </div>
              @endauth
          </div>
      </div>
      @endforeach
    </div>
    <div class="row justify-content-center">
      {{ $items->appends(['keyword' => Request::get('keyword')])->links() }}
  </div>
</div>
</div>
<!-- 右側ここまで -->

<hr style="height:1px; background-color:#58C172 ">
<br>

<!-- 左側ここから -->
<div class="col-12 col-md-8 mx-auto" style="">
<div class="sidebar" style="background-color:#CC3569;">
  <div style="list-style:none; color:white; margin-left:20px">
    <br>
    <form method="GET" action="/">
    <h5>オススメ商品</h5>
    <hr size="5"; color="white">
    <br>

    <img src="/image/冷凍食品.png" style="width:25px; height:25px; object-fit:cover;">
    <input type="submit" name="keyword" style="font-size:15px; display:inline; color:white; border:none; outline:none; background-color:#CC3569" value="冷凍食品"><br><br>
    <img src='/image/缶詰.png' style='width:25px; height:25px; object-fit:cover;'>
    <input type="submit" name="keyword" style="font-size:15px; display:inline; color:white; border:none; outline:none; background-color:#CC3569" value="缶詰"><br><br>
    <img src="/image/ノンアルコール.png" style="width:25px; height:25px; object-fit:cover;">
    <input type="submit" name="keyword" style="font-size:13px; display:inline; color:white; border:none; outline:none; background-color:#CC3569" value="ソフトドリンク"><br><br>
    <img src="/image/お酒.png" style="width:25px; height:25px; object-fit:cover;">
    <input type="submit" name="keyword" style="font-size:15px; display:inline; color:white; border:none; outline:none; background-color:#CC3569" value="お酒"><br><br>

    </form>
    <hr size="5"; color="white">
    <h6>homesuperとは</h6>
    <br>
    <h6>会社案内</h6>
    <br>
    <h6>お問い合わせ</h6>
    <br>
  </div>
</div>
</div>
<!-- 左側ここまで -->


@endsection
