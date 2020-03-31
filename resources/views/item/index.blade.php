@extends('layouts.app')

@section('content')
 @if(Session::has('flash_message'))
    <div class="alert alert-success">
      {{ session('flash_message') }}
    </div>
  @endif

<!-- メインここから -->


<!-- navbarここから -->
<div class="col-12 col-md-12 mx-auto" style="background-color:#CC3569; margin-top:-25px;">
  <div style="list-style:none; color:white;">

    <nav class="navbar navbar-expand-md">
      <button class="navbar-brand" href="#" w-100 data-toggle="collapse" data-target="#menu1" style="background-color:#CC3569; border:none">
          <span class="menubar height:300px;" style="color:white; margin-left:80px">商品カテゴリ一覧</span>
      </button>
      <div class="collapse navbar-collapse" id="menu1">
        <form method="GET" action="/">
          <ul class="nav navbar-nav">
            <li>
              <br>
            </li>
            <li style="list-style:none; margin-left:20px">
              <img src="/image/冷凍食品.png" style="width:23px; height:23px; object-fit:cover; margin-right:-2px; margin-top:-3px">
              <input type="submit" name="keyword" style="font-size:15px; display:inline; color:white; border:none; outline:none; background-color:#CC3569" value="冷凍食品">
            </li>
            <li>
              <br>
            </li>
            <li style="list-style:none; margin-left:20px">
              <img src='/image/缶詰.png' style='width:23px; height:23px; object-fit:cover; margin-right:-2px; margin-top:-3px'>
              <input type="submit" name="keyword" style="font-size:15px; display:inline; color:white; border:none; outline:none; background-color:#CC3569" value="缶詰">
            </li>
            <li>
              <br>
            </li>
            <li style="list-style:none; margin-left:20px">
              <img src="/image/ノンアルコール.png" style="width:20px; height:20px; object-fit:cover; margin-right:-9px; margin-top:-5px">
              <input type="submit" name="keyword" style="font-size:15px; display:inline; color:white; border:none; outline:none; background-color:#CC3569" value="ソフトドリンク">
            </li>
            <li>
              <br>
            </li>
            <li style="list-style:none; margin-left:20px">
              <img src="/image/お酒.png" style="width:20px; height:20px; object-fit:cover; margin-right:-5px; margin-top:-5px">
              <input type="submit" name="keyword" style="font-size:15px; display:inline; color:white; border:none; outline:none; background-color:#CC3569" value="お酒">
            </li>
          </ul>
        </form>
        </div>
      </nav>
    </div>
  </div>
  <br>
<!-- navbarここまで -->


<!-- 商品一覧ここから -->
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
<!-- 商品一覧ここまで -->

<!-- footerここから -->
<div class="col-12 col-md-12 mx-auto" style="background-color:#CC3569; color:white; margin-bottom:-24px">
<br>
<div style="font-size:20px">当サイトについて</div>
<br>
<div style="margin-left:20px">homesuperとは</div>
<br>
<div style="margin-left:20px">会社案内</div>
<br>
<div style="margin-left:20px">お問い合わせ</div>
<br>
</div>

<!-- footerここまで -->
@endsection
