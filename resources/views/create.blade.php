<h1>Add Post</h1>
<form action="/insert_record" method="post">
    @csrf
    <table>
    <tr>
        <td><label for="title">Title</label></td>
        <td><input type="text"  name="title" id="title" placeholder="Enter Title" required>
        </td>
    </tr>
    <tr>
        <td>
        <label for="description">Description</label>
        </td>
        <td>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter Description Here" required></textarea>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
        <button type="submit">Add Post</button>
        </td>
    </tr>
    </table>
   
    
</form>