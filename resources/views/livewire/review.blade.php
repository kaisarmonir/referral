@extends('layouts.app')

    @section('content')

    <div class="container pt-3 col-md-6">


        <div id="comments" class="comments-area">
            <h3 class="comments-heading">Reviews</h3>

            <ul class="comments-list">
              <li>
@foreach ($review as $review)


                <div class="comment d-flex">
                    <i class='fas fa-coins mr-3' style='font-size:24px;color:red'></i>
                  <div class="comment-body">
                    <div class="meta-data">

                      <span class="comment-author mr-3">{{$review->name}}</span>
                      <span class="comment-date float-right">{{$review->created_at}}</span><br>Mobile:{{$review->title}}
                    </div>

                    <div class="comment-content">
                      <p>{{$review->description}}</p> @can('all')
                      <span>
                        <form method="POST" action="{{url('review').'/'.$review->id}}" id="delete-form-{{$review->id}}" style="display: none;">
                            @csrf
                            @method('DELETE')

                          </form>
                          <a href="#" class="delete-icon-link ml-2 text-danger" data-record-id="{{$review->id}}">
                            <i class="fas fa-trash delete-icon"></i>
                          </a>
                      </span>
                  @endcan

                    </div>

                 <!--   <div class="text-left">
                      <a class="comment-reply font-weight-bold" href="#">Reply</a>
                    </div> -->
                  </div>
                </div><!-- Comments end -->

                @endforeach

                <!-- Comments end -->
              </li><!-- Comments-list li end -->
            </ul><!-- Comments-list ul end -->
          </div><!-- Post comment end -->

          <div class="row">
            <div class="col-md-12">
              <h3 class="column-title">Put a review</h3>
              <!-- contact form works with formspree.io  -->
              <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
              <form id="contact-form" action="{{url('/message')}}" method="post" role="form">
                @csrf
                <div class="error-container"></div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Name</label>
                      <input class="form-control form-control-name" name="name" id="name" placeholder="Name" type="text" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Mobile</label>
                      <input class="form-control form-control-email" name="title" id="title" placeholder="mobile" type="text"
                        required>    <small id="emailHelp" class="form-text text-muted">We'll never share your mobile number with anyone else.</small>
                    </div>
                  </div>

                </div>
                <div class="form-group">
                  <label>Review</label>
                  <textarea class="form-control form-control-message" name="description" id="description" placeholder="" rows="8"
                    required></textarea>
                </div>
                <div class="text-right"><br>
                  <button class="btn btn-primary solid blank" type="submit">Send</button>
                </div>
              </form>
            </div>

          </div><!-- Content row -->


</div>

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

<br>
@endsection
