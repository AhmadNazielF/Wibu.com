@extends('layouts.main')

@section('container')
  <!-- create thread -->

  <form action="/store" method="POST">
    @csrf
    <div class="text-create-thread">Title</div>
    <input type="text" id="comment-box2" name="judul" required>
    <br><br>
    <div class="text-create-thread">Text</div>
    <textarea type="textare" id="comment-box3" name="comment" required></textarea>
    <br><br>
    <button type="submit" class="thread-button">Create</button>
  </form>
@endsection