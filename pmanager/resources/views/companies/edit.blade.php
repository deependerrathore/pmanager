@extends('layouts.app')
@section('content')
    <main role="main">

      <div class="album col-md-8 float-left bg-light">
        <div class="container">

        <form method="post" action="{{ route('companies.update',[$company->id])}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT" >
            <div class="form-group">
                <label for="company-name">Company Name<span class="required">*</span></label>
                <input type="text" name="name" class="form-control" id="company-name" placeholder="Enter Company Name" value="{{$company->name}}" spellcheck="false" required>
            </div>

            
            <div class="form-group">
                <label for="company-description">Company Description</label>
                <textarea class="form-control autosize-target text-left" name="description" id="company-description" style="resize:vertical" placeholder="Enter Company Description" rows="3">{{$company->description}}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit"/>
            </div>
        </form>
        </div>
      </div>
      <div class="col-md-4 float-right">
    <aside>
        <div class="p-3">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/companies/{{$company->id}}">View Company</a></li>
              <li><a href="/companies">Show all companies</a></li>
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
