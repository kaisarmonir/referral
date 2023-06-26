@extends('layouts.app')

    @section('content')

    <div class="container pt-3 col-md-8">




            <h3 class="into-sub-title">Faq</h3>
            <p>To give you a smooth experience we have listed possible frequently asked question. If you have any question besides these feel free to contact with us.</p>

            <div class="accordion accordion-group" id="our-values-accordion">


                @foreach ($faq as $key=>$faq)
                @can('all')
                <span> <form method="POST" action="{{url('faq').'/'.$faq->id}}" id="delete-form-{{$faq->id}}" style="display: none;">
                    @csrf
                    @method('DELETE')

                  </form>
                  <a href="#" class="delete-icon-link ml-2 text-danger" data-record-id="{{$faq->id}}">
                    <i class="fas fa-trash delete-icon"></i>
                  </a></span>@endcan
                <div class="card">
                    <div class="card-header p-0 bg-transparent" id="heading{{$faq->id}}">
                        <h2 class="mb-0">
                          <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$faq->id}}" aria-expanded="false" aria-controls="collapse{{$faq->id}}">
                              {{$faq->title}}
                          </button>
                        </h2>
                    </div>
                    <div id="collapse{{$faq->id}}" class="collapse" aria-labelledby="heading{{$faq->id}}" data-parent="#our-values-accordion">
                        <div class="card-body">
                            {{$faq->description}}
                        </div>
                    </div>
                  </div>



                @endforeach
            <!--/ Accordion end -->

          </div><!-- Col end --><br/><a href="{{url('faq/create')}}">
<button class="btn btn-secondary">Add FAQ</button></a>

<script>
    var deleteLinks = document.querySelectorAll('.delete-icon-link');

    deleteLinks.forEach(function(link) {
      link.addEventListener('click', function(event) {
        event.preventDefault();
        var recordId = link.getAttribute('data-record-id');
        var confirmDelete = confirm('Are you sure you want to delete this record?');

        if (confirmDelete) {
          var formId = 'delete-form-' + recordId;
          var form = document.getElementById(formId);
          form.submit();
        }
      });
    });
  </script>

    </div>
    @endsection
