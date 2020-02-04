
<div class="container" id="linkk">
        @foreach ($result as $item)
    <p id=""><a href="#" id=""> {{$item->jobcategories}}</a></p>
        @endforeach
        <script>
           $(document).ready(function(){
        $("#linkk p a").click(function(){
            var value = $(this).html();
            var input = $('#searchh');
            input.val(value);
            $('#linkk p a').hide();
        });
    });
    </script>
    </div> 
    
    