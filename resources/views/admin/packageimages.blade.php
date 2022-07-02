@extends('admin.layout.main')
@section('content')

<style>
  @import url('https://fonts.googleapis.com/css?family=Poppins');
body, html{
  margin: 0;
  background: #2b2927;
  font-family: 'Poppins', sans-serif;
}
h1{
  text-align: center;
  color:white;
}
.container-all{
  width: fit-content;
  margin: 20px auto;
  height: auto;
}
.container{
  width: calc(33% - 6px);
  overflow:hidden;
  height: fit-content;
  margin:3px;
  padding: 0;
  display:block;
  position:relative;
  float:left;
}
img{
  width: 100%;
  transition-duration: .3s;
  max-width: 100%;
  display:block;
  overflow:hidden;
  cursor:pointer;
}
.title{
  position:absolute;
  display:block;
  cursor:pointer;
  top: 35%;
  display: none;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  font-weight: bold;
  font-size: 1.6em;
  text-shadow: 1px 5px 10px black;
  transition-duration: .3s;
}
.text{
  position:absolute;
  top: 70%;
  cursor:pointer;
  max-width: 80%;
  text-align:center;
  left: 50%;
  text-shadow: 1px 5px 10px black;
  font-size: 1em;
  display:none;
  margin-right: -50%;
  transition-duration: .3s;
  transform: translate(-50%, -50%) 
}
.container:hover img{
  transform: scale(1.2);
  transition-duration: .3s;
  filter: grayscale(50%);
  opacity: .7;
}
.container:hover span{
  color:white;
  display: block;
  transition-duration: .3s;
}
@media only screen and (max-width: 900px) {
    .container {
        width: calc(50% - 6px);
    }
}
@media only screen and (max-width: 400px) {
    .container {
        width: 100%;
    }
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="container-all">
    <h1 style="color:pink">Facilities </h1>
<ul>
@foreach($facility  as $item )
<li>{{$item->facilities}}</li>
                 @endforeach
                 </ul>
@foreach($data  as $item )

<div class="container">
  <img src="{{ asset('img/packageimages/'.$item->image) }}" alt="">
   <span class="title"> Siyaha </span>
  
</div>
                 @endforeach

</div>

@endsection