<!DOCTYPE html>
<html>
<head>
    <title></title>

<link hawar="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<style type="text/css">
    .table-sortable tbody tr {
    cursor: move;
}
</style>
</head>
<body>
    
    <div class="row clearfix">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-hover table-sortable" id="table_award">
                <thead>
                    <tr >
                        <th class="text-center">
                            Award Name
                        </th>
                        <th class="text-center">
                            Instituition/Award body
                        </th>
                        <th class="text-center">
                            Award Date
                        </th>
                        <th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr id='award0' awar="0" class="hidden">
                        <td data-name="award_name">
                            <input type="text" name='award_name0'  placeholder='Name' class="form-control"/>
                        </td>
                        <td data-name="award_institution">
                            <input type="text" name='award_institution0' placeholder='Email' class="form-control"/>
                        </td>
                        <td data-name="award_date">
                            <textarea name="award_date0" placeholder="Description" class="form-control"></textarea>
                        </td>
                        <td data-name="delete_award">
                            <button name="delete_award0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true">×</span></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <a id="add_award" class="btn btn-primary float-right">Add Award Details</a>

<script type="text/javascript">
    $(document).ready(function() {
    $("#add_award").on("click", function() {
        // Dynamic Rows Code
        
        // Get max row id and set new id
        var newid = 0;
        $.each($("#table_award tr"), function() {
            if (parseInt($(this).data("id")) > newid) {
                newid = parseInt($(this).data("id"));
            }
        });
        newid++;
        
        var tr = $("<tr></tr>", {
            id: "award"+newid,
            "awar": newid
        });
        
        // loop through each td and create new elements with name of newid
        $.each($("#table_award tbody tr:nth(0) td"), function() {
            var td;
            var cur_td = $(this);
            
            var children = cur_td.children();
            
            // add new td and element if it has a nane
            if ($(this).data("name") !== undefined) {
                td = $("<td></td>", {
                    "data-name": $(cur_td).data("name")
                });
                
                var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                c.attr("name", $(cur_td).data("name") + newid);
                c.appendTo($(td));
                td.appendTo($(tr));
            } else {
                td = $("<td></td>", {
                    'text': $('#table_award tr').length
                }).appendTo($(tr));
            }
        });
        
        // add delete button and td
        /*
        $("<td></td>").append(
            $("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
                .click(function() {
                    $(this).closest("tr").remove();
                })
        ).appendTo($(tr));
        */
        
        // add the new row
        $(tr).appendTo($('#table_award'));
        
        $(tr).find("td button.row-remove").on("click", function() {
             $(this).closest("tr").remove();
        });
});




    // Sortable Code
    var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
    
        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width())
        });
        
        return $helper;
    };
  
    $(".table-sortable tbody").sortable({
        helper: fixHelperModified      
    }).disableSelection();

    $(".table-sortable thead").disableSelection();



    $("#add_award").trigger("click");
});
</script>

</body>
</html>