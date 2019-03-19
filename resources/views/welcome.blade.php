<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

   <style type="text/css">
       
       body{
        margin-top:150px ;
        margin:0 auto;
        width: 550px;
       }
       .test {
    margin-top: 50px;
}
   </style>
</head>
<body>

<div class="container">
            <div class="test">
            
            <select name="district" class="custom-select">
                <option selected>Open this select menu</option>
                @foreach($data as $datas)              
                  <option value="{{$datas->id}}">{{$datas->name}}</option>
                @endforeach
              </select>


            <select name="thana" class="custom-select">
                 <option value="">Select District</option>
                
              </select>

              

            </div>
</div>

<script type="text/javascript">
    
        $(document).ready(function(){
                $('select[name="district"]').on('change',function(){
                    var district=$(this).val();
                   
                    if(district){
                    $.ajax({
                        url:'check/'+district,
                        type:"get",
                        dataType:"json",                        
                        success:function(data){
                          $('select[name="thana"]').empty();
                        $.each(data, function(key, value) {
                           // console.log(value.name);
                            $('select[name="thana"]').append('<option value="'+ key +'">'+value.name +'</option>');
                           
                        });
                        }
                       
                    });
                    }

                    



                });





        })

</script>

</body>
</html>
