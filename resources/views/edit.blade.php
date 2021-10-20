<h1>Update Post</h1>
<form action="/update_record/{{$posts->id}}" method="post">
    @csrf
    <table>
    <tr>
        <td><label for="title">Title</label></td>
        <td><input type="text"  name="title" id="title" placeholder="Enter Title" value="{{$posts->title}}" required>
        </td>
    </tr>
    <tr>
        <td>
        <label for="description">Description</label>
        </td>
        <td>
        <textarea name="description" id="description" cols="30" rows="10"  required>{{$posts->description}}</textarea>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
        <button type="submit">Update Post</button>
        </td>
    </tr>
    </table>
   
    
</form>