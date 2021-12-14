
<form action="{{route('search')}}" autocomplete="off" method="POST" style="margin-left: 2%; margin-top: 2% " id="search_form">
    @csrf
    <div class="row">
        <div class="col-xs-10 offset-xs-4">
            <div class="form-group">
                <input type="text" class="form-control" name="q" value="" required id="result">
            </div>
        </div>
        <div class="col-xs-2 ">
            <div class="form-group">
                 <input class="btn btn-info" type="submit" value="Искать">
            </div>
        </div>
    </div>
</form>


