@extends('layouts.app')
@section('content')

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">{{$company->name}}</h1>
          <p class="lead text-muted">{{$company->description}}</p>
          <!-- <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p> -->
        </div>
      </section>

      <div class="album col-md-8 float-left bg-light">
        <div class="container">

          <div class="row">
          @foreach($company->projects as $project)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">{{$project->name}}</h5>

                  <p class="card-text">{{$project->description}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="projects/{{$project->id}}" class="btn btn-sm btn-outline-secondary">Edit</a>
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-md-4 float-right">
    <aside>
        <div class="p-3">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="{{ $company->id }}/edit">Edit</a></li>
              <li>
                <a href="#" onclick="
                  var result = confirm('Are you sure that you want to delete this company');
                  if(result){
                    event.preventDefault();
                    document.getElementById('delete-form').submit();
                  }
                ">Delete</a>
                <form id="delete-form" method="POST" style="display:none" action="{{ route('companies.destroy',[$company->id])}}">
                  <input type="hidden" name="_method" value="delete">
                  {{csrf_field()}}
                </form>
              </li>
              <li><a href="#">Add new User</a></li>
            </ol>
          </div>
          <div class="p-3">
            <h4>Members</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>

        </aside>
    </div>

    </main>

    

@endsection('content')
