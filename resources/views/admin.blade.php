@extends('layouts.app')

    @section('content')

<div class="container">



        <div class="">

            <div class="">


                <div class="left-column">


                          <!--/ Title row end -->





                          </div>
                          <!--/ Content row end -->


                          <div class="content-wrapper">
                            <!-- Content Header (Page header) -->

                                <style>
                                    .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }

  .card-counter i{
    font-size: 5em;
    opacity: 0.3;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.8;

    display: block;
    font-size: 18px;
  }

  .count-name a:hover{
    color: #fff;

  }
                                </style>
                                <div class="container"><br>
                                    <h1> Dashboard</h1> <br>



                                    <div class="row">
                                    <div class="col-md-4">
                                      <div class="card-counter primary">
                                        <i class="fa fa-code-fork"></i>
                                        <span class="count-numbers">{{$t}}</span>
                                        <span class="count-name"><a href="#"> Total commission</a></span>

                                      </div>
                                    </div>



                                    <div class="col-md-4">
                                      <div class="card-counter success">
                                        <i class="fa fa-database"></i>
                                        <span class="count-numbers">{{$total->total}}</span>
                                        <span class="count-name">Total sell</span>
                                      </div>
                                    </div>

                                    <div class="col-md-4">
                                      <div class="card-counter incr info">
                                        <i class="fa fa-users"></i>
                                        <span class="count-numbers">{{$w}}</span>
                                        <span class="count-name">Total withdrawn</span>
                                      </div>
                                    </div>
                                  </div>



                                </div>

<br><br>
                                <div class="row text-center">
                                    <div class="col-12">
                                      <h2 class="section-title text-success text-bold"></h2>
                                      <h3 class="section-sub-title">Orders</h3>
                                    </div>
                                  </div>

                </div>

                <div class="accordion accordion-group" id="our-values-accordion">





                    <table class="table table-bordered" style="font-size: 12px">
                        <thead>
                          <tr>
                            <th scope="col">SL</th>

                            <th scope="col">Package</th>
                            <th scope="col">Price</th>
                            <th scope="col">Number</th>
                            <th scope="col">Method</th>
                            <th scope="col">Transaction Id</th>
                            <th scope="col">Notice</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach ($orde as $key=>$order)
                          <tr>
                            <th scope="row">{{$key+1}}</th>

                            <td>{{$order->name}}</td>
                            <td>{{$order->price}}</td>
                            <td>{{$order->mobile}}</td>
                            <th>{{$order->method}}</th>
                            <td>{{$order->tran}}</td>
                            <td>{{Str::limit($order->notice,10)}}  <a href="{{url('order').'/'.$order->id}}" class="text-primary"><i class="fas fa-edit"></i></a></td>
                            <td>{{$order->status}}</td>
                            <td>

                            <span>   <form method="POST" action="{{url('order').'/'.$order->id}}" id="form-{{$order->id}}" style="display:none">
                                    @csrf
@method('patch')

                                  </form></span>@if (!($order->status=='Approved'))
                                  <input class="btn btn-primary" style="font-size: 10px; padding:0px;" value="Approve" type="submit" form="form-{{$order->id}}">
                                  @endif

                               <form method="POST" action="{{url('order').'/'.$order->id}}" id="delete-form-{{$order->id}}" style="display:none">
                                      @csrf
                                      @method('DELETE')

                                    </form>
                                    <span>      <a href="#" class="delete-icon-link ml-2 text-danger" data-record-id="{{$order->id}}">
                                      <i class="fas fa-trash delete-icon"></i>
                                    </a></span>
                                </td>

                          </tr>
                          @endforeach
                        </tbody>
                      </table>

{{$orde->links()}}


                <!--/ Accordion end -->
<br>
              </div>


              </div>



              <script>
                function updateAnchorLink() {
                  var number = document.getElementById('numberField').value;
                  var anchorLink = document.getElementById('myAnchor');
                  anchorLink.href = "{{url('earning')}}"+"/" + encodeURIComponent(number)+"/"+"edit"; // Replace 'process' with your desired URL structure
                }
              </script>

<label for="numberField">View earning:</label>
<input type="number" id="numberField" placeholder="Enter refer code" name="number" onkeyup="updateAnchorLink()" required>
  <br>
  <a id="myAnchor" href=""><button>Search</button></a> <br><br><br>
  <a id="" href="{{url('bonus/1/edit')}}"><button>Change Commission</button></a><br><br>
  <a href="{{url('paymentInfo/1')}}" class="text-primary"><button>Change payment number and method</button></a>

              <div class="">
                <div class="right-column text-center pt-3 pl-2" >



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
              <span class="comment-date float-right">{{$review->created_at}}</span>
            </div>

            <div class="comment-content">
              <p>{{$review->description}}</p>
            </div>

         <!--   <div class="text-left">
              <a class="comment-reply font-weight-bold" href="#">Reply</a>
            </div> -->
          </div>
        </div><!-- Comments end -->

        @endforeach



        </div><!-- Comments end -->
      </li><!-- Comments-list li end -->
    </ul><!-- Comments-list ul end -->
  </div><!-- Post comment end -->


            <!--     <div id="player" class=" text-center"></div> -->
                </div>
              </div>

        </div>





    </div>
    <script src="https://www.youtube.com/iframe_api"></script>





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


    @endsection
