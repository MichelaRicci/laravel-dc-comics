@extends('main')

@section ('main-content')
<div class="container">
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div class="row row-cols-3">
            <div class= "m-3">
                <label class="form-label" for="title">Comic Title: </label>
                <input class="ms-2" type="text" name="title" id="title" placeholder="Title" required/>
            </div>

            <div class= "col d-flex m-3">
               <label for="price">Price: </label>
               <input class="ms-2" type="number"  id="price" name="price" placeholder="Price" required />
            </div>

            <div class= "col d-flex m-3">
                <label for="series">Serie: </label>
                <input class="ms-2" type="text" id="series" name="series"  placeholder="Text" required />
            </div>

            <div class= "col d-flex m-3">
                <label for="type">Type: </label>
                <input class="ms-2" type="text" name="type" id="type" placeholder="Enter type" required/>
            </div>

            <div class= "col d-flex m-3">
                <label for="sale_date">Release: </label>
                <input class="ms-2" type="text" id="sale_date" name="sale_date" placeholder="AAAA-MM-DD" required>
            </div>

            <div class= "col d-flex m-3">
                <label for="text">Artists: </label>
                <input class="ms-2" type="text" name="artists" placeholder="Artists' names" required>
            </div>

            <div class= "col d-flex m-3">
                <label for="writers">Writers: </label>
                <input class="ms-2" type="text" name="writers"  id="writers" placeholder="Writers' names" required/>
            </div>

            <div class= "col d-flex m-3">
                <label for="description">Description: </label>
                <textarea class="ms-2" type="text" name="description" id="description" placeholder="Description"></textarea> 
            </div>

            <div class= "col m-3">
                <label for="Thumbs">Image: </label>
                <textarea class="ms-2" type="url"  name="thumb" id="thumb" placeholder="Image url"></textarea> 
            </div>
            
            <div class= "col-12 d-flex m-3">
                <button type= "submit" href="" class="bg-primary text-uppercase text-white fw-bold load-btn">
                    <h4>Add comic</h4>
                </button>
            </div>
        </div>   
    </form>
</div>
@endsection