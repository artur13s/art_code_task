$(document).ready(function(){
    $(".add").click(function(e){
        if($("#task-name").val()!=''&& $("#task-task").val()!=''){
            var name=$("#task-name").val();
            var task=$("#task-task").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            e.preventDefault(e);
            $.ajax({
                url:'task',
                type:'post',
                dataType:'json',
                data:{name:name,task:task},
                success:function(data){
                        $("tbody").append("<tr><td class='table-text'><div>"+data['name']+"</div></td>\n\<td><div>"+data['task']+"</div></td><td><div>"+data['created_at']+"</div></td><td><form ><button name='"+data['id']+"' class='btn btn-danger'>Delete</button></form></td></tr>");
                        $("#task-task").val("");
                        $("#task-name").val("");
                }
            });
        }
        else{
            alert("Empty username or password or email");
        }
    });
    $(document).delegate(".btn-danger",'click',function(e){
        var id=$(this).attr('name'); 
        $(this).closest('tr').toggle();
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                
            });
            e.preventDefault(e);
            $.ajax({
                url:'destroy',
                type:'POST',
                data:{id:id},
                success:function(data){
                      
                }
            });
    });
   
});