@extends('layouts.main')

@section('container')
  <!-- create thread -->

  <form action="listThread.blade.php" method="POST">
    <div class="text-create-thread">Thread Category</div>
    <div class="dropdown">
        <label for="category" class="col-sm-2 col-form-label">Category</label>
        <div class="col-sm-10">
            <input name="category" list="category" type="select" class="form-control"/>
            <datalist id="category">
                    <option value="Anime"></option>
                    <option value="Character"></option>
                    <option value="OffTopic"></option>
            </datalist> 
        </div>
    </div>  
    <br><br>
    <div class="text-create-thread">Title</div>
    <input type="text" id="comment-box2" name="judul" required>
    <br><br>
    <div class="text-create-thread">Text</div>
    <textarea type="textare" id="comment-box3" name="comment" required></textarea>
    <br><br>
    <button type="submit" class="thread-button">Create</button>
  </form>
@endsection