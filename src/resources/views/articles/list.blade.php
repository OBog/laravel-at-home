@extends('layouts.app')
@extends('components.search')

@section('content')
<div class="w-75 p-3">
    <table class="table table-striped table-sm data-table table-bordered ">
        <thead class="thead">
        <tr>
            <th style="width: 3%">id</th>
            <th style="width: 17%">name</th>
            <th style="width: 70%">content</th>
            <th  style="width: 10%"></th>
        </tr>
        </thead>
        <tbody id="content">
                    @each('articles.list_article',$articles,'article')
        </tbody>
    </table>
</div>

<script
    src="https://code.jquery.com/jquery-2.2.4.js"
    integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
    crossorigin="anonymous"></script>

<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#search_form").submit(function(e){

        e.preventDefault();

        var search = $("input[name=q]").val();

        $.ajax({
            type:'POST',
            url:"{{ route('search') }}",
            data:{"_token": "{{ csrf_token() }}",search},
            success:function(data){
                $('#content').html(data);
                console.log('ssss',data);
            }
        });

    });
</script>
@endsection

