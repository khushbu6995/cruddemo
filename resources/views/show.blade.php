<h1>Laravel Crud Operations</h1>
<form action="#" method="post">
@csrf
<a href="/create_record">Add New Record</a>
    <table border="1" cellpadding="10">
        <tr>
            <td>No</td>
            <td>Title</td>
            <td>Description</td>
            <td>Actions</td>
        </tr>
       
        @foreach($posts as $key=>$post)
         
        <tr>
                <td>{{$posts->firstItem() + $key}}</td>
                <td>{{$post['title']}}</td>
                <td>{{$post['description']}}</td>
                <td>
                    <a href="edit/{{$post->id}}">Edit</a>
                    <a href="delete/{{$post->id}}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</form>
{{ $posts->links() }}
<style>
    .w-5
    {
        display: none;
    }
</style>
