<tr>
    <td>{{ $article['id'] }}</td>
    <td>{{ $article['title'] }}</td>
    <td>{{ $article['content'] }}</td>
    <td>
        <a class="btn btn-sm btn-info btn-block" href="{{ route('articles.article',['id'=>$article['id']]) }}" data-toggle="tooltip" title="Edit">
            View
        </a>
    </td>
</tr>




