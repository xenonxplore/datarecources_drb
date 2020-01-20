@extends('back-end.admin-layout')

@section('content')

<form  method="post" action="{{ route('news.update', $news->id) }}" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="row bg-white my-4 mx-1 p-3 shadow-sm">

        <div class="col-md-4">
            <img class="img-fluid" src="{{$news->image}}">
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label>Image</label>
                <input class="form-control" name="image"  type="file" >
            </div>
        </div>

        <input type="hidden"  name="img" value="{{$news->image}}">

        <div class="col-md-3">
            <div class="form-group">
            <label>Heading</label>
            <textarea class="form-control" rows="3" name="heading"  placeholder="Enter news heading">{{ $news->heading }}</textarea>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
            <label>Source</label>
            <textarea class="form-control" rows="3" name="source"  placeholder="Enter news source">{{ $news->source }}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="5" name="body" placeholder="Enter news description">{{ $news->body }}</textarea>
            </div>
        </div>

        <div class="col-md-8">
            <label>Where to show</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="showing_area" id="exampleRadios1" value="featured" {{$news->showing_area == 'featured' ?'checked':''}}>
                <label class="form-check-label mr-5" for="exampleRadios1">
                  Featured
                </label>
                <input class="form-check-input" type="radio" name="showing_area" id="exampleRadios2" value="world" {{$news->showing_area == 'world' ?'checked':''}}>
                <label class="form-check-label mr-5" for="exampleRadios2">
                  World
                </label>
                <input class="form-check-input" type="radio" name="showing_area" id="exampleRadios3" value="country" {{$news->showing_area == 'country' ?'checked':''}}>
                <label class="form-check-label mr-5" for="exampleRadios3">
                  Country
                </label>
                <input class="form-check-input" type="radio" name="showing_area" id="exampleRadios4" value="economy" {{$news->showing_area == 'economy' ?'checked':''}}>
                <label class="form-check-label mr-5" for="exampleRadios4">
                  Economy
                </label>
                <input class="form-check-input" type="radio" name="showing_area" id="exampleRadios5" value="company" {{$news->showing_area == 'company' ?'checked':''}}>
                <label class="form-check-label" for="exampleRadios5">
                  Company
                </label>
            </div>
        </div>

        <div class="col-md-2 text-md-center ml-4 ml-md-0 sub-plan-check-top">
            <input class="form-check-input" type="checkbox" name="is_published" value=1 id="defaultCheck1" {{$news->is_published == 1 ?'checked':''}}>
            <label class="form-check-label h5" for="defaultCheck1">
                Publish
            </label>
        </div>

        <div class="col-md-2">
            <label></label>
            <button type="submit" class="btn btn-outline-primary w-100 mt-md-2">Submit</button>
        </div>
    </div>
</form>

@endsection