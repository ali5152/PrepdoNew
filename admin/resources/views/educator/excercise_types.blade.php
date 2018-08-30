@include('educator/header')

			<!-- start page content -->

            <div class="page-content-wrapper">

                <div class="page-content">

                    <div class="page-bar">

                        <div class="page-title-breadcrumb">

                            <div class=" pull-left">

                                <div class="page-title">Excercise Typess List</div>

                            </div>

                            <ol class="breadcrumb page-breadcrumb pull-right">

                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ url('/Dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li><a class="parent-item" href="#">Excercise Typess</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li class="active">Excercise Typess List</li>

                            </ol>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12">

                            <div class="tabbable-line">

                                                            <!-- <ul class="nav nav-tabs">

                                    <li class="active">

                                        <a href="#tab1" data-toggle="tab"> List View </a>

                                    </li>

                                    <li>

                                        <a href="#tab2" data-toggle="tab"> Grid View </a>

                                    </li>

                                </ul> -->

                              <!--   <ul class="nav customtab nav-tabs" role="tablist">

	                                <li class="nav-item"><a href="#tab1" class="nav-link active"  data-toggle="tab" >List View</a></li>

	                                <li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Grid View</a></li>

	                            </ul> -->

                                <div class="tab-content">

                                    <div class="tab-pane active fontawesome-demo" id="tab1">

                                        <div class="row">

					                        <div class="col-md-12">

					                            <div class="card card-box">

					                                <div class="card-head">

					                                    <header>All Excercise Typess</header>

					                                    <div class="tools">

					                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>

						                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>

						                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>

					                                    </div>

					                                </div>

					                                <div class="card-body ">

					                                    <div class="row">

					                                        <div class="col-md-6 col-sm-6 col-6">

					                                            <div class="btn-group">

					                                                <a href="#" id="addRow"  data-toggle="modal" data-target="#myModal" class="btn btn-info">

					                                                    Add New <i class="fa fa-plus"></i>

					                                                </a>

					                                            </div>

					                                        </div>

<!-- 					                                        <div class="col-md-6 col-sm-6 col-6">

					                                            <div class="btn-group pull-right">

					                                                <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools

					                                                    <i class="fa fa-angle-down"></i>

					                                                </a>

					                                                <ul class="dropdown-menu pull-right">

					                                                    <li>

					                                                        <a href="javascript:;">

					                                                            <i class="fa fa-print"></i> Print </a>

					                                                    </li>

					                                                    <li>

					                                                        <a href="javascript:;">

					                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>

					                                                    </li>

					                                                    <li>

					                                                        <a href="javascript:;">

					                                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>

					                                                    </li>

					                                                </ul>

					                                            </div>

					                                        </div> -->

					                                    </div>

					                                    <!-- TABLE HERE -->

					                                    <div class="table-scrollable">



                         <table id="myTable" class="display" style="width:100%">

        <thead>

            <tr>

            

                <th>ID</th>

                <th>Name</th>

                <th>Status</th>

                <th>Action</th>

            </tr>

        </thead>

          <tbody>

          	@foreach($data as $value)

          	<tr>


              <td>{{ $value->id }}</td>
              
              <td id="edit{{ $value->id }}">{{ $value->name }}</td>
              <td>@if($value->status == 1) <font color="green"> Active </font> @elseif($value->status == 3) <font color="red"> Blocked </font> @else  <font color="red"> Non Active </font> @endif</td>


				<td><a href="#" class="btn btn-primary btn-xs" id="{{ $value->name }}-{{ $value->id }}" onclick="editenable(this.id)">

				<i class="fa fa-pencil"></i>

				</a>

				<a href="{{ url('DeleteExcerciseType') }}/{{ $value->id }}"><button class="btn btn-default btn-xs">

				<i class="fa fa-trash-o "></i>

				</button></a>
                
                 @if($value->status == 0)
                
                 <a href="{{ url('EnableExcerciseType') }}/{{ $value->id }}"><button class="btn btn-success btn-xs">

				<i class="fa fa-check "></i>

				</button></a> 

               @else

                 <a href="{{ url('DisableExcerciseType') }}/{{ $value->id }}"><button class="btn btn-danger btn-xs">

				<i class="fa fa-ban "></i>

				</button></a>  

               @endif
               
               <!--  <a href="{{ url('') }}/{{ $value->id }}"><button class="btn btn-danger btn-xs">

				<i class="fa fa-ban "></i>

				</button></a>   -->
           
            <!-- Modal -->
           
            

			</td>

            

			</tr>

          

          	@endforeach

          </tbody>

        <tfoot>

            <tr>

                 <th>ID</th>

                <th>Name</th>

                <th>Status</th>

                <th>Action</th>

            </tr>

        </tfoot>

    </table>



					                                    </div>

					                                </div>

					                            </div>

					                        </div>

					                    </div>

                                    </div>

                                

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- end page content -->



        </div>

        <!-- end page container -->



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Excercise Type</h4>
      </div>
      <div class="modal-body">
        <p>
        	
        	<form action="{{url('AddExcerciseTypes')}}" method="POST">
        		
        		<div class="form-group row">

                                                <label class="control-label col-md-5">Excercise Type Name

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-7">

                                                    <input type="text" data-required="1" placeholder="Enter name" name="name" value="" required = "true" class="form-control input-height" /> </div>

                                            </div>

                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                             <button type="submit" class="btn btn-info">Submit</button>

        	</form>

        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

@include('educator/footer')

<script type="text/javascript">
	
	function editenable(data)
	{  
		value = data.split('-');
		data1 = '<td><form action = "{{ url("/EditExcerciseType") }}" method = "POST"><input type = "hidden" name = "_token" value = "{{ csrf_token() }}"><input type = "hidden" name = "id" value = "'+value[1]+'"><input value = "'+value[0]+'" class = "form-control" name = "name"><input type = "submit" value = "Update"></form></td>';
         //alert('edit'+value[1]);
		document.getElementById('edit'+value[1]).innerHTML = data1;
	}


</script>