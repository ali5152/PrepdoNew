@include('student/header')
<br><br><br><br>
<center>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    @if($percentage < 50) <font color="red" style="font-weight: bolder;"> Failed : {{ $percentage }}%</font> @else <font color="green" style="font-weight: bolder;"> Passed : {{ $percentage }}% </font> @endif</h1>
              
                <div class="error-actions">
                    <a href="{{ url('StudentPortal') }}" class="btn btn-primary btn-lg">
                    	<span class="glyphicon glyphicon-home"></span>
                        Dashboard </a>
                        <a href="{{ url('AttemptQuiz') }}/{{ Session::get('Security') }}" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Attempt Again </a>
                </div>
            </div>
        </div>
    </div>
</div>
</center>



<br><br><br><br><br><br><br><br>
@include('student/footer')