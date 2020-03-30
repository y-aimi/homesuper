@extends('layouts.app')

@section('content')
 @if(Session::has('flash_message'))
    <div class="alert alert-success">
      {{ session('flash_message') }}
    </div>
  @endif
  <!-- sidebarを追加 -->
  <div class="sidebar" style="background-color:#CC3569; width:15%; float:left">
    <div style="list-style:none; color:white; margin-left:20px">
      <br>
      <form method="GET" action="/">
      <h5>オススメ商品</h5>
      <hr size="5"; color="white">
      <br>

      <img src="/image/冷凍食品.png" style="width:30px; height:30px; object-fit:cover;">
      <input type="submit" name="keyword" style="font-size:20px; display:inline; color:white; border:none; outline:none; background-color:#CC3569" value="冷凍食品"><br><br>
      <img src='/image/缶詰.png' style='width:30px; height:30px; object-fit:cover;'>
      <input type="submit" name="keyword" style="font-size:20px; display:inline; color:white; border:none; outline:none; background-color:#CC3569" value="缶詰"><br><br>
      <img src="/image/ノンアルコール.png" style="width:30px; height:30px; object-fit:cover;">
      <input type="submit" name="keyword" style="font-size:20px; display:inline; color:white; border:none; outline:none; background-color:#CC3569" value="ソフトドリンク"><br><br>
      <img src="/image/お酒.png" style="width:30px; height:30px; object-fit:cover;">
      <input type="submit" name="keyword" style="font-size:20px; display:inline; color:white; border:none; outline:none; background-color:#CC3569" value="お酒"><br><br>
      <br>
      </form>
      <hr size="5"; color="white">
      <h6>homesuperとは</h6>
      <br>
      <h6>会社案内</h6>
      <br>
      <h6>お問い合わせ</h6>
      <br>
      <br>


    </div>
  </div>

  <div class="container" style="width:70%; margin-right:110px">
    <div class="row justify-content-left">
      @foreach ($items as $item)
      <div class="col-md-4 mb-4">
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
                  <select name="quantity" class="form-control col-md-2 mr-1">
                      <option selected>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                  </select>
                  <input type="hidden" name="item_id" value="{{ $item->id }}">
                  <button type="submit" class="btn btn-primary col-md-6">カートに入れる</button>
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
@endsection
